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
    @foreach($item->subject as $subdata)
    <td>{{$subdata->sub1}}</td>
    <td>{{$subdata->sub2}}</td>
    <td>{{$subdata->sub3}}</td>
    <td>{{$subdata->total}}</td>
    @endforeach

  </tr>
  @endforeach
  
</table>

</body>
</html>