/*
 *Time   :- 4:48 PM
 *Author :- Uvindu Mohotti
 *Special Thing :-
 */

package lk.swlc.GadgetMartBackend.GadgetMartBackend.model.searchvo;

import lombok.*;

@NoArgsConstructor
@AllArgsConstructor
@Getter
@Setter
@ToString
public class SupplierVO {

    private long id;
    private String suppliername;
    private String address;
    private String email;
    private String contactnumber;
    private String supplierapiurl;
}
