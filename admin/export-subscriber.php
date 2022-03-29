<?php  
  
include('includes/dbconnection.php');

$query = "SELECT `ID`,`Name`,`Email`,`PhoneNumber`,`CreationDate` FROM `tblsubscribe`";  
$setRec = mysqli_query($con, $query);  
  
$columnHeader = '';  
$columnHeader = "ID" . "\t" . "Name" . "\t" . "Email" . "\t". "Phone Number" . "\t". "CreationDate" . "\t";  
  
$setData = '';  
  
while ($rec = mysqli_fetch_row($setRec)) {  
    $rowData = '';  
    foreach ($rec as $value) {  
        $value = '"' . $value . '"' . "\t";  
        $rowData .= $value;  
    }  
    $setData .= trim($rowData) . "\n";  
}  
  
  
header("Content-type: application/octet-stream");  
header("Content-Disposition: attachment; filename=Subscribers_Export.xls");  
header("Pragma: no-cache");  
header("Expires: 0");  
  
echo ucwords($columnHeader) . "\n" . $setData . "\n";  
  
?>