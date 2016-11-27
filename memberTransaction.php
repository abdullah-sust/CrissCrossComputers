<?php
  include 'dbconnect.php';
  session_start();
  if(!isset($_SESSION['role']))
  {
    $conn->close();
    session_unset();
    session_destroy();
    session_write_close();
    header("Location: login.php");
  }
  else
  {
    $memberID=$_SESSION['memberID'];
    $query="SELECT * FROM tx_info WHERE merchant_id='$memberID' ";
    $result=$conn->query($query);

  }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Transactions</title>
    <meta charset="utf-8">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css" rel='stylesheet' type='text/css'>
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.12/css/dataTables.bootstrap.min.css">
    <link rel="stylesheet" href="style/main.css">
</head>
<body>
  <div>
    <div class="container">
    <div class="row">
    
    <h3>Criss Cross Payments : <?php echo $memberID;?></h3>
      <p><a href='memberpage.php'>Home</a> | <a href='changePassword.php'>Change password</a> | <a href='logout.php'>Logout</a></p>
      <hr>
    
        <div class="col-md-10 col-md-offset-1">

            <div class="panel panel-default panel-table">
              <div class="panel-heading">
                <div class="row">
                  <div class="col col-xs-6">
                    <h3 class="panel-title">All-transactions</h3>
                  </div>
                </div>
              </div>
              <div class="panel-body">
                <table class="table table-striped table-bordered table-list">
                  <thead>
                    <tr>
                        <th position="center">#</th>
                        <th>Client</th>
                        <th>Token</th>
                        <th>TXID</th>
                        <th>Amount</th>
                        <th>Time</th>
                        <th>Status</th>
                    </tr> 
                  </thead>
                  <tbody>
                    <?php
                      if($result->num_rows >0)
                      {
                        $count=0;
                        while($row = $result->fetch_assoc())
                        {
                          ++$count;
                          echo "<tr><td align='center'>" . $count . "</td><td>" . $_SESSION['companyName']  . "</td><td>" . $row['token']  . "</td><td>" . $row['tx_id'] . "</td><td>" .$row['tx_amount']. "</td><td>".$row['tx_time'] . "</td><td>".$row['tx_status'] . "</td></tr>"; 
                        }
                      }
                    ?>
                  </tbody>
                </table>
            
              </div>
              <div class="panel-footer">
                <div class="row">
                  <div class="col col-xs-4">Page 1 of 5
                  </div>
                  <div class="col col-xs-8">
                    <ul class="pagination hidden-xs pull-right">
                      <li><a href="#">1</a></li>
                      <li><a href="#">2</a></li>
                      <li><a href="#">3</a></li>
                      <li><a href="#">4</a></li>
                      <li><a href="#">5</a></li>
                    </ul>
                    <ul class="pagination visible-xs pull-right">
                        <li><a href="#">«</a></li>
                        <li><a href="#">»</a></li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>

</div></div></div>
  </div>
</body>
</html>
