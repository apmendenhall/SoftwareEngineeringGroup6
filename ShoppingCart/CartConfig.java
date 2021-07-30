package com.example.ShoppingCart.ShoppingCart;

import org.springframework.boot.CommandLineRunner;
import org.springframework.context.annotation.Bean;
import org.springframework.context.annotation.Configuration;

import java.util.List;

@Configuration
public class CartConfig {

    @Bean
    CommandLineRunner commandLineRunner(CartRepository repository){
        return args -> {
            Cart bookOne = new Cart("Harry Potter");
            Cart bookTwo = new Cart("Twilight");
            Cart bookThree = new Cart("Lord of the Rings");
            repository.saveAll(List.of(bookOne, bookTwo, bookThree));
        };
    }
}
