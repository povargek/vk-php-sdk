<?php

namespace VK\Exceptions\Api;

use VK\Client\VKApiError;

class VKApiAccessCheckinException extends VKApiException {
    /**
     * VKApiAccessCheckinException constructor.
     * @param VKApiError $error
     */
    public function __construct(VKApiError $error) {
        parent::__construct(191, 'Access to checkins denied', $error);
    }
}
