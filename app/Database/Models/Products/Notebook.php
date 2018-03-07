<?php

namespace PHPatterns\Database\Models\Products;

use PHPatterns\Behavioral\Visitors\ProductVisitor;

class Notebook extends Product
{

    /**
     *
     * Accepts visitor
     *
     */
    public function getPriceWithDisccount() : float
    {
        $visitor = new ProductVisitor;
        return $visitor->getNotebookDiscount($this);
    }

}
