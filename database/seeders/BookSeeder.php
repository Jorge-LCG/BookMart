<?php

namespace Database\Seeders;

use App\Models\Book;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Book::create([
            'title' => 'Manual del DOCENTE INNOVADOR aplicando IA Generativa',
            'author' => 'Ing. Alex Taya',
            'editorial' => 'Editorial Innovación',
            'isbn' => 9786120000000,
            'language' => 'Español',
            'pages' => 250,
            'publication' => '2023-01-15',
            'format' => 'Tapa blanda',
            'price' => 10.00,
            'image' => 'https://isbn.bnp.gob.pe/files/titulos/160765.jpg',
            'description' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quae est quasi hic. Sunt modi, porro maiores magnam quo beatae facere, quaerat doloribus eligendi hic maxime! Beatae, dignissimos. Id, nesciunt sapiente.',
            'is_new' => true
        ]);
    }
}
