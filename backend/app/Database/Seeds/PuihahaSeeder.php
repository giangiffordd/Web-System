<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class PuihahaSeeder extends Seeder
{
    public function run()
    {
        $data = [
            [
                'title' => 'Pastel Jasmine',
                'desc'  => 'A light floral jasmine tea with a soft pastel aroma.',
                'img'   => 'pastel-jasmine.jpg',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'title' => 'Cloudy Matcha',
                'desc'  => 'Creamy ceremonial matcha with a gentle, grassy finish.',
                'img'   => 'cloudy-matcha.jpg',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'title' => 'Rose Petal Oolong',
                'desc'  => 'Delicate oolong scented with rose petals for a pastel blush.',
                'img'   => 'rose-oolong.jpg',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
        ];

        foreach ($data as $row) {
            $this->db->table('puihaha_teas')->insert($row);
        }
    }
}
