<?php

namespace VK\Exceptions\Api;

use VK\Client\VKApiError;

class VKApiMarketItemNotFoundException extends VKApiException {
    /**
     * VKApiMarketItemNotFoundException constructor.
     * @param VKApiError $error
     */
    public function __construct(VKApiError $error) {
        parent::__construct(1403, 'Item not found', $error);
    }
}
