<?php

namespace VK\Exceptions\Api;

class ApiFloodException extends VKApiException {
    /**
     * ApiFloodException constructor.
     * @param string $message
     */
    public function __construct($message) {
        parent::__construct(9,  'Flood control',  $message);
    }
}