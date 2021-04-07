package com.edu.gadgetMaster.exception;

/**
 * @author Uvindu
 * @since 07/2019
 **/
public class MyFileNotFoundException extends RuntimeException {
    public MyFileNotFoundException(String message) {
        super(message);
    }

    public MyFileNotFoundException(String message, Throwable cause) {
        super(message, cause);
    }
}
