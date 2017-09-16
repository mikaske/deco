 <?php  
 include('dbConfig.php');
 $query ="SELECT * FROM orders ORDER BY order_id DESC";  
 $result = mysqli_query($db, $query);  
 ?>  
 <!DOCTYPE html>  
 <html>  
      <head>  
           <title>List of orders</title>  
           <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
           <link rel="stylesheet" href="https://cdn.datatables.net/1.10.12/css/dataTables.bootstrap.min.css" />  
      </head>  
      <body>  
           <br /><br />  
           <div class="container">  
                <h3 align="center">Order list</h3>  
                <br />  
                <div class="table-responsive">  
                     <table id="order_data" class="table table-striped table-bordered">  
                          <thead>  
                               <tr>  
                                    <td>Name</td>  
                                    <td>Surname</td>  
                                    <td>Phone</td>  
                                    <td>Place of event</td>  
                                    <td>Date of event</td>  
                               </tr>  
                          </thead>  
                          <?php  
                          while($row = mysqli_fetch_array($result))  
                          {  
                               echo '  
                               <tr>  
                                    <td>'.$row["client_name"].'</td>  
                                    <td>'.$row["client_surname"].'</td>  
                                    <td>'.$row["client_telephone"].'</td>  
                                    <td>'.$row["event_place"].'</td>  
                                    <td>'.$row["event_time"].'</td>  
                               </tr>  
                               ';  
                          }  
                          ?>  
                     </table>  
                </div>  
           </div>  
      </body>  
 </html>  
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
 <script src="https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>  
 <script src="https://cdn.datatables.net/1.10.12/js/dataTables.bootstrap.min.js"></script>
 <script>  
 $(document).ready(function(){  
      $('#order_data').DataTable({
		  "bAutoWidth": false
	  });  
 });  
 </script>  