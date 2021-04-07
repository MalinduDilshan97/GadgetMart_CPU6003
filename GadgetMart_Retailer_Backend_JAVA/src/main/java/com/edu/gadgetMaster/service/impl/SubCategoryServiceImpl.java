/*
 *Time   :- 6:38 PM
 *Author :- Uvindu Mohotti
 *Special Thing :-
 */

package com.edu.gadgetMaster.service.impl;

import com.edu.gadgetMaster.entity.SubCategory;
import com.edu.gadgetMaster.exception.RecordNotFoundException;
import com.edu.gadgetMaster.repository.SubCategoryRepository;
import com.edu.gadgetMaster.service.SubCategoryService;
import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.stereotype.Service;

import java.util.List;

@Service
public class SubCategoryServiceImpl implements SubCategoryService {
    @Autowired
    private SubCategoryRepository subCategoryRepository;
    private static final String MSG = "Sub-Category not Found";

    @Override
    public SubCategory addSubCategory(SubCategory subCategory) {
        subCategory.setStatus("1");
        return subCategoryRepository.save(subCategory);
    }

    @Override
    public SubCategory updateSubCategory(long id, SubCategory subCategory) {
        SubCategory category1 = subCategoryRepository.findById(id).orElseThrow(() -> new RecordNotFoundException(MSG));
        if (category1 == null) {
            return null;
        } else {
            if (category1.getStatus().equalsIgnoreCase("1")){
                subCategory.setStatus("1");
                subCategory.setId(category1.getId());
                return subCategoryRepository.save(subCategory);
            }else{
                return null;
            }
        }
    }

    @Override
    public SubCategory deleteSubCategory(long id) {
        SubCategory category = subCategoryRepository.findById(id).orElseThrow(() -> new RecordNotFoundException(MSG));
        if (category == null) {
            return null;
        } else {
            category.setStatus("0");
            return subCategoryRepository.save(category);
        }
    }

    @Override
    public SubCategory searchSubCategory(long id) {
        return subCategoryRepository.findById(id).orElseThrow(() -> new RecordNotFoundException(MSG));
    }

    @Override
    public List<SubCategory> getAllSubCategorys() {
        return subCategoryRepository.findAll();
    }
}
