<?php

class Responses
{
    /**
     * Resources (file/directory) Not Found
     * @var NOT_FOUND int when files/directory doesn't exist, accessed.
     */
    const NOT_FOUND = 404;

    /**
     * Unauthorized Access
     * @var FORBIDDEN int when trying to access unauthorized file/directory
     */
    const FORBIDDEN = 403;

}