<!--Author          : @arboshiki-->
<script type="text/javascript"> function ajax(value)
        {
            var xhttp = new XMLHttpRequest();
            xhttp.onreadystatechange = function() {
                if (this.readyState == 4 && this.status == 200) {
                    alert(this.responseText);
                }   
            };
        xhttp.open("GET", "pages/default-elements.php?Type="+value, true);
        xhttp.send();
        }</script>
<div id="default_elements">
    <div class="row">
        <div class="col-lg-6">
         <div>
                <h3>Problems in building</h3>
                <div class="panel panel-light">
        <div class="panel-heading">
            <div class="panel-title">
                <h4>Problem table</h4>
            </div>
        </div>
        <div class="panel-body">
            <div class="callout callout-info">
                <p>Table contains the problems and worker assigned for that problem</p>
            </div>
            <table id="data-table-example3" class="display table table-striped table-bordered" cellspacing="0" width="100%">
              <thead>
                        <tr><th>No</th>
                            <th>Staff</th>
                            <th>Problem</th>
                            <th>ProblemType</th>
                            <th>Floor</th>
                             <th>Assign worker</th>
                        </tr>
                    </thead>
<?php
  $server = 'mysql:dbname=supervisor;host=localhost';
        $user='root';
        $pass='7639312163Rr';
       

              
                
    $conn= new PDO($server,$user,$pass);

    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $stmt = $conn->prepare("SELECT S_no,User_name,Problem,Problemtype,Floor,Worker FROM supervisor.problem"); 
    $stmt->execute();
    if(isset($_GET['Type']))
  {
      $spinner = $_GET['Type'];
       $stmt2 = "INSERT INTO `problem`(`Worker`)VALUES('".$spinner."') "; 
        echo "Execution ".$conn->exec($stmt2);
  }
   
             
echo "<tbody >";

class TableRows extends RecursiveIteratorIterator { 
    public $option_data="";
    function __construct($it) { 
        parent::__construct($it, self::LEAVES_ONLY);
        $data=$GLOBALS['conn']->query("select * from problem")->fetchAll();
        foreach($data as $single_dta)
        {
            //print_r($single_dta);
            $this->option_data.="<option>".$single_dta['Worker']."</option>";
        }
    }

    function current() {
        return "<td style='width:150px;border:1px solid black;'>" . parent::current(). "</td>";
    }

    function beginChildren() { 
        echo "<tr>"; 
    } 

    function endChildren() {
        echo '<td style=\'width:150px;border:1px solid black;\'>
                                        <select name="Type" onchange="ajax(this.value)">'.$this->option_data.'    
                                        </select>
                                    </td>';
        echo "</tr>" . "\n";
    } 
   
} 
try{
    // set the resulting array to associative
    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC); 
    foreach(new TableRows(new RecursiveArrayIterator($stmt->fetchAll())) as $k=>$v) { 
        echo $v;
    }
}
catch(PDOException $e) {
    echo "Error: " . $e->getMessage();
}
$conn = null;
                
echo "</tbody>";
                    ?>
               
            </table>
        </div>
    </div>
    
       <script type="text/javascript">
        LobiAdmin.loadScript([
            'js/plugin/datatables/jquery.dataTables.min.js'
        ], function(){
            LobiAdmin.loadScript([
                'js/plugin/datatables/dataTables.bootstrap.min.js',
                'js/plugin/datatables/dataTables.responsive.min.js',
                'js/plugin/bootstrap-datepicker/bootstrap-datepicker.js'
            ], initPage);
        });
        
        function initPage(){
            $('#data-table-example1').DataTable();
            $('#data-table-example2').DataTable({
                "scrollY": 300,
                "scrollX": true,
//                responsive: true
            });
            $('#data-table-example3').DataTable({
                "columnDefs": [
                    {
                        // The `data` parameter refers to the data for the cell (defined by the
                        // `data` option, which defaults to the column being worked with, in
                        // this case `data: 0`.
                        "render": function ( data, type, row ) {
                            var val = data.replace(/[\$,]/g, '');
                            if (val > 100000){
                                return '<span class="text-success">'+data+'</span>';
                            }else{
                                return '<span class="text-danger">'+data+'</span>';
                            }
                        },
                        "targets": 5
                    },
                    { "visible": false,  "targets": [ 3 ] }
                ],
                responsive: true
            });
            var table = $('#data-table-example4').DataTable({
                responsive: true
            });
            // Apply the search
            $("#data-table-example4 thead th input[type=text]").on( 'keyup change', function () {
	    	
	        table
	            .column( $(this).closest('th').index()+':visible' )
	            .search( this.value )
	            .draw();
	            
	    });
            // Apply the search
            $("#data-table-example4 thead th select").on('change', function () {
	    	
                var val = $.fn.dataTable.util.escapeRegex(
                    $(this).val()
                );

	        table
	            .column( $(this).closest('th').index()+':visible' )
	            .search( val ? '^'+val+'$' : '', true, false )
	            .draw();
	            
	    } );
            $('.datepicker-demo').datepicker({
                format: 'yyyy/mm/dd'
            });
            
            $('.panel').lobiPanel({
                reload: false,
                editTitle: false
            });
        }
    </script>
  
</div>
            
              
          </div>           
     </div>
</div>

</form>