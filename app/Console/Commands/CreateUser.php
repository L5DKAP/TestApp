<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class CreateUser extends Command
{
    protected $signature = 'user:create';

    protected $description = 'Manually create a new User.';

    public function handle()
    {
        $name = $this->ask('Name?');
        $email = $this->ask('Email?');
        $pwd = $this->secret('Password?');

        User::query()
            ->create([
                'name' => $name,
                'email' => $email,
                'password' => Hash::make($pwd),
            ]);

        $this->info('Account created for ' . $name);
    }
}
