/*
 *Time   :- 6:16 PM
 *Author :- Uvindu Mohotti
 *Special Thing :-
 */

package com.edu.gadgetMaster.service;



import com.edu.gadgetMaster.entity.Item;

import java.util.List;

public interface ItemService {

    public Item addItem(Item item);

    public Item updateItem(long id, Item item);

    public Item deleteItem(long id);

    public Item searchItem(long id);

    public List<Item> getAllItems();

}
