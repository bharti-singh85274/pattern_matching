<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>



<h1> Customers details</h1>


<form method="post" accept="{{url('customers')}}">
	@csrf

	<input type="text" name="firstname" placeholder="firstname"> <br><br>

	<input type="text" name="lastname" placeholder="lasttname"> <br><br>

	<input type="email" name="email" placeholder="email"> <br><br>

	<input type="number" name="mobile" placeholder="mobile"> <br><br>

	<input type="text" name="address" placeholder="address"> <br><br>

    <input type="number" name="price" placeholder="price"> <br><br>

    <input type="number" name="quantity" placeholder="quantity"> <br><br>

     <button type="submit">submit</button>

</form>


</body>
</html>


