<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Mail;

class DailySendReport extends Command
{
    protected $signature = 'report:generate';

    protected $description = 'Send txt report';

    public function handle()
    {
        $data = file("report/ReportFile.txt");

        Mail::send('emails.test', $data, function ($message) {
            $message->from('mail@gmail.com');

            $message->to('admin@admin.admin')->subject('data');
        });

        $this->info('The email are send successfully!');
    }
}
