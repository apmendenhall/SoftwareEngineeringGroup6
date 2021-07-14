package CEN.bookdetails.API.Service;

import CEN.bookdetails.API.Model.Books;
import CEN.bookdetails.API.Repository.BookRepository;
import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.stereotype.Service;
import org.springframework.transaction.annotation.Transactional;

import java.util.List;
@Service
@Transactional
public class BookService {
  //  @Autowired
    private BookRepository bookRepository;
    public List<Books> listAllBooks() {
        return bookRepository.findAll();
    }

    public void saveBook(Books book) {
        bookRepository.save(book);
    }

    public Books getBook(Integer bookID) {
        return bookRepository.findById(bookID).get();
    }

    public void deleteBook(Integer bookID) {
        bookRepository.deleteById(bookID);
    }
}