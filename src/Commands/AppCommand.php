<?php

namespace Zigzagdev\App\Commands;

use Illuminate\Console\Command;

class AppCommand extends Command
{
    public $signature = 'app';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
