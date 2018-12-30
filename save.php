<?php
include_once "database.php";

$firstName = $_POST['firstName'];
$lastName = $_POST['lastName'];
$phoneNumber = $_POST['phoneNumber'];
$groupName = $_POST['groupName'];

$query = "insert into persons VALUES ('','$firstName','$lastName','$phoneNumber','$groupName')";
$result = $connection->query($query);

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/bootstrap-theme.min.css" rel="stylesheet">
</head>
<body>
    <div class="container">
        <br>
        <div class="row">
            <div class="col-lg-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">Save Result </h3>
                    </div>
                    <div class="panel-body">
                        <?php
                        if(!$result){
                            echo "<div class='alert alert-danger' role='alert'>";
                            echo "error in save into database";
                            echo "</div>";
                        }else{
                            echo "<div class='alert alert-success' role='alert'>";
                            echo "person saved successfully";
                            echo "</div>";
                        }
                        ?>
                        <a class="btn btn-info" href="index.php">return</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>
</html>

