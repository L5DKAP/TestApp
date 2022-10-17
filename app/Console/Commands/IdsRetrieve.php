<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\Ids;

class IdsRetrieve extends Command
{
    protected $signature = 'ids:retrieve {cid}';

    protected $description = 'Manually show id from Ids.';

    public function handle()
    {
        $cid = $this->argument('cid');

        $ids = Ids::find($cid);
        if ($ids) {
            $this->info('Ids find for ' . $ids);
        } else {
            $this->info('Ids not find for id=' . $cid);
        }
    }
}
