@extends('app')

@section('content')
    <!-- Styles -->
    <style type="text/css">
        #chartdiv {
            width: 100%;
            height: 500px;
        }
    </style>
    <div class="panel panel-default">
        <div class="panel-heading">Home</div>

        <div class="panel-body">
            You are logged in!
        </div>
    </div>
    <div class="container">
        <div class="col-md-6">
            <div id="chartdiv"></div>
        </div>
        <?php $i = 2;?>
        <?php $jm = 6;?>
        <?php $jn = 8;?>
        <div class="col-md-6">
            <script type="text/javascript" src="{{ asset('js/loader.js')}}"></script>
            <div id="piechart" style="width: 900px; height: 500px;"></div>
            <script type="text/javascript">
                google.charts.load('current', {'packages':['corechart']});
                google.charts.setOnLoadCallback(drawChart);

                function drawChart() {
                    var jj = <?php echo json_encode($i); ?>;
                    var jm = <?php echo json_encode($jm); ?>;
                    var jn = <?php echo json_encode($jn); ?>;
                    var data = google.visualization.arrayToDataTable([
                        ['Task', 'Hours per Day'],
                        ['Work',     11],
                        ['Eat',      jn],
                        ['Commute',  jm],
                        ['Watch TV', 5],
                        ['Sleep',    jj]
                    ]);

                    var options = {
                        title: 'My Daily Activities'
                    };

                    var chart = new google.visualization.PieChart(document.getElementById('piechart'));

                    chart.draw(data, options);
                }
            </script>
        </div>
        <div class="col-md-6">
            <script type="text/javascript" src="{{ asset('js/loader.js')}}"></script>
            <div id="piechart2" style="width: 900px; height: 500px;"></div>
            <script type="text/javascript">
                google.charts.load('current', {'packages':['corechart']});
                google.charts.setOnLoadCallback(drawChart);

                function drawChart() {
                    var jj = <?php echo json_encode($i); ?>;
                    var jm = <?php echo json_encode($jm); ?>;
                    var jn = <?php echo json_encode($jn); ?>;
                    var data = google.visualization.arrayToDataTable([
                        ['Task', 'Hours per Day'],
                        ['Work',     11],
                        ['Eat',      jn],
                        ['Commute',  jm],
                        ['Watch TV', 5],
                        ['Sleep',    jj]
                    ]);

                    var options = {
                        title: 'My Daily Activities'
                    };

                    var chart = new google.visualization.PieChart(document.getElementById('piechart2'));

                    chart.draw(data, options);
                }
            </script>
        </div>
    </div>



    <script type="text/javascript">
        var alx = 500;
        var jj = <?php echo json_encode($i); ?>;
        var jm = <?php echo json_encode($jm); ?>;
        var jn = <?php echo json_encode($jn); ?>;
//        $.ajax({
//            type: 'get',
//            url: 'getPie_Chart_Data',
//            success: function (data) {
//                alx = data;
//            },
//            error: function () {
//
//            }
//        });
        var chart = AmCharts.makeChart( "chartdiv", {
            "type": "pie",
            "theme": "light",
            "dataProvider": [ {
                "country": "Rockey",
                "litres": alx
            }, {
                "country": "Czech Republic",
                "litres": jj
            }, {
                "country": "Ireland",
                "litres": jm
            }, {
                "country": "Germany",
                "litres": 165.8
            }, {
                "country": "Australia",
                "litres": 139.9
            }, {
                "country": "Austria",
                "litres": 128.3
            }, {
                "country": "UK",
                "litres": 99
            }, {
                "country": "Belgium",
                "litres": 60
            }, {
                "country": "The Netherlands",
                "litres": 50
            } ],
            "valueField": "litres",
            "titleField": "country",
            "balloon":{
                "fixedPosition":true
            },
            "export": {
                "enabled": true
            }
        } );
    </script>
@endsection
