/*
 *Time   :- 1:52 PM
 *Author :- Uvindu Mohotti
 *Special Thing :-
 */

package com.edu.gadgetMaster.entity;

import lombok.*;

import javax.persistence.Entity;
import javax.persistence.GeneratedValue;
import javax.persistence.GenerationType;
import javax.persistence.Id;

@Entity
@NoArgsConstructor
@AllArgsConstructor
@Getter
@Setter
@ToString
public class OrderDetails {

    @Id
    @GeneratedValue(strategy = GenerationType.IDENTITY)
    private long id;
    private String item;
    private int qty;
    private double price;
    private String orders;

    public OrderDetails(String item, int qty, double price, String orders) {
        this.item = item;
        this.qty = qty;
        this.price = price;
        this.orders = orders;
    }
}
