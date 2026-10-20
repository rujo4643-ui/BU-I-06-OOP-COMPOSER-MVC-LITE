<?php

declare(strict_types=1);

namespace App\Controllers;

use App\Repositories\ProductRepository;

final class ProductController
{
    public function __construct(private ProductRepository $products) {}

    public function index(): void
    {
        $products = $this->products->all();
        require dirname(__DIR__, 2) . '/views/products/index.php';
    }
}
