<?php 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" answer="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.js"></script>
        <style type="text/css">
        .wrapper{
            width: 650px;
            margin: 0 auto;
        }
        .page-header h2{
            margin-top: 0;
        }
        table tr td:last-child a{
            margin-right: 15px;
        }
        .hh_button {
    display: inline-block;
    text-decoration: none;
    background: linear-gradient(to right,#ff8a00,#da1b60);
    border: none;
    color: white;
    padding: 10px 25px;
    font-size: 1rem;
    border-radius: 3px;
    cursor: pointer;
    font-family: 'Roboto', sans-serif;
    position: relative;
    margin-top: 30px;
    margin: 0px;
    position: absolute;
    right: 20px;
    top: 1.5%;
    }
    header {
    color: white;
    padding: 20px;
    margin-bottom: 20px;
    }
    header a,  header a:hover {
        text-decoration: none;
        color: white;
    }
    .copybutton {
        /* position: absolute; */
        border-width: 0;
        color: #337ab7;
        background-color: #f9f9f9;
    }
    .edit-logo{
        position: absolute;
        margin: 0 0 0px 0px;
    }
    .tash-bin{
        position: relative;
        margin: 0px 0 0  1px;
    }
    .centerAlign{
        text-align:center;
    }
    .marginset{
        margin-top: 43px;
        margin-left: 13px;
    }
    </style>
</head>
<body>
    <div class="wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="page-header clearfix">
                        <h2 class="pull-left">Benefit Page Form</h2>
                        <a href="faqadmin/download_joinus.php" class="btn btn-primary pull-right">Download Response</a>
                    </div>
                    <?php
                    require('../blogAdmin/database.php');
                    $database = new Database();
                    $link = $database->connect();
                    $connection = $link;

                    $sql = "SELECT * FROM join_us ORDER BY  id  DESC ";
                    if($result = mysqli_query($link, $sql)){
                        if(mysqli_num_rows($result) > 0){
                            echo "<table class='table table-bordered table-striped'>";
                                echo "<thead>";
                                    echo "<tr>";
                                        echo "<th>First Name</th>";
                                        echo "<th>Last Name</th>";
                                        echo "<th>Email</th>";
                                        echo "<th>Phone Number</th>";
                                        echo "<th>ACM Membership No.</th>";
                                        echo "<th>Course</th>";
                                        //echo "<th>Action</th>";
                                        echo "<th>Enrollment Number</th>";
                                        echo "<th>Clubs</th>";
                                    echo "</tr>";
                                echo "</thead>";
                                echo "<tbody>";
                                    // $count = 0;
                                    // echo "<script>
                                    // let links = [];
                                    
                                    //     function copy2 (count){navigator.clipboard.writeText('".$siteLink."'+links[count]);}</script>";
                                while($row = mysqli_fetch_array($result)){
                                    echo "<tr>";
                                        // $ii = $row['originalLink'];
                                        // $ii = substr($ii,0,51);
                                        echo "<td>" . $row['firstname'] . "</td>";
                                        echo "<td>" . $row['lastname']."</td>";
                                        echo "<td>" . $row['email']."</td>";
                                        echo "<td>" . $row['phone_number']."</td>";
                                        echo "<td>" . $row['acm_no']."</td>";
                                        echo "<td>" . $row['course']."</td>";
                                        echo "<td>" . $row['enrollment_no']."</td>";
                                        echo "<td>" . $row['club']."</td>";
                                        //echo "<td>" . $row['signedBy']."</td>";
                                        // echo "<td><a target='_blank' href='".$siteLink."". $row['code'] ."'>".$siteLink."". $row['code'] ."</a></td>";
                                        // $short = $row['code'];
                                        // echo "<script>links.push('".$short."'); </script>";
                                        // echo "<td class='centerAlign'>" . $row['count'] . "</td>";

                                        // echo "<td>";
                                        //     echo "<a class='tash-bin' href='faqadmin/certificate_mail.php?Sno=". $row['uniqueNo'] ."&email=". $row['email'] ."' title='Mail Certificate' data-toggle='tooltip'><span class='glyphicon glyphicon-envelope'></span></a>";
                                        //     echo "<a class='edit-logo' href='faqadmin/certificate_edit.php?Sno=". $row['uniqueNo'] ."' title='Edit Certificate' data-toggle='tooltip'><span class='glyphicon glyphicon-edit'></span></a>";
                                        //     echo "<a class='tash-bin 'href='faqadmin/certificate_delete.php?Sno=". $row['uniqueNo'] ."' title='Delete Certificate' data-toggle='tooltip'><span class='glyphicon glyphicon-trash'></span></a>";
                                        //     echo "<a class='edit-logo' href='faqadmin/certi_download.php?Sno=". $row['uniqueNo'] ."' title='Download Certificate' target='_blank' name='down-btn' id='down-btn' data-toggle='tooltip'><span class='glyphicon glyphicon-download-alt'></span></a>";
                                        // // echo "<form method='POST' action = 'faqadmin/certificate/index.php?Sno=". $row['uniqueNo'] ."'> 
                                        // //     <button type='submit' class='btn btn-primary' id='submitBtn' name='down-btn' data-toggle='tooltip'>Download</button>
                                        // // </form>";

                                        // echo "</td>";

                                    echo "</tr>";
        
                                }
                            echo "</tbody>";                            
                            echo "</table>";
                            // Free result set
                            mysqli_free_result($result);
                        } else{
                            echo "<p class='lead'><em>No Record Found.</em></p>";
                        }
                    } else{
                        echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);

                    }
                    // Close connection
                    mysqli_close($link);
                    ?>
                </div>
            </div>        
        </div>
    </div>
</body>
</html>


