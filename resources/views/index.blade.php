<!DOCTYPE html>
<html>
<head>
<style>
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}
</style>
</head>
<body>

<h2>All Product</h2>

 <form action="{{url('/toBill')}}" method="post">
 	@csrf
<table>
  <tr>
    <th>Name</th>
    <th>Price</th>
    <th>Qauntity</th>
  </tr>
  <tr>
    @foreach($products as $key=>$product)
    <td>{{$product->name}}</td>
    <td>{{$product->price}}</td>
    <td><input type="text" name="qty[]" value="{{$product->qauntity}}" size="3" /></td>
    <td><input type="hidden" name="pid[]" value="{{$product->id}}" /></td>
  </tr>
  @endforeach
</table>
	<input type="submit" value="Submit" style="margin-top: 10px;margin-left: 30px;">
</form>
</body>
</html>
