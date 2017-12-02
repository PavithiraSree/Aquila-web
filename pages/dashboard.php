<!--Author     : @arboshiki-->
<?php
      $server = 'mysql:dbname=supervisor;host=localhost';
        $user='root';
        $pass='7639312163Rr';   
$conn= new PDO($server,$user,$pass);

$data_key=array();
$data_val=array();
$db_=$conn->query("select * from expense");
$db_a=$conn->query("select * from schedule");
$db_ab=$conn->query("select * from problem");
$rows=$db_->fetchAll();
$rowsa=$db_a->fetchAll();
$rowsab=$db_ab->fetchAll();
$date_data=array();
$prblm_data=array();
  $work_data[]=array();
foreach($rowsab as $row)
{
   
     $work_problem[]=$row['Worker'];
    $work_data[]=$work_problem;
    //$date_data['end']


}

foreach($rowsa as $row)
{
   
    $date_data1['title']=$row['schedule'];
        $date_data1['start']=$row['Date'];
    $date_data[]=$date_data1;
    //$date_data['end']


}

foreach($rowsab as $row)
{
   
    $date_problem['title']=$row['User_name'];
        $date_problem['description']=$row['Problem'];
    $date_problem['date']=$row['Problemtype'];
    $prblm_data[]= $date_problem;
    //$date_data['end']


}
foreach($rows as $row)
{
    $data_key[]=$row['Month'];
    $data_val[]=$row['Maintenance'];
     $data_pur[]=$row['Purchase'];
}
?> 
<div id="dashboard" class="dashboard">

    <div>
        <div id="dashboard-statisticts-panel" class="panel panel-light">
            <div class="panel-heading">
                <div class="panel-title">
                    <i class="fa fa-line-chart"></i> Expense Chart
                </div>
            </div>
            <div class="panel-body">
                <div class="row">
                    <div class="col-lg-12">
                        <div>
                            <canvas id="line-chart" height="250" width="900"></canvas>
                        </div>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <h3 class="text-center margin-top-5">Equipments in the building</h3>
                    <div class="col-xxs-12 col-xs-6 col-sm-3 text-center">
                        <h4>Camera</h4>
                        <canvas id="dashbboard-clothing-sales" height="100" width="100"></canvas>
                        <h5>
                            Total <span class="badge font-size-lg">28</span> cameras
                        </h5>
                    </div>
                    <div class="col-xxs-12 col-xs-6 col-sm-3 text-center">
                        <h4>Fire Extinguisher</h4>
                        <canvas id="dashbboard-computing-sales" height="100" width="100"></canvas>
                        <h5>
                            Total <span class="badge font-size-lg">20</span>Fire Extinguisher
                        </h5>
                    </div>
                    <div class="col-xxs-12 col-xs-6 col-sm-3 text-center">
                        <h4>Access card reader</h4>
                        <canvas id="dashbboard-furniture-sales" height="100" width="100"></canvas>
                        <h5>
                            Total <span class="badge font-size-lg">9</span> Access card reader
                        </h5>
                    </div>
                    <div class="col-xxs-12 col-xs-6 col-sm-3 text-center">
                        <h4>Ac</h4>
                        <canvas id="dashbboard-vessel-sales" height="100" width="100"></canvas>
                        <h5>
                            Total <span class="badge font-size-lg">15</span> Ac
                        </h5>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
       
            <div id="dashboard-todo-list">
<!--
                <div class="form-group">
                    <select name="Type">
                        <option value="Electric"> </option>
                     </select>
                </div>
