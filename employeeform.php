

<html>
    
    <head>
        <link rel="stylesheet" type="text/css" href="style.css">
        <title>CorruptOrNot</title>
    </head>
    
    <body>
        <div id = "employeeform">
            <!-- New Employee Profile Form -->
            <form action="employee.php" method="post">
                Employee Name: <input type="text" name="employeefirstname"><br>
                Organization Name: <input type="text" name="employeeorganization"><br>
                Designation: <input type="text" name="employeedesignation"><br> <!-- TO DO: dropdown based on organization -->
                Employee Image (optional): <input type="file" name="employeeimage" size="40"><br>
                <!-- Submit Button -->
                <input type="submit" name="formSubmit" value="Submit">
            </form>
        </div>
       
     </body>
    
</html>

