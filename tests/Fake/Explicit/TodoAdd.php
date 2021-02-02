<?php

declare(strict_types=1);

namespace Ray\MediaQuery\Explicit;

use Ray\MediaQuery\SqlQueryInterface;
use Ray\MediaQuery\TodoAddInterface;

class TodoAdd implements TodoAddInterface
{
    /** @var SqlQueryInterface */
    private $sqlQuery;

    public function __construct(SqlQueryInterface $sqlQuery)
    {
        $this->sqlQuery = $sqlQuery;
    }

    public function __invoke(string $id, string $title): void
    {
        $this->sqlQuery->exec('todo_add', ['id' => $id, 'title' => $title]);
    }
}
