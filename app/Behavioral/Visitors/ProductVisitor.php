<?php

namespace PHPatterns\Behavioral\Visitors;

use PHPatterns\Contracts\VisitorContract as Visitor;

class ProductVisitor implements Visitor
{

    /**
     *
     * Visits Notebook model and calculates discount
     *
     */
    public function getNotebookDiscount($product) : float
    {
        return ($product->getPrice() - 250.00);
    }

    /**
     *
     * Visits Headset model and calculates discount
     *
     */
    public function getHeadsetDiscount($product) : float
    {
        return ($product->getPrice() - 150.00);
    }

}
