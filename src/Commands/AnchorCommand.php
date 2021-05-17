<?php

namespace Thomasmoors\Anchor\Commands;

use Illuminate\Console\Command;

class AnchorCommand extends Command
{
    public $signature = 'anchor:generate';

    public $description = 'My command';

    public function handle()
    {
        $this->comment('All done');
    }
}
