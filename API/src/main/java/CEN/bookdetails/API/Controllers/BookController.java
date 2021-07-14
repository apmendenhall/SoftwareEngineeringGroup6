package CEN.bookdetails.API.Controllers;

import CEN.bookdetails.API.Model.Books;
import CEN.bookdetails.API.Service.BookService;

import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.http.HttpStatus;
import org.springframework.http.ResponseEntity;
import org.springframework.web.bind.annotation.*;

import java.util.List;
import java.util.NoSuchElementException;

@RestController
@RequestMapping("/books")
public class BookController {
    @Autowired
    BookService bookService;

    @GetMapping("")
    public List<Books> list() {
        return bookService.listAllBooks();
    }

    @GetMapping("/{bookID}")
    public ResponseEntity<Books> get(@PathVariable Integer bookID) {
        try {
            Books user = bookService.getBook(bookID);
            return new ResponseEntity<Books>(user, HttpStatus.OK);
        } catch (NoSuchElementException e) {
            return new ResponseEntity<Books>(HttpStatus.NOT_FOUND);
        }
    }
    @PostMapping("/")
    public void add(@RequestBody Books book) {
        bookService.saveBook(book);
    }
    @PutMapping("/{bookID}")
    public ResponseEntity<?> update(@RequestBody Books book, @PathVariable Integer bookID) {
        try {
            Books existBook = bookService.getBook(bookID);
            book.setId(bookID);
            bookService.saveBook(book);
            return new ResponseEntity<>(HttpStatus.OK);
        } catch (NoSuchElementException e) {
            return new ResponseEntity<>(HttpStatus.NOT_FOUND);
        }
    }
    @DeleteMapping("/{bookID}")
    public void delete(@PathVariable Integer bookID) {

        bookService.deleteBook(bookID);
    }

    //return ResponseEntity.ok().build();

}
