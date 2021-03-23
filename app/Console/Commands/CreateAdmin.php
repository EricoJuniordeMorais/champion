<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\User;

class CreateAdmin extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */

    protected $signature = 'create:admin';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $name = $this->ask('admin\'s name:');
	$email = $this->ask('admin\'s email:');
	$password = $this->ask('admin\'s password:');
	
	$newAdmin = new User(["name" => $name, "email" => $email,"cookie" => "N/A", "slug" => "N/A", "password" => bcrypt($password), "is_admin" => true]);

	if ($this->confirm('Create Admin?', true)) {
		$newAdmin->save();
		$this->info('Admin created');
	}else{
		$this->info('Operation Canceled');
	}
    }
}
