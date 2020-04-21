<?php

namespace App\Services\Primitives;

use Illuminate\Contracts\Support\Arrayable;

/**
* Class Country
* @package App\Services\Primitives
*/
class Country implements Arrayable
{
    /** @var string $name */
    private $name = '';

    /** @var string $isoCode */
    private $isoCode = '';

    /** @var boolean|null $isEu */
    private $isEu = null;

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
     * @return Country
     */
    public function setIsoCode(string $isoCode): Country
    {
        $this->isoCode = $isoCode;
        return $this;
    }

    /**
     * @return bool|null
     */
    public function isEu(): ?bool
    {
        return $this->isEu;
    }

    /**
     * @param bool|null $isEu
     * @return Country
     */
    public function setIsEu(?bool $isEu): Country
    {
        $this->isEu = $isEu;
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
     * @return Country
     */
    public function setName(string $name): Country
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
     * @return Country
     */
    public function setLocales(array $locales): Country
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
            'is_in_european_union' => $this->isEu(),
            'iso_code' => $this->getIsoCode(),
        ];
    }
}
