<?php

$nameErr = $emailErr = $genderErr = $detailsErr =$coursesErr =$agreeErr = "";
$name = $email =$group = $gender = $details =$courses =$agree = "";

if (isset ($_POST['submit'])) {

    if ($_SERVER["REQUEST_METHOD"] == "POST") 
    {
        if (empty($_POST["name"])) {
        $nameErr = "Name is required"; 
        }
        else {
        $name = $_POST["name"];
        if (!preg_match("/^[a-zA-Z-' ]*$/",$name)) {
            $nameErr = "only letters and space allowed";}

        
        }
        if (empty($_POST["email"])) {
            $emailErr = "Email is required";
        } else {
            $email = $_POST["email"];
            // check if e-mail address is well-formed
            if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $emailErr = "<h5>Invalid email format</h5>";} 
        }
        }
        if (!empty($_POST["group"])) {
            $group = $_POST["group"];
        } 
        if (!empty($_POST["details"])) {
            $details = $_POST["details"];
        }
        if (empty($_POST["gender"])) {
            $genderErr = "Gender is required";
        } else {
            $gender = $_POST["gender"];
        }
        if (empty($_POST["agree"])) {
            $agreeErr = "Agree the terms first";
        } else {
            $agree = $_POST["agree"];
        }
        }
    


        ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>part 1 </title>
    <style>

    span{
        color:red
    }
    </style>
</head>

<body>
    <h2> Application Name: AAST_BIS Class Registration </h2>

    
    <span> * Required file </span>
    <form action="<?php $_PHP_SELF ?>" method="post">
        <br>
        <table>
            <tr>
                <td><label> Name: </label></td>
                <td><input type="text" name="name" >
                    <span class="error">* <?php echo $nameErr;?></span>
                </td>
            </tr>
            <tr>
                <td><label> email:</label> </td>
                <td> <input type="email" name="email">
                <span class="error">* <?php echo $emailErr;?></span>
                </td>
            </tr>
            <tr>
                <td><label> Group # </label> :</td>
                <td> <input type="number" name="group"></td>
            <tr>
                <td><label> details: </label></td>
                <td><textarea name="details" rows="5" cols="50" ></textarea></td>
            </tr>

            <tr>
                <td><label>Gender:</label></td>    
                <td><input type="radio" name="gender" value="female">female
                <input type="radio" name="gender" value="male">male
                <span class="error">* <?php echo $genderErr;?></span></td>
            </tr>
                <td>Select Courses : </td>
                <td>
                    <select name='courses[]' multiple >
                        <option value="PHP">PHP</option>
                        <option value="JavaScript">JavaScript</option>
                        <option value="MySQL">MySQL</option>
                        <option value="HTML">HTML</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td><label>Agree:</label></td>
                <td><input type="checkbox" name="agree">
                <span class="error">*<?php echo $agreeErr;?></span></td>
            </tr>
                
            <tr> 
                <td><input type="submit" name="submit"></td>
            </tr>
        </table>
    </form>
    <?php
        echo"<h1> Your given values are as:</h1>" ;
        echo "Name".$name;

        echo "<br>";
        echo"E-mail:".$email;
        
        echo"<br>";
        echo"group".$group;

        echo"<br>";
        echo"class details".$details;

        echo"<br>";
        echo"Gender".$gender;

        echo"<br>";
        echo"Courses are :";
        if (!empty($_POST["courses"])) {
            foreach($_POST["courses"] as $courses){
            echo " ".$courses." ";}}

?>

</body>
</html>


