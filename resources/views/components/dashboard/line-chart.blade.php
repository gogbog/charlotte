<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
    <div class="white-box">
        <canvas id="myChart" width="100" height="20"></canvas>
    </div>
</div>

@section('js')
    <script>

        var ctx = document.getElementById('myChart');
        var myChart = new Chart(ctx, {
            type: "line",
            data: {
                labels: ["January", "February", "March", "April", "May", "June", "July"],
                datasets: [{
                    label: "My First Dataset",
                    data: [65, 59, 80, 81, 56, 55, 40],
                    fill: true,
                    pointBorderWidth: 1, //point border width
                    pointHitRadius: 30, //radius detecting hover
                    pointBackgroundColor: '#b31802', //bg color of data point
                    pointBorderColor: '#b31802', // border color of data point
                    backgroundColor: 'rgba(0,0,0,0.3)', // fill color
                    borderColor: '#b31802', // border color
                    borderWidth: 2, // border width
                    lineTension: 0.3 // smoothness of line
                },
                    {
                        label: "My Second Dataset",
                        data: [85, 39, 20, 91, 156, 155, 4],
                        fill: true,
                        pointBorderWidth: 1,
                        pointHitRadius: 30,
                        pointBackgroundColor: '#F75B36',
                        pointBorderColor: '#F75B36',
                        backgroundColor: 'rgba(255,255,255,0.1)',
                        borderColor: '#F75B36',
                        borderWidth: 2,
                        lineTension: 0.3
                    }]
            },
            options: {
                // events: ['click'], // trigger tooltip on click instead of hover
                title: {
                    display: true,
                    text: 'Custom Chart Title',
                    fontSize: 20,
                    fontColor: '#ccc',
                }, // title styles
                animation: {
                    duration: 1500
                }, // animation of chart
                tooltips: {
                    mode: 'index',
                    axis: 'y'
                }, // display all data on y axis
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