<html>
    <style>
        .alert {
  padding: 20px;
  background-color: #f44336;
  color: white;
}

.closebtn {
  margin-left: 15px;
  color: white;
  font-weight: bold;
  float: right;
  font-size: 22px;
  line-height: 20px;
  cursor: pointer;
  transition: 0.3s;
}

.closebtn:hover {
  color: black;
}
</style>
<script>
    function back(){
        window.location.href="poll.php";
    }
</script>
</html>
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
$text = $_POST['text'];
$count = $_POST['gender'];

$query="SELECT * from student";
$result= mysqli_query($conn, $query) or die("error");
if($count== 'male')
		{ $sql= "UPDATE student SET count1= count1 + 1 WHERE question= '$text'";
echo "<script> alert('Vote Inserted successfully...!!');</script>";
}
else{
if($count=='female')
		{$sql= "UPDATE student SET count2= count2 + 1 WHERE question= '$text'";
echo "<script> alert('Vote Inserted successfully...!!');</script>";
}
else{
		 $sql= "UPDATE student SET count3= count3 + 1 WHERE question= '$text'";
echo "<script> alert('Vote Inserted successfully...!!');</script>";
}
	}
}

if ($conn->query($sql) === TRUE) {
    $query="SELECT * from student WHERE question= '$text' ";
    $result= mysqli_query($conn, $query) or die("error");
    $rows= mysqli_fetch_array($result, MYSQLI_ASSOC);
    $data1= $rows['count1'];
    $data2= $rows['count2'];
    $data3= $rows['count3'];
    $per1= (($data1)/($data1+$data2+$data3))* 100;
    $per2= (($data2)/($data1+$data2+$data3))* 100;
    $per3= (($data3)/($data1+$data2+$data3))* 100;
    echo"<div class='alert'>";
    echo"<span class='closebtn' onclick='back()'>close</span>"; 
    echo"<strong>"; echo $rows['choice1']; echo"</strong> :-"; echo $per1; echo"%<br>";
    echo"<strong>"; echo $rows['choice2']; echo"</strong> :-"; echo $per2; echo"%<br>";
    echo"<strong>"; echo $rows['choice3']; echo"</strong> :-"; echo $per3; echo"%<br>";
    echo" Click on Close Button to go back";
    echo"</div>";
}   

?>