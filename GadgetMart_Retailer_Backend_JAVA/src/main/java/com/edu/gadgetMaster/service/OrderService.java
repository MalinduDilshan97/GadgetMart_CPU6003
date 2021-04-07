/*
 *Time   :- 2:16 PM
 *Author :- Uvindu Mohotti
 *Special Thing :-
 */

package com.edu.gadgetMaster.service;


import com.edu.gadgetMaster.entity.Orders;
import com.edu.gadgetMaster.model.CommonOrderModel;

public interface OrderService {

    public Orders addOrder(CommonOrderModel commonOrderModel);
    public CommonOrderModel findbyOrderId(long id);
}
