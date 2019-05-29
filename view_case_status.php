<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <script>

            function state12() {
                document.getElementById("state1").style.display = "block";
                document.getElementById("state1").style.display = "inline";
            }
            function cityType() {
                document.getElementById("city").style.display = "block";
            }
            function center() {
                document.getElementById("center").style.display = "block";
            }
            function genderType() {
                document.getElementById("gender1").style.display = "block";
            }

            function casetype() {
                document.getElementById("casetype").style.display = "block";
            }
            function agetype() {
                document.getElementById("age").style.display = "block";
            }

        </script>
    </head>
    <body >
        <div>
            <center>
                <a href="#">View Case Status</a><br>
                <a href="adminpage1.php">New Registration</a><br>
              
            </center>
        </div>

        <div >
            <form action="view_case_status.php" method="post">


                <div>
                    <input type="checkbox" name="byCenter" onclick="center()" />By Center
                </div>
                <div style="display: none; float: left" id="center">
                    <select name="osccenter">
                        <?php
                        include './config_db.php';
                        $Query = "SELECT `osccenter` FROM `oscformm`";
                        $result = mysqli_query($conn, $Query);
                        if (mysqli_num_rows($result) > 0) {

                            while ($row = mysqli_fetch_assoc($result)) {
                                echo '<option value="' . $row['osccenter'] . '">' . $row['osccenter'] . '</option>';
                            }
                        }
                        ?>
                    </select>
                </div>
                <br>

                <div>
                    <input type="checkbox" onclick="state12();" name="byState"/>By State
                </div>
                <div style="display: none; float: left" id="state1">
                    <select name="state">
                        <?php
                        include './config_db.php';
                        $Query = "SELECT DISTINCT(state) as state FROM `oscformm` ";
                        $result = mysqli_query($conn, $Query);
                        if (mysqli_num_rows($result) > 0) {
                            while ($row = mysqli_fetch_assoc($result)) {
                                echo '<option value="' . $row['state'] . '">' . $row['state'] . '</option>';
                            }
                        }
                        ?>
                    </select>

                </div>
                <br>

                <div><input type="checkbox" onclick="cityType()" name="byCity"/>By City
                </div>
                <div style="display: none; float: left" id="city">

                    <select name="city">
                        <?php
                        include './config_db.php';
                        $Query = "SELECT DISTINCT(city) as city FROM `oscformm`";
                        $result = mysqli_query($conn, $Query);
                        if (mysqli_num_rows($result) > 0) {
                            while ($row = mysqli_fetch_assoc($result)) {
                                echo '<option value="' . $row['city'] . '">' . $row['city'] . '</option>';
                            }
                        }
                        ?>
                    </select>
                </div>

                <div>
                    <input type="checkbox" name="byCase" onclick="casetype()"/>By Case Type
                </div>
                <div style="display: none; float: left" id="casetype">

                    <select name="case">
                        <?php
                        include './config_db.php';
                        $Query = "SELECT `typeofcase` FROM `oscformm`";
                        $result = mysqli_query($conn, $Query);
                        if (mysqli_num_rows($result) > 0) {
                            while ($row = mysqli_fetch_assoc($result)) {
                                echo '<option value="' . $row['typeofcase'] . '">' . $row['typeofcase'] . '</option>';
                            }
                        }
                        ?>
                    </select>
                </div>
                <br>
                <div>
                    <input type="checkbox" onclick="agetype()" name="byAge"/>By Age
                </div>
                <div style="display: none; float: left" id="age">

                    <input style="color: black; width: 50%" type="text" placeholder="enter age" name="age"/>
                    <select>
                        <option value="<">Greater Than</option>
                        <option value=">">Less Than</option>
                        <option value="==">Equals</option>
                    </select>
                </div>
                <br>
                <div>
                    <input type="checkbox" onclick="genderType();" name="byGender"/>By Gender
                </div>
                <div style="display: none; float: left" id="gender1">

                    <input  type="radio" name="gender" checked="" value="Male">Male
                    <input  type="radio" name="gender" value="Female">Female
                    <br>
                </div>
                <br>
                <input type="submit" onclick="byState()" value="show"/></td>

            </form>
            <?php
            if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                ?>
                <table>
                    <tr>
                        <th>Name</th>
                        <th>Phone</th>
                        <th>Email</th>
                        <th>City</th>
                        <th>Case Details</th>
                        <th>Case Status</th>
                        <th>Emp ID</th>

                    </tr> 

                    <?php
                    $state = '';
                    $city = '';
                    $center = '';
                    $gender = '';
                    $age = '';
                    $case = '';
                    include './config_db.php';
                    if (isset($_POST["byState"])) {
                        $state = $_POST["state"];
                    }
                    if (isset($_POST["byCenter"])) {
                        $center = $_POST["osccenter"];
                    }
                    if (isset($_POST["byCity"])) {
                        $city = $_POST["city"];
                    }
                    if (isset($_POST["byCase"])) {
                        $case = $_POST["case"];
                    }
                    if (isset($_POST["byAge"])) {
                        $age = $_POST["age"];
                    }
                    if (isset($_POST["byGender"])) {
                        $state = $_POST["gender"];
                    }

                    $query1 = "SELECT * FROM `oscformm` WHERE `state`='$state' or `city`='$city' or `gender`='$gender' or  `osccenter`='$center' or  `typeofcase`='$case' or  `age`='$age' ";
                    $result1 = mysqli_query($conn, $query1);
                    if (mysqli_num_rows($result1) > 0) {
                        while ($row = mysqli_fetch_assoc($result1)) {
                            echo '<tr> <td>' . $row['firstname'] . '</td> <td>' . $row['phone'] . '</td><<td>' . $row['email'] . '</td><td>' . $row['city'] . '</td><td>' . $row['detail'] . '</td><td>' . $row['casesolved'] . '</td><td>' . $row['employerid'] . '</td> </td>';
                        }
                    }
                    ?>                </table>


            <?php } ?>
        </div>


    </body>
</html>