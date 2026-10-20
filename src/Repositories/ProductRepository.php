<?php

declare(strict_types=1);

namespace App\Repositories;

use PDO;

final class ProductRepository
{
    public function __construct(private PDO $pdo) {}

    public function all(): array
    {
        return $this->pdo->query(
            'SELECT p.id, p.name, p.price, p.stock, c.name AS category_name
            FROM products p
            JOIN categories c ON c.id = p.category_id
            ORDER BY p.id DESC'
        )->fetchAll(PDO::FETCH_ASSOC);
    }
}
