<?php

namespace PHPatterns\Database\Models\Products;

use PHPatterns\Visitors\ProductVisitor;

class Notebook extends Product
{

    /**
     *
     * Accept visitor
     *
     */
    public function accept(ProductVisitor $visitor) {
        $visitor->getNotebookDiscount($this);
        echo $this->getPrice();
    }

}
