<script type="text/javascript">
	if(confirm("Are you sure want to delete ?"))
	{
		document.write("<?php 
		$connection = mysqli_connect("localhost","root","");
		$db = mysqli_select_db($connection,"pro");
		$query = "delete from students where id = $_POST[id]";
		$query_run = mysqli_query($connection,$query);
		?>");
	 	window.location.href = "admin_dashboard.php";
	}
	else
	{
		window.location.href = "admin_dashboard.php";
	}
</script>
