<!DOCTYPE html>
<html>
<head>
	<title>MG Class, Eg1</title>
    <link rel="stylesheet" href="css/style.css" type="text/css">
    
</head>
<body>
	<div id="container">
		<div id="wrapper">
        <div class="date">Current Date: <?php echo date("D-m-y"); ?></div><br>
        <a style="cursor:pointer; font-weight:bold; color:#eeeeee; background:#687bbf; border-radius:6px 6px 0 0; padding:5px;" href="index.php">Home Page</a>
        <div class="title">Database Information:</div><br>
        <h4 class="clearboth" style="margin-top:-5px;">tbl_student :</h4>
        <div class="tblstudent"><!--student table starts here-->
        	<div class="top">
        		<a href="index.php?page=new" class="buttons">Add new record</a>
                <a href="index.php?page=newmulti" class="buttons">Add new multi record</a>
                <a href="index.php?page=deleteall" class="buttons">Delete all records</a>
        	</div>