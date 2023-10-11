<!DOCTYPE html>
<html>
<head>
<style>
table, th, td {
  border: 1px solid black;
  border-collapse: collapse;
}
</style>
</head>
<body>

<h1>Pdf View</a>

<table>
  <tr>
    <th>Name</th>
    <th>Email</th>
    <th>Phone</th>
    <th>Subject 1</th>
    <th>Subject 2</th>
    <th>Subject 3</th>
    <th>Total</th>
    
  </tr>
  
  @foreach($data as $item)
  <tr>
    <td>{{$item->name}}</td>
    <td>{{$item->email}}</td>
    <td>{{$item->phone}}</td>
    <td>{{$item->sub1}}</td>
    <td>{{$item->sub2}}</td>
    <td>{{$item->sub3}}</td>
    <td>{{$item->total}}</td>
  </tr>
  @endforeach
  
</table>

</body>
</html>