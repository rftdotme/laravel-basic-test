<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Bid;
use App\Models\Event;
class TasksController extends Controller
{
    public function index()
    {
        //echo "task1";
        return view('app'); 
    }

    public function task1()
    {
        
        return View::make('tasks.task1')
        ->with('total', $total)
        ->with('do_sport', $do_sport);
        //return view('view.name', $data);('tasks.task1', compact('total'),compact('do_sport'));
    }
    public function task2()
    {
        return view('tasks.task2');
    }
    public function task3()
    {
        return view('tasks.task3');
    }
    public function task4()
    {
        return view('tasks.task4');
    }
    public function task5()
    {
        return view('tasks.task5');
    }
    public function task6()
    {
        return view('tasks.task6');
    }
    public function task7()
    {
        return view('tasks.task7');
    }
    public function task8()
    {
        return view('tasks.task8');
    }
    public function task9()
    {
        return view('tasks.task9');
    }
    public function task10()
    {
        

    // $bid_name = DB::table('bids')->orderBy('price', 'desc')->take(1)->get();//->pluck('name')
    
    // $caption_none = DB::select( DB::raw("SELECT events.id, events.caption, COUNT(bids.id_event) AS Total FROM events left JOIN bids ON events.id = bids.id_event GROUP BY events.id HAVING COUNT(bids.id_event) = 0") );
  
    // $caption_three = DB::select( DB::raw("SELECT events.id, events.caption, COUNT(bids.id_event) AS Total FROM events JOIN bids ON events.id = bids.id_event GROUP BY events.id HAVING COUNT(bids.id_event) > 3") );
    
    // $caption_single_most = DB::select( DB::raw("SELECT events.id, events.caption, COUNT(bids.id_event) AS Total FROM events left JOIN bids ON events.id = bids.id_event GROUP BY events.id ORDER BY `Total` DESC LIMIT 1") );


    // return  View::make('tasks.task10')->with('bid_name', $bid_name)->with('caption_none', $caption_none)->with('caption_three',$caption_three)->with('caption_most', $caption_single_most);
        return view('tasks.task10');
    }
}
