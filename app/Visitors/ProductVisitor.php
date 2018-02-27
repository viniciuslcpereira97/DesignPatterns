<?php

namespace PHPatterns\Visitors;

class ProductVisitor
{

    public function getNotebookDiscount($product) {
        $product->setPrice($product->getPrice() - 250.00);
    }

    public function getHeadsetDiscount($product) {
        $product->setPrice($product->getPrice() - 150.00);
    }

}
