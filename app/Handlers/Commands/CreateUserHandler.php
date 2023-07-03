<?php
 
namespace App\Handlers\Commands;
 
use App\Commands\CreateUserCommand;
use App\Models\User;
use App\Handlers\Traits\QueryTraits;
use Prettus\Repository\Eloquent\BaseRepository;

class CreateUserHandler extends BaseRepository
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

    public function handle(CreateUserCommand $command)
    {
        $user = new User();
        $user->name = $command->getName();
        $user->email = $command->getEmail();
        $user->save();
    }
}