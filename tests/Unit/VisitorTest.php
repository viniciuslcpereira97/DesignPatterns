<?php

namespace Tests;

use Tests\TestCase;

use PHPatterns\Behavioral\Visitors\ProductVisitor;
use PHPatterns\Database\Models\Products\Headset;
use PHPatterns\Database\Models\Products\Notebook;

class VisitorTest extends TestCase
{

    protected $product_visitor;

    public function setUp()
    {
        $this->product_visitor = new ProductVisitor;
    }

    public function testIsVisitingNotebook()
    {
        $value = 2450.00;
        $product = new Notebook("notebook", $value);
        $product->getPriceWithDisccount($this->product_visitor);
        $this->assertTrue($value !== $product->getPriceWithDisccount($this->product_visitor));
    }

    public function testIsVisitingHeadset()
    {
        $value = 450.00;
        $product = new Headset("headset", $value);
        $product->getPriceWithDisccount($this->product_visitor);
        $this->assertTrue($value !== $product->getPriceWithDisccount($this->product_visitor));
    }

}
