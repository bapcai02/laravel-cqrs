<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class CQRSArtisan extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'cqrs:run {--command=} {--query=} {--handleCommand=} {--handleQuery}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Create CQRS for your App';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $commandName = $this->option('command');
        $queryName = $this->option('query');
        $handleCommand = $this->option('handleCommand');
        $handleQuery = $this->option('handleQuery');

        $folderPathCommand = app_path('Commands');
        $folderPathQuery = app_path('Queries');
        $folderHandlers = app_path('Handlers');
        $folderHandlersCommands = app_path('Handlers/Commands');
        $folderHandlersQuery = app_path('Handlers/Queries');

        $fileName = '.php';
    
        if (!empty($commandName)) {
            if (!is_dir($folderPathCommand)) {
                mkdir($folderPathCommand);
            }

            $filePath = $folderPathCommand . '/' . $commandName . $fileName;

            if (!file_exists($filePath)) {
                $content = '<?php' . "\n\n";
                $content .= 'namespace App\Commands;' . "\n\n";
                $content .= 'class '. $commandName . "\n";
                $content .= '{' . "\n";
                $content .= '    public function __construct()' . "\n";
                $content .= '    {' . "\n";
                $content .= '    }' . "\n";
                $content .= '}' . "\n";
        
                file_put_contents($filePath, $content);
                $this->info('Folder and file command created successfully!');
            } else {
                $this->info('The command file already exists.');
            }
        }
        
        if (!empty($queryName)) {
            if (!is_dir($folderPathQuery)) {
                mkdir($folderPathQuery);
            }

            $filePath = $folderPathQuery . '/' . $queryName . $fileName;

            if (!file_exists($filePath)) {
                $content = '<?php' . "\n\n";
                $content .= 'namespace App\Queries;' . "\n\n";
                $content .= 'class '. $queryName . "\n";
                $content .= '{' . "\n";
                $content .= '    public function __construct()' . "\n";
                $content .= '    {' . "\n";
                $content .= '    }' . "\n";
                $content .= '}' . "\n";
        
                file_put_contents($filePath, $content);
                $this->info('Folder and file created successfully!');
            } else {
                $this->info('The file already exists.');
            }
        }

        if (!empty($handleCommand)) {
            if (!is_dir($folderHandlers)) {
                mkdir($folderHandlers);
            }

            if (!is_dir($folderHandlersCommands)) {
                mkdir($folderHandlersCommands);
            }

            $filePath = $folderHandlersCommands . '/' . $handleCommand . $fileName;

            if (!file_exists($filePath)) {
                $content = '<?php' . "\n\n";
                $content .= 'namespace App\Handlers\Commands;' . "\n\n";
                $content .= 'class '. $handleCommand . "\n";
                $content .= '{' . "\n";
                $content .= '    public function handle()' . "\n";
                $content .= '    {' . "\n";
                $content .= '    }' . "\n";
                $content .= '}' . "\n";
        
                file_put_contents($filePath, $content);
                $this->info('Folder and file created successfully!');
            } else {
                $this->info('The file already exists.');
            }
        }

        if (!empty($handleQuery)) {
            if (!is_dir($folderHandlers)) {
                mkdir($folderHandlers);
            }

            if (!is_dir($folderHandlersQuery)) {
                mkdir($folderHandlersQuery);
            }

            $filePath = $folderHandlersQuery . '/' . $handleQuery . $fileName;

            if (!file_exists($filePath)) {
                $content = '<?php' . "\n\n";
                $content .= 'namespace App\Handlers\Queries;' . "\n\n";
                $content .= 'class '. $handleQuery . "\n";
                $content .= '{' . "\n";
                $content .= '    public function handle()' . "\n";
                $content .= '    {' . "\n";
                $content .= '    }' . "\n";
                $content .= '}' . "\n";
        
                file_put_contents($filePath, $content);
                $this->info('Folder and file created successfully!');
            } else {
                $this->info('The file already exists.');
            }
        }
    }
}
