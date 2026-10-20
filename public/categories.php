<?php

declare(strict_types=1);

require __DIR__ . '/../includes/bootstrap.php';

use App\Controllers\CategoryController;
use App\Repositories\CategoryRepository;

$controller = new CategoryController(new CategoryRepository($pdo));
$controller->index();
