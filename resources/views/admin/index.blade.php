@extends('layouts.admin')
@section('content')
  <br>
    <div class="row tile_count flex-nowrap">
    <div class="col-md-6 col-sm-4 col-xs-6 tile_stats_count">
      <span class="count_top"> Total Number of Games</span>
      <div class="count">{{$gameCount}}</div>
      {{-- <span class="count_bottom"><i class="green">4% </i> From last Week</span> --}}
    </div>
    <div class="col-md-6 col-sm-4 col-xs-6 tile_stats_count">
      <span class="count_top"><i class="fa fa-clock-o"></i> Orders Outstanding</span>
      <div class="count">{{ $outstanding }}</div>
      {{-- <span class="count_bottom"><i class="green"><i class="fa fa-sort-asc"></i>3% </i> From last Week</span>
    </div> --}}
  </div>
@stop
{{-- @section('script')
  <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.3/Chart.min.js"></script>
  <script>
var ctx = document.getElementById("myChart").getContext('2d');
var myChart = new Chart(ctx, {
    type: 'bar',
    data: {
        labels: ["Purchase Orders", "Projects"],
        datasets: [{
            label: 'Data',
            data: [{{$purchaseOrdersCount}}, {{$projectsCount}}],
            backgroundColor: [
                'rgba(255, 99, 132)',
                'rgba(54, 162, 235)',
                'rgba(255, 206, 86)',
                'rgba(75, 192, 192)',
                'rgba(153, 102, 255)',
                'rgba(255, 159, 64)'
            ],
            borderWidth: 1
        }]
    },
    options: {
        scales: {
            yAxes: [{
                ticks: {
                    beginAtZero:true
                }
            }]
        }
    }
});
</script>
@endsection --}}
