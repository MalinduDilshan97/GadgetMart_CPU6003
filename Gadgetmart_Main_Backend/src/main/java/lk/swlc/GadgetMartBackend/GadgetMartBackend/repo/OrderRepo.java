/*
 *Time   :- 8:47 AM
 *Author :- Uvindu Mohotti
 *Special Thing :-
 */

package lk.swlc.GadgetMartBackend.GadgetMartBackend.repo;

import lk.swlc.GadgetMartBackend.GadgetMartBackend.entity.Order;
import org.springframework.data.jpa.repository.JpaRepository;
import org.springframework.stereotype.Repository;

import java.util.List;

@Repository
public interface OrderRepo extends JpaRepository<Order,Long> {


    List<Order> findOrderByUserid(Long userid);
}
