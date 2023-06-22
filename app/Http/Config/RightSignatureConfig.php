<?php

namespace App\Http\Config;

class RightSignatureConfig
{
    /**
     * @var string|null
     */
    public $token;
    /**
     * @var string|null
     */
    public $signNriSoleId;
    /**
     * @var string|null
     */
    public $signNriCoSignId;
    /**
     * @var string|null
     */
    public $signPersonalId;
    /**
     * @var string|null
     */
    public $signBusinessCoSignId;
    /**
     * @var string|null
     */
    public $signBusinessSoleId;
    /**
     * @var string|null
     */
    public $signPartnershipId;
    /**
     * @var string|null
     */
    public $annualBondId;
    /**
     * CA version only
     *
     * @var string|null
     */
    public $poaId;
}