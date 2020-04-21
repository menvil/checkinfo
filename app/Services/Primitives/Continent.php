<?php

namespace App\Services\Primitives;

use Illuminate\Contracts\Support\Arrayable;

/**
* Class Continent
* @package App\Services\Primitives
*/
class Continent implements Arrayable
{
    /** @var string $name */
    private $name = '';

    /** @var string $code */
    private $code = '';

    /** @var array $locales */
    private $locales = [];

    /**
     * @return string
     */
    public function getCode(): string
    {
        return $this->code;
    }

    /**
     * @param string $code
     * @return Continent
     */
    public function setCode(string $code): Continent
    {
        $this->code = $code;
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
     * @return Continent
     */
    public function setName(string $name): Continent
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
     * @return Continent
     */
    public function setLocales(array $locales): Continent
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
            'code' => $this->getCode(),
        ];
    }
}
