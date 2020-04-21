<?php

namespace App\Services\Primitives;

use Illuminate\Contracts\Support\Arrayable;

/**
* Class Ip
* @package App\Services\Primitives
*/
class Ip implements Arrayable
{
    /** @var string $address */
    private $address = '';

    /** @var string $address */
    private $version = '';

    /**
     * @return string
     */
    public function getAddress(): string
    {
        return $this->address;
    }

    /**
     * @param string $address
     * @return Ip
     */
    public function setAddress(string $address): Ip
    {
        $this->address = $address;
        return $this;
    }

    /**
     * @return string
     */
    public function getVersion(): string
    {
        return $this->version;
    }

    /**
     * @param string $version
     * @return Ip
     */
    public function setVersion(string $version): Ip
    {
        $this->version = $version;
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
            'address' => $this->getAddress(),
            'version' => $this->getVersion(),
        ];
    }

}
