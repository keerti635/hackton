<?php
$insertconf=false;
if(isset($_POST['name'])){
    $server="localhost";
    $user="root";
    $password="";
    $dbname="survey2";

    $con = mysqli_connect($server,$user,$password,$dbname);
    if(!$con)
    {
        die("connection with database not happening due to".mysqli_connect_error());
    }
    $name=$_POST['name'];
    $mobile=$_POST['mobile'];
    $homenum=$_POST['homenum'];
    $members_no=$_POST['members_no'];
    $aadhar_number=$_POST['aadhar_number'];
    $borewell_facility=$_POST['borewell_facility'];

    $sql_query="INSERT INTO survey2(`name`, `mobile`, `homenum`, `members_no`, `aadhar_number`, `borewell_facility`) VALUES ('$name', '$mobile', '$homenum', '$members_no', '$aadhar_number', '$borewell_facility')";

    if($con-> query($sql_query)==true){
        $insertconf=true;
    }else{
        echo "ERROR:$sql_query<br>$con->error";
    }$con->close();
}?>
<!DOCHTML>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width,initial-scale=1.0">
        <title>survey form</title>
        <style>
            body{
                background-color:black;
                color:white;
            }
            .container {
                text-align:center;
            }
            input,textarea{
                margin:bottom 8px;
            }#confirm h1{
                color:yellow;
            }
            </style>
</head>
<body>
    <div class="container">
        <h1>welcome to my survey page &#9997;</h1>
        <p>enter your details so that we can understand your requirement</p>
        <div id="confirm">
            <?php
            if($insertconf==true)
            {
                echo "<h1>thank you for filling out the survey form</h1>";
            }?></div>
            <form action="" method="post">
                <input type="text" name="name" id="name" placeholder="enter ur name" required><br>
                <input type="text" name="mobile" id="mobile" placeholder="enter mobile number" required><br>
                <input type="text" name="homenum" id="homenum" placeholder="enter homr number" required><br>
                <input type="text" name="members_no" id="members_no" placeholder="total members in family"><br>
                <input type="text" name="aadhar_number" id="aadhar_number" placeholder="aadhar of owner"><br>
                <input type="text" name="borewell_facility" id="borewell" placeholder="yes/no"><br>
                <button type="submit" name="submit">sumbit</button>
                <button type="clear" name="clear">clear</button>
        </form>
        </div>       
     </body>
    </html>
                

                
                




