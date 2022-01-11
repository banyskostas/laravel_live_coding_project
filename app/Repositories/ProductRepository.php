<?php

declare(strict_types = 1);

namespace App\Repositories;

use App\Models\Product;

class ProductRepository
{
    private Product $product;

    public function __construct(Product $product)
    {
        $this->product = $product;
    }


}