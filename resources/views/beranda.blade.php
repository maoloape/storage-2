@extends('layout.layout')
@section('content')
<div class="row">
    <!-- /# column -->
    <div class="col-lg-6">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Team</h4>
                <canvas id="canvas" width="500" height="250"></canvas>
            </div>
        </div>
        <!-- /# card -->
    </div>
    <!-- /# column -->
    <div class="col-lg-6">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Team</h4>
                <canvas id="team-chart" width="500" height="250"></canvas>
            </div>
        </div>
        <!-- /# card -->
    </div>
    
</div>
<!-- /# row -->
<div class="row">
    <!-- Bar Chart -->
    <div class="col-lg-6">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Bar chart</h4>
                <canvas id="barChart" width="500" height="250"></canvas>
            </div>
        </div>
    </div>

    <div class="col-lg-6">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Sales</h4>
                <canvas id="sales-chart" width="500" height="250"></canvas>
            </div>
        </div>
    </div>
    
</div>
<div class="row">
    <!-- Line Chart -->
    <div class="col-lg-6">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Line chart</h4>
                <canvas id="lineChart" width="500" height="250"></canvas>
            </div>
        </div>
    </div>
    <!-- Pie Chart -->
    <div class="col-lg-6">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Pie chart</h4>
                <canvas id="pieChart" width="500" height="250"></canvas>
            </div>
        </div>
    </div>
</div>

<div class="row">
    <!-- Radar Chart -->
    <div class="col-lg-6">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Rader chart</h4>
                <canvas id="radarChart" width="500" height="250"></canvas>
            </div>
        </div>
    </div>
    <!-- /# column -->
        <!-- Doughnut Chart -->
        <div class="col-lg-6">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Doughut chart</h4>
                <canvas id="doughutChart" width="500" height="250"></canvas>
            </div>
        </div>
    </div>
</div>
<div class="row">
    
    <!-- Polar Chart -->
    <div class="col-lg-6">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Polar chart</h4>
                <canvas id="polarChart" width="500" height="250"></canvas>
            </div>
        </div>
    </div>
    <!-- Single Bar Chart -->
    <div class="col-lg-6">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Single Bar Chart</h4>
                <canvas id="singelBarChart" width="500" height="250"></canvas>
            </div>
        </div>
    </div>
</div>
@endsection