package RestAPIWishList.WishlistManager.WishList;

import org.springframework.boot.autoconfigure.data.jpa.JpaRepositoriesAutoConfiguration;
import org.springframework.data.jpa.repository.JpaRepository;

import java.util.Optional;

public interface WishListRepository extends JpaRepository<WishList, Integer> {

    Optional<WishList> findByUserId(String userid);
}
