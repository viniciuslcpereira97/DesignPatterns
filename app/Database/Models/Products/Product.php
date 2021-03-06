<?php

namespace PHPatterns\Database\Models\Products;

use PHPatterns\Database\Models\Model;
use PHPatterns\Behavioral\Visitors\ProductVisitor;

abstract class Product extends Model
{

    // Product name
    private $name;

    // Product price
    private $price;

    /**
     *
     * Product constructor
     *
     */
    public function __construct($productName, $productPrice)
    {
        $this->name = $productName;
        $this->price = $productPrice;
    }

    /**
     *
     * Product price setter
     *
     */
    public function setPrice($productPrice)
    {
        $this->price = $productPrice;
    }

    /**
     *
     * Product price getter
     * @return price
     *
     */
    public function getPrice() : float
    {
        return $this->price;
    }

    /**
     *
     * Product name setter
     *
     */
    public function setName($productName)
    {
        $this->name = $productName;
    }

    /**
     *
     * Product name getter
     * @return name
     *
     */
    public function getName() : string
    {
        return $this->name;
    }

    /**
     *
     * Gets price with disccount
     *
     */
    public abstract function getPriceWithDisccount() : float;

}
