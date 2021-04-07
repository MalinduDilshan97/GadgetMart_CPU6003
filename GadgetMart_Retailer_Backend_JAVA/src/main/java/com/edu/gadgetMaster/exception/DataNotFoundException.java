package com.edu.gadgetMaster.exception;

import lombok.Getter;
import org.springframework.http.HttpStatus;

/**
 * class For missing data
 * @author Uvindu
 * @since 06/2019
 **/

@Getter
public class DataNotFoundException extends BaseException {

    private static final String MESSAGE = "Missing data ";
    private static final HttpStatus STATUS = HttpStatus.BAD_REQUEST;
    private static final int CODE = ResponseCode.INVALID_INPUT;

    public DataNotFoundException() {
        super(MESSAGE,"",STATUS,CODE);
    }

    public DataNotFoundException(String description) {
        super(MESSAGE,description,STATUS,CODE);
    }
}
