<?php

namespace App\Services\Dtos;

use App\Services\Primitives\City;
use App\Services\Primitives\Continent;
use App\Services\Primitives\Country;
use App\Services\Primitives\Ip;
use App\Services\Primitives\Region;
use Illuminate\Contracts\Support\Arrayable;

/**
 * Class BaseDto
 */
class BaseDto implements Arrayable
{

    /** @var string $database */
    protected $database;

    /** @var string $ipAddress */
    protected $ipAddress;

    /** @var mixed $reader */
    protected $reader;

    /** @var Ip $ip */
    protected $ip;

    /** @var City $city */
    protected $city;

    /** @var Country $country */
    protected $country;

    /** @var Continent $continent */
    protected $continent;

    /** @var Region $region */
    protected $region;

    /**
     * @return Region
     */
    public function getRegion(): Region
    {
        if (is_null($this->region)) {
            $this->setRegion(new Region());
        }
        return $this->region;
    }

    /**
     * @param Region $region
     * @return BaseDto
     */
    public function setRegion(Region $region): BaseDto
    {
        $this->region = $region;
        return $this;
    }

    /**
     * @return Continent
     */
    public function getContinent(): Continent
    {
        if (is_null($this->continent)) {
            $this->setContinent(new Continent());
        }
        return $this->continent;
    }

    /**
     * @param Continent $continent
     * @return BaseDto
     */
    public function setContinent(Continent $continent): BaseDto
    {
        $this->continent = $continent;
        return $this;
    }

    /**
     * @return Country
     */
    public function getCountry(): Country
    {
        if (is_null($this->country)) {
            $this->setCountry(new Country());
        }
        return $this->country;
    }

    /**
     * @param Country $country
     * @return BaseDto
     */
    public function setCountry(Country $country): BaseDto
    {
        $this->country = $country;
        return $this;
    }

    /**
     * @return Ip
     */
    public function getIp(): Ip
    {
        if (is_null($this->ip)) {
            $this->setIp(new Ip());
        }
        return $this->ip;
    }

    /**
     * @param Ip $ip
     * @return BaseDto
     */
    public function setIp(Ip $ip): BaseDto
    {
        $this->ip = $ip;
        return $this;
    }

    /**
     * @return City
     */
    public function getCity(): City
    {
        if (is_null($this->city)) {
            $this->setCity(new City());
        }
        return $this->city;
    }

    /**
     * @param City $city
     * @return BaseDto
     */
    public function setCity(City $city): BaseDto
    {
        $this->city = $city;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getReader()
    {
        return $this->reader;
    }

    /**
     * @param mixed $reader
     * @return BaseDto
     */
    public function setReader($reader): BaseDto
    {
        $this->reader = $reader;
        return $this;
    }

    /**
     * @return string
     */
    public function getIpAddress(): string
    {
        return $this->ipAddress;
    }

    /**
     * @param string $ipAddress
     * @return BaseDto
     */
    public function setIpAddress(string $ipAddress): BaseDto
    {
        $this->ipAddress = $ipAddress;
        return $this;
    }

    public function toArray()
    {
        return [
            'ip' => $this->getIp()->toArray(),
            'city' => $this->getCity()->toArray(),
            'country' => $this->getCountry()->toArray(),
            'continent' => $this->getContinent()->toArray(),
            'region' => $this->getRegion()->toArray(),
        ];
    }
}
