@extends('masterbe')
@section('content')
    <div class="row">
        <div class="col-md-6">
            <canvas id="myChart" width="400" height="400"></canvas>
        </div>
        <div class="col-md-6">
            <canvas id="myChart2" width="400" height="400"></canvas>
        </div>
        <div class="col-md-1"></div>
    </div>
@endsection
@section('script')
    <script src="{{ asset('BackEnd/js/chart.min.js') }}"></script>
    <script src="{{ asset('BackEnd/js/custom-chart.js') }}"></script>
@endsection
