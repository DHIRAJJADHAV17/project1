<?php
	$connection = mysqli_connect("localhost","root","");
	$db = mysqli_select_db($connection,"pro");
	$query = "insert into students values($_POST[id],'$_POST[name]','$_POST[father_name]','$_POST[mobile]','$_POST[email]','$_POST[password]','$_POST[remark]')";
	$query_run = mysqli_query($connection,$query);
?>
<script type="text/javascript">
	alert("Student added successfully.");
	window.location.href = "admin_dashboard.php";
</script>
