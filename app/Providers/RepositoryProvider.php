<?php
 
namespace App\Providers;
 
use Illuminate\Support\ServiceProvider;
use App\Repositories\Contracts\ExampleRepository;
use App\Repositories\Eloquent\ExampleRepositoryEloquent;
 
class RepositoryProvider extends ServiceProvider
{
    public function register()
    {
        //bind
        $this->app->bind(ExampleRepository::class, ExampleRepositoryEloquent::class);
    }
}