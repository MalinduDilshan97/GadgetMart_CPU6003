/*
 *Time   :- 2:07 PM
 *Author :- Uvindu Mohotti
 *Special Thing :-
 */

package lk.swlc.GadgetMartBackend.GadgetMartBackend.model.category;


import com.fasterxml.jackson.annotation.JsonProperty;

import lombok.*;

import javax.xml.bind.annotation.XmlRootElement;

@NoArgsConstructor
@AllArgsConstructor
@Getter
@Setter
@ToString
@XmlRootElement
public class CategorySingleModel {

    private String message;


    @JsonProperty("data")
    private Category category;
}
