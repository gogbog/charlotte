
    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
        <div class="white-box analytics-info">
            <h3 class="box-title">Total Visit</h3>
            <ul class="list-inline two-part">
                <li>
                    <div id="sparklinedash"></div>
                </li>
                <li class="text-right"><i class="ti-arrow-up text-success"></i> <span class="counter text-success">8659</span>
                </li>
            </ul>
        </div>
    </div>

<!--

TIPS:
1.  #spaklinedash is the chart, displayed values from js.
2.  If There is no JS box will still appear but without chart.

ICONS:

    docs/themify-icons

COLORS:

    see bootstrap 3 text-color classes

WRAPPER CLASS:

<div class="row">

    YOUR BOX HERE

</div>
-->

@section('js')

    <script>
        var sparklineLogin = function () {
            $('#sparklinedash').sparkline([0, 5, 6, 10, 9, 12, 4, 9], {
                type: 'bar',
                height: '30',
                barWidth: '4',
                resize: true,
                barSpacing: '5',
                barColor: '#00c292'
            });
        };
        var sparkResize;

        $(window).resize(function (e) {
            clearTimeout(sparkResize);
            sparkResize = setTimeout(sparklineLogin, 1);
        });
        sparklineLogin();
    </script>

@append