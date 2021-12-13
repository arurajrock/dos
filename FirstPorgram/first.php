<!DOCTYPE html>
<html>
<head>
	<title></title>
	<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container " style="margin-top: 40px">
	<form method="POST" class="text-center " >
	<input type="text" name="num1" class="form-control w-20" placeholder="First number"><br>
	<input type="text" name="num2" class="form-control w-20" placeholder="Second number">
	<br><br>
<!-- 	<button type="submit" name="submit" class="btn btn-info ">
		Click Here
	</button> -->
	<div class="dropdown">
  <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">
    Dropdown button
  </button>
  <div class="dropdown-menu">
    <button type="submit" name="submit1" class="dropdown-item  btn  ">Addition
	</button>

	<button type="submit" name="submit2" class="dropdown-item  btn  ">
		  Multiplication
	</button>
 
  </div>
  </div> 
    </form>

   
</div><br>
<div class="container ">
	<select>
	<option value="add">Select Choice</option>
	<option value="add">Add</option>
	<option value="add">Add</option>
	</select>
</div>
<br>
<div class="container app-form-group showdata">
	 <p>
    	<?php
         
         if (isset($_POST['submit1'])) {
         	$num1=$_POST['num1'];
         	$num2=$_POST['num2'];
         	$sum=$num1+$num2;

         	echo "Sum is $sum";

         }elseif (isset($_POST['submit2'])) {
         	$num1=$_POST['num1'];
         	$num2=$_POST['num2'];
         	$mul=$num2*$num1;
         	echo "Multiplication of number is $mul";
         }

    	?>
    	
    </p>
</div>

</body>
</html>