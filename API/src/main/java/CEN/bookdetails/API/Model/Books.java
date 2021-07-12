package CEN.bookdetails.API.Model;

import javax.persistence.*;

@Entity
@Table(name = "Books")
public class Books {
    private int bookID;
    private String ISBN;
    private String bookName;

    public Books() {
    }

    public Books(int bookID, String ISBN, String bookName) {
        this.bookID = bookID;
        this.ISBN = ISBN;
        this.bookName = bookName;
    }

    @Id
    @GeneratedValue(strategy = GenerationType.IDENTITY)
    public int getId() {
        return bookID;
    }
    public void setId(int bookID){
        this.bookID = bookID;
    }

    public String getISBN() {
        return ISBN;
    }

    public void setISBN(String ISBN){
        this.ISBN = ISBN;
    }

    public String getBookName() {
        return bookName;
    }

    public void setBookName(String bookName){
        this.bookName = bookName;
    }
}