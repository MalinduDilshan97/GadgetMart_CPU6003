/*
 *Time   :- 11:25 PM
 *Author :- Uvindu Mohotti
 *Special Thing :-
 */

package lk.swlc.GadgetMartBackend.GadgetMartBackend.model.order;

import com.fasterxml.jackson.annotation.JsonProperty;
import lombok.*;

import java.util.ArrayList;
import java.util.List;

@NoArgsConstructor
@AllArgsConstructor
@Getter
@Setter
@ToString
public class NodeOrderModel {

    @JsonProperty("order")
    private NodeOrderModelChange nodeOrderModelChange;
    private List<String> detailsIds=new ArrayList<>();
}


