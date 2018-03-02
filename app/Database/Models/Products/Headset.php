<?php

namespace PHPatterns\Database\Models\Products;

use PHPatterns\Behavioral\Visitors\ProductVisitor;

class Headset extends Product
{

    /**
     *
     * Accept visitor
     *
     */
    public function accept(ProductVisitor $visitor) {
        $visitor->getHeadsetDiscount($this);
    }

}
