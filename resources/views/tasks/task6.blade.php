@extends('app')

@section('content')
    <?php 
    $bool;
         //case                          result
        // 11  == 11;                   // true
        // 11 === '11';					//false
        // 11 === 11;					// true
        if( 11 === '11'){
            $bool = 'true';
        }
        else{
            $bool = 'false';
        }
    ?>
    <div class = "task_name">
        <p>6) Чем отличается оператор == от === ?</p>
    </div>

    <div class = "code_example">
        <p>Оператор == сравнивает на равенство, а оператор === на идентичность</p>
        <p>
            <pre>
                $bool;
                //case          result
                // 11  == 11;   // true
                // 11 === '11';	//false
                // 11 === 11;   // true

                if( 11 === 11){
                    $bool = 'true';
                }
                else{
                    $bool = 'false';
                }
            </pre>
        </p>
    </div>
    <div class = "result">
        <p>{{ $bool }}</p>
    </div>
    
@stop