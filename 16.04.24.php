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
// $table = "create table car_details (sino int(10),id varchar(10),name varchar(20),model varchar(20),year int(10))";
// if($con->query($table)===TRUE)
// {
//     echo "<br>"."table created";
// }
// else {
//     echo "table not created";
// }
// $insert = "insert into car_details (sino,id,name,model,year) values(1,'AA','volkswogan','nk450',2023),(2,'AB','hundai','kl908',2024),(3,'AC','bmw','gh100',2024),(4,'BB','audi','ad32',2019),(5,'BC','benz','ui890',2019)";
// if($con->query($insert)===TRUE)
// {
//     echo "values inserted";
// }
// else{
//     echo "values not inserted, plz check it";
// }
// $alter = "alter table car_details add color varchar(20)";
// if($con->query($alter)===TRUE)
// {
//     echo "<br>"."table altered";
// }
// else{
//     echo "table not altered, plz check it";
// }
$update = "update car_details set color='while' where id='BC'";
if($con->query($update)===TRUE)
{
    echo "<br>"."table updated";
}
else{
    echo "table not updated, plz check it";
}?>
    </body>
    </html>