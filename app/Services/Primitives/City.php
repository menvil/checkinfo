<?php

namespace App\Services\Primitives;

use Illuminate\Contracts\Support\Arrayable;

/**
* Class Ip
* @package App\Services\Primitives
*/
class City implements Arrayable
{
    /** @var string $name */
    private $name = '';

    /** @var string $confidence */
    private $confidence = '';

    /** @var array $locales */
    private $locales = [];

    /** @var string $zip */
    private $zip = '';

    /** @var string $averageIncome */
    private $averageIncome = '';

    /** @var string $accuracyRadius */
    private $accuracyRadius = '';

    /** @var string $latitude */
    private $latitude = '';

    /** @var string $longitude */
    private $longitude = '';

    /** @var string $metroCode */
    private $metroCode = '';

    /** @var string $populationDensity */
    private $populationDensity = '';

    /** @var string $timeZone */
    private $timeZone = '';

    /**
     * @return string
     */
    public function getAverageIncome(): string
    {
        return $this->averageIncome;
    }

    /**
     * @param string $averageIncome
     * @return City
     */
    public function setAverageIncome(string $averageIncome): City
    {
        $this->averageIncome = $averageIncome;
        return $this;
    }

    /**
     * @return string
     */
    public function getAccuracyRadius(): string
    {
        return $this->accuracyRadius;
    }

    /**
     * @param string $accuracyRadius
     * @return City
     */
    public function setAccuracyRadius(string $accuracyRadius): City
    {
        $this->accuracyRadius = $accuracyRadius;
        return $this;
    }

    /**
     * @return string
     */
    public function getLatitude(): string
    {
        return $this->latitude;
    }

    /**
     * @param string $latitude
     * @return City
     */
    public function setLatitude(string $latitude): City
    {
        $this->latitude = $latitude;
        return $this;
    }

    /**
     * @return string
     */
    public function getLongitude(): string
    {
        return $this->longitude;
    }

    /**
     * @param string $longitude
     * @return City
     */
    public function setLongitude(string $longitude): City
    {
        $this->longitude = $longitude;
        return $this;
    }

    /**
     * @return string
     */
    public function getMetroCode(): string
    {
        return $this->metroCode;
    }

    /**
     * @param string $metroCode
     * @return City
     */
    public function setMetroCode(string $metroCode): City
    {
        $this->metroCode = $metroCode;
        return $this;
    }

    /**
     * @return string
     */
    public function getPopulationDensity(): string
    {
        return $this->populationDensity;
    }

    /**
     * @param string $populationDensity
     * @return City
     */
    public function setPopulationDensity(string $populationDensity): City
    {
        $this->populationDensity = $populationDensity;
        return $this;
    }

    /**
     * @return string
     */
    public function getTimeZone(): string
    {
        return $this->timeZone;
    }

    /**
     * @param string $timeZone
     * @return City
     */
    public function setTimeZone(string $timeZone): City
    {
        $this->timeZone = $timeZone;
        return $this;
    }

    /**
     * @return string
     */
    public function getZip(): string
    {
        return $this->zip;
    }

    /**
     * @param string $zip
     * @return City
     */
    public function setZip(string $zip): City
    {
        $this->zip = $zip;
        return $this;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param string $name
     * @return City
     */
    public function setName(string $name): City
    {
        $this->name = $name;
        return $this;
    }

    /**
     * @return string
     */
    public function getConfidence(): string
    {
        return $this->confidence;
    }

    /**
     * @param string $confidence
     * @return City
     */
    public function setConfidence(string $confidence): City
    {
        $this->confidence = $confidence;
        return $this;
    }

    /**
     * @return array
     */
    public function getLocales(): array
    {
        return $this->locales;
    }

    /**
     * @param array $locales
     * @return City
     */
    public function setLocales(array $locales): City
    {
        $this->locales = $locales;
        return $this;
    }

    /**
     * Get the instance as an array.
     *
     * @return array
     */
    public function toArray()
    {
        return [
            'name' => $this->getName(),
            'locales' => $this->getLocales(),
            'zip' => $this->getZip(),
            'average_income' => $this->getAverageIncome(),
            'accuracy_radius' => $this->getAccuracyRadius(),
            'latitude' => $this->getLatitude(),
            'longitude' => $this->getLongitude(),
            'metro_code' => $this->getMetroCode(),
            'population_density' => $this->getPopulationDensity(),
            'time_zone' => $this->getTimeZone(),
        ];
    }

}
