/*
 *Time   :- 5:58 PM
 *Author :- Uvindu Mohotti
 *Special Thing :-
 */

package com.edu.gadgetMaster.service;



import com.edu.gadgetMaster.entity.Category;

import java.util.List;

public interface CategoryService {

    public Category addCategory(Category category);

    public Category updateCategory(long id, Category category);

    public Category deleteCategory(long id);

    public Category searchCategory(long id);

    public List<Category> getAllCategorys();
}
