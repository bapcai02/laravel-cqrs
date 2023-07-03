<?php
 
namespace App\Providers;
 
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Bus;
use App\Handlers\Commands\CreateUserHandler;
use App\Handlers\Queries\GetUsersHandler;
use App\Commands\CreateUserCommand;
use App\Queries\GetUsersQuery;
 
class CQRSProvider extends ServiceProvider
{

    public function boot()
    {
        // bind command
        Bus::map([
            CreateUserCommand::class => CreateUserHandler::class,
            GetUsersQuery::class => GetUsersHandler::class,
        ]);
    }
}