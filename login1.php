<?php
session_start();
if(isset($_POST['username'])&& !empty($_POST['username'])&&
isset ($_POST['password'])&& !empty($_POST['password']));{
$a=$_POST['username'];
$b=$_POST['password'];}
$link=mysqli_connect("localhost","root","","book");
$query ="select * from login where username='$a'and password='$b'";
$result=mysqli_query($link,$query);
$row=mysqli_fetch_array($result);
if($row){
	$_SESSION["state_login"]=true;
	$_SESSION["realname"]=$row['realname'];
	$_SESSION["name"]=$row['username'];
	echo("خوش امدید");}
		else
		echo("نام کاربری یا رمز عیور یافت نشد");
	if($row["type"]==0)
	$_SESSION["user_type"]="public";
	elseif($row["type"]==1)
	{
		$_SESSION["user_type"]="admin";
		echo(".");}
		else
		echo("نام کاربری یا رمز عیور یافت نشد");
?>
<?php 
if(isset($_SESSION["state_login"])&& $_SESSION["state_login"]===true){
	?>
	<script type="text/javascript">
	location.replace("index.php");
	</script>
    <?php
}
mysqli_close($link);
?>