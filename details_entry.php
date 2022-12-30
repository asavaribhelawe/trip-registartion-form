<?php
$servername="localhost";
$username="root";
$password="";
$database_name="tripregistration";
$conn=mysqli_connect($servername,$username,$password,$database_name);
if(!$conn)
{
    die("Connection failed" .mysqli_connect_error());
}
if(isset($_POST['save']))
{
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $mothername = $_POST['mothername'];
    $fathername = $_POST['fathername'];
    $gender = $_POST['gender'];
    $semester = $_POST['semester'];
    $branch = $_POST['branch'];
    $rollno = $_POST['rollno'];
    $phoneno = $_POST['phoneno'];
    $emailid= $_POST['emailid'];
    
    $sql_query= "INSERT INTO student_details(firstname,lastname,mothername,fathername,gender,semester,branch,rollno,phoneno,emailid) VALUES ('$firstname','$lastname','$mothername','$fathername','$gender','$semester','$branch','$rollno','$phoneno','$emailid')";
    
    if(mysqli_query($conn,$sql_query))
    {
        echo "New Details Entry inserted successfully!";
    }
    else{
        echo "error:" .$sql."".mysqli_error($conn);
    }
    mysqli_close($conn);
}
?>