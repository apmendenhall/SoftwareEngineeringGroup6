package com.example.ShoppingCart.ShoppingCart;

import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.stereotype.Service;

import java.util.List;

@Service
public class CartService {

    private final CartRepository cartRepository;

    @Autowired
    public CartService(CartRepository cartRepository) {
        this.cartRepository = cartRepository;
    }

    public List<Cart> getBook()
    {
        return cartRepository.findAll();
    }

    public void addNewBook(Cart cart) {
       System.out.println(cart);
       cartRepository.save(cart);
    }

    public void deleteBook(Long cartId) {

        boolean exists = cartRepository.existsById(cartId);
        if(!exists)
        {
            throw new IllegalStateException("Book with id " + cartId + "does not exists");
        }
        cartRepository.deleteById(cartId);
    }
}
