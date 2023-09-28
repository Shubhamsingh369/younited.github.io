<?php
session_start();
include('dbconn.php');

$sql = "SELECT * FROM yt_sales";
$result = $dbconn->query($sql);

if ($result->num_rows > 0) {

  // output data of each row
}
 else {
  echo "0 results";
}
$result= mysqli_fetch_all($result, MYSQLI_ASSOC);
$dbconn->close();
// var_dump($result);
// die;
?>
<!DOCTYPE html>
<html>
  <head>
    <?php include('./components/ythead.html'); ?>
    <script src="./js/script.js"></script>
  </head>
  <body>
    <?php include('components/ytheader.html'); ?>

      <div class="main">
        <h3>Sales Table</h3>
        <input type="text" id="myInput" onkeyup="searchFun()" placeholder="Search for names..">
        <!-- <span style="float: right">10 of 100 rows</span> -->
      </div>
    <form action="sales.php" method="post">

    <div style="overflow-x:auto;">
      <table id="mytable">
          <thead>
              <tr>
                <th>Vch No</th>
                <th>Date</th>
                <th>Type<i/th>
                <th>Party Name</th>
                <th>Item Name</th>
                <th>Godown Name</th>
                <th>Batch </th>
                <th>Quantity</th>
                <th>Units</th>
                <th>Rate</th>
                <th>Discount%</th>
                <th>Amount</th> 
              </tr>
        </thead>
        <tbody>
            <?php foreach ($result as $i): ?>
              <tr>
                <td><?= $i['yt_vchno']?></td>
                <td><?= $i['yt_vchdate']?></td>
                <td><?= $i['yt_vchtype']?></td>
                <td><?= $i['yt_vchpartyname']?></td>
                <td><?= $i['yt_vchitemname']?></td>
                <td><?= $i['yt_vchgodownname']?></td>
                <td><?= $i['yt_vchbatch']?></td>
                <td><?= $i['yt_vchquantity']?></td>
                <td><?= $i['yt_vchunit']?></td>
                <td><?= $i['yt_vchrate']?></td>
                <td><?= (float)($i['yt_vchdiscount'])*100?></td>
                <td><?= $i['yt_vchamount']?></td>
              </tr>
            <?php endforeach; ?>
        </tbody>
      </table>
    </div>

    <?php include('components/ytfooter.html'); ?>
  </body>
</html>