<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\File;

class MakeDynamicResources extends Command
{
    protected $signature = 'make:dynamic {name} {--m : model} {--c : controller} {--r : request} {--s : service} {--v : view} {--se : seeder} {--f : factory}';
    protected $description = 'Create dynamic resources: model, controller, request, service, view, seeder, factory';

    public function handle()
    {
        $name = $this->argument('name');

        // Create Model
        $this->call('make:model', ['name' => $name, '--migration' => true]);
        $this->info("Model '$name' created successfully.");
        // Create Controller
        $this->call('make:controller', ['name' => $name . 'Controller', '--resource' => true]);
        $this->info("Controller '{$name}Controller' created successfully.");
        // Create Request
        $this->call('make:request', ['name' => $name . 'Request']);
        $this->info("Request '{$name}Request' created successfully.");
        // Create View
        $this->createView($name);
        $this->info("View '{$name}' created successfully.");
        // Create Service
        $serviceModel = $name;
        $this->createService($serviceModel);
        $this->info("Service '$serviceModel' created successfully.");
        // Create View
        $this->createView($name);
        $this->info("View '{$name}' created successfully.");
        // Create Seeder
        $this->call('make:seeder', ['name' => $name . 'Seeder']);
        $this->info("Seeder '{$name}Seeder' created successfully.");
        // Create Factory
        $this->call('make:factory', ['name' => $name . 'Factory']);
        $this->info("Factory '{$name}Factory' created successfully.");

        // Create Model
        // if ($this->option('m')) {
        //     $this->call('make:model', ['name' => $name, '--migration' => true]);
        //     $this->info("Model '$name' created successfully.");
        // }

        // Create Controller
        // if ($this->option('c')) {
        //     $this->call('make:controller', ['name' => $name . 'Controller', '--resource' => true]);
        //     $this->info("Controller '{$name}Controller' created successfully.");
        // }

        // Create Request
        // if ($this->option('r')) {
        //     $this->call('make:request', ['name' => $name . 'Request']);
        //     $this->info("Request 'Store{$name}Request' created successfully.");
        // }

        // Create Service
        // if ($this->option('s')) {
        //     $serviceName = $name . 'Service';
        //     $this->createService($serviceName);
        //     $this->info("Service '$serviceName' created successfully.");
        // }

        // Create View
        // if ($this->option('v')) {
        //     $this->createView($name);
        //     $this->info("View '{$name}' created successfully.");
        // }

        // Create Seeder
        // if ($this->option('se')) {
        //     $this->call('make:seeder', ['name' => $name . 'Seeder']);
        //     $this->info("Seeder '{$name}Seeder' created successfully.");
        // }

        // Create Factory
        // if ($this->option('f')) {
        //     $this->call('make:factory', ['name' => $name . 'Factory']);
        //     $this->info("Factory '{$name}Factory' created successfully.");
        // }
    }

    protected function createService($name)
    {
        $path = app_path("Services/{$name}Service.php");

        $content = <<<EOT
        <?php

        namespace App\Services;
        use App\Models\{$name};

        class $name.Service
        {
            public function getAll(){
                {$name}::get();
            }
            // Add your service methods here
        }
        EOT;

        File::ensureDirectoryExists(app_path('Services'));
        File::put($path, $content);
    }

    protected function createView($name)
    {
        $path = resource_path("views/{$name}/index.blade.php");
        $pathForm = resource_path("views/{$name}/form.blade.php");

        $content = <<<EOT
        @extends('layouts.app')

        @section('content')
            <h1>{$name} Index</h1>
        @endsection
        EOT;

        $contentForm = <<<EOT
        @extends('layouts.app')

        @section('content')
            <h1>{$name} Form</h1>
        @endsection
        EOT;

        File::ensureDirectoryExists(resource_path("views/{$name}"));
        File::put($path, $content);
        File::put($pathForm, $contentForm);
    }
}
