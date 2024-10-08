@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Dashboard</h1>
@stop

@section('content')
    <p>Welcome to this beautiful admin panel.</p>

    <!-- Multiple Chart Section -->
    <div class="row">
        <!-- Line Chart -->
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Line Chart - Monthly Sales</h3>
                </div>
                <div class="card-body">
                    <canvas id="lineChart"></canvas>
                </div>
            </div>
        </div>

        <!-- Bar Chart -->
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Bar Chart - Product Sales</h3>
                </div>
                <div class="card-body">
                    <canvas id="barChart"></canvas>
                </div>
            </div>
        </div>

        <!-- Pie Chart -->
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Pie Chart - Sales Distribution</h3>
                </div>
                <div class="card-body">
                    <canvas id="pieChart"></canvas>
                </div>
            </div>
        </div>

        <!-- Doughnut Chart -->
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Doughnut Chart - Revenue Breakdown</h3>
                </div>
                <div class="card-body">
                    <canvas id="doughnutChart"></canvas>
                </div>
            </div>
        </div>

        <!-- Radar Chart -->
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Radar Chart - Performance Metrics</h3>
                </div>
                <div class="card-body">
                    <canvas id="radarChart"></canvas>
                </div>
            </div>
        </div>

        <!-- Polar Area Chart -->
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Polar Area Chart - Market Share</h3>
                </div>
                <div class="card-body">
                    <canvas id="polarAreaChart"></canvas>
                </div>
            </div>
        </div>
    </div>
@stop

@section('css')
    {{-- Add here extra stylesheets --}}
    {{-- <link rel="stylesheet" href="/css/admin_custom.css"> --}}
@stop

@section('js')
    <!-- Load Chart.js from CDN -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

    <script>
        // Line Chart
        const lineCtx = document.getElementById('lineChart').getContext('2d');
        const lineChart = new Chart(lineCtx, {
            type: 'line',
            data: {
                labels: ['January', 'February', 'March', 'April', 'May', 'June'],
                datasets: [{
                    label: 'Sales',
                    data: [30, 50, 45, 70, 40, 60],
                    backgroundColor: 'rgba(75, 192, 192, 0.2)',
                    borderColor: 'rgba(75, 192, 192, 1)',
                    borderWidth: 1
                }]
            },
            options: { responsive: true }
        });

        // Bar Chart
        const barCtx = document.getElementById('barChart').getContext('2d');
        const barChart = new Chart(barCtx, {
            type: 'bar',
            data: {
                labels: ['Product A', 'Product B', 'Product C', 'Product D'],
                datasets: [{
                    label: 'Sales',
                    data: [55, 35, 75, 50],
                    backgroundColor: ['rgba(54, 162, 235, 0.5)', 'rgba(255, 206, 86, 0.5)', 'rgba(75, 192, 192, 0.5)', 'rgba(153, 102, 255, 0.5)'],
                    borderColor: ['rgba(54, 162, 235, 1)', 'rgba(255, 206, 86, 1)', 'rgba(75, 192, 192, 1)', 'rgba(153, 102, 255, 1)'],
                    borderWidth: 1
                }]
            },
            options: { responsive: true }
        });

        // Pie Chart
        const pieCtx = document.getElementById('pieChart').getContext('2d');
        const pieChart = new Chart(pieCtx, {
            type: 'pie',
            data: {
                labels: ['North', 'South', 'East', 'West'],
                datasets: [{
                    label: 'Sales Distribution',
                    data: [20, 25, 30, 25],
                    backgroundColor: ['#FF6384', '#36A2EB', '#FFCE56', '#4BC0C0'],
                }]
            },
            options: { responsive: true }
        });

        // Doughnut Chart
        const doughnutCtx = document.getElementById('doughnutChart').getContext('2d');
        const doughnutChart = new Chart(doughnutCtx, {
            type: 'doughnut',
            data: {
                labels: ['Online', 'In-store', 'Mail-order'],
                datasets: [{
                    label: 'Revenue Breakdown',
                    data: [60, 25, 15],
                    backgroundColor: ['#FF6384', '#36A2EB', '#FFCE56'],
                }]
            },
            options: { responsive: true }
        });

        // Radar Chart
        const radarCtx = document.getElementById('radarChart').getContext('2d');
        const radarChart = new Chart(radarCtx, {
            type: 'radar',
            data: {
                labels: ['Quality', 'Speed', 'Reliability', 'Cost Efficiency', 'Flexibility'],
                datasets: [{
                    label: 'Performance',
                    data: [80, 90, 70, 85, 75],
                    backgroundColor: 'rgba(255, 99, 132, 0.2)',
                    borderColor: 'rgba(255, 99, 132, 1)',
                    borderWidth: 1
                }]
            },
            options: { responsive: true }
        });

        // Polar Area Chart
        const polarCtx = document.getElementById('polarAreaChart').getContext('2d');
        const polarChart = new Chart(polarCtx, {
            type: 'polarArea',
            data: {
                labels: ['North America', 'Europe', 'Asia', 'Australia'],
                datasets: [{
                    label: 'Market Share',
                    data: [35, 25, 20, 20],
                    backgroundColor: ['#FF6384', '#36A2EB', '#FFCE56', '#4BC0C0'],
                }]
            },
            options: { responsive: true }
        });
    </script>
@stop
