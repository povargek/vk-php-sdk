<?php

namespace VK\Exceptions\Api;

use VK\Client\VKApiError;

class VKApiParamTimestampException extends VKApiException {
    /**
     * VKApiParamTimestampException constructor.
     * @param VKApiError $error
     */
    public function __construct(VKApiError $error) {
        parent::__construct(150, 'Invalid timestamp', $error);
    }
}
