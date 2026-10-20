<?php

declare(strict_types=1);

require __DIR__ . '/../includes/bootstrap.php';

use App\Controllers\ProductController;
use App\Repositories\ProductRepository;

$controller = new ProductController(new ProductRepository($pdo));
$controller->index();
