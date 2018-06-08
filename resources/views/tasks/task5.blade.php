@extends('app')

@section('content')
    <?php 
        $a = [1,2,3,4,5];
        $b = 'Hello world';
        list($a,$b) = array($b,$a);
    ?>
    <div class = "task_name">
        <p>5) Нужно поменять 2 переменные местами без использования третьей:</p>
    </div>
    <div class = "code_example">
        <p> <pre>
            $а = [1,2,3,4,5];
            $b = ‘Hello world’;
            </pre>
        </p>
    </div>
    <div class = "result">
        <p>a: {{ $a }}</p>
        <p>b : [
        @foreach($b as $item)
            {{ $item }},
        @endforeach
         ]
         </p>
    </div>
    
@stop