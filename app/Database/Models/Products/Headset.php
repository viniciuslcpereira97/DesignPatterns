<?php

namespace PHPatterns\Database\Models\Products;

use PHPatterns\Visitors\ProductVisitor;

class Headset extends Product
{

    /**
     *
     * Accept visitor
     *
     */
    public function accept(ProductVisitor $visitor) {
        $visitor->getHeadsetDiscount($this);
        echo $this->getPrice();
    }

}