<?php

use Illuminate\Database\Seeder;

class ModulesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\Module::create([
            'title' => 'Neurologia',
            'user_id' => 1
        ]);

        \App\Models\Module::create([
            'title' => 'Traumato-Ortopedia',
            'user_id' => 1
        ]);

        \App\Models\Module::create([
            'title' => 'Emergência',
            'user_id' => 1
        ]);
    }
}
