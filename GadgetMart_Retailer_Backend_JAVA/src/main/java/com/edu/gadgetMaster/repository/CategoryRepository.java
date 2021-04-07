/*
 *Time   :- 5:58 PM
 *Author :- Uvindu Mohotti
 *Special Thing :-
 */

package com.edu.gadgetMaster.repository;

import com.edu.gadgetMaster.entity.Category;
import org.springframework.data.jpa.repository.JpaRepository;
import org.springframework.stereotype.Repository;

@Repository
public interface CategoryRepository extends JpaRepository<Category,Long> {
}
