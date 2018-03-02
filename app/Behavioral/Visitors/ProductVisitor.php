<?php

namespace PHPatterns\Behavioral\Visitors;

class ProductVisitor
{

    /**
     *
     * Visits Notebook model and calculates discount
     *
     */
    public function getNotebookDiscount($product) {
        $product->setPrice($product->getPrice() - 250.00);
    }

    /**
     *
     * Visits Headset model and calculates discount
     *
     */
    public function getHeadsetDiscount($product) {
        $product->setPrice($product->getPrice() - 150.00);
    }

}
