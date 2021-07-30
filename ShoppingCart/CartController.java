package com.example.ShoppingCart.ShoppingCart;

import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.web.bind.annotation.*;

import java.util.Arrays;
import java.util.List;

@RestController
@RequestMapping(path = "api/v1/ShoppingCart")
public class CartController
{

    private final CartService cartService;

    @Autowired
    public CartController(CartService cartService) {
        this.cartService = cartService;
    }

    @GetMapping
    public List<Cart> getBook()
    {
        return cartService.getBook();
    }


    @PostMapping
    public void addNewBook(@RequestBody Cart cart)
    {
        cartService.addNewBook(cart);
    }

    @DeleteMapping(path = "{cartId}")
    public void deleteBook(@PathVariable("cartId") Long cartId){
       cartService.deleteBook(cartId);
    }
}
