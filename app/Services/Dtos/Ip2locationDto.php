<?php

namespace App\Services\Dtos;

use Illuminate\Contracts\Support\Arrayable;
use GeoIp2\Database\Reader;

use App\Services\Primitives\Ip;
use App\Services\Primitives\City;
use App\Services\Primitives\Country;
use IP2Location\Database as IP2Loc;

/**
 * Class Ip2locationDto
 */
class Ip2locationDto extends BaseDto implements Arrayable
{

    /**
     * Class constructor.
     */
    public function __construct(string $database = '', $ipAddress = '')
    {
        $this->setReader(new IP2Loc($database, IP2Loc::FILE_IO));
        $this->setIpAddress($ipAddress);
    }

    public function setProperties()
    {
        $reader = $this->getReader();
        $info = $reader->lookup($this->getIpAddress(), IP2Loc::ALL);
        //dd($info);

        //set Ip address info
        $ip = $this->getIp();
        $ip->setAddress($info['ipAddress']);
        $ip->setVersion($info['ipVersion']);

        //set City info
        $city = $this->getCity();
        $city->setName($info['cityName']);
        $city->setZip($info['zipCode']);
        $city->setLatitude($info['latitude']);
        $city->setLongitude($info['longitude']);
        $city->setTimeZone($info['timeZone']);

        //set Country info
        $country = $this->getCountry();
        $country->setName($info['countryName']);
        $country->setIsoCode($info['countryCode']);

        //set Region info
        $region = $this->getRegion();
        $region->setName($info['regionName']);

        return $this;

    }

}
