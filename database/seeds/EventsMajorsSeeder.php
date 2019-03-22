<?php

use Illuminate\Database\Seeder;

use Illuminate\Support\Arr;

use App\EventsMajors;

class EventsMajorsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {


        $runEventsMajorSeeding = false;

        echo "seeder can run? ".$runEventsMajorSeeding."\n\n";

        if($runEventsMajorSeeding)
        {

            echo "starting seeder.\n\n";

            $filled = EventsMajors::all();

            if($filled->isEmpty())
            {

                //for loop id 8-12 events, if in chronological order
                //only for current ids
                //otherwise need to use foreach and put the ids in an array
                //$x = event id; $id = major id
                for ($eId = 8; $eId <= 12; $eId++) {

                    //date time + correct formatting
                    $dateTime = new DateTime();
                    $created = $dateTime->format('Y-m-d H:i:s');

                    //random num generator for majors 1-10
                    $randNum = mt_rand(1, 10);

                    //returns an array 1-10
                    $a = range(1, 10);

                    //randomly pick ids from the array
                    $randIds = Arr::random($a, $randNum);

                    foreach ($randIds as $mId) {
                        //insert $eID + $mID

                        DB::table('events_majors')->insert([
                            'events_id' => $eId,
                            'majors_id' => $mId,
                            'created_at' => $created,
                            'updated_at' => $created,
                        ]);

                        //echo "'events_id' => ".$eId.", 'majors_id' => ".$mId.", 'created_at' => ".$created.", 'updated_at' => ".$created.",\n";

                    }


                }

                echo "finished.\n\n";

            }


        }else{
            echo "seeder skipped.\n\n";
        }


    }
}
