<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Part 2</title>

<style>

table

{

border-style:double;

border-width:20px;

border-color:green;

border-radius: 10%;


}

.sci {

    color:red;
}

</style>
</head>

<body>
<H2> PHP CLASS Registration </H2>

<?php

$students = [
    ['name' => 'Alaa', 'email' => 'ahmed@test.com', 'status' => 'Science'],
    ['name' => 'Shamy', 'email' => 'ali@test.com', 'status' => 'AAST'],
    ['name' => 'Youssef', 'email' => 'basem@test.com', 'status' => 'AAST'],
    ['name' => 'Waleid', 'email' => 'farouk@test.com', 'status' => 'Science'],
    ['name' => 'Rahma', 'email' => 'hany@test.com', 'status' => 'AAST'],
];




echo "<table border>

<th>name</th>

<th>email</th>

<th>status</th>

</tr>";

foreach($students as $row) {
    if($row['status']=='Science'){
        echo "<tr class=sci >";
    }else{
echo "<tr>";
    }
echo "<td>" . $row['name'] ."</td>";

echo "<td>" . $row['email'] . "</td>";

echo "<td>" . $row['status'] . "</td>";

echo "</tr>";

}

echo "</table>";


?>

</body>

</html>