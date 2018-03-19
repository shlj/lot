<!DOCTYPE html>
<html>
 <body>

  <div>{!! $chart->container() !!}</div>

 <script src="{{ URL::asset('/js/charts/charts.js')}}" charset="utf-8"></script>
 {!! $chart->script() !!}
 </body>
</html>