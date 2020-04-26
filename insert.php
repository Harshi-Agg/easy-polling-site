
<?php
$servername = "localhost";
$username = "id13138943_songdewpolldb";
$password = "Pgo3PGLD[~~32qQN";
$dbname = "id13138943_songdewdb";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} // Selecting Database from Server
// Create connection

$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if(isset($_POST['submit'])){
$textContainer = $_POST['textContainer'];
$choice1 = $_POST['choice1'];
$choice2 = $_POST['choice2'];
$choice3 = $_POST['choice3'];

if($textContainer !=''||$choice1 !='')
{
//Insert Query of SQL
$sql = "INSERT INTO student (question, choice1, choice2, choice3)
VALUES ('$textContainer', '$choice1', '$choice2', '$choice3')";
echo "<script> alert('Data Inserted successfully...!!');</script>";

}
else{
echo "<script> alert('Insertion Failed . Some Fields are Blank....!!');</script>";
}
if ($conn->query($sql) === TRUE) {
    echo "<script> alert('New record created successfully'); </script>";
    echo "<script> location.href='poll.php';</script>";
} 
}
?>