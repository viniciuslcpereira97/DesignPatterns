<?php

namespace PHPatterns\Behavioral\Visitors;

class ProductVisitor
{

    /**
     *
     * Visits Notebook model and calculates discount
     *
     */
    public function getNotebookDiscount($product)
    {
        return ($product->getPrice() - 250.00);
    }

    /**
     *
     * Visits Headset model and calculates discount
     *
     */
    public function getHeadsetDiscount($product)
    {
        return ($product->getPrice() - 150.00);
    }

}
