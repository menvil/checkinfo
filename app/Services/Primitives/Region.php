<?php

namespace App\Services\Primitives;

use Illuminate\Contracts\Support\Arrayable;

/**
* Class Region
* @package App\Services\Primitives
*/
class Region implements Arrayable
{
    /** @var string $name */
    private $name = '';

    /** @var string $isoCode */
    private $isoCode = '';

    /** @var array $locales */
    private $locales = [];

    /**
     * @return string
     */
    public function getIsoCode(): string
    {
        return $this->isoCode;
    }

    /**
     * @param string $isoCode
     * @return Region
     */
    public function setIsoCode(string $isoCode): Region
    {
        $this->isoCode = $isoCode;
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
     * @return Region
     */
    public function setName(string $name): Region
    {
        $this->name = $name;
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
     * @return Region
     */
    public function setLocales(array $locales): Region
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
            'iso_code' => $this->getIsoCode(),
        ];
    }
}
