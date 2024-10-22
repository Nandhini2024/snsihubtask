<html>
    <head>
</head>
<body>
    <form action="" method="POST">
        Name: <input type="text" name="name"/><br><br>
        Email: <input type="text" name="email"/><br><br>
        Dedpartment: <input type="text" name="dept"/><br><br>
        Salary: <input type="text" name="salary"/><br><br>
        <button onclick="insert()">Insert</button>
        <button onclick="update()">Update</button>
</form>
<?php
$con = new mysqli("localhost","root","","cars");
    if($con->connect_error)
    {
        echo"Connection failed";
    }
else{
    echo "Connection success";
}
// $table = "create table details (name varchar(20),email varchar(20),department varchar(20),salary int(10))";
// if($con->query($table)===TRUE)
// {
//     echo "<br>"."table created";
// }
// else {
//     echo "table not created";
// }
$name=$_POST['name'];
$email=$_POST['email'];
$department=$_POST['dept'];
$salary=$_POST['salary'];
$insert = "insert into details (name,email,department,salary) values('$name','$email','$department','$salary')";
if($con->multi_query($insert)===TRUE)
{
    echo "values inserted";
}
else{
    echo "values not inserted, plz check it";
}

?>
</body>
    </html>