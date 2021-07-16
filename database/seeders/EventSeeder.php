<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Event;

class EventSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $events[0] = array('name' => 'Campus clean workshop', 'about' => 'Accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam', 'heading' => 'Nam nec tellus a odio tincidunt auctor a ornare odionon mauris itae erat conuat' , 'date' => '2021-04-24','start_time' => '09:00', 'finish_time'=> '14:00', 'address'=>'kalindi gold city','place'=>'Rc Auditorim', 'image'=>'1618333995.jpg','banner_image'=>'1618375897.jpg','created_at'=>NULL,'updated_at'=>null);
        $events[1] = array('name' => 'Tech Summit', 'about' => 'Accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam', 'heading' => 'Nam nec tellus a odio tincidunt auctor a ornare odionon mauris itae erat conuat' , 'date' => '2021-08-30','start_time' => '11:00', 'finish_time'=> '17:00', 'address'=>'kalindi gold city','place'=>'Rc Auditorim', 'image'=>'1618465441.jpg','banner_image'=>'1618465441.jpg','created_at'=>NULL,'updated_at'=>null);
        $events[2] = array('name' => 'Enviroement conference', 'about' => 'Accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam', 'heading' => 'Nam nec tellus a odio tincidunt auctor a ornare odionon mauris itae erat conuat' , 'date' => '2021-08-07','start_time' => '12:00', 'finish_time'=> '16:00', 'address'=>'kalindi gold city','place'=>'Rc Auditorim', 'image'=>'1618465688.jpg','banner_image'=>'1618465688.jpg','created_at'=>NULL,'updated_at'=>null);
           foreach($events as $event) {
            Event::create($event);
        }

    }
}
