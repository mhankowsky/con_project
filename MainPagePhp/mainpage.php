<html>
    
    <head>
        
        <link rel="stylesheet" type="text/css" href="style.css">
        
        <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDAV9jHxBwu5KvYn3Cl1J8oUzYStLDUdl8&sensor=true"></script>
        
        <script type="text/javascript" src="googlemaps.js"></script>
        
        <script type="text/javascript" src="mainpagefiles/facebooklogin.js"></script>
        
        
    
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
        
    </body>
    
</html>