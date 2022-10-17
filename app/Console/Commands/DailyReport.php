<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\Ids;
use Carbon\Carbon;

class DailyReport extends Command
{
    protected $signature = 'report:generate';

    protected $description = 'Generate txt report for Ids';

    public function handle()
    {
        $ids = Ids::all();

        $reportfile = fopen('report/ReportFile.txt', 'w') or $this->info('Unable to open file!');
        foreach ($ids as $id) {
            fwrite($reportfile, $id->personal_id . PHP_EOL);
        }
        fclose($reportfile);

        $this->info('Report has been created ' . Carbon::now()->toDateTimeString());
    }
}
