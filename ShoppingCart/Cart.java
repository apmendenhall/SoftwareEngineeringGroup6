package com.example.ShoppingCart.ShoppingCart;

import javax.persistence.*;


@Entity
@Table
public class Cart
{
    @Id
    @SequenceGenerator(
            name = "cart_sequence",
            sequenceName = "cart_sequence",
            allocationSize = 1
    )
    @GeneratedValue(
            strategy = GenerationType.SEQUENCE,
            generator = "cart_sequence"
    )
    private Long id;
    private String book;


    public Cart() {

    }

    public Cart(Long id, String book)
    {
        this.id = id;
        this.book = book;
    }

    public Cart(String book) {
        this.book = book;
    }

    public Long getId()
    {
        return id;
    }

    public void setId(Long id)
    {
        this.id = id;
    }

    public String getBook()
    {
        return book;
    }

    public void setBook(String book)
    {
        this.book = book;
    }

    @Override
    public String toString()
    {
        return "Cart{" +
                "id=" + id +
                ", book='" + book + '\'' +
                '}';
    }
}
