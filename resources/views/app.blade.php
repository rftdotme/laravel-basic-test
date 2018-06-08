<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        <!-- Compiled and minified CSS -->
        <link type="text/css" rel="stylesheet" href="{{ asset('css/materialize.min.css')}}"  media="screen,projection"/>
        <link type="text/css" rel="stylesheet" href="{{ asset('css/main.css')}}"  media="screen,projection"/>
        <!--Let browser know website is optimized for mobile-->
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>



        <!-- Styles -->
        
    </head>
    <body>
    <div class="wrapper">
        <nav class="nav-extended">
            <div class="nav-wrapper ">
                <a href="/" class="brand-logo center">rft test work</a>
            </div>
            <div class="nav-content">
                <ul class="tabs tabs-transparent">
                    <li class="tab "><a href="/test1">Test 1</a></li>
                    <li class="tab "><a href="/test2">Test 2</a></li>
                    <li class="tab "><a href="/test3">Test 3</a></li>
                    <li class="tab "><a href="/test4">Test 4</a></li>
                    <li class="tab "><a href="/test5">Test 5</a></li>
                    <li class="tab "><a href="/test6">Test 6</a></li>
                    <li class="tab "><a href="/test7">Test 7</a></li>
                    <li class="tab "><a href="/test8">Test 8</a></li>
                    <li class="tab "><a href="/test9">Test 9</a></li>
                    <li class="tab "><a href="/test10">Test 10</a></li>
                </ul>
            </div>
        </nav>

        <div class = "container">
            
            <div class=" position-ref full-height ">
                    <div class="content">
                        @yield('content')
                    </div>
            </div>  
        </div>
    </div>
    <footer class="page-footer">
        <div class="container center-align">
            © 2018 rft
        </div>
    </footer> 
    
           <!--JavaScript at end of body for optimized loading-->
      <script type="text/javascript" src="{{ asset('js/materialize.min.js') }}"></script>
    </body>
</html>
