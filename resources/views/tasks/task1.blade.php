@extends('app')

@section('content')
    <?php 
        $total = 28;      
        $percent= 0.75;
        $do_sport = $total * $percent;         
    ?>
    <div class = "task_name">
        <p>1) Написать алгоритм решения задачи:</p>
    </div>
    <div class = "task_text">
        <p>В классе 28 учеников. 75% из них занимаются спортом. Сколько учеников в классе
            занимаются спортом и сколько всего учеников в классе?</p>
    </div>
    <div class = "code_example">
        <p>
            <pre>     
                $total = 28;      
                $percent= 0.75;
                $do_sport = $total * $percent; 
            </pre>
        </p>
    </div>
    <div class = "result">
        <p>Всего учеников в классе : {{ $total }} ,</p>
        <p>
           
        Учеников в классе
            занимаются спортом 
            : {{ $do_sport }}, 
        </p>
    </div>
    
@stop