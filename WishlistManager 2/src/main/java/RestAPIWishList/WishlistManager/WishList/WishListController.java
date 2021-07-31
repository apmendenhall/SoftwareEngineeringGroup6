package RestAPIWishList.WishlistManager.WishList;


import org.springframework.http.HttpStatus;
import org.springframework.http.ResponseEntity;
import org.springframework.web.bind.annotation.*;

import java.util.ArrayList;
import java.util.List;
import java.util.Optional;

@RestController
public class WishListController {

    private WishListRepository wishListRepository;

    private ShoppingCartRepository shoppingCartRepository;

    public WishListController(WishListRepository wishListRepository,ShoppingCartRepository shoppingCartRepository) {
        this.wishListRepository=wishListRepository;
        this.shoppingCartRepository = shoppingCartRepository;
    }



    @GetMapping ("/wishList/{userId}")
    public ResponseEntity<WishList> getWishList(@PathVariable String userId) {
        Optional<WishList> existingWishList=wishListRepository.findByUserId(userId);

        var foundWishlist=existingWishList.orElse(new WishList());


        return new ResponseEntity<WishList>(foundWishlist, HttpStatus.OK);
    }



    /**
     *
     * Api for saving wishlist
     * @param wishlist
     * @return
     */
    @PostMapping("/wishList")
    public WishList addWishList(@RequestBody WishList wishlist){
       var insertedWishlist=wishListRepository.save(wishlist);
       return insertedWishlist;
    }


    @PutMapping("/wishList/add/{id}/{bookname}")
    public WishList addBooktoWishList(@PathVariable Integer id, @PathVariable String bookname){
        var insertedWishlist=wishListRepository.findById(id);

        var updatedBook=insertedWishlist.map(bookFetched-> {
                    if (!bookFetched.getBooks().contains(bookname)) {
                        bookFetched.getBooks().add(bookname);
                    }
                    return bookFetched;
                }
        );
        updatedBook.ifPresent(updatedBookToSave-> {
            wishListRepository.save(updatedBook.get());
        });

        return  updatedBook.get();
    }


    @PutMapping("/wishList/delete/{id}/{bookname}")
    public WishList deleteBookfromWishList(@PathVariable Integer id, @PathVariable String bookname){
        var insertedWishlist=wishListRepository.findById(id);

        var updatedBook=insertedWishlist.map(bookFetched-> {
                    if (bookFetched.getBooks().contains(bookname)) {
                        bookFetched.getBooks().remove(bookname);
                    }
                    return bookFetched;
                }
        );
        updatedBook.ifPresent(updatedBookToSave->{

            wishListRepository.save(updatedBook.get());
            Optional<ShoppingCart> existingCart=shoppingCartRepository.findByUserId(updatedBook.get().getUserId());

            existingCart.ifPresentOrElse(shoppingCartExisting-> {

                if(! shoppingCartExisting.getBooks().contains(bookname)) {
                    shoppingCartExisting.getBooks().add(bookname);
                    shoppingCartRepository.save(shoppingCartExisting);
                }
            }, ()-> {
                List<String> books = new ArrayList<>();
                books.add(bookname);
                ShoppingCart cart = new ShoppingCart();
                cart.setBooks(books);
                cart.setUserId(updatedBook.get().getUserId());
                shoppingCartRepository.save(cart);
            });

        });
        return  updatedBook.get();
    }


}
