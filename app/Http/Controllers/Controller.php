<?php

namespace App\Http\Controllers;

use App\Commands\CreateUserCommand;
use App\Queries\GetUsersQuery;
use Illuminate\Support\Facades\Bus;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    public function index() {
        $data = [
            'limit' => 10
        ];
        $user = Bus::dispatch(new GetUsersQuery($data));

        return $user;
   }

   public function created() {
        $data = [
            'name' => 1,
            'email' => 2
        ];

        Bus::dispatch(new CreateUserCommand($data));
   }
}
