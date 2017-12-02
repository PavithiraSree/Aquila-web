
    <!--Column rendering-->
    <div class="panel panel-light">
        <div class="panel-heading">
            <div class="panel-title">
                <h4>Service Workers</h4>
            </div>
        </div>
        <div class="panel-body">
            <div class="callout callout-info">
                <p>Table has information about service peoples</p>
            </div>
            <table id="data-table-example3" class="display table table-striped table-bordered" cellspacing="0" width="100%">
              <thead>
                        <tr><th>Workerid</th>
                            <th>Workername</th>
                             <th>Password</th>
                            <th>Phone</th>
                            <th>Email</th>
                            <th>Type</th>
                            <th>Gender</th>
                             <th>salary</th>
                        </tr>
                    </thead>
<?php
echo "<tbody >";

class TableRows extends RecursiveIteratorIterator { 
    function __construct($it) { 
        parent::__construct($it, self::LEAVES_ONLY); 
    }

    function current() {
        return "<td style='width:150px;border:1px solid black;'>" . parent::current(). "</td>";
    }

    function beginChildren() { 
        echo "<tr>"; 
    } 

    function endChildren() { 
        echo "</tr>" . "\n";
    } 
} 
  $server = 'mysql:dbname=supervisor;host=localhost';
        $user='root';
        $pass='7639312163Rr';
       


try {
    $conn= new PDO($server,$user,$pass);

    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $stmt = $conn->prepare("SELECT serviceid, servicename,password, phno,email,type,gender,salary FROM service"); 
    $stmt->execute();

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