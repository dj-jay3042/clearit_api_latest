<?php

namespace App\Core\Model;

use App\Http\Config\EmailConfig;
use App\Http\Config\MailChimpConfig;
use App\Http\Config\RightSignatureConfig;

class Core
{
    private static $coreDbAdapterApi = null;

    /**
     * @param \Illuminate\Contracts\Foundation\Application $app
     */
    public static function init($app)
    {
        // No need to store the service locator in Laravel, as we can access services directly from the container.
    }

    /**
     * @return CoreDbAdapterApi
     */
    public static function getDbApi()
    {
        if (!self::$coreDbAdapterApi) {
            self::$coreDbAdapterApi = new CoreDbAdapterApi();
        }
        return self::$coreDbAdapterApi;
    }

    /**
     * @return RightSignatureConfig
     */
    public static function getRightSignatureConfig()
    {
        $config = config('rightsignature');
        $rightSignatureConfig = new RightSignatureConfig();
        if ($config) {
            foreach ($config as $propertyName => $value) {
                if (property_exists($rightSignatureConfig, $propertyName)) {
                    $rightSignatureConfig->{$propertyName} = $value;
                }
            }
        }
        return $rightSignatureConfig;
    }

    /**
     * @return MailChimpConfig
     */
    public static function getMailChimpConfig()
    {
        $config = config('mailchimp');
        $mailChimpConfig = new MailChimpConfig();
        if ($config) {
            foreach ($config as $propertyName => $value) {
                if (property_exists($mailChimpConfig, $propertyName)) {
                    $mailChimpConfig->{$propertyName} = $value;
                }
            }
        }
        return $mailChimpConfig;
    }

    /**
     * @return EmailConfig
     */
    public static function getEmailConfig()
    {
        $config = config('smtp');
        $emailConfig = new EmailConfig();
        if ($config) {
            foreach ($config as $propertyName => $value) {
                if (property_exists($emailConfig, $propertyName)) {
                    $emailConfig->{$propertyName} = $value;
                }
            }
        }
        return $emailConfig;
    }
}
