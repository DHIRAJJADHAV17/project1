<?php
	$connection = mysqli_connect("localhost","root","");
	$db = mysqli_select_db($connection,"pro");
	$query = "update students set id='$_POST[id]',name='$_POST[name]',father_name='$_POST[father_name]',mobile='$_POST[mobile]',email='$_POST[email]',password='$_POST[password]',remark='$_POST[remark]' where id = $_POST[id]";
	$query_run = mysqli_query($connection,$query);
?>
<script type="text/javascript">
	alert("Details edited successfully.");
	window.location.href = "admin_dashboard.php";
</script>
