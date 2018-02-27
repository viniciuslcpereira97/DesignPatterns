<?php

namespace PHPatterns\Database\Models\Products;

use PHPatterns\Visitors\ProductVisitor;

class Notebook extends Product
{

    public function accept(ProductVisitor $visitor) {
        $visitor->getNotebookDiscount($this);
        echo $this->getPrice();
    }

}
