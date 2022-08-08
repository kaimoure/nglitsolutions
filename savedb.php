
<?php    
    // Fill these in with the information from your CoinPayments.net account.
    $servername = "localhost";
    $username = "brysample";
    $password = "123qwe!!!";
    $db = "coinspaymentdb";

    // Create connection
    $conn = mysqli_connect($servername, $username, $password,$db);
    // Check connection
    if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
    }
    else {
        echo "Success";
    }

    $txn_id = "CPEA4ZX0YZZXPP1ZYN50B9L3Y3";
    // $item_name = "1234";
    // $item_number ="1234";
    $amount1 ="1234";
    $amount2 = "1234";
    // $currency1 = "1234";
    // $currency2 ="1234";
    $status = 0;
    $orderno = "1234";
    $received = "1234";
    $fee ="1234";


    $sql = "SELECT txnid FROM deposit_tbl WHERE txnid ='".$txn_id."'";
    $result = mysqli_query($conn, $sql);
    if (mysqli_num_rows($result) == 0) {
        $sql1 = "INSERT INTO deposit_tbl (orderno, txnid, amount, coins, txnstatus, received, fee) VALUES ('".$orderno."','".$txn_id."','".$amount1."','".$amount2."',".$status.",'".$received."','".$fee."')";
        //$result = mysqli_query($conn, $sql1);
        if (mysqli_query($conn, $sql1)) {
            echo "New record created successfully";
        } else {
            echo "Error: " . $sql1 . "<br>" . mysqli_error($conn);
        }
    }
    else {
        $status = 100;
        $received = "0.00256";
        $sql1 = "UPDATE deposit_tbl SET txnstatus=".$status.", received='".$received."' WHERE txnid ='".$txn_id."'";
        if (mysqli_query($conn, $sql1)) {
            echo "Update record successfully";
        } else {
            echo "Error: " . $sql1 . "<br>" . mysqli_error($conn);
        }
    
    }
?>