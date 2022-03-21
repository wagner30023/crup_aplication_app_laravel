<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();


        Db::table('posts')->insert([
            'title' => 'O monge e o executivo',
            'description' => 'Lorem Ipsum é simplesmente uma simulação de texto da indústria tipográfica e de impressos,
            e vem sendo utilizado desde o século XVI'
        ]);

        Db::table('posts')->insert([
            'title' => 'O trêm do amanhã',
            'description' => 'Lorem Ipsum é simplesmente uma simulação de texto da indústria tipográfica e de impressos,
            e vem sendo utilizado desde o século XVI'
        ]);

        Db::table('posts')->insert([
            'title' => 'A ilha',
            'description' => 'Lorem Ipsum é simplesmente uma simulação de texto da indústria tipográfica e de impressos,
            e vem sendo utilizado desde o século XVI'
        ]);

        Db::table('posts')->insert([
            'title' => 'O silêncio dos inocentes',
            'description' => 'Lorem Ipsum é simplesmente uma simulação de texto da indústria tipográfica e de impressos,
            e vem sendo utilizado desde o século XVI'
        ]);

        Db::table('posts')->insert([
            'title' => 'O silêncio dos inocentes',
            'description' => 'Lorem Ipsum é simplesmente uma simulação de texto da indústria tipográfica e de impressos,
            e vem sendo utilizado desde o século XVI'
        ]);

        Db::table('posts')->insert([
            'title' => 'Felpo Filva',
            'description' => 'Lorem Ipsum é simplesmente uma simulação de texto da indústria tipográfica e de impressos,
            e vem sendo utilizado desde o século XVI'
        ]);


        Db::table('posts')->insert([
            'title' => 'Moore Anatomia',
            'description' => 'Lorem Ipsum é simplesmente uma simulação de texto da indústria tipográfica e de impressos,
            e vem sendo utilizado desde o século XVI'
        ]);

        Db::table('posts')->insert([
            'title' => 'O pequeno principe',
            'description' => 'Lorem Ipsum é simplesmente uma simulação de texto da indústria tipográfica e de impressos,
            e vem sendo utilizado desde o século XVI'
        ]);


        Db::table('posts')->insert([
            'title' => 'O sol é para todos',
            'description' => 'Lorem Ipsum é simplesmente uma simulação de texto da indústria tipográfica e de impressos,
            e vem sendo utilizado desde o século XVI'
        ]);
    }
}
