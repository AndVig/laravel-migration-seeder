<?php

namespace Database\Seeders;

use App\Models\Train;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TrainsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        /*
        $table->id();
            $table->string('company',50);
            $table->string('departure_station',100);
            $table->string('arrival_station',100);
            $table->dateTime('departure_time');
            $table->dateTime('departure_arrival');
            $table->string('train_code',20);
            $table->tinyInteger('cars_number')->default(2);
            $table->boolean('on_time')->default(false);
            $table->boolean('is_cancelled')->default(false);
            $table->timestamps();
        */

        $train= new Train();

        $train->company= 'trainseeder';
        $train->departure_station='Trento' ;
        $train->arrival_station='Firenze' ;
        $train->departure_time='2024-08-12 12:34:00' ;
        $train->arrival_time='2024-08-12 16:34:00' ;
        $train->train_code='TF005' ;
        $train->cars_number=15 ;
        $train->on_time=1 ;
        $train->is_deleted=0 ;
        

        $train->save();
    }
}
