<?php
declare(strict_types=1);

namespace App\Console\Commands;

use Illuminate\Console\Command;

class AddUserCommand extends Command
{
    protected $signature = 'karibu:add-user';

    protected $description = 'Add User for karibu kwako';

    public function __construct()
    {
        parent::__construct();
    }

    public function handle()
    {

    }
}
