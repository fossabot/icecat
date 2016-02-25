<?php

namespace haringsrob\Icecat\Model;

use haringsrob\Icecat\Model\Icecat;
use haringsrob\Icecat\Model\IcecatFetcherInterface;

/**
 * Class IcecatFetcher
 *
 * This class acts as a communication helper to fetch data from icecat.
 */
class IcecatFetcher extends IcecatFetcherBase
{
    /**
     * The sku (product number) of the product.
     *
     * @var string
     */
    public $sku;

    /**
     * The brand of the product.
     *
     * @var string
     */
    public $brand;

    /**
     * The icecat username.
     *
     * @var string
     */
    protected $username;

    /**
     * The plain text password.
     * @var string
     */
    protected $password;

    /**
     * IcecatFetcher constructor.
     * @param $username
     * @param $password
     * @param $ean
     * @param $language
     */
    public function __construct($username, $password, $ean, $language)
    {
        $this->username = $username;
        $this->password = $password;
        $this->ean = $ean;
        $this->language = $language;
    }

    /**
     * Sets the language to download data in.
     */
    public function setLanguage($language)
    {
        $this->language = $language;
    }

    /**
     * Sets the product ean.
     *
     * @param $ean
     */
    public function setProductEan($ean)
    {
        $this->ean = $ean;
    }

    /**
     * Sets the product sku.
     *
     * @param $sku
     */
    public function setProductSku($sku)
    {
        $this->sku = $sku;
    }

    /**
     * Sets the product brand.
     *
     * @param $brand
     */
    public function setProductBrand($brand)
    {
        $this->brand = $brand;
    }

    /**
     * Returns if there were any errors.
     *
     * @return array|bool
     */
    public function getErrors()
    {
        if (is_array($this->errors)) {
            return $this->errors;
        }
        return false;
    }
}
