<?php

namespace PHPatterns\Database\Models\Products;

use PHPatterns\Behavioral\Visitors\ProductVisitor;

class Notebook extends Product
{

    /**
     *
     * Accept visitor
     *
     */
    public function accept(ProductVisitor $visitor) {
        $visitor->getNotebookDiscount($this);
    }

}