-->
      </div>
        
      
            <!--Calendar events-->
            <div id="dashboard-events" class="panel panel-light">
                <div class="panel-heading">
                    <div class="panel-title">
                        <h4>Events</h4>
                    </div>
                </div>
                <div class="panel-body">

                </div>
            </div>
        
    </div>
    <script type="text/javascript">
        (function(){
            //Load and initialize sparkline charts
            LobiAdmin.loadScript([
                'js/plugin/sparkline/jquery.sparkline.min.js'
            ], initSparklines);
            
            //Load and initialize chartjs
            LobiAdmin.loadScript([
                'js/plugin/chartjs/Chart.min.js'
            ], initChartjs);
            
            //Load and initialize lobilist
            LobiAdmin.loadScript([
                'js/lobi-plugins/lobilist.min.js'
            ], initLobiList);

            LobiAdmin.loadScript([
                'js/plugin/moment/moment.min.js'
            ], function(){
                LobiAdmin.loadScript('js/plugin/fullcalendar/fullcalendar.min.js', initPage);
            });
            
            function initLobiList(){
                $('#dashboard-todo-list').lobiList({
                    sortable: false,
                    controls: ['edit', 'styleChange'],
                    lists: [
                        {
                            title: 'TODOs',
                            defaultStyle: 'lobilist-info',
                            items: [
                         <?php 
                            foreach($prblm_data as $prblm)
                            {
                                echo "{
                                title: '".$prblm['title']."', 
                                 description: '".$prblm['description']."',
                               dueDate: '".$prblm['date']."'
                               },";
                               
                            }
                            ?>
 
                            ]
                        }
                    ]
                });
            }
            
            function initSparklines(){
                //Call this method before calling .sparkline() plugin to activate default colors, bar widths and other options
                initSparklineDefaults();
                initResponsiveSparklines();
                $('.sparkline').sparkline('html', {
                    enableTagOptions: true
                });
            }
            
            function initChartjs(){
                var options = {
                    responsive: true
                };
                var COLOR1 = LobiAdmin.lightenColor(LobiAdmin.DEFAULT_COLOR, -15);
                var COLOR2 = LobiAdmin.lightenColor(LobiAdmin.DEFAULT_COLOR, 0);
                var COLOR3 = LobiAdmin.fadeOutColor(LobiAdmin.DEFAULT_COLOR, 20);
                var COLOR4 = LobiAdmin.fadeOutColor(LobiAdmin.DEFAULT_COLOR, 40);

                var FADEOUT_COLOR_FACTOR = 20;

                //Initialize line chart
                (function(){
                    // Get the context of the canvas element we want to select
                    var statisticData = {
                        labels: ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"],
                        datasets: fillChartJsColors('line', [
                            {
                                label: "Maintenance Cost",
                                strokeColor: LobiAdmin.fadeOutColor(LobiAdmin.DEFAULT_COLOR, 20),
                                data: <?php echo json_encode($data_val); ?>
                            },
                           
                              {
                                label: "Purchase Cost",
                                strokeColor: LobiAdmin.fadeOutColor(LobiAdmin.DEFAULT_COLOR, 60),
                                data:  <?php echo json_encode($data_pur); ?>
                            }
                        ])
                    };
                    var canvas = $('#line-chart');
                    var ctx = canvas[0].getContext("2d");
                    var statistictsChart = new Chart(ctx).Line(statisticData, options);
                    var legend = $(statistictsChart.generateLegend());
                    canvas.parent().append(legend);
                    
                    //Update charts on panel size change
                    $('#dashboard-statisticts-panel').on('onFullScreen.lobiPanel onSmallSize.lobiPanel resizeStop.lobiPanel onPin.lobiPanel onUnpin.lobiPanel dragged.lobiPanel', function(ev){
                        statistictsChart.destroy();
                        statistictsChart = new Chart(statistictsChart.chart.ctx).Line(statisticData, options);
                    });
                })();
    
    //------------------------------------------------------------------------------
    //          Initialize pie charts
    //------------------------------------------------------------------------------
                (function(){
                    var data = [
                        {
                            value: 12,
                            color: COLOR1,
                            highlight: LobiAdmin.fadeOutColor(COLOR1, FADEOUT_COLOR_FACTOR),
                            label: "Floor1"
                        },
                        {
                            value: 6,
                            color: COLOR2,
                            highlight: LobiAdmin.fadeOutColor(COLOR2, FADEOUT_COLOR_FACTOR),
                            label: "Floor2"
                        },
                        {
                            value: 4,
                            color: COLOR3,
                            highlight: LobiAdmin.fadeOutColor(COLOR3, FADEOUT_COLOR_FACTOR),
                            label: "Floor3"
                        },
                        {
                            value: 6,
                            color: COLOR4,
                            highlight: LobiAdmin.fadeOutColor(COLOR4, FADEOUT_COLOR_FACTOR),
                            label: "Floor4"
                        }
                    ];
                    var ctx = $('#dashbboard-clothing-sales')[0].getContext('2d');
                    new Chart(ctx).Doughnut(data,{});
                })();
    //------------------------------------------------------------------------------
                (function(){
                    var data = [
                        {
                            value: 8,
                            color: COLOR4,
                            highlight: LobiAdmin.fadeOutColor(COLOR4, FADEOUT_COLOR_FACTOR),
                            label: "Floor1"
                        },
                        {
                            value: 2,
                            color: COLOR3,
                            highlight: LobiAdmin.fadeOutColor(COLOR3, FADEOUT_COLOR_FACTOR),
                            label: "Floor3"
                        },
                        {
                            value: 4,
                            color: COLOR1,
                            highlight: LobiAdmin.fadeOutColor(COLOR1, FADEOUT_COLOR_FACTOR),
                            label: "Floor3"
                        },
                        {
                            value: 6,
                            color: COLOR2,
                            highlight: LobiAdmin.fadeOutColor(COLOR2, FADEOUT_COLOR_FACTOR),
                            label: "Floor4"
                        }
                    ];
                    var ctx = $('#dashbboard-computing-sales')[0].getContext('2d');
                    // For a pie chart
                    new Chart(ctx).Doughnut(data,{});
                })();
    //------------------------------------------------------------------------------            
                (function(){
                    var data = [
                        {
                            value: 2,
                            color: COLOR3,
                            highlight: LobiAdmin.fadeOutColor(COLOR3, FADEOUT_COLOR_FACTOR),
                            label: "Floor1"
                        },
                        {
                            value: 4,
                            color: COLOR1,
                            highlight: LobiAdmin.fadeOutColor(COLOR1, FADEOUT_COLOR_FACTOR),
                            label: "Floor2"
                        },
                        {
                            value: 2,
                            color: COLOR4,
                            highlight: LobiAdmin.fadeOutColor(COLOR4, FADEOUT_COLOR_FACTOR),
                            label: "Floor3"
                        },
                        {
                            value: 1,
                            color: COLOR2,
                            highlight: LobiAdmin.fadeOutColor(COLOR2, FADEOUT_COLOR_FACTOR),
                            label: "Floor4"
                        }
                    ];
                    var ctx = $('#dashbboard-furniture-sales')[0].getContext('2d');
                    // For a pie chart
                    new Chart(ctx).Doughnut(data, {});
                })();
    //------------------------------------------------------------------------------
                (function(){
                    var data = [
                        {
                            value: 4,
                            color: COLOR4,
                            highlight: LobiAdmin.fadeOutColor(COLOR4, FADEOUT_COLOR_FACTOR),
                            label: "Floor1"
                        },
                        {
                            value: 6,
                            color: COLOR2,
                            highlight: LobiAdmin.fadeOutColor(COLOR2, FADEOUT_COLOR_FACTOR),
                            label: "Floor2"
                        },
                        {
                            value: 8,
                            color: COLOR3,
                            highlight: LobiAdmin.fadeOutColor(COLOR3, FADEOUT_COLOR_FACTOR),
                            label: "Floor3"
                        },
                        {
                            value: 8,
                            color: COLOR1,
                            highlight: LobiAdmin.fadeOutColor(COLOR1, FADEOUT_COLOR_FACTOR),
                            label: "Floor4"
                        }
                    ];
                    var ctx = $('#dashbboard-vessel-sales')[0].getContext('2d');
                    // For a pie chart
                    new Chart(ctx).Doughnut(data, {});
                })();
            }

            function initPage(){
                //Initialize lobipanels
                $('.panel:not(.panel-with-tabs)').lobiPanel({
                    editTitle: false,
                    reload: false,
                    sortable: true
                });

                //Initialize FullCalendar
                (function(){
                    //var date_data='<?php echo json_encode($date_data); ?>'
                    $('#dashboard-events .panel-body').fullCalendar({
                        header: {
                            left: 'prev,next today',
                            center: 'title',
                            right: 'month,agendaWeek,agendaDay'
                        },
                        defaultDate: '2017-12-2',
                        droppable: true,
                        eventLimit: true,
                        businessHours: true,
                        eventRender: function(event, element, view){
                            if (event.description){
                                element.append('<span class="fc-description">'+event.description+'</span>');
                            }
                        },
                        events: [
                            <?php 
                            foreach($date_data as $dta)
                            {
                                echo "{
                                title: '".$dta['title']."', 
                                start: '".$dta['start']."'
                                },";
                               
                            }
                            ?>
                        ]
                    });
                    $('#dashboard-events').on('onFullScreen.lobiPanel onSmallSize.lobiPanel resizeStop.lobiPanel onPin.lobiPanel onUnpin.lobiPanel dragged.lobiPanel', function(ev, lobiPanel){
                        var cal = lobiPanel.$el.find('.panel-body');
                        var ratio  = cal.fullCalendar('option', 'aspectRatio');
                        cal.fullCalendar('option', 'height', cal.find('.fc-view-container').outerWidth() / ratio);
                    });
                })();
            }
        })();
        
    </script>
</div>