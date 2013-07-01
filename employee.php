<html>
	
	<head>
        
        <title>emp</title>

    </head>

	<body>

		<?php

		    
		$orgname = $_POST['employeeorganization'];
		$empname = $_POST['employeefirstname'];
		$empde = $_POST['employeedesignation'];
		$img = $_POST['employeeimage'];
		$orgId = mt_rand(0,1215752192);

		//echo $orgId;

		//echo $orgname . $empname . $empde .  $img; 
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

		$sql= "INSERT INTO employeeCreated(orgId,orgName,empName,designation,img) VALUES ('$orgId','$orgname','$empname','$empde','$img')";
		$result = mysql_query($sql) or die (mysql_error());

		//echo $result;

		echo 'Profile submitted successfully' ;

		$empsql = "SELECT * FROM `employeeCreated` ";
		$result = mysql_query($empsql) or die (mysql_error());
		//echo $result;

		?>
	
	</body>

</html>