<?php
$jdesiggnation= $_POST['jdesiggnation'];
$jdescription= $_POST['jdescription'];
$city= $_POST['city'];
$jtype= $_POST['jtype'];
$salary= $_POST['salary'];
$salarytype= $_POST['salarytype'];
$elevel= $_POST['elevel'];
$ein= $_POST['ein'];
$etype= $_POST['etype'];
$addlanguage= $_POST['addlanguage'];
$jobemailid= $_POST['jobemailid'];
$jobcomno= $_POST['jobcomno'];



echo $jdesiggnation;

$connection = mysql_connect("localhost","root","");
mysql_select_db("retalisjobs");
 
$query="insert into postajob(jdesiggnation,jdescription,city,jtype,salary,salarytype,elevel,ein,etype,addlanguage,jobemailid,jobcomno) values ('".$jdesiggnation."','".$jdescription."','".$city."','".$jtype."','".$salary."','".$salarytype."','".$elevel."','".$ein."','".$etype."','".$addlanguage."','".$jobemailid."','".$jobcomno."')";
echo $query;
echo "<br>";
 
mysql_query($query);
 
echo "Record inserted";
 
 




//header('location:seeker-login.html');
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title></title>
    </head>
    <body>
        
    </body>
</html>
