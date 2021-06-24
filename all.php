<!--  Including config.php file -->

<?php
    include 'config.php';
?>

<!-- End Include File -->

<!DOCTYPE html>
<html lang="en">

<head>

  <title>All Transaction</title>

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

  <!--  Bootstrap Link -->
  
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
	  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha.5/css/bootstrap.min.css">
	  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
	  <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha.5/js/bootstrap.min.js"></script>

  <!-- End Bootstrap Link -->

  <!--  Adding style.css Link -->

    <link rel="stylesheet" href="style.css">

  <!-- End -->

</head>
  
  <!--  Bootstrap Link -->
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>

  <!-- End Bootstrap Link -->

<body style="background-image: url('back.jpg');">		

<!-- Navbar  -->

   <?php include 'navbar.php'; ?>

<!-- End Navbar -->

<!-- Add Heading All Transaction using bootstrap Alert  -->

<div class="alltran">
    <div class="alert alert-info" style="width:20%;margin-left: 790px;margin-top:20px;font-weight:800;text-align:center;font-size: 20px;">
       All Transaction
    </div>
</div>

<!-- End bootstrap Alert  -->

<!-- Main Body  -->

<div class="container" style="margin-top:30px;">

    <table class="table table-borderless">

        <thead>
            <tr class="table-warning">
                <th scope="col" style="text-align: center;">Sender</th>
                <th scope="col" style="text-align: center;">Receiver</th>
                <th scope="col" style="text-align: center;">Balance</th>
                <th scope="col" style="text-align: center;">Date</th>
            </tr>
        </thead>

      <tbody>
            <?php
                $query = "SELECT * FROM `transaction`";
                $result = mysqli_query($link, $query);
                if (mysqli_num_rows($result) > 0) {
                    while ($row = mysqli_fetch_assoc($result)) {
            ?>
            <tr>
                   
                <td class="table-primary" style="font-weight: 600;text-align: center"><?php echo $row["sender"]; ?></td>
                <td class="table-success" style="font-weight: 600;text-align: center"><?php echo $row["receiver"]; ?></td>
                <td class="table-danger" style="font-weight: 600;text-align: center"><?php echo $row["amount"]; ?></td>
                <td class="table-light" style="font-weight: 600;text-align: center"><?php echo $row["date"]; ?></td>
                        
            </tr>
            <?php
                }
            } 
            else
            {
            ?>
                <tr>
                    <td colspan="4">
                        <h3 class='text-center'> No data Available..</h1>
                    </td>
                </tr>
            <?php
                }
            ?>
                           
      </tbody>
    </table>
</div>	

<?php

// Close connection
  mysqli_close($link);
  
?>

</body>
</html>