/*
 *Time   :- 1:30 AM
 *Author :- Uvindu Mohotti
 *Special Thing :-
 */

package lk.swlc.GadgetMartBackend.GadgetMartBackend.model.subcategory;

import lombok.*;

@NoArgsConstructor
@AllArgsConstructor
@Getter
@Setter
@ToString
public class SubCategory {

    private String name;
    private String id;
    private String category;
    private String createdAt;
    private String updatedAt;
    private String __v;
}
