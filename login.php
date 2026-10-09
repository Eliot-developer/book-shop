<?php
session_start();
if(isset($_POST['username'])&& !empty($_POST['username'])&&
isset ($_POST['password'])&& !empty($_POST['password'])&&
isset($_POST['email'])&& !empty($_POST['email'])){
$a=$_POST['username'];
$b=$_POST['password'];
$c=$_POST['email'];}
$link=mysqli_connect("localhost","root","","book");
if(($a==='admin')&&($b==='123')){
    $query = "INSERT INTO login (username, password,email,type) VALUES ('$a','$b','$c','1')";}
else{
    $query = "INSERT INTO login (username, password,email,type) VALUES ('$a','$b','$c','0')";}
if(mysqli_query($link,$query)===true){
echo("انجام شد");
$_SESSION["state_login"]=true;}
else
echo("انجام نشد");
mysqli_close($link);
?>
<?php 
if(isset($_SESSION["state_login"])&& $_SESSION["state_login"]===true){
	?>
	<script type="text/javascript">
	location.replace("index.php");
	</script>
    <?php
}
?>