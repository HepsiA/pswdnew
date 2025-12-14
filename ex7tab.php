<?php
$conn = mysqli_connect("localhost", "root", "", "BOOK_STORE");

$sql = "CREATE TABLE Bookstore (
    Full_Name VARCHAR(50),
	EMail VARCHAR(50),
	Password VARCHAR(50),
	Phone INT,
	Address VARCHAR(50),
	City VARCHAR(50),
	Zip INT,
	Country VARCHAR(50),
	Speed VARCHAR(50),
	Wrap VARCHAR(50),
	Instruction VARCHAR(50)
)";

if (mysqli_query($conn, $sql)) {
    echo "Table created successfully!";
} else {
    echo "Error: " . mysqli_error($conn);
}

mysqli_close($conn);
?>