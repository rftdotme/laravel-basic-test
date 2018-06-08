@extends('app')

@section('content')
    <?php
        $res = array();
        $str = 'This server has 386 GB RAM and 5000 GB storage';
        $str = preg_replace("/[^0-9\.]/", " ", $str);
        $str = trim(preg_replace('/\s+/u', ' ', $str));
        $arr = explode(' ', $str);
        for ($i = 0; $i < count($arr); $i++) {
            if (is_numeric($arr[$i])) {
                $res[] = $arr[$i];
            }
        }
    ?>
    <div class = "task_name">
        <p>
            2) Реализовать алгоритм извлечения числовых значений со строки:
        </p>
    </div>
    <div class = "task_text">
        <p>This server has 386 GB RAM and 5000 GB storage</p>
    </div>
    <div class = "code_example">
        <p>
            <pre>
                $res = array();
                $str = 'This server has 386 GB RAM and 5000 GB storage';
                $str = preg_replace("/[^0-9\.]/", " ", $str);
                $str = trim(preg_replace('/\s+/u', ' ', $str));
                $arr = explode(' ', $str);
                for ($i = 0; $i < count($arr); $i++) {
                    if (is_numeric($arr[$i])) {
                        $res[] = $arr[$i];
                    }
                }
            </pre>
        </p>
    </div>
    <div class = "result">
            <p>Результат массива</p>
        @foreach($res as $r)
            <p>Со строки получено значение {{ $r }}</p>
        @endforeach
    </div>
    
@stop