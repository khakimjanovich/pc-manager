<?php

declare(strict_types=1);

namespace Khakimjanovich\PCManager\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Schema;
use Symfony\Component\Console\Attribute\AsCommand;
use function Laravel\Prompts\error;
use function Laravel\Prompts\info;

#[AsCommand('pc-manager:migrate', 'Migrates the pc manger migrations to database')]
final class MigrateCommand extends Command
{
    public function handle(): int
    {
        info('Migrating pc manager migrations...');

        $migrationPath = 'vendor/khakimjanovich/pc-manager/database/migrations'; // Update path as needed

        if (!File::isDirectory($migrationPath)) {
            error("Migration path not found: $migrationPath");

            return 1;
        }

        $migrationFiles = collect(File::files($migrationPath))
            ->map(fn($file) => pathinfo($file->getFilename(), PATHINFO_FILENAME));

        DB::table('migrations')->whereIn('migration', $migrationFiles)->delete();
        info('Deleted migration records from database.');

        $tables_to_drop = [
            'pc_manager_card_add_processes',
            'pc_manager_cards',
            'pc_manager_card_add_sms_configs',
        ];

        $dropped_tables = '';
        foreach ($tables_to_drop as $table) {
            if (Schema::hasTable($table)) {
                Schema::drop($table);
                $dropped_tables .= $table . ', ';
            }
        }
        if ($dropped_tables) {
            info("Dropped tables: $dropped_tables");
        }

        $this->call('migrate', [
            '--path' => $migrationPath,
        ]);

        return 0;
    }
}
