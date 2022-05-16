<?php
$server = "localhost";
$username = "root";
$password = "";
$dbname = "student";

$conn = mysqli_connect($server , $username , $password , $dbname);

if(isset($_POST['submit'])){
    if(!empty($_POST['fname']) && !empty($_POST['lname']) && !empty($_POST['username']) && !empty($_POST['city']) && !empty($_POST['district'])){
        $fname = $_POST['fname'];
        $lname = $_POST['lname'];
        $username = $_POST['username'];
        $city = $_POST['city'];
        $district = $_POST['district'];
        $gender = $_POST['gender'];

        $query = "insert into register(fname , lname , username , city , district , gender) values('$fname' , '$lname' , '$username' , '$city' , '$district' , '$gender')";

        $run =  mysqli_query($conn,$query) or die(mysqli_error());

        if($run){
            echo "Submitted";
        }
        else {
            echo "Not submitted";
        }

    }
    else{
        echo " all fields required";
    }
}

?>