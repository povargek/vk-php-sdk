<?php

namespace VK\Exceptions\Api;

use VK\Client\VKApiError;

class VKApiWallAddPostException extends VKApiException {
    /**
     * VKApiWallAddPostException constructor.
     * @param VKApiError $error
     */
    public function __construct(VKApiError $error) {
        parent::__construct(214, 'Access to adding post denied', $error);
    }
}
