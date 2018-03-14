<?php

namespace VK\Exceptions\Api;

use VK\Client\VKApiError;

class VKApiMarketTooManyItemsException extends VKApiException {
    /**
     * VKApiMarketTooManyItemsException constructor.
     * @param VKApiError $error
     */
    public function __construct(VKApiError $error) {
        parent::__construct(1405, 'Too many items', $error);
    }
}
