<?php

namespace Asosick\TestTime\Commands;

use Illuminate\Console\Command;

class TestTimeCommand extends Command
{
    public $signature = 'test-time';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
