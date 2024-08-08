@extends('admin.layout')
@section('title', 'Trang thống kê')
@section('content')

<div class="container-fluid">
        <h2 class="text-center">THỐNG KÊ</h2>

        <div class="row">
            <div class="col-sm-6">
                <canvas id="revenueChart" width="800" height="400"></canvas>
            </div>
            <div class="col-sm-6">
                <canvas id="newUsersChart" width="800" height="400"></canvas>
            </div>
        </div>
    </div>


    <script src="https://kit.fontawesome.com/6d7fabf956.js" crossorigin="anonymous"></script>
    <script src="bootstrap-5.3.3-dist/js/bootstrap.bundle.min.js"></script>
    <script>
        var ctx = document.getElementById('revenueChart').getContext('2d');

        // Dữ liệu doanh thu (ví dụ)
        var data = {
            labels: ['Tháng 1', 'Tháng 2', 'Tháng 3', 'Tháng 4', 'Tháng 5', 'Tháng 6', 'Tháng 7', 'Tháng 8', 'Tháng 9', 'Tháng 10', 'Tháng 11', 'Tháng 12'],
            datasets: [{
                label: 'Doanh thu',
                backgroundColor: 'rgba(54, 162, 235, 0.2)',
                borderColor: 'rgba(54, 162, 235, 1)',
                borderWidth: 1,
                data: [3500, 3500, 3500, 3500, 0, 2500, 2200, 2800, 3000, 3200, 3500, 0] // Dữ liệu doanh thu theo tháng
            }]
        };

        var options = {
            scales: {
                y: {
                    beginAtZero: true
                }
            }
        };

        var myChart = new Chart(ctx, {
            type: 'line',
            data: data,
            options: options
        });

        var ctx = document.getElementById('newUsersChart').getContext('2d');

        // Dữ liệu số người dùng mới (ví dụ)
        var data = {
            labels: ['Tháng 1', 'Tháng 2', 'Tháng 3', 'Tháng 4', 'Tháng 5', 'Tháng 6', 'Tháng 7', 'Tháng 8', 'Tháng 9', 'Tháng 10', 'Tháng 11', 'Tháng 12'],
            datasets: [{
                label: 'Số người dùng mới',
                backgroundColor: 'rgba(54, 162, 235, 0.5)',
                data: [100, 150, 120, 180, 200, 250, 220, 280, 300, 320, 350, 380] // Dữ liệu số người dùng mới theo tháng
            }]
        };

        var options = {
            scales: {
                y: {
                    beginAtZero: true
                }
            }
        };

        var myChart = new Chart(ctx, {
            type: 'bar',
            data: data,
            options: options
        });
    </script>
@endsection