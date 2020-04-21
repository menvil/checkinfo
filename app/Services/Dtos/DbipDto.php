<?php

namespace App\Services\Dtos;

use Illuminate\Contracts\Support\Arrayable;
use GeoIp2\Database\Reader;

use App\Services\Primitives\Ip;
use App\Services\Primitives\City;
use App\Services\Primitives\Country;

/**
 * Class DbipDto
 */
class DbipDto extends BaseDto implements Arrayable
{
    /**
     * Class constructor.
     */
    public function __construct(string $database = '', $ipAddress = '')
    {
        $this->setReader(new Reader($database));
        $this->setIpAddress($ipAddress);
    }

    public function setProperties()
    {
        $reader = $this->getReader();
        $info = $reader->city($this->getIpAddress());
        //dd($info);

        //set Ip address info
        $ip = $this->getIp();
        $ip->setAddress($this->getIpAddress());

        //set City info
        $city = $this->getCity();
        $city->setLocales($info->city->names ?? []);
        $city->setName(isset($info->city->names['en']) ? $info->city->names['en'] : '' );
        $city->setZip($info->postal->code ?? '' );
        $city->setAverageIncome($info->location->averageIncome ?? '');
        $city->setAccuracyRadius($info->location->accuracyRadius ?? '');
        $city->setLatitude($info->location->latitude ?? '');
        $city->setLongitude($info->location->longitude ?? '');
        $city->setMetroCode($info->location->metroCode ?? '');
        $city->setPopulationDensity($info->location->populationDensity ?? '');
        $city->setTimeZone($info->location->timeZone ?? '');

        //set Country info
        $country = $this->getCountry();
        $country->setLocales($info->country->names ?? []);
        $country->setIsEu($info->country->isInEuropeanUnion ?? '');
        $country->setName(isset($info->country->names['en']) ? $info->country->names['en'] : '' );
        $country->setIsoCode($info->country->isoCode ?? '');

        //set Continent info
        $continent = $this->getContinent();
        $continent->setLocales($info->continent->names ?? []);
        $continent->setName(isset($info->continent->names['en']) ? $info->continent->names['en'] : '' );
        $continent->setCode($info->continent->code ?? '');

        //set Region info
        $region = $this->getRegion();
        $region->setLocales($info->subdivisions->names ?? []);
        $region->setName(isset($info->subdivisions->names['en']) ? $info->subdivisions->names['en'] : '' );
        $region->setIsoCode($info->subdivisions->iso_code ?? '');


        return $this;
    }

}
