<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>PhoneBook</title>


    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/bootstrap-theme.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">

    <?php
    include_once "database.php";
    ?>
</head>
<body>
    <div class="container">
        <br>
        <div class="row">
            <div class="col-lg-12">
                <div class="panel panel-default" style="background-color: rgba(202,202,202,0.41)">
                    <div class="panel-heading">
                        <h3 class="panel-title">phone book</h3>
                    </div>
                    <div class="panel-body">
                        <ul class="nav nav-tabs" role="tablist">
                            <li class="active" role="presentation">
                                <a data-toggle="tab" role="tab" href="#new" aria-controls="new" aria-expanded="true">New user</a>
                            </li>
                            <li class="" role="presentation">
                                <a data-toggle="tab" role="tab" href="#list" aria-controls="list" aria-expanded="false">List</a>
                            </li>
                            <li class="" role="presentation">
                                <a data-toggle="tab" role="tab" href="#search" aria-controls="search" aria-expanded="false">Search</a>
                            </li>
                        </ul>
                        <div class="tab-content">
                            <div id="new" class="tab-pane active" role="tabpanel">
                                <form method="post" action="save.php">
                                    <div class="form-group">
                                        <label>First Name</label>
                                        <input type="text" class="form-control" name="firstName">
                                    </div>
                                    <div class="form-group">
                                        <label>Last Name</label>
                                        <input type="text" class="form-control" name="lastName">
                                    </div>
                                    <div class="form-group">
                                        <label>Phone Number</label>
                                        <input type="text" class="form-control" name="phoneNumber">
                                    </div>
                                    <div class="form-group">
                                        <label>group Name</label>
                                        <select class="form-control" name="groupName">
                                            <option value="family">family</option>
                                            <option value="friend">friend</option>
                                            <option value="work">work</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <input class="btn-lg btn-info" type="submit" value="save">
                                        <input class="btn-lg btn-warning" type="reset">
                                    </div>
                                </form>
                            </div>
                            <div id="list" class="tab-pane" role="tabpanel">
                                <table class="table table-bordered table-hover">
                                    <thead>
                                        <th>First Name</th>
                                        <th>Last Name</th>
                                        <th>Phone Number</th>
                                        <th>Group Name</th>
                                    </thead>
                                    <tbody>
                                    <?php
                                        $query = "select * from persons";
                                        $result = $connection->query($query);
                                        while($row = $result->fetch_assoc()){
                                            echo "<tr>";
                                            echo "<td>".$row['firstName']."</td>";
                                            echo "<td>".$row['lastName']."</td>";
                                            echo "<td>".$row['numbers']."</td>";
                                            echo "<td>".$row['groupName']."</td>";
                                            echo "</tr>";
                                        }
                                    ?>
                                    </tbody>
                                </table>
                            </div>
                            <div id="search" class="tab-pane" role="tabpanel">
                                <form method="post" action="doSearch.php">
                                    <div class="form-group">
                                        <label>Looking For</label>
                                        <input type="text" class="form-control" name="item">
                                    </div>
                                    <div class="form-group">
                                        <input type="submit" class="btn btn-info" value="search">
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
</body>
</html>