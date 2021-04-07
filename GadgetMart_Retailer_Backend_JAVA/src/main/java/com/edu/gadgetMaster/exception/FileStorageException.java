package com.edu.gadgetMaster.exception;

/**
 * @author Uvindu
 * @since 07/2019
 **/
public class FileStorageException extends RuntimeException{
    public FileStorageException(String message) {
        super(message);
    }

    public FileStorageException(String message, Throwable cause) {
        super(message, cause);
    }
}
