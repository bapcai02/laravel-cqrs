<?php
 
namespace App\Queries;
 
class GetUsersQuery
{
    public $limit;
    public $offset;
 
    public function __construct($data)
    {
        $this->limit = $data['limit'] ?? 10;
        $this->offset = $data['offset'] ?? 0;
    }
 
    public function getLimit()
    {
        return $this->limit;
    }
 
    public function getOffset()
    {
        return $this->offset;
    }
}