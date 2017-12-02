  
<?php
      $server = 'mysql:dbname=supervisor;host=localhost';
        $user='root';
        $pass='7639312163Rr';
       



    $conn= new PDO($server,$user,$pass);

$data_key=array();
$data_val=array();
$db_=$conn->query("select * from energy");
$rows=$db_->fetchAll();
foreach($rows as $row)
{
    $data_key[]=$row['Month'];
    $data_val[]=$row['Moneyspend'];
}
?>       

  <div class="panel panel-default">
                <div class="panel-heading">
                    <div class="panel-title">
                        <h4>Energy</h4>
                    </div>
                </div>
                <div class="panel-body no-padding">
     


                    <form method="post" action="energy.php" class="lobi-form">
                        <fieldset>
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <input type="text" name="month" placeholder="Month"/>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <input type="text" name="moneyspend" placeholder="Money spend"/>
                                    </div>
                                </div>
                            </div>
                            
                        </fieldset>
                        <footer>
                          
                            <button type="submit" name="get" class="btn btn-info btn-pretty">Enter to chart</button>
                            
                        </footer>
                    </form>
                </div>
      
            </div>
          
<div id="chartjs">
    <div class="row">
        <div class="col-lg-6">
            <div id="line-chart" class="panel panel-light">
                <div class="panel-heading">
                    <div class="panel-title">
                        <h4>Energy Chart</h4>
                    </div>
                </div>
               
                <div class="panel-body">
                    <div>
                        <canvas width="400" height="140"></canvas>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script type="text/javascript">
        LobiAdmin.loadScript([
            'js/plugin/chartjs/Chart.min.js'
        ], function(){
            LobiAdmin.loadScript('js/plugin/chartjs/Chart.StackedBar.js', initPage);
        });
        
        function initPage(){
            $('.panel').lobiPanel({
                reload: false,
                editTitle: false,
                sortable: true
            });
            
            var options = {
                responsive: true
            };
            var lineChart,
                barChart,
                radarChart,
                polarChart,
                pieChart,
                doughnutChart,
                stackedBarChart,
                lineErrorChart;
                
            var lineData,
                barData,
                radarData,
                areaData,
                pieData,
                doughnutData,
                barChartData,
                lineChartData;
            var COLOR1 = LobiAdmin.lightenColor(LobiAdmin.DEFAULT_COLOR, -15);
            var COLOR2 = LobiAdmin.lightenColor(LobiAdmin.DEFAULT_COLOR, 0);
            var COLOR3 = LobiAdmin.fadeOutColor(LobiAdmin.DEFAULT_COLOR, 20);
            var COLOR4 = LobiAdmin.fadeOutColor(LobiAdmin.DEFAULT_COLOR, 40);
            var COLOR5 = LobiAdmin.fadeOutColor(LobiAdmin.DEFAULT_COLOR, 60);
//------------------------------------------------------------------------------
            (function(){
                // Get the context of the canvas element we want to select
                var ctx = $("#line-chart canvas")[0].getContext("2d");
                lineData = {
                    labels: <?php echo json_encode($data_key); ?>,
                    datasets: fillChartJsColors('line', [
                        {
                            label: "My First dataset",
                            strokeColor: LobiAdmin.fadeOutColor(LobiAdmin.DEFAULT_COLOR, 60),
                            data: <?php echo json_encode($data_val); ?>
                        }
                    ])
                };
                lineChart = new Chart(ctx).Line(lineData, options);
            })();
//------------------------------------------------------------------------------
         
//------------------------------------------------------------------------------
            var randomScalingFactor = function(){ return Math.round(Math.random() * 100)};

            barChartData = {
		labels : ["Januarydkfjgdfg","February","March","April","May","June","July", "August", "September", "October"],
		datasets : fillChartJsColors('bar', [
                    {
//                        fillColor : "rgba(220,220,220,0.5)",
                        strokeColor : COLOR5,
//                        highlightFill: "rgba(220,220,220,0.75)",
//                        highlightStroke: "rgba(220,220,220,1)",
                        data :  [60, 55, 71, 67, 81, 100, 49, 62, 69, 75]
                    },
                    {
//                        fillColor : "rgba(151,187,205,0.5)",
                        strokeColor : COLOR3,
//                        highlightFill : "rgba(151,187,205,0.75)",
//                        highlightStroke : "rgba(151,187,205,1)",
                        data : [40, 81, 47, 82, 42, 73, 35, 42, 52, 91]
                    },
                    {
//                        fillColor : "rgba(240,73,73,0.5)",
                        strokeColor : COLOR1,
//                        highlightFill : "rgba(240,73,73,0.75)",
//                        highlightStroke : "rgba(240,73,73,1)",
                        data : [49, 79, 48, 38, 86, 82, 62, 99, 95, 96]
                    }
		])
            };
            var ctx = $("#stacked-bar-chart canvas")[0].getContext("2d");
            stackedBarChart = new Chart(ctx).StackedBar(barChartData, options);
//------------------------------------------------------------------------------
            lineChartData = {
                labels : ["January","February","March","April","May","June","July"],
                datasets : [
                    {
                        label: "My First dataset",
                        fillColor : "rgba(220,220,220,0.2)",
                        strokeColor : "rgba(220,220,220,1)",
                        pointColor : "rgba(220,220,220,1)",
                        pointStrokeColor : "#fff",
                        pointHighlightFill : "#fff",
                        pointHighlightStroke : "rgba(220,220,220,1)",
                        data : [randomScalingFactor(),randomScalingFactor(),randomScalingFactor(),randomScalingFactor(),randomScalingFactor(),randomScalingFactor(),randomScalingFactor()],
                        error : [randomScalingFactor()/10,randomScalingFactor()/10,randomScalingFactor()/10,randomScalingFactor()/10,randomScalingFactor()/10,randomScalingFactor()/10,randomScalingFactor()/10]
                    },
                    {
                        label: "My Second dataset",
                        fillColor : "rgba(151,187,205,0.2)",
                        strokeColor : "rgba(151,187,205,1)",
                        pointColor : "rgba(151,187,205,1)",
                        pointStrokeColor : "#fff",
                        pointHighlightFill : "#fff",
                        pointHighlightStroke : "rgba(151,187,205,1)",
                        data : [randomScalingFactor(),randomScalingFactor(),randomScalingFactor(),randomScalingFactor(),randomScalingFactor(),randomScalingFactor(),randomScalingFactor()],
                        error : [randomScalingFactor()/10,randomScalingFactor()/10,randomScalingFactor()/10,randomScalingFactor()/10,randomScalingFactor()/10,randomScalingFactor()/10,randomScalingFactor()/10]
                    }
                ]
            };
            var ctx = $("#line-error-chart canvas")[0].getContext("2d");
            lineErrorChart = new Chart(ctx).Line(lineChartData, options);
            
            $('body').on('beforePageLoad.lobiAdmin.1', function(){
                lineChart.destroy();
                barChart.destroy();
                radarChart.destroy();
                doughnutChart.destroy();
                pieChart.destroy();
                polarChart.destroy();
                stackedBarChart.destroy();
                lineErrorChart.destroy();
                $('body').off('beforePageLoad.lobiAdmin.1');
            });
            
            $("#line-chart").on('onFullScreen.lobiPanel onSmallSize.lobiPanel resizeStop.lobiPanel onPin.lobiPanel onUnpin.lobiPanel', function(ev, lobiPanel){
                setTimeout(function(){
                    lineChart.destroy();
                    lineChart = new Chart(lineChart.chart.ctx).Line(lineData, options);
                }, 100);
            });
          
            
        }
    </script>
</div>
