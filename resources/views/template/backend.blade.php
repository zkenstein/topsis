


<!-- Css -->
{!!Html::style("assets/datatables/jquery.dataTables.css")!!}
{!!Html::style("assets/bootstrap/css/bootstrap.css")!!} 
@yield('css');

@yield('content')



<!-- Js -->
{!!Html::script("assets/jquery/jquery-2.0.3.min.js")!!}
{!!Html::script("assets/bootstrap/js/bootstrap.js")!!}
{!!Html::script("assets/datatables/jquery.dataTables.js")!!}
@yield('js');
