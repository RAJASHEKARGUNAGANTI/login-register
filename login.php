<?php 
include 'con.php';
if(isset($_GET['btn'])){
    // echo "Login success";
    $un = $_GET['uName'];
    $query = "SELECT * FROM logintable WHERE UserName = '$un'";
    $result = mysqli_query($conn,$query);
    $row  = mysqli_fetch_assoc($result);
    if($row['Password'] == $_GET['pW']){
        echo "Login success";
    }
    else{
        echo "Wrong password";
    }
}
else{
    echo "please login properly.";
}
?>
