<?php

namespace App\Http\Config;

class MailChimpConfig
{
    /**
     * @var string|null
     */
    public $apiKey;
    /**
     * @var string|null
     */
    public $registeredUsersListId;
    /**
     * "Buyers" tag ID from registered users list
     * @var string|null
     */
    public $registeredUsersBuyersSegmentId;
}