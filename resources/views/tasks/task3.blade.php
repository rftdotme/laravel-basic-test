@extends('app')

@section('content')
   <?php 
        $arr = [2,3,56,65,56,44,34,45,3,5,35,345,3,5];
        $first_id = $arr[0];
        $fist_pointer = reset($arr);
        $first = array_shift($arr);
       

   ?>
    <div class = "task_name">
        <p>3) ​Как получить первый элемент массива ​ ​?
</p>
    </div>
    <div class = "task_text">
        <p>[2,3,56,65,56,44,34,45,3,5,35,345,3,5]</p>
    </div>
    <div class = "code_example">
        <p>
            <pre>
                $arr = [2,3,56,65,56,44,34,45,3,5,35,345,3,5];
                $first_id = $arr[0];
                $fist_pointer = reset($arr);
                $first = array_shift($arr);
            </pre>
        </p>
    </div>
    <div class = "result">
        <p>Без удаления, указатель на 1 елементб {{ $fist_pointer }}</p>
        <p>Без удаления, указан id в массиве {{ $first_id }}</p>
        <p>С удалением {{ $first }}</p>
    </div>
    
@stop