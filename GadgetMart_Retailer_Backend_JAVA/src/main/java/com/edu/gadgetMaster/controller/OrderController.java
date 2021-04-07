/*
 *Time   :- 1:57 PM
 *Author :- Uvindu Mohotti
 *Special Thing :-
 */

package com.edu.gadgetMaster.controller;

import com.edu.gadgetMaster.entity.Category;
import com.edu.gadgetMaster.entity.Item;
import com.edu.gadgetMaster.entity.Orders;
import com.edu.gadgetMaster.model.CommonOrderModel;
import com.edu.gadgetMaster.service.ItemService;
import com.edu.gadgetMaster.service.OrderService;
import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.http.HttpStatus;
import org.springframework.http.ResponseEntity;
import org.springframework.stereotype.Controller;
import org.springframework.web.bind.annotation.*;

@Controller
@RestController
@RequestMapping("/order")
@CrossOrigin
public class OrderController {

    @Autowired
    private OrderService orderService;

    @PostMapping
    @ResponseStatus(HttpStatus.OK)
    public ResponseEntity addOrder(@RequestBody CommonOrderModel commonOrderModel) {
        Orders orders = orderService.addOrder(commonOrderModel);
        if (orders == null) {
            return new ResponseEntity(orders, HttpStatus.NOT_FOUND);
        } else {
            return new ResponseEntity(orders, HttpStatus.OK);
        }

    }

    @GetMapping(value = "/{id}")
    public ResponseEntity searchOrder(@PathVariable(value = "id") Long id) {
        CommonOrderModel commonOrderModel = orderService.findbyOrderId(id);
        if (commonOrderModel == null) {
            return new ResponseEntity(commonOrderModel, HttpStatus.NOT_FOUND);
        } else {
            return new ResponseEntity(commonOrderModel, HttpStatus.OK);
        }
    }


}
