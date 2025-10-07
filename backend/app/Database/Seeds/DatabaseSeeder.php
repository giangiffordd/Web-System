<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        $this->call('App\\Database\\Seeds\\ClearDatabaseSeeder');

        // Call the Puihaha site seeder
        $this->call('App\\Database\\Seeds\\PuihahaSeeder');
    }
}
