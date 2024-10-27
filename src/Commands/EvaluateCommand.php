<?php

namespace Wsmallnews\Evaluate\Commands;

use Illuminate\Console\Command;

class EvaluateCommand extends Command
{
    public $signature = 'evaluate';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
