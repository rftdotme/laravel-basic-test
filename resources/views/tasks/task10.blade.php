@extends('app')

@section('content')
  
    <div class = "task_name">
        <p>
            В базе данных хранится список мероприятий (таблица events) и список заявок на
            покупку билетов на указанные мероприятия (таблица bids).
        </p>
    </div>
    <div class = "task_text">
        <p>1.Сделать миграцию для выше указанной схемы и залить в базу тестовые данные</p>
    </div>
    <div class = "code_example">
        <p>
            <pre>
            Schema::create('bids', function (Blueprint $table) {
                $table->increments('id');
                $table->integer('id_event')->unsigned();
                $table->string('name');
                $table->string('email');
                $table->float('price');
                $table->foreign('id_event')->references('id')->on('events');
            });
            Schema::create('events', function (Blueprint $table) {
                $table->increments('id');
                $table->string('caption');
            });

            class EventsSeeder extends Seeder {
                public function run (){
                DB::table('events')->delete();
                event::create([
                'caption' => "Atlas Weekend"
                ]);
                event::create([
                    'caption' => "Franz Ferdinand"
                ]);
                event::create([
                    'caption' => "Milky Chance"
                ]);
                event::create([
                    'caption' => "Faine misto"
                ]);
                event::create([
                    'caption' => "Kiasmos"
                ]);
                event::create([
                    'caption' => "Kodaine"
                ]);
                event::create([
                    'caption' => "Three days grace"
                ]);
                }
            }

            class BidsSeeder extends Seeder {
                public function run (){
                DB::table('bids')->delete();
                $eventIDs = DB::table('events')->pluck('id');
                bid::create([
                
                    'id_event'=> $eventIDs->random(),
                'name' => 'Olya',
                'email' => 'olya@gmail.com',
                'price' => '500',
                ]);
                bid::create([
                    'id_event'=> $eventIDs->random(),
                    'name' => 'Misha',
                    'email' => 'Misha@gmail.com',
                    'price' => '500'
                ]);
                bid::create([
                    'id_event'=> $eventIDs->random(),
                    'name' => 'Vadim',
                    'email' => 'vadim@gmail.com',
                    'price' => '700'
                ]);
                bid::create([
                    'id_event'=> $eventIDs->random(),
                    'name' => 'Dima',
                    'email' => 'dima@gmail.com',
                    'price' => '900'
                ]);
                bid::create([
                    'id_event'=> $eventIDs->random(),
                    'name' => 'Kolya',
                    'email' => 'kolya@gmail.com',
                    'price' => '1500'
                ]);
                bid::create([
                    'id_event'=> $eventIDs->random(),
                    'name' => 'Mary',
                    'email' => 'mary@gmail.com',
                    'price' => '1800'
                ]);
                }
            }
            </pre>
        </p>
    </div>
 
    <div class = "task_text">
        <p>2.Напишите запрос, который выберет имя пользователя (bids.name) с самой
высокой ценой заявки (bids.price)
</p>
    </div>
    <div class = "code_example">
      <pre>
        $bid_name = DB::table('bids')->orderBy('price', 'desc')->take(1)->get();
      </pre>
    </div>
    <div class = "result">
        @foreach ($bid_name as $bid )
             <p>{{ $bid->name }}</p>
        @endforeach
    </div>
    <div class = "task_text">
        <p>3.Напишите запрос, который выберет название мероприятия (events.caption), по
которому нет заявок</p>
    </div>
        <div class = "code_example">
        <p>
            <pre>
                $caption_none = DB::select( 
                    DB::raw("SELECT 
                    events.id, events.caption, 
                    COUNT(bids.id_event) AS Total 
                    FROM events 
                    LEFT JOIN bids ON events.id = bids.id_event 
                    GROUP BY events.id 
                    HAVING COUNT(bids.id_event) = 0") 
                );
            </pre>
        </p>
    </div>
    <div class = "result">
       @foreach ($caption_none as $c )
           Для : {{$c->caption}} не було знайдено заявок <br>
       @endforeach
    </div>
    <div class = "task_text">
        <p>4.Напишите запрос, который выберет название мероприятия (events.caption), по
которому больше трех заявок</p>
    </div>
    <div class = "code_example">
        <p>
            <pre>
                $caption_none = DB::select( 
                    DB::raw("SELECT 
                    events.id, events.caption, 
                    COUNT(bids.id_event) AS Total 
                    FROM events 
                    LEFT JOIN bids ON events.id = bids.id_event 
                    GROUP BY events.id 
                    HAVING COUNT(bids.id_event) > 3") 
                );
            </pre>
        </p>
    </div>
    <div class = "result">
        @foreach ($caption_three as $c )
            {{$c->caption}}  має більше трьох заявок {{$c->Total}} <br>
       @endforeach
    </div>
    <div class = "task_text">
        <p>5.Напишите запрос, который выберет название мероприятия (events.caption), по
            которому больше всего заявок</p>
    </div>
    <div class = "code_example">
        <p>
            <pre>
                $caption_none = DB::select( 
                    DB::raw("SELECT 
                    events.id, events.caption, 
                    COUNT(bids.id_event) AS Total 
                    FROM events 
                    LEFT JOIN bids ON events.id = bids.id_event 
                    GROUP BY events.id 
                    HAVING COUNT(bids.id_event) > 3
                    LIMIT 1") 
                );
            </pre>
        </p>
    </div>
    <div class = "result">
    
        @foreach ($caption_most as $c )
            Найбільша кількість заявок у: {{ $c->caption}} <br>
       @endforeach
    </div>
 
@stop