<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FilmSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('films')->truncate();
        foreach (self::$films as $film) {
            DB::table('films')->insert([
                'id' => $film['id'],
                'episode' => $film['episode'],
                'title' => $film['title'],
            ]);
        }
    }

    private static $films = array(
        array('id' => '1','episode' => 'Episode I','title' => 'The Phantom Menace'),
        array('id' => '2','episode' => 'Episode II','title' => 'Attack of the Clones'),
        array('id' => '3','episode' => 'Episode III','title' => 'Revenge of the Sith'),
        array('id' => '4','episode' => 'Episode IV','title' => 'A New Hope'),
        array('id' => '5','episode' => 'Episode V','title' => 'The Empire Strikes Back'),
        array('id' => '6','episode' => 'Episode VI','title' => 'Return of the Jedi')
      );
}
