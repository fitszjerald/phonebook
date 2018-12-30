<?php
include_once "database.php";

$item = $_POST['item'];

$query = "select * from persons where firstName LIKE '%$item%' or lastName LIKE '%$item%' or numbers LIKE '%$item%' or groupName LIKE '%$item%'";
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
        <div class="container" >
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h3 class="panel-title">Search Result</h3>
                        </div>
                        <div class="panel-body">
                            <table class="table table-bordered table-hover">
                                <thead>
                                    <th>first name</th>
                                    <th>last name</th>
                                    <th>number</th>
                                    <th>group Name</th>
                                </thead>
                                <?php

                                if(!$result){
                                    echo "<tr><td colspan='4'>error in exe query</td></tr>";
                                }else {
                                    if($result->num_rows<1){
                                        echo "<tr><td colspan='4'>empty result</td></tr>";
                                    }else{
                                        while ($row = $result->fetch_assoc()) {
                                            echo "<tr>";
                                            echo "<td>" . $row['firstName'] . "</td>";
                                            echo "<td>" . $row['lastName'] . "</td>";
                                            echo "<td>" . $row['numbers'] . "</td>";
                                            echo "<td>" . $row['groupName'] . "</td>";
                                            echo "</tr>";
                                        }
                                    }

                                }
                                ?>
                                </tbody>
                            </table>
                            <a href="index.php" class="btn btn-info">return</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <script src="js/jquery.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
    </body>
</html>