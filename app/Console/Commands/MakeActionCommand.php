<?php

declare(strict_types=1);

namespace App\Console\Commands;

use Illuminate\Console\GeneratorCommand;
use Illuminate\Contracts\Filesystem\FileNotFoundException;
use Illuminate\Support\Facades\File;

use function Laravel\Prompts\select;
use function Laravel\Prompts\text;

final class MakeActionCommand extends GeneratorCommand
{
    /**
     * The name and signature of the console command.
     *
     */
    protected $signature = 'make:action {name : The name of the action}';

    /**
     * The console command description.
     *
     */
    protected $description = 'Create a new action class';

    /**
     * The type of class being generated.
     *
     */
    protected $type = 'Action';

    /**
     * Cache for the selected sub-namespace.
     */
    private ?string $selectedSubNamespace = null;

    /**
     * Get the stub file for the generator.
     */
    protected function getStub(): string
    {
        return $this->resolveStubPath('/stubs/action.stub');
    }

    /**
     * Get the default namespace for the class.
     *
     */
    protected function getDefaultNamespace($rootNamespace): string
    {
        $subNamespace = $this->getSubNamespace();

        return $rootNamespace.'\Actions'.($subNamespace !== '' && $subNamespace !== '0' ? '\\'.$subNamespace : '');
    }

    /**
     * Get the stub file for the generator.
     *
     */
    protected function buildClass($name): string
    {
        $stub = $this->files->get($this->getStub());

        return $this->replaceNamespace($stub, $name)->replaceClass($stub, $name);
    }

    /**
     * Resolve the fully-qualified path to the stub.
     */
    private function resolveStubPath(string $stub): string
    {
        return file_exists($customPath = $this->laravel->basePath(mb_trim($stub, '/')))
            ? $customPath
            : __DIR__.$stub;
    }

    /**
     * Get the sub-namespace for the action.
     */
    private function getSubNamespace(): string
    {
        if ($this->selectedSubNamespace !== null) {
            return $this->selectedSubNamespace;
        }

        $actionsPath = app_path('Actions');
        $options = ['Actions (default)'];

        // Add "Create new folder" option
        $options[] = 'Create new folder';

        // Add existing subdirectories
        if (File::exists($actionsPath)) {
            $directories = File::directories($actionsPath);
            foreach ($directories as $directory) {
                $folderName = basename((string) $directory);
                $options[] = "Actions/{$folderName}";
            }
        }

        $choice = select(
            label: 'Where should the action be created?',
            options: $options,
            default: 'Actions (default)'
        );

        if ($choice === 'Actions (default)') {
            $this->selectedSubNamespace = '';

            return '';
        }

        if ($choice === 'Create new folder') {
            $newFolder = text(
                label: 'Enter the folder name (e.g., "User" for App/Actions/User)',
                placeholder: 'User',
                required: true,
                validate: fn ($value): ?string => preg_match('/^[A-Za-z][A-Za-z0-9]*$/', (string) $value)
                    ? null
                    : 'Folder name must be a valid PHP class name (letters and numbers only, starting with a letter)'
            );

            $this->selectedSubNamespace = $newFolder;

            return $newFolder;
        }

        // Extract the sub-namespace from existing folder choice
        $subNamespace = str_replace('Actions/', '', $choice);
        $this->selectedSubNamespace = $subNamespace;

        return $subNamespace;
    }
}
