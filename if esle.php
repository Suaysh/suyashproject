<?php
$month="february";
if($month=="Jan" ||$month=="Mar" ||$month=="May"||$month=="July"||$month=="August"||$month=="October"||$month=="December")
{
    echo"Days in this month are 30";
}
elseif ($month=="April"||$month=="June"||$month=="September"||$month=="November") {
    echo"Days in this month are 31";
} 
else {
 echo"Entered month is february and has 28 days";
}
?>
 
