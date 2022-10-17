<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\Ids;

class IdsGenerate extends Command
{
    protected $signature = 'ids:generate';

    protected $description = 'Manually generate a new id for Ids.';

    public function handle()
    {
        $number = rand();
        $ids = Ids::create(['personal_id' => $number,]);

        $this->info('Ids created for ' . $ids);
    }
}
