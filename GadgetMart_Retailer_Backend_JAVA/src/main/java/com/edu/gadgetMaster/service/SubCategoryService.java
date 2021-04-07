/*
 *Time   :- 6:38 PM
 *Author :- Uvindu Mohotti
 *Special Thing :-
 */

package com.edu.gadgetMaster.service;



import com.edu.gadgetMaster.entity.SubCategory;

import java.util.List;

public interface SubCategoryService {

    public SubCategory addSubCategory(SubCategory subCategory);

    public SubCategory updateSubCategory(long id, SubCategory subCategory);

    public SubCategory deleteSubCategory(long id);

    public SubCategory searchSubCategory(long id);

    public List<SubCategory> getAllSubCategorys();
}
