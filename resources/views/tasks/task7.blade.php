@extends('app')

@section('content')
   
    <div class = "task_name">
        <p>
            7) Чем отличается require от include ?
        </p>
    </div>
    <div class = "result">
        <p>
            
                Отличия между require() и include():
                Если файл не найден require() возвращает FATAL ERROR
                                    include() же возвращает  WARNING.
            
        </p>
    </div>
    
@stop