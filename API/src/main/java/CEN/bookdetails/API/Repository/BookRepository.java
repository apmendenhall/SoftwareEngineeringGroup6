package CEN.bookdetails.API.Repository;

import CEN.bookdetails.API.Model.Books;
import org.springframework.data.jpa.repository.JpaRepository;

public interface BookRepository extends JpaRepository<Books, Integer>{
}
