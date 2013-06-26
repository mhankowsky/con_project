<html>
    
    <head>
        
        <link rel="stylesheet" type="text/css" href="style.css">
        
        <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDAV9jHxBwu5KvYn3Cl1J8oUzYStLDUdl8&sensor=true"></script>
        
        <script type="text/javascript" src="googlemaps.js"></script>
        
        <script type="text/javascript" src="mainpagefiles/facebooklogin.js"></script>
        
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.4.3/jquery.min.js"></script>
        
        <title>CorruptOrNot</title>
        
    </head>
    
    <body id = mainBody>
        
        <div class = mainHeader>
            <!-- Logo -->
            <?php include('mainpagefiles/logo.php'); ?>
            
            <!-- Search Bar -->
            <?php include('mainpagefiles/SearchBarMainPage.php'); ?>
            
            <!--Fb Login -->
            <?php include('mainpagefiles/FbLogin.php'); ?>
            
            <!--Add Organization & Add Employee-->
            <?php include('mainpagefiles/addOrgAndEmp.php'); ?>
        </div>
        
        <!-- Google Maps -->
        <?php include('mainpagefiles/googlemaps.php'); ?>
        
        <!-- List of Top 10 -->
        <?php include('mainpagefiles/listOfConPpl.php'); ?>

<?php 
        $fbuserid = $_POST['fbuserid'];             
            $createdate= date('Y-m-d H:i:s');
        $testingano = 1;
        // Create connection
        $con=mysql_connect("localhost","deltal6","QazWsx123!@#");

        // Check connection
        if (mysqli_connect_errno($con))
          {
          echo "Failed to connect to MySQL: " . mysqli_connect_error();
          }
        else
          {
           // echo "Connection suceessful.";
          }

        mysql_select_db("deltal6_con") or die ('Unable to select database!');

        $sql= "INSERT INTO userInfo(userId, anonymous, timeRegisteration) VALUES ('$fbuserid','$testingano','$createdate')";
        $result = mysql_query($sql) or die (mysql_error());
            
?>        


    </body>
    
</html>