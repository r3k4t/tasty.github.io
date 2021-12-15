<html>
<body>

<!-- bootstrap css  -->

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

<?php 
include("dbconnection.php");

if(isset($_POST['name'])&& isset($_POST['many']) && isset($_POST['date'])&&isset($_POST['time'])){

    $name = $_POST['name']; 
    $many = $_POST['many'];
    $date = $_POST['date'];
    $time = $_POST['time'];

    $sql = "INSERT INTO reserved (name,many,date,time) 
    VALUES('$name','$many','$date','$time')";

    if(mysqli_query($conn,$sql)){
    echo '<div class="alert alert-warning
    alert-dismissible fade show" role="alert">
<strong>Well Done !</strong>  Form submitted successfully.
</div>
    ';
    }else{
    echo  '<div class="alert alert-danger alert-dismissible fade show" role="alert">
    <strong>Error !</strong> Form not submitted.
  </div>';
  }

}

?>
</body>
</html>