<?php

namespace PHPatterns\Database\Models\Products;

use PHPatterns\Behavioral\Visitors\ProductVisitor;

class Headset extends Product
{

    /**
     *
     * Accepts visitor
     *
     */
    public function accept() {
        $visitor = new ProductVisitor;
        return $visitor->getHeadsetDiscount($this);
    }

    public function getPriceWithDisccount() {
        $visitor = new ProductVisitor;
        return $this->accept($visitor);
    }

}
