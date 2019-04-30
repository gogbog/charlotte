<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
    <div class="white-box">
        <canvas id="myBarChart" width="100" height="20"></canvas>
    </div>
</div>


@section('js')
    <script>
        var ctx = document.getElementById('myBarChart');
        var myBarChart = new Chart(ctx, {
            type: "bar",
            data: {
                labels: ["January", "February", "March", "April", "May", "June", "July"],
                datasets: [{
                    label: "My First Dataset",
                    data: [65, 59, 80, 81, 56, 55, 40],
                    fill: true,
                    backgroundColor: 'rgba(0, 0, 0, 0.1)',
                    borderColor: '#b31802',
                    borderWidth: 2,
                    lineTension: 0
                },
                    {
                        label: "My Second Dataset",
                        data: [85, 39, 20, 91, 156, 155, 4],
                        fill: true,
                        backgroundColor: 'rgba(255, 255, 255, 0.1)',
                        borderColor: '#F75B36',
                        borderWidth: 2,
                        lineTension: 0
                    }]
            },
            options: {
                events: ['click'],
                title: {
                    display: true,
                    text: 'Custom Chart Title',
                    fontSize: 20,
                },
                animation: {
                    duration: 1500
                },
                scales: {
                    yAxes: [{
                        ticks: {
                            beginAtZero: true
                        }
                    }]
                }
            }
        });
    </script>
@append
