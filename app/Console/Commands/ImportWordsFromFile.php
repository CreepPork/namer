<?php

namespace App\Console\Commands;

use App\Models\Word;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;

class ImportWordsFromFile extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'import:words {file}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Imports into database all the words.';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $file = File::get($this->argument('file'));

        foreach (explode("\n", $file) as $word) {
            $this->info('Importing: ' . $text = trim($word));

            if (strlen($word) > 0) {
                Word::firstOrCreate(compact('text'));
            }
        }

        return 0;
    }
}
