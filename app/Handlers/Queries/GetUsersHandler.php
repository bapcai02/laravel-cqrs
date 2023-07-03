<?php
 
namespace App\Handlers\Queries;
 
use App\Queries\GetUsersQuery;
use App\Models\User;
use App\Handlers\Traits\QueryTraits;
use Prettus\Repository\Eloquent\BaseRepository;

class GetUsersHandler extends BaseRepository
{   
    use QueryTraits;

    /**
     * Specify Model class name
     *
     * @return string
     */
    public function model()
    {
        return User::class;
    }

    public function initQuery($model, $filters)
    {
        return $model;
    }

    public function handle(GetUsersQuery $query)
    {
        $users = User::limit($query->getLimit())->offset($query->getOffset())->get();
        
        return $users;
    }
}