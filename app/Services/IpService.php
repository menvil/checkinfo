<?php

namespace App\Services;

use App\Services\Dtos\MaxmindDto;

/**
 * Class IpService
 */
class IpService
{
    /** @var string $ipAddress */
    private $ipAddress;

    /**
     * @return string
     */
    public function getIpAddress(): string
    {
        return $this->ipAddress;
    }

    /**
     * @param string $ipAddress
     * @return void
     */
    public function setIpAddress(string $ipAddress): void
    {
        $this->ipAddress = $ipAddress;
    }

    /**
     * Class constructor.
     */
    public function __construct(string $ipAddress = '')
    {
        $this->setIpAddress($ipAddress);
    }

    /**
     * Return aggregated information about IP address
     *
     * @param string $ipAddress
     * @return IpService
     */
    public static function lookup(string $ipAddress = ''): array
    {
        $providers = array_keys(config('providers'));
        $instances = [];
        foreach($providers as $provider) {
            if(config('providers.'.$provider.'.active') !== true) {
                continue;
            }
            $cl = 'App\Services\Dtos\\'. ucfirst($provider) .'Dto';
            $instances[$provider] = (
                new $cl(base_path().'/database/'.$provider.'/'.config('providers.'.$provider.'.database'), $ipAddress)
            )->setProperties()->toArray();
        }

        $finalArray = [];
        $keys = array_keys($instances[array_key_first($instances)]);
        foreach ($keys as $index => $key) {
            foreach($instances as $k=>$instance){
                if(!isset($finalArray[$key])){
                    $finalArray[$key] = $instance[$key];
                } else {
                    $secondLevelKeys = array_keys($instance[$key]);
                    foreach($secondLevelKeys as $secondLevelKey){
                        if(is_array($finalArray[$key][$secondLevelKey])){
                            $finalArray[$key][$secondLevelKey] = $finalArray[$key][$secondLevelKey] + $instance[$key][$secondLevelKey];
                        } elseif(empty($finalArray[$key][$secondLevelKey]) || is_null($finalArray[$key][$secondLevelKey])) {
                            $finalArray[$key][$secondLevelKey] = $instance[$key][$secondLevelKey];
                        }
                    }
                }
            }
        }
        return $finalArray;
    }

}
