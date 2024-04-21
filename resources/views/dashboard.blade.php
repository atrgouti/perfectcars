@extends("layouts.layout")
@section("pageName")
Dashboard
@endsection

@section("main")
<!-- <header>
    <div class="headerSpacing">
        <h3>Dashboard</h3>
        <img src="/photos/adminImage.jpg" alt="">
    </div>
</header> -->
<div class="quickViewStatistics">
    <div class="box">
        <img src="/photos/todayspickups.png" alt="">
        <div>
            <p>0</p>
            <p>Today's Pickups</p>
        </div>
    </div>
    <div class="box">
        <img src="/photos/returnlogo.png" alt="">
        <div>
            <p>0</p>
            <p>Today's drop offs</p>
        </div>
    </div>
    <div class="box">
        <img src="/photos/onrepaire.png" alt="">
        <div>
            <p>0</p>
            <p>On repaire</p>
        </div>
    </div>
</div>
<div class="statistics">
    <div class="status-container">
        <div style="width: 80%; margin: 20px auto;">
            <canvas id="doughnutChart"></canvas>
            <script>
        var ctx = document.getElementById('doughnutChart').getContext('2d');
        var myChart = new Chart(ctx, {
            type: 'doughnut',
            data: {
                labels: @json($data['labels']),
                datasets: [{
                    data: @json($data['data']),
                    backgroundColor: [
                        'rgba(255, 99, 132, 0.7)',
                        'rgba(54, 162, 235, 0.7)',
                        'rgba(255, 206, 86, 0.7)',
                        'rgba(75, 192, 192, 0.7)',
                        'rgba(153, 102, 255, 0.7)',
                    ],
                    borderColor: [
                        'rgba(255, 99, 132, 1)',
                        'rgba(54, 162, 235, 1)',
                        'rgba(255, 206, 86, 1)',
                        'rgba(75, 192, 192, 1)',
                        'rgba(153, 102, 255, 1)',
                    ],
                    borderWidth: 1
                }]
            },
        });
    </script>
        </div>
    </div>
    <div class="status-container">
   
    </div>
</div>
@endsection
