<?php
	
	if($_POST){	
		$name = $_POST['name'];
		$address = $_POST['address'];
		$contact = $_POST['contact'];
		$sql = "INSERT INTO tbl_student VALUES('','$name','$address','$contact')";
		if(mysql_query($sql)){
			//header('Location:index.php?msg=1');
			?><script> window.location='index.php?msg=1'; </script><?php
		}
	}
?>
<form method="post" action="index.php?page=new">
<p>
<label>Name:</label>
<input id="name" name="name" required="required" style="width:200px;" placeholder="Enter your name">
</p>
<p>
<label>Address:</label>
<input type="text" id="address" name="address" style="width:250px;" required="required" placeholder="Enter address">
</p>
<p>
<label>Contact No.:</label>
<input type="tel" id="contact" name="contact" required="required" placeholder="Enter contact no.">
</p>
<p>
<input type="submit" value="Save" class="buttons" style="border:none; height:25px;">
<a href="index.php" class="buttons">Cancel</a>
</p>
</form>
