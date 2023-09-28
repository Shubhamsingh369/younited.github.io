<?php
    session_start();
    include ('dbconn.php');

    $sql = "SELECT * FROM yt_purchase ";
$result = $dbconn->query($sql);

if ($result->num_rows > 0) {

  // output data of each row
  // while($row = $result->fetch_assoc()) {
  //   echo "yt_vchno: " . $row["yt_vchdate"] . $row["yt_vchtype"]. " " . $row["yt_vchpartyname"]. $row["yt_vchitemname"] . $row["yt_vchgodownname"]. " " . $row["yt_vchbatch"]. $row["yt_vchquantity"]. $row["yt_vchrate"] . $row["yt_vchdiscount"]. " " . $row["yt_vchamount"]. " " . $row["yt_vchunit"] ;
  // }
} else {
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
    <?php include('components/ythead.html'); ?>
    <script src="./js/make_sticky.js" type="text/javascript"></script>
</head>
<body>

<?php include('components/ytheader.html'); ?>


<div class="main">
<h3>Purchase Table</h3>
<input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search for names..">
</div>

<div style="overflow-x:auto;">
  <table>
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
            <th>Supply Inv No</th>
            <th>Supply Inv Date</th>
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
            <td><?= $i['yt_supplyinvno']?></td>
            <td><?= $i['yt_supplyinvdate'] ?></td>
          </tr>
        <?php endforeach; ?>
    </tbody>
  </table>
</div>
<?php include('components/ytfooter.html'); ?>
</body>
</html>