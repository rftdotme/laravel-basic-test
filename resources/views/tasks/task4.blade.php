@extends('app')

@section('content')
    <?php 
        $a = 10;
        $b = 3;
        $rem = 10%3;
    ?>
    <div class = "task_name">
        <p>4) Как вычислить остаток от деления 
</p>
    </div>
    <div class = "task_text">
        <p>10/3</p>
    </div>
    <div class = "code_example">
        <p>
            <pre>
                $a = 10;
                $b = 3;
                $rem = 10%3;
            </pre>
        </p>
    </div>
    <div class = "result">
        <p>Остача от деления : {{ $rem }}</p>
    </div>
    
@stop