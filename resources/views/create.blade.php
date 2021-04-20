<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<h1>Create Product</h1>
<form action="{{url('/store')}}" method="post">
	@csrf
	<input type="text" name="name" placeholder="Enter Produc Name">
	<input type="text" name="description" placeholder="Enter Produc Description">
	<!-- <input type="text" name="qauntity" placeholder="Enter Produc Qauntity"> -->
	<input type="text" name="price" placeholder="Enter Produc Price">
	
	<button>Submit</button>
</form>
</body>
</html>