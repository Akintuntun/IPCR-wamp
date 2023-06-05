<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS\IPCR-faculty.css">
    <title>IPCR</title>
</head>

<style>
    input{
        border: none;
        border-bottom: 1px solid black;
        outline: none;
        text-align: center;
        border: none;
    }

    .top{

        border: none;
        border-bottom: 1px solid black;
        outline: none;
        text-align: center;

    }

    table, th, td, tr {
        border: 2px solid black;
        border-collapse: collapse;
    }

    p {
        margin-left: 35px;
        margin-right: 35px;
        text-indent: 30px;
        text-align: center;
    }
</style>

<body>

<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  // Database connection details
  $servername = "localhost";
  $username = "root";
  $password = "Akisophiekingking";
  $database = "ipcr_db";

  // Create connection
  $conn = new mysqli($servername, $username, $password, $database);
  // Check connection
  if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
  }
  

  // Retrieve form data
  $numericalRating = $_POST['numerical_rating'];
  $adjectivalRating = $_POST['adjectival_rating'];
  


  // Insert data into the ipcr_faculty table
  $sql = "INSERT INTO ipcr_faculty (numerical_rating, adjectival_rating)
          VALUES ('$numericalRating', '$adjectivalRating')";


  if ($conn->query($sql) === TRUE) {
      
  } else {
      echo "Error: " . $sql . "<br>" . $conn->error;
  }

  // Retrieve the inserted id from the ipcr_faculty table

      // Insert data into the ipcr_answers table

      $qty = $_POST['qtyRating1'];
      $qlE = $_POST['qlRating1'];
      $t = $_POST['plRating1'];
      $a = $_POST['overallRating1'];
      $remarks = $_POST['remarks1'];

      $sql = "INSERT INTO ipcr_answers (QTY, QL_E, T, A, Remarks)
              VALUES ('$qty', '$qlE', '$t', '$a', '$remarks')";

      if ($conn->query($sql) === TRUE) {
        
      } else {
          echo "Error: " . $sql . "<br>" . $conn->error;
      }
  } else {
      echo "Error: Could not retrieve the inserted id.";
  }


    // Insert data into the ipcr_answers table

    $qty2 = $_POST['qtyRating2'];
    $qlE2 = $_POST['qlRating2'];
    $t2 = $_POST['plRating2'];
    $a2 = $_POST['overallRating2'];
    $remarks2 = $_POST['remarks2'];

    $sql = "INSERT INTO ipcr_answers (QTY, QL_E, T, A, Remarks)
            VALUES ('$qty2', '$qlE2', '$t2', '$a2', '$remarks2')";

    if ($conn->query($sql) === TRUE) {
      
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    // Insert data into the ipcr_answers table

    $qty3 = $_POST['qtyRating3'];
    $qlE3 = $_POST['qlRating3'];
    $t3 = $_POST['plRating3'];
    $a3 = $_POST['overallRating3'];
    $remarks3 = $_POST['remarks3'];

    $sql = "INSERT INTO ipcr_answers (QTY, QL_E, T, A, Remarks)
            VALUES ('$qty3', '$qlE3', '$t3', '$a3', '$remarks3')";

    if ($conn->query($sql) === TRUE) {
      
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    // Insert data into the ipcr_answers table

    $qty4 = $_POST['qtyRating4'];
    $qlE4 = $_POST['qlRating4'];
    $t4 = $_POST['plRating4'];
    $a4 = $_POST['overallRating4'];
    $remarks4 = $_POST['remarks4'];

    $sql = "INSERT INTO ipcr_answers (QTY, QL_E, T, A, Remarks)
            VALUES ('$qty4', '$qlE4', '$t4', '$a4', '$remarks4')";

    if ($conn->query($sql) === TRUE) {
      
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    // Insert data into the ipcr_answers table
    
    $qty5 = $_POST['qtyRating5'];
    $qlE5 = $_POST['qlRating5'];
    $t5 = $_POST['plRating5'];
    $a5 = $_POST['overallRating5'];
    $remarks5 = $_POST['remarks5'];

    $sql = "INSERT INTO ipcr_answers (QTY, QL_E, T, A, Remarks)
            VALUES ('$qty5', '$qlE5', '$t5', '$a5', '$remarks5')";

    if ($conn->query($sql) === TRUE) {
      
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    // Insert data into the ipcr_answers table
    
    $qty6 = $_POST['qtyRating6'];
    $qlE6 = $_POST['qlRating6'];
    $t6 = $_POST['plRating6'];
    $a6 = $_POST['overallRating6'];
    $remarks6 = $_POST['remarks6'];

    $sql = "INSERT INTO ipcr_answers (QTY, QL_E, T, A, Remarks)
            VALUES ('$qty6', '$qlE6', '$t6', '$a6', '$remarks6')";

    if ($conn->query($sql) === TRUE) {
      
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    // Insert data into the ipcr_answers table
    
    $qty7 = $_POST['qtyRating7'];
    $qlE7 = $_POST['qlRating7'];
    $t7 = $_POST['plRating7'];
    $a7 = $_POST['overallRating7'];
    $remarks7 = $_POST['remarks7'];

    $sql = "INSERT INTO ipcr_answers (QTY, QL_E, T, A, Remarks)
            VALUES ('$qty7', '$qlE7', '$t7', '$a7', '$remarks7')";

    if ($conn->query($sql) === TRUE) {
      
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    // Insert data into the ipcr_answers table
    
    $qty8 = $_POST['qtyRating8'];
    $qlE8 = $_POST['qlRating8'];
    $t8 = $_POST['plRating8'];
    $a8 = $_POST['overallRating8'];
    $remarks8 = $_POST['remarks8'];

    $sql = "INSERT INTO ipcr_answers (QTY, QL_E, T, A, Remarks)
            VALUES ('$qty8', '$qlE8', '$t8', '$a8', '$remarks8')";

    if ($conn->query($sql) === TRUE) {
      
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    // Insert data into the ipcr_answers table
    
    $qty9 = $_POST['qtyRating9'];
    $qlE9 = $_POST['qlRating9'];
    $t9 = $_POST['plRating9'];
    $a9 = $_POST['overallRating9'];
    $remarks9 = $_POST['remarks9'];

    $sql = "INSERT INTO ipcr_answers (QTY, QL_E, T, A, Remarks)
            VALUES ('$qty9', '$qlE9', '$t9', '$a9', '$remarks9')";

    if ($conn->query($sql) === TRUE) {
      
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    
    $qty10 = $_POST['qtyRating10'];
    $qlE10 = $_POST['qlRating10'];
    $t10 = $_POST['plRating10'];
    $a10 = $_POST['overallRating10'];
    $remarks10 = $_POST['remarks10'];

    $sql = "INSERT INTO ipcr_answers (QTY, QL_E, T, A, Remarks)
            VALUES ('$qty10', '$qlE10', '$t10', '$a10', '$remarks10')";

    if ($conn->query($sql) === TRUE) {
      
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    
    $qty11 = $_POST['qtyRating11'];
    $qlE11 = $_POST['qlRating11'];
    $t11 = $_POST['plRating11'];
    $a11 = $_POST['overallRating11'];
    $remarks11 = $_POST['remarks11'];

    $sql = "INSERT INTO ipcr_answers (QTY, QL_E, T, A, Remarks)
      VALUES ('$qty11', '$qlE11', '$t11', '$a11', '$remarks11')";

    if ($conn->query($sql) === TRUE) {
      
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    
    $qty12 = $_POST['qtyRating12'];
    $qlE12 = $_POST['qlRating12'];
    $t12 = $_POST['plRating12'];
    $a12 = $_POST['overallRating12'];
    $remarks12 = $_POST['remarks12'];

    $sql = "INSERT INTO ipcr_answers (QTY, QL_E, T, A, Remarks)
        VALUES ('$qty12', '$qlE12', '$t12', '$a12', '$remarks12')";


    if ($conn->query($sql) === TRUE) {
      
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $qty13 = $_POST['qtyRating13'];
    $qlE13 = $_POST['qlRating13'];
    $t13 = $_POST['plRating13'];
    $a13 = $_POST['overallRating13'];
    $remarks13 = $_POST['remarks13'];

    $sql = "INSERT INTO ipcr_answers (QTY, QL_E, T, A, Remarks)
            VALUES ('$qty13', '$qlE13', '$t13', '$a13', '$remarks13')";

    if ($conn->query($sql) === TRUE) {
      
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    
    $qty14 = $_POST['qtyRating14'];
    $qlE14 = $_POST['qlRating14'];
    $t14 = $_POST['plRating14'];
    $a14 = $_POST['overallRating14'];
    $remarks14 = $_POST['remarks14'];

    $sql = "INSERT INTO ipcr_answers (QTY, QL_E, T, A, Remarks)
            VALUES ('$qty14', '$qlE14', '$t14', '$a14', '$remarks14')";

    if ($conn->query($sql) === TRUE) {
      
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    
    $qty15 = $_POST['qtyRating15'];
    $qlE15 = $_POST['qlRating15'];
    $t15 = $_POST['plRating15'];
    $a15 = $_POST['overallRating15'];
    $remarks15 = $_POST['remarks15'];

    $sql = "INSERT INTO ipcr_answers (QTY, QL_E, T, A, Remarks)
            VALUES ('$qty15', '$qlE15', '$t15', '$a15', '$remarks15')";

    if ($conn->query($sql) === TRUE) {
      
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    
    $qty16 = $_POST['qtyRating16'];
    $qlE16 = $_POST['qlRating16'];
    $t16 = $_POST['plRating16'];
    $a16 = $_POST['overallRating16'];
    $remarks16 = $_POST['remarks16'];

    $sql = "INSERT INTO ipcr_answers (QTY, QL_E, T, A, Remarks)
            VALUES ('$qty16', '$qlE16', '$t16', '$a16', '$remarks16')";

    if ($conn->query($sql) === TRUE) {
      
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $qty17 = $_POST['qtyRating17'];
    $qlE17 = $_POST['qlRating17'];
    $t17 = $_POST['plRating17'];
    $a17 = $_POST['overallRating17'];
    $remarks17 = $_POST['remarks17'];

    $sql = "INSERT INTO ipcr_answers (QTY, QL_E, T, A, Remarks)
            VALUES ('$qty17', '$qlE17', '$t17', '$a17', '$remarks17')";

    if ($conn->query($sql) === TRUE) {
      
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }


    $qty18 = $_POST['qtyRating18'];
    $qlE18 = $_POST['qlRating18'];
    $t18 = $_POST['plRating18'];
    $a18 = $_POST['overallRating18'];
    $remarks18 = $_POST['remarks18'];

    $sql = "INSERT INTO ipcr_answers (QTY, QL_E, T, A, Remarks)
            VALUES ('$qty18', '$qlE18', '$t18', '$a18', '$remarks18')";

    if ($conn->query($sql) === TRUE) {
      
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }


    $qty19 = $_POST['qtyRating19'];
    $qlE19 = $_POST['qlRating19'];
    $t19 = $_POST['plRating19'];
    $a19 = $_POST['overallRating19'];
    $remarks19 = $_POST['remarks19'];

    $sql = "INSERT INTO ipcr_answers (QTY, QL_E, T, A, Remarks)
            VALUES ('$qty19', '$qlE19', '$t19', '$a19', '$remarks19')";

    if ($conn->query($sql) === TRUE) {
      
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $qty20 = $_POST['qtyRating20'];
    $qlE20 = $_POST['qlRating20'];
    $t20 = $_POST['plRating20'];
    $a20 = $_POST['overallRating20'];
    $remarks20 = $_POST['remarks20'];

    $sql = "INSERT INTO ipcr_answers (QTY, QL_E, T, A, Remarks)
            VALUES ('$qty20', '$qlE20', '$t20', '$a20', '$remarks20')";

    if ($conn->query($sql) === TRUE) {
      
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }


    $qty21 = $_POST['qtyRating21'];
    $qlE21 = $_POST['qlRating21'];
    $t21 = $_POST['plRating21'];
    $a21 = $_POST['overallRating21'];
    $remarks21 = $_POST['remarks21'];

    $sql = "INSERT INTO ipcr_answers (QTY, QL_E, T, A, Remarks)
            VALUES ('$qty21', '$qlE21', '$t21', '$a21', '$remarks21')";

    if ($conn->query($sql) === TRUE) {
      
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $qty22 = $_POST['qtyRating22'];
    $qlE22 = $_POST['qlRating22'];
    $t22 = $_POST['plRating22'];
    $a22 = $_POST['overallRating22'];
    $remarks22 = $_POST['remarks22'];

    $sql = "INSERT INTO ipcr_answers (QTY, QL_E, T, A, Remarks)
            VALUES ('$qty22', '$qlE22', '$t22', '$a22', '$remarks22')";

    if ($conn->query($sql) === TRUE) {
      
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $qty23 = $_POST['qtyRating23'];
    $qlE23 = $_POST['qlRating23'];
    $t23 = $_POST['plRating23'];
    $a23 = $_POST['overallRating23'];
    $remarks23 = $_POST['remarks23'];

    $sql = "INSERT INTO ipcr_answers (QTY, QL_E, T, A, Remarks)
            VALUES ('$qty23', '$qlE23', '$t23', '$a23', '$remarks23')";

    if ($conn->query($sql) === TRUE) {
      
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $qty24 = $_POST['qtyRating24'];
    $qlE24 = $_POST['qlRating24'];
    $t24 = $_POST['plRating24'];
    $a24 = $_POST['overallRating24'];
    $remarks24 = $_POST['remarks24'];

    $sql = "INSERT INTO ipcr_answers (QTY, QL_E, T, A, Remarks)
            VALUES ('$qty24', '$qlE24', '$t24', '$a24', '$remarks24')";

    if ($conn->query($sql) === TRUE) {
      
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $qty25 = $_POST['qtyRating25'];
    $qlE25 = $_POST['qlRating25'];
    $t25 = $_POST['plRating25'];
    $a25 = $_POST['overallRating25'];
    $remarks25 = $_POST['remarks25'];

    $sql = "INSERT INTO ipcr_answers (QTY, QL_E, T, A, Remarks)
            VALUES ('$qty25', '$qlE25', '$t9', '$a25', '$remarks25')";

    if ($conn->query($sql) === TRUE) {
      
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $qty26 = $_POST['qtyRating26'];
    $qlE26 = $_POST['qlRating26'];
    $t26 = $_POST['plRating26'];
    $a26 = $_POST['overallRating26'];
    $remarks26 = $_POST['remarks26'];

    $sql = "INSERT INTO ipcr_answers (QTY, QL_E, T, A, Remarks)
            VALUES ('$qty26', '$qlE26', '$t26', '$a26', '$remarks26')";

    if ($conn->query($sql) === TRUE) {
      
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $qty27 = $_POST['qtyRating27'];
    $qlE27 = $_POST['qlRating27'];
    $t27 = $_POST['plRating27'];
    $a27 = $_POST['overallRating27'];
    $remarks27 = $_POST['remarks27'];

    $sql = "INSERT INTO ipcr_answers (QTY, QL_E, T, A, Remarks)
            VALUES ('$qty27', '$qlE27', '$t27', '$a27', '$remarks27')";

    if ($conn->query($sql) === TRUE) {
      
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $qty28 = $_POST['qtyRating28'];
    $qlE28 = $_POST['qlRating28'];
    $t28 = $_POST['plRating28'];
    $a28 = $_POST['overallRating28'];
    $remarks28 = $_POST['remarks28'];

    $sql = "INSERT INTO ipcr_answers (QTY, QL_E, T, A, Remarks)
            VALUES ('$qty28', '$qlE28', '$t28', '$a28', '$remarks28')";

    if ($conn->query($sql) === TRUE) {
      
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $qty29 = $_POST['qtyRating29'];
    $qlE29 = $_POST['qlRating29'];
    $t29 = $_POST['plRating29'];
    $a29 = $_POST['overallRating29'];
    $remarks29 = $_POST['remarks29'];

    $sql = "INSERT INTO ipcr_answers (QTY, QL_E, T, A, Remarks)
            VALUES ('$qty29', '$qlE29', '$t29', '$a29', '$remarks29')";

    if ($conn->query($sql) === TRUE) {
      
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $qty30 = $_POST['qtyRating30'];
    $qlE30 = $_POST['qlRating30'];
    $t30 = $_POST['plRating30'];
    $a30 = $_POST['overallRating30'];
    $remarks30 = $_POST['remarks30'];

    $sql = "INSERT INTO ipcr_answers (QTY, QL_E, T, A, Remarks)
            VALUES ('$qty30', '$qlE30', '$t30', '$a30', '$remarks30')";

    if ($conn->query($sql) === TRUE) {
      
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $qty31 = $_POST['qtyRating31'];
    $qlE31 = $_POST['qlRating31'];
    $t31 = $_POST['plRating31'];
    $a31 = $_POST['overallRating31'];
    $remarks31 = $_POST['remarks31'];

    $sql = "INSERT INTO ipcr_answers (QTY, QL_E, T, A, Remarks)
            VALUES ('$qty31', '$qlE31', '$t31', '$a31', '$remarks31')";

    if ($conn->query($sql) === TRUE) {
      
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $qty32 = $_POST['qtyRating32'];
    $qlE32 = $_POST['qlRating32'];
    $t32 = $_POST['plRating32'];
    $a32 = $_POST['overallRating32'];
    $remarks32 = $_POST['remarks32'];

    $sql = "INSERT INTO ipcr_answers (QTY, QL_E, T, A, Remarks)
            VALUES ('$qty32', '$qlE32', '$t32', '$a32', '$remarks32')";

    if ($conn->query($sql) === TRUE) {
      
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $qty33 = $_POST['qtyRating33'];
    $qlE33 = $_POST['qlRating33'];
    $t33 = $_POST['plRating33'];
    $a33 = $_POST['overallRating33'];
    $remarks33 = $_POST['remarks33'];

    $sql = "INSERT INTO ipcr_answers (QTY, QL_E, T, A, Remarks)
            VALUES ('$qty33', '$qlE33', '$t33', '$a33', '$remarks33')";

    if ($conn->query($sql) === TRUE) {
      
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $qty34 = $_POST['qtyRating34'];
    $qlE34 = $_POST['qlRating34'];
    $t34 = $_POST['plRating34'];
    $a34 = $_POST['overallRating34'];
    $remarks34 = $_POST['remarks34'];

    $sql = "INSERT INTO ipcr_answers (QTY, QL_E, T, A, Remarks)
            VALUES ('$qty34', '$qlE34', '$t34', '$a34', '$remarks34')";

    if ($conn->query($sql) === TRUE) {
      
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $qty35 = $_POST['qtyRating35'];
    $qlE35 = $_POST['qlRating35'];
    $t35 = $_POST['plRating35'];
    $a35 = $_POST['overallRating35'];
    $remarks35 = $_POST['remarks35'];

    $sql = "INSERT INTO ipcr_answers (QTY, QL_E, T, A, Remarks)
            VALUES ('$qty35', '$qlE35', '$t35', '$a35', '$remarks35')";

    if ($conn->query($sql) === TRUE) {
      
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $qty36 = $_POST['qtyRating36'];
    $qlE36 = $_POST['qlRating36'];
    $t36 = $_POST['plRating36'];
    $a36 = $_POST['overallRating36'];
    $remarks36 = $_POST['remarks36'];

    $sql = "INSERT INTO ipcr_answers (QTY, QL_E, T, A, Remarks)
            VALUES ('$qty36', '$qlE36', '$t36', '$a36', '$remarks36')";

    if ($conn->query($sql) === TRUE) {
      
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $qty37 = $_POST['qtyRating37'];
    $qlE37 = $_POST['qlRating37'];
    $t37 = $_POST['plRating37'];
    $a37 = $_POST['overallRating37'];
    $remarks37 = $_POST['remarks37'];

    $sql = "INSERT INTO ipcr_answers (QTY, QL_E, T, A, Remarks)
            VALUES ('$qty37', '$qlE37', '$t37', '$a37', '$remarks37')";

    if ($conn->query($sql) === TRUE) {
      
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $qty38 = $_POST['qtyRating38'];
    $qlE38 = $_POST['qlRating38'];
    $t38 = $_POST['plRating38'];
    $a38 = $_POST['overallRating38'];
    $remarks38 = $_POST['remarks38'];

    $sql = "INSERT INTO ipcr_answers (QTY, QL_E, T, A, Remarks)
            VALUES ('$qty38', '$qlE38', '$t38', '$a38', '$remarks38')";

    if ($conn->query($sql) === TRUE) {
      
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $qty39 = $_POST['qtyRating39'];
    $qlE39 = $_POST['qlRating39'];
    $t39 = $_POST['plRating39'];
    $a39 = $_POST['overallRating39'];
    $remarks39 = $_POST['remarks39'];

    $sql = "INSERT INTO ipcr_answers (QTY, QL_E, T, A, Remarks)
            VALUES ('$qty39', '$qlE39', '$t39', '$a39', '$remarks39')";

    if ($conn->query($sql) === TRUE) {
      
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $qty40 = $_POST['qtyRating40'];
    $qlE40 = $_POST['qlRating40'];
    $t40 = $_POST['plRating40'];
    $a40 = $_POST['overallRating40'];
    $remarks40 = $_POST['remarks40'];

    $sql = "INSERT INTO ipcr_answers (QTY, QL_E, T, A, Remarks)
            VALUES ('$qty40', '$qlE40', '$t40', '$a40', '$remarks40')";

    if ($conn->query($sql) === TRUE) {
      
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $qty41 = $_POST['qtyRating41'];
    $qlE41 = $_POST['qlRating41'];
    $t41 = $_POST['plRating41'];
    $a41 = $_POST['overallRating41'];
    $remarks41 = $_POST['remarks41'];

    $sql = "INSERT INTO ipcr_answers (QTY, QL_E, T, A, Remarks)
            VALUES ('$qty41', '$qlE41', '$t41', '$a41', '$remarks41')";

    if ($conn->query($sql) === TRUE) {
      
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $qty42 = $_POST['qtyRating42'];
    $qlE42 = $_POST['qlRating42'];
    $t42 = $_POST['plRating42'];
    $a42 = $_POST['overallRating42'];
    $remarks42 = $_POST['remarks42'];

    $sql = "INSERT INTO ipcr_answers (QTY, QL_E, T, A, Remarks)
            VALUES ('$qty42', '$qlE42', '$t42', '$a42', '$remarks42')";

    if ($conn->query($sql) === TRUE) {
      
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $qty43 = $_POST['qtyRating43'];
    $qlE43 = $_POST['qlRating43'];
    $t43 = $_POST['plRating43'];
    $a43 = $_POST['overallRating43'];
    $remarks43 = $_POST['remarks43'];

    $sql = "INSERT INTO ipcr_answers (QTY, QL_E, T, A, Remarks)
            VALUES ('$qty43', '$qlE43', '$t43', '$a43', '$remarks43')";

    if ($conn->query($sql) === TRUE) {
      
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }


    

  $conn->close();
}

?>

<h3 style="text-align: center;">INDIVIDUAL PERFORMANCE COMMITMENT and REVIEW (IPCR)</h3>
<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
    <p>
        I, <b><input type="text" id="name-input" name="name" placeholder="NAME" class="top">,
        <input type="text" id="academic_rank" name="academic_rank" placeholder="ACADEMIC Rank" class="top"></b> of the Laguna State
        Polytechnic University, commit to deliver and agree to be rated on the attainment of the following in accordance
        with the indicated measures for the <input type="text" id="semester" name="semester" placeholder="SEM"
                                                    style="width: 50px;" class="top"> Semester of the academic year <input
                type="text" id="year" name="year" placeholder="YEAR" style="width: 100px;" class="top">.
    </p>
    <table style="width:100%;">
        <tr>
            <th id="name">Conforme:<br><br></th>
            <th colspan="4" id="assoc_dean">Reviewed By:<br><br></th>
            <th colspan="5" id="director">Approved By:<br><br></th>
        </tr>
        <tr>
            <td style="text-align:center;">RATEE</td>
            <td colspan="4" style="text-align:center;">Dean/Assoc.Dean</td>
            <td colspan="5" style="text-align:center;">Campus Director</td>
        </tr>
        <tr style="height:50px; text-align: center;">
          <td rowspan="2" style="background-color: rgb(211,211,211);">Performance Indication</td>
          <td rowspan="2" style="background-color: rgb(211,211,211); padding-left:20px; padding-right:20px;">Target</td>
          <td rowspan="2" style="background-color: rgb(211,211,211); padding-left:10px; padding-right:10px;">Accomplished</td>
          <td rowspan="2" style="background-color: rgb(211,211,211); padding-left:10px; padding-right:10px;">Date of Submission/Completion (Deadline)</td>
          <td rowspan="2" style="background-color: rgb(211,211,211); padding-left:10px; padding-right:10px;">Date Submitted/Completed</td>
          <td colspan="4" style="background-color: rgb(211,211,211); padding-left:10px; padding-right:10px;">Rating</td>
          <td rowspan="2" style="background-color: rgb(211,211,211); padding-left:10px; padding-right:10px;">Remarks</td>
        </tr>
        <tr>
          <td style="background-color: rgb(211,211,211); padding-left:20px; padding-right:20px;">QTY</td>
          <td style="background-color: rgb(211,211,211); padding-left:20px; padding-right:20px;">QL/E</td>
          <td style="background-color: rgb(211,211,211); padding-left:20px; padding-right:20px; text-align:center;">T</td>
          <td style="background-color: rgb(211,211,211); padding-left:20px; padding-right:20px;">A</td>
        </tr>
        <tr style="text-align:left; background-color: #f0ed61;">
          <td colspan="10">INSTRUCTION</td>
        </tr>
        <tr>
          <td colspan="10"><b>
            1. Plan and prepare instructional materials to enhance instructions.
          </b></td>
        </tr>
        <tr>
          <td>
            a) No. of Syllabus prepared
          </td> 
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td><input type="number" name="qtyRating1" required></td>
            <td><input type="number" name="qlRating1" required></td>
            <td><input type="number" name="plRating1" required></td>
            <td><input type="number" name="overallRating1" required></td>
            <td><input type="text" name="remarks1" required></td>
        </tr>
        <tr>
          <td>
            b) No. of Course Guide
          </td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td><input type="number" name="qtyRating2" required></td>
            <td><input type="number" name="qlRating2" required></td>
            <td><input type="number" name="plRating2" required></td>
            <td><input type="number" name="overallRating2" required></td>
            <td><input type="text" name="remarks2" required></td>
        </tr>
        <tr>
          <td>
            c) No. of SLM
          </td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td><input type="number" name="qtyRating3" required></td>
            <td><input type="number" name="qlRating3" required></td>
            <td><input type="number" name="plRating3" required></td>
            <td><input type="number" name="overallRating3" required></td>
            <td><input type="text" name="remarks3" required></td>
        </tr>
        <tr>
          <td>
            d) No. of subject areas with community immersion/involvement component 3</td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td><input type="number" name="qtyRating4" required></td>
            <td><input type="number" name="qlRating4" required></td>
            <td><input type="number" name="plRating4" required></td>
            <td><input type="number" name="overallRating4" required></td>
            <td><input type="text" name="remarks4" required></td>
        </tr>
        <tr>
          <td colspan="10"><b>
            2. Organizes Classroom instructions.
          </b></td>
        <tr>
          <td>
            a) Attendance Sheet
          </td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td><input type="number" name="qtyRating5" required></td>
            <td><input type="number" name="qlRating5" required></td>
            <td><input type="number" name="plRating5" required></td>
            <td><input type="number" name="overallRating5" required></td>
            <td><input type="text" name="remarks5" required></td>
        </tr>
        <tr>
          <td>
            b) Class Records
          </td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td><input type="number" name="qtyRating6" required></td>
            <td><input type="number" name="qlRating6" required></td>
            <td><input type="number" name="plRating6" required></td>
            <td><input type="number" name="overallRating6" required></td>
            <td><input type="text" name="remarks6" required></td>
        </tr>
        <tr>
          <td colspan="10"><b>
            3. Teaching Effectiveness.
          </b></td>
        <tr>
          <td>
            a) Evaluation of Teaching Effectiveness (CQA-SF-012)
          </td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td><input type="number" name="qtyRating7" required></td>
            <td><input type="number" name="qlRating7" required></td>
            <td><input type="number" name="plRating7" required></td>
            <td><input type="number" name="overallRating7" required></td>
            <td><input type="text" name="remarks7" required></td>
        </tr>
        <tr>  
          <td>
            b) Class Observation (CQA-SF-012)
          </td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td><input type="number" name="qtyRating8" required></td>
            <td><input type="number" name="qlRating8" required></td>
            <td><input type="number" name="plRating8" required></td>
            <td><input type="number" name="overallRating8" required></td>
            <td><input type="text" name="remarks8" required></td>
        </tr>
        <tr>
          <td colspan="10"><b>
            4. Prepare and Check Summative/Evaluative/Formative Tests.
          </b></td>
        <tr>
          <td>
            a.1) TOS/Rubrics(Mid Term)
          </td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td><input type="number" name="qtyRating9" required></td>
            <td><input type="number" name="qlRating9" required></td>
            <td><input type="number" name="plRating9" required></td>
            <td><input type="number" name="overallRating9" required></td>
            <td><input type="text" name="remarks9" required></td>
        </tr>
        <tr>
          <td>
            a.2) TOS/Rubrics(Final Term)
          </td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td><input type="number" name="qtyRating10" required></td>
            <td><input type="number" name="qlRating10" required></td>
            <td><input type="number" name="plRating10" required></td>
            <td><input type="number" name="overallRating10" required></td>
            <td><input type="text" name="remarks10" required></td>
        </tr>
        <tr>
          <td>
            b.1) Test questions(term exams)/Performance's based activities (Mid Term)
          </td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td><input type="number" name="qtyRating11" required></td>
            <td><input type="number" name="qlRating11" required></td>
            <td><input type="number" name="plRating11" required></td>
            <td><input type="number" name="overallRating11" required></td>
            <td><input type="text" name="remarks11" required></td>
        </tr>
        <tr>
          <td>
            b.2) Test questions(term exams)/Performance's based activities (Final Term)
          </td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td><input type="number" name="qtyRating12" required></td>
            <td><input type="number" name="qlRating12" required></td>
            <td><input type="number" name="plRating12" required></td>
            <td><input type="number" name="overallRating12" required></td>
            <td><input type="text" name="remarks12" required></td>
        </tr>
        <tr>
          <td>
            c.1) Answer Keys (Mid Term)
          </td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td><input type="number" name="qtyRating13" required></td>
            <td><input type="number" name="qlRating13" required></td>
            <td><input type="number" name="plRating13" required></td>
            <td><input type="number" name="overallRating13" required></td>
            <td><input type="text" name="remarks13" required required></td>
        </tr>
        <tr>
          <td>
            c.2) Answer Keys (Final Term)
          </td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td><input type="number" name="qtyRating14" required></td>
            <td><input type="number" name="qlRating14" required></td>
            <td><input type="number" name="plRating14" required></td>
            <td><input type="number" name="overallRating14" required></td>
            <td><input type="text" name="remarks14" required></td>
        </tr>
        <tr>
          <td colspan="10"><b>
            5. Compute and Evaluate Grades.
          </b></td>
        <tr>
          <td>
            a) No. of grading sheets submitted and encoded
          </td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td><input type="number" name="qtyRating15" required></td>
            <td><input type="number" name="qlRating15" required></td>
            <td><input type="number" name="plRating15" required></td>
            <td><input type="number" name="overallRating15" required></td>
            <td><input type="text" name="remarks15" required></td>
        </tr>
        <tr>
          <td colspan="10"><b>
            6. Consultation services to faculty and students.
          </b></td>
        <tr>
          <td>
            a) No. of faculty & students seek advices (LSPU-ACAD-011)
          </td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td><input type="number" name="qtyRating16" required></td>
            <td><input type="number" name="qlRating16" required></td>
            <td><input type="number" name="plRating16" required></td>
            <td><input type="number" name="overallRating16" required></td>
            <td><input type="text" name="remarks16" required></td>
        </tr>
        <tr>
          <td colspan="10"><b>
            7. Prepare accomplishment report.
          </b></td>
        <tr>
          <td>
            a) Accomplishment Report
          </td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td><input type="number" name="qtyRating17" required></td>
            <td><input type="number" name="qlRating17" required></td>
            <td><input type="number" name="plRating17" required></td>
            <td><input type="number" name="overallRating17" required></td>
            <td><input type="text" name="remarks17" required></td>
        </tr>
        <tr style="text-align:left; background-color: #f0ed61;">
          <td colspan="10">RESEARCH</td>
        </tr>
        <tr>
          <td colspan="10"><b>
            8. Research program/projects/studies.
          </b></td>
        <tr>
          <td>
            a) Research proposal submitted/Activity conducted
          </td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td><input type="number" name="qtyRating18" required></td>
            <td><input type="number" name="qlRating18" required></td>
            <td><input type="number" name="plRating18" required></td>
            <td><input type="number" name="overallRating18" required></td>
            <td><input type="text" name="remarks18" required></td>
        </tr>
        <tr>
          <td>
            b) Research implemented and/or Completed within the timeframe
          </td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td><input type="number" name="qtyRating19" required></td>
            <td><input type="number" name="qlRating19" required></td>
            <td><input type="number" name="plRating19" required></td>
            <td><input type="number" name="overallRating19" required></td>
            <td><input type="text" name="remarks19" required></td>
        </tr>
        <td>
          c) Research Presenterd in Regional/National/International Comferences
        </td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td><input type="number" name="qtyRating20" required></td>
            <td><input type="number" name="qlRating20" required></td>
            <td><input type="number" name="plRating20" required></td>
            <td><input type="number" name="overallRating20" required></td>
            <td><input type="text" name="remarks20" required></td>
      </tr>
      <td>
      d) Research Published in Peer-reviewed Journals
    </td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td><input type="number" name="qtyRating21" required></td>
            <td><input type="number" name="qlRating21" required></td>
            <td><input type="number" name="plRating21" required></td>
            <td><input type="number" name="overallRating21" required></td>
            <td><input type="text" name="remarks21" required></td>
  </tr>
  <td>
    e) Filed/Published/Approved Intellectual Property Right
  </td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td><input type="number" name="qtyRating22" required></td>
            <td><input type="number" name="qlRating22" required></td>
            <td><input type="number" name="plRating22" required></td>
            <td><input type="number" name="overallRating22" required></td>
            <td><input type="text" name="remarks22" required></td>
</tr>
<td>
  f) Research Utilized/Deployed through Commercialization/Extension/Policy
</td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td><input type="number" name="qtyRating23" required></td>
            <td><input type="number" name="qlRating23" required></td>
            <td><input type="number" name="plRating23" required></td>
            <td><input type="number" name="overallRating23" required></td>
            <td><input type="text" name="remarks23" required></td>
</tr>
<td>
  g) Number of cirtation in journal/books
</td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td><input type="number" name="qtyRating24" required></td>
            <td><input type="number" name="qlRating24" required></td>
            <td><input type="number" name="plRating24" required></td>
            <td><input type="number" name="overallRating24" required></td>
            <td><input type="text" name="remarks24" required></td>
</tr>

<tr style="text-align:left; background-color: #f0ed61;">
  <td colspan="10">EXTENSION</td>
</tr>
<tr>
  <td colspan="10"><b>
    9. Extension projects.
  </b></td>
<tr>
  <td>
    a) Extension proposal submiitted/activity conducted
  </td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td><input type="number" name="qtyRating25" required></td>
            <td><input type="number" name="qlRating25" required></td>
            <td><input type="number" name="plRating25" required></td>
            <td><input type="number" name="overallRating25" required></td>
            <td><input type="text" name="remarks25" required></td>
</tr>
<td>
  b) EPersons trained/provided with technical advise
</td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td><input type="number" name="qtyRating26" required></td>
            <td><input type="number" name="qlRating26" required></td>
            <td><input type="number" name="plRating26" required></td>
            <td><input type="number" name="overallRating26" required></td>
            <td><input type="text" name="remarks26" required></td>
</tr>
<td>
  c) Persons who avail the service who rated the service as good or better
</td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td><input type="number" name="qtyRating27" required></td>
            <td><input type="number" name="qlRating27" required></td>
            <td><input type="number" name="plRating27" required></td>
            <td><input type="number" name="overallRating27" required></td>
            <td><input type="text" name="remarks27" required></td>
</tr>
<td>
  d) Persons given training or advisory who rated the timeliness of service delivery as good or better
</td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td><input type="number" name="qtyRating28" required></td>
            <td><input type="number" name="qlRating28" required></td>
            <td><input type="number" name="plRating28" required></td>
            <td><input type="number" name="overallRating28" required></td>
            <td><input type="text" name="remarks28" required></td>
</tr>
<td>
  e) Technical advice responded within 3 days upon request
</td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td><input type="number" name="qtyRating29" required></td>
            <td><input type="number" name="qlRating29" required></td>
            <td><input type="number" name="plRating29" required></td>
            <td><input type="number" name="overallRating29" required></td>
            <td><input type="text" name="remarks29" required></td>
</tr>
<tr style="text-align:left; background-color: #f0ed61;">
  <td colspan="10">SUPPORT FUNCTION</td>
</tr>
<tr>
  <td colspan="10"><b>
    10. Perform Officially-Deligated Assignments
  </b></td>
</tr>
<tr>
  <td>
    a) Accomplishment Report
  </td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td><input type="number" name="qtyRating30" required></td>
            <td><input type="number" name="qlRating30" required></td>
            <td><input type="number" name="plRating30" required></td>
            <td><input type="number" name="overallRating30" required></td>
            <td><input type="text" name="remarks30" required></td>
  </tr>
  <tr>
    <td colspan="10"><b>
      11. Perticipated in the Flag Raising Ceremony
    </b></td>
  </tr>
  <tr>
    <td>
      a) Attendance
    </td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td><input type="number" name="qtyRating31" required></td>
            <td><input type="number" name="qlRating31" required></td>
            <td><input type="number" name="plRating31" required></td>
            <td><input type="number" name="overallRating31" required></td>
            <td><input type="text" name="remarks31" required></td>
    </tr>
    <tr>
      <td colspan="10"><b>
        12. Participate in the Flag lowering
      </b></td>
    </tr>
    <tr>
      <td>
        a) Attendance
      </td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td><input type="number" name="qtyRating32" required></td>
            <td><input type="number" name="qlRating32" required></td>
            <td><input type="number" name="plRating32" required></td>
            <td><input type="number" name="overallRating32" required></td>
            <td><input type="text" name="remarks32" required></td>
      </tr>
      <tr>
        <td colspan="10"><b>
          13. Participate in the health and wellness program
        </b></td>
      </tr>
      <tr>
        <td>
          a) Attendance sheet/Program of activities/other document as proof
        </td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td><input type="number" name="qtyRating33" required></td>
            <td><input type="number" name="qlRating33" required></td>
            <td><input type="number" name="plRating33" required></td>
            <td><input type="number" name="overallRating33" required></td>
            <td><input type="text" name="remarks33" required></td>
        </tr>
        <tr>
          <td colspan="10"><b>
            14. Perticipated in school celebration and other allied activities
          </b></td>
        </tr>
        <tr>
          <td>
            a) Attendance sheet/Program of activities/other document as proof
          </td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td><input type="number" name="qtyRating34" required></td>
            <td><input type="number" name="qlRating34" required></td>
            <td><input type="number" name="plRating34" required></td>
            <td><input type="number" name="overallRating34" required></td>
            <td><input type="text" name="remarks34" required></td>
          </tr>
          <tr>
            <td colspan="10"><b>
          15. Attend training/conferences/seminars
          </b></td>
        </tr>
        <tr>
          <td>
            a) Training/Seminar/Conference certificate of attendance/participation
          </td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td><input type="number" name="qtyRating35" required></td>
            <td><input type="number" name="qlRating35" required></td>
            <td><input type="number" name="plRating35" required></td>
            <td><input type="number" name="overallRating35" required></td>
            <td><input type="text" name="remarks35" required required></td>
          </tr>
          <tr>
            <td colspan="10"><b>
          16. Attend Faculty Meeting
          </b></td>
        </tr>
        <tr>
          <td>
            a) Attendance
          </td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td><input type="number" name="qtyRating36" required></td>
            <td><input type="number" name="qlRating36" required></td>
            <td><input type="number" name="plRating36" required></td>
            <td><input type="number" name="overallRating36" required></td>
            <td><input type="text" name="remarks36" required></td>
          </tr>
          <tr>
            <td colspan="10"><b>
          17. Involvement in accrelitation/ISO and other related activities
          </b></td>
        </tr>
        <tr>
          <td>
            a) Attendance
          </td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td><input type="number" name="qtyRating37" required></td>
            <td><input type="number" name="qlRating37" required></td>
            <td><input type="number" name="plRating37" required></td>
            <td><input type="number" name="overallRating37" required></td>
            <td><input type="text" name="remarks37" required></td>
          </tr>
          <tr>
            <td colspan="10"><b>
          18. Perticipate in the spiritual activities
          </b></td>
        </tr>
        <tr>
          <td>
            a) Attendance sheet/Program of activities/other document as proof
          </td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td><input type="number" name="qtyRating38" required></td>
            <td><input type="number" name="qlRating38" required></td>
            <td><input type="number" name="plRating38" required></td>
            <td><input type="number" name="overallRating38" required></td>
            <td><input type="text" name="remarks38" required></td>
          </tr>
          <tr style="text-align:left; background-color: #f0ed61;">
            <td colspan="10">ADMINISTRATIVE FUNCTIONS</td>
          </tr>
          <tr>
            <td colspan="10"><b>
          19. Perform Administrative Designation Funtions
          </b></td>
        </tr>
        <tr>
          <td>
            a) Prepare....
          </td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td><input type="number" name="qtyRating39" required></td>
            <td><input type="number" name="qlRating39" required></td>
            <td><input type="number" name="plRating39" required></td>
            <td><input type="number" name="overallRating39" required></td>
            <td><input type="text" name="remarks39" required></td>
          </tr>
          <tr>
            <td>
              b) Submit....
            </td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td><input type="number" name="qtyRating40" required></td>
              <td><input type="number" name="qlRating40" required></td>
              <td><input type="number" name="plRating40" required></td>
              <td><input type="number" name="overallRating40" required></td>
              <td><input type="text" name="remarks40" required></td>
            </tr>
            <tr>
              <td>
                c) Increase....
              </td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td><input type="number" name="qtyRating41" required></td>
              <td><input type="number" name="qlRating41" required></td>
              <td><input type="number" name="plRating41" required></td>
              <td><input type="number" name="overallRating41" required></td>
              <td><input type="text" name="remarks41" required></td>
              </tr>
              <tr>
                <td>
                  d) ....
                </td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td><input type="number" name="qtyRating42" required></td>
                <td><input type="number" name="qlRating42" required></td>
                <td><input type="number" name="plRating42" required></td>
                <td><input type="number" name="overallRating42" required></td>
                <td><input type="text" name="remarks42" required></td>
                </tr>
                <tr>
                  <td>
                    e) ....
                  </td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td><input type="number" name="qtyRating43" required></td>
                  <td><input type="number" name="qlRating43" required></td>
                  <td><input type="number" name="plRating43" required></td>
                  <td><input type="number" name="overallRating43" required></td>
                  <td><input type="text" name="remarks43" required></td>
                  </tr>
                
                  <tr>
                    <td colspan="7" rowspan = "2"><b>
                  Comments and Recommendation for Development Purposes
                  </b><br><br><br><br>Rating scale<br>5 - Outstanding<br>4 - Very Satisfactoy<br>3 - Satisfactory<br>2 - Unsatisfactory<br>1 - Poor 
                    </td>
                    <td style = "padding-right:20px; vertical-align:top; text-align:left;">Numerical Rating: <br><br><br><br><input type="number" name="numerical_rating" placeholder="RATING"  required></td>
                    <td style = "padding-left:40px; padding-right:40px; vertical-align:top; text-align:center;" colspan="2">Adjectival Rating:<br><br><br><br><input type="number" name="adjectival_rating" placeholder="RATING"  required></td>
                  </tr>
                  <tr style="height:100px;">
                    <td></td>
                  </tr>
                  <tr>
                    <td style = "text-align:center;"><b>Discussed with:<br><br><br><b></td>
                    <td colspan="3" style = "text-align:center;"><b>Assessed by:<br><br><br><b></</td>
                    <td colspan="3" style = "text-align:center;"><b>Checked by:<br><br><br><b></</td>
                    <td colspan="3" style = "text-align:center;"><b>Final Rating:<br><br><br><b></</b></td>
                  </tr>
                  <t>
                    <td style = "text-align:center;"><i>RATEE</td>
                    <td colspan="3" style = "text-align:center;"><i>Dean/Assoc.Dean</td>
                    <td colspan="3" style = "text-align:center;"><i>HRMO</td>
                    <td colspan="3" style = "text-align:center;"><i>Campus Director</i></td>
                  </t>
                  <tr>
                    <td  style="text-align:center">Date: <input type="date" name="date_discussed_with"></</td>
                    <td colspan="3"  style="text-align:center">Date:</td>
                    <td colspan="3"  style="text-align:center">Date:</td>
                    <td colspan="3"  style="text-align:center">Date:</td>
                  </tr>

    </table>
    <button type="submit">Submit</button>
</form>

</body>
</html>
