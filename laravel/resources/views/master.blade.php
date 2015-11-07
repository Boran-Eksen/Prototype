
<!DOCTYPE html>
<html>
    <head>
        <title>Prototype test</title>
        <style type="text/css"></style>
        <link href="{{ URL::asset('css/bootstrap.min.css') }}" rel="stylesheet">
        <link href="{{ URL::asset('css/Styles.css') }}" rel="stylesheet">
    </head>
    
    <body>
        <div class="container">
                <div class="content">
                    <h1>Prototype test</h1>
                </div>
                
                    @yield('content')
           


          <script src="{{ URL::asset('js/jquery.js')  }}"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="{{ URL::asset('js/bootstrap.min.js')  }}"></script>
    <script src="{{ URL::asset('js/ajax.js')  }}"></script>

   
    </body>

</html>
