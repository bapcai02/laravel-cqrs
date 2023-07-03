<?php

namespace App\Repositories\Contracts;

/**
 * Interface ExampleRepository.
 *
 * @package namespace App\Repositories\Contracts;
 */
interface ExampleRepository
{
    public function store($values);

    public function firstByWhere($where, $relationship = [], $columns = "*");

    public function getByFilters($filters = [], $relationship = [], $limit = 10, $offset = 0, $orderBy = []);

    public function getAllByFilters($filters = [], $relationship = [], $orderBy = []);

    public function firstByFilters($filters = [], $relationship = [], $orderBy = []);
}
