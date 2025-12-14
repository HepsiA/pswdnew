<!DOCTYPE html>
<html>

<head>
    <title>BOOK STORE</title>
</head>

<body>
    <center>
        <?php

        $conn = mysqli_connect("localhost", "root", "", "BOOK_STORE");
        
        
       if (isset($_POST['submit'])) {

    
    $Full_Name = $_REQUEST['name'];
    $EMail = $_REQUEST['mail'];
    $Password=$_REQUEST['pw'];
    $Phone=$_REQUEST['phone'];
	$Address=$_REQUEST['add'];
	$City=$_REQUEST['city'];
	$Zip=$_REQUEST['zip'];
	$Country=$_REQUEST['country'];
	$Instruction=$_REQUEST['ins'];
   
   $sql = "INSERT INTO bookstore 
(Full_Name, EMail, Password, Phone, Address, City, Zip, Country, Instruction)
VALUES 
('$Full_Name', '$EMail', '$Password', '$Phone', '$Address', '$City', '$Zip', '$Country', '$Instruction')";

if(mysqli_query($conn, $sql)){
            echo "<h3>data stored in a database successfully." 
                . " Please browse your localhost php my admin" 
                . " to view the updated data</h3>"; 

            //echo nl2br("\n$first_name\n $last_name\n "
                //. "$gender\n $address\n $email");
        } else{
            echo "ERROR: Hush! Sorry $sql. " 
                . mysqli_error($conn);
        }
	   }
else{
$sql = "SELECT * FROM bookstore";
$result = mysqli_query($conn, $sql);
 if (mysqli_num_rows($result) > 0) {
        while($row = mysqli_fetch_assoc($result)) {
            echo "successfully read";
        }
    } else {
        echo "0 results";
    }

  }
mysqli_close($conn);
?>
</center>
</body>

</html>