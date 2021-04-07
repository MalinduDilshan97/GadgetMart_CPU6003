/*
 *Time   :- 10:01 PM
 *Author :- Uvindu Mohotti
 *Special Thing :-
 */

package lk.swlc.GadgetMartBackend.GadgetMartBackend.model.category;


import lombok.*;

@NoArgsConstructor
@AllArgsConstructor
@Getter
@Setter
@ToString
public class CategoryModel {

    private long id;

    private String catid;
    private String name;
    private String status;
}
