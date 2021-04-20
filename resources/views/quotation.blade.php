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

<h2>Product Qoutation</h2>
<p style="font-weight: bold;">Amitesh Sukla</p>
<br><br>
<a href="{{url('/downLoadQoute')}}" style="padding-top: 100px;">Cancel</a>
 <form action="{{url('/toBill')}}" method="post">
 	@csrf
<table>
  <tr>
    <th>Name</th>
    <th>Price</th>
    <th>Qauntity</th>
  </tr>
  <tr>
    @foreach($qoutes as $key=>$qoute)
    <td>{{$qoute->name}}</td>
    <td>{{$qoute->price}}</td>
    <td>{{$qoute->qty}}</td>
  </tr>
  @endforeach
</table>
</form>
<a href="{{url('/downLoadQoute')}}" style="padding-top: 100px;">Download Qoutation</a>
</body>
</html>
