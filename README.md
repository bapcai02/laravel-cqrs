
## About Laravel CQRS

Laravel CQRS (Command Query Responsibility Segregation) is a software architecture used in web application development with the Laravel framework. CQRS separates the responsibility between executing commands (changing the system state) and performing queries (retrieving data from the system).

In the CQRS architecture, commands and queries are two different types of operations and are handled by separate components. A command represents a request to change the system state, such as creating, updating, or deleting data. A query represents a request to retrieve data from the system without modifying its state.

Laravel CQRS applies the principles of CQRS to Laravel application development. It helps to separate the logic for handling commands and queries, providing clarity and manageability to the source code. By dividing responsibilities, Laravel CQRS can optimize performance and facilitate scalability in your application.

In Laravel CQRS, you will find the following key components:

1. Commands: Representing operations that change the system state.
2. Command Handlers: Responsible for processing the logic to execute commands and change the system state accordingly.
3. Queries: Representing operations that retrieve data from the system.
4. Query Handlers: Responsible for processing the logic to handle queries and return the corresponding results.

Laravel CQRS enables you to separate the processing logic and facilitates easy scalability during the development of your Laravel application, particularly when dealing with complex requirements and high loads..

## Command

run the following command: php artisan cqrs:run {--command=} {--query=} {--handleCommand=} {--handleQuery}

1. php artisan cqrs:run --command=CreateUserCommand
2. php artisan cqrs:run --query=GetUsersQuery   
3. php artisan cqrs:run --handleCommand=CreateUserHandler
4. php artisan cqrs:run --handleQuery=GetUsersHandler

## Laravel provider map Bus

in file CQRSProvider.php

public function boot()
{
    // bind command
    Bus::map([
        CreateUserCommand::class => CreateUserHandler::class,
        GetUsersQuery::class => GetUsersHandler::class,
    ]);
}

=> when creating command, query and handle, map it together

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
