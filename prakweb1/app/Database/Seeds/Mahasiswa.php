<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;
use CodeIgniter\I18n\Time;


class Mahasiswa extends Seeder
{
    public function run()
    {
        $data_mahasiswa = [
            [
                'npm' => '2017051035',
            'nama'    => 'Irfan Saputra',
            'alamat' => 'Lampung tengah',
            'created_at' =>Time::now()
            ],

            [
                'npm' => '2017051000',
            'nama'    => 'Saputraa',
            'alamat' => 'Lampung tengah',
            'created_at' =>Time::now()
            ],

        ];

        // Simple Queries
        // $this->db->query('INSERT INTO users (username, email) VALUES(:username:, :email:)', $data);

        // Using Query Builder
        foreach ($data_mahasiswa as $data) {
            $this->db->table('mahasiswa')->insert($data);
        }

    }
}
