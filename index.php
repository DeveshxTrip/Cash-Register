<?php include('server.php');
if(empty($_SESSION['username'])){
    header('location:login.php');
}
    ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Home Page</title>
<link rel="stylesheet" type="text/css" href="style.css">
<link href="dev.css" rel="stylesheet"/>

</head>
<body>
<div style="background-image:url('dev.jpg');">
    <div class="content">
<?php if(isset($_SESSION['success'])):?>
    <div class="error success">
        <h3>
            <?php 
            echo $_SESSION['success'];
            unset($_SESSION['success']);
            ?>
        </h3>
    </div>
    <?php endif ?>
    <?php if(isset($_SESSION['username'])):?>
    <p>Welcome:<strong><?php echo $_SESSION['username'];?></strong></p>
    <p><a href="index.php?logout='1'" style="color:red;">Logout</a></p>
    <?php endif ?>
    </div> 
      <div>
        <h1 class="heading">Cash Register</h1>
        <hr>
        <p class="description">
          Hey checkout my cash register just enter the bill amount  and the cash given and find out the amount of change
        </p>
        <div class="billamount">Bill Amount</div>
        <input class="input" placeholder="Enter Bill Amount" id="bill-amount" type="text" />
        
        <div class="cashgiven">Cash Given</div>
        <input class="input" placeholder="Enter Cash Given"   id="cash-given" type="text" />
        <br>
        <button id="check-button">Check</button>
        <hr>
        <p id="error-message"></p>
        <table style="width: 60%;"  class="change-table">
          
          <tr class="tr">
            <th>No. of Notes </th>
            <td class="no-of-notes"></td>
            <td class="no-of-notes"></td>
            <td class="no-of-notes"></td>
            <td class="no-of-notes"></td>
            <td class="no-of-notes"></td>
            <td class="no-of-notes"></td>
            <td class="no-of-notes"></td>
            <td class="no-of-notes"></td>
          </tr>
          <tr>
            <th>Note</th>
            <td>2000</td>
            <td>500</td>
            <td>100</td>
            <td>50</td>
            <td>20</td>
            <td>10</td>
            <td>5</td>
            <td>1</td>
          </tr>
        </table>
      </div>
    

    <script src="cash.js" type="text/javascript"></script>
  </body>
</html>