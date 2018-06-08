@extends('app')

@section('content')
    
    <div class = "task_name">
        <p>
            9) Что выведет следующий код на JavaScript и почему:
        </p>
    </div>
    <div class = "task_text">
        <p> 
            <pre>
                for( var i =0; i < 10; i++){
                    setTimeout(function () {
                        console.log(i);
                    }, 100);
                }
            </pre>
        </p>
    </div>
    <div class = "code_example">
        <p>Результатом кода будет 10 выводов числа 10, в цикле использовано замыкание, поетому функция сохраняет ссылку на i , когда будет вызвана функция console.log, цикл for уже закончит свою работу, а в i будет содержаться 10.</p>
    </div>

    
@stop