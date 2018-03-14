<?php

namespace VK\Exceptions\Api;

use VK\Client\VKApiError;

class VKApiAccessMarketException extends VKApiException {
    /**
     * VKApiAccessMarketException constructor.
     * @param VKApiError $error
     */
    public function __construct(VKApiError $error) {
        parent::__construct(205, 'Access denied', $error);
    }
}
