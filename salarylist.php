<html>
    <head></head>
    <body>

    <?php
    $con = new mysqli("localhost","root","","cars");
    if($con->connect_error)
    {
        echo"Connection failed";
    }
else{
    echo "Connection success";
}
// $table = "create table empsalary_details (name varchar(20),destination varchar(20),country varchar(20),city varchar(20),experience varchar(10),salary int(10))";
// if($con->query($table)===TRUE)
// {
//     echo "<br>"."table created";
// }
// else {
//     echo "table not created";
// }
// $insert = "insert into empsalary_details (name,destination,country,city,experience,salary) values('BBB','Executive','India','chennai','3','15000'),('CCC','Executive','Australia','xxx','5','27000'),('DDD','Process Executive','Iran','rrr','3','16000'),('EEE','Sr.Executive','India','pondicherry','4','20000')";
// if($con->query($insert)===TRUE)
// {
//     echo "<br>";
//     echo "values inserted";
// }
// else{
//     echo "values not inserted, plz check it";
// }

// $alter = "alter table empsalary_details add bonus varchar(20)";
// if($con->query($alter)===TRUE)
// {echo "<br>";
//          echo "values inserted";
// }
// else{
//         echo "values not inserted, plz check it";
// }
// $update = "update empsalary_details set city='trichy' where city='pondicherry'";
// if($con->query($update)===TRUE)
// {
//     echo "<br>"."table updated";
// }
// else{
//     echo "table not updated, plz check it";
// }
// $updatebonus = "update empsalary_details set bonus='500' where experience<5";
// if($con->query($updatebonus)===TRUE)
// {
//     echo "<br>"."table updated";
// }
// else{
//     echo "table not updated, plz check it";
// }
// $select="select name from empsalary_details where city='chennai'";
// if($con->query($select)===TRUE)
// {
//     echo "<br>"."row selected";
// }
// else{
//     echo "row not selected";
// }
$select="select count(*) from empsalary_details";
$check=$con->query($select);
if($check->num_rows>0){
    while($row=mysqli_fetch_assoc($check)){
    echo "<br>"."rows count";
}}
else{
    echo "<br>"."no rows counted";
}
?>
    </body>
    </html>