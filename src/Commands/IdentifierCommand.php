<?php

namespace Muhsenmaqsudi\Identifier\Commands;

use Illuminate\Console\Command;

class IdentifierCommand extends Command
{
    public $signature = 'laravel-identifier';

    public $description = 'My command';

    public function handle()
    {
        $this->comment('All done');
    }
}
