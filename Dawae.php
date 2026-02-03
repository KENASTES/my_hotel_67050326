
<?php
$objCon = mysqli_connect("localhost","root","");
if ($objCon -> connect_errno) {
echo "Failed to connect to MySQL: " . $objCon ->
connect_error;
exit();
} else {
    echo "Connected successfully";
}
?>