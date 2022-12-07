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

<h2>Student-list</h2>
<div style="margin-right:10%;float: right;">
    <a href="{{url('add-student')}}">Add</a>
</div>
<table>
  <tr>
    <th>#</th>
    <th>Name</th>
    <th>Email</th>
    <th>Phone</th>
    <th>Address</th>
    <th>Action</th>
  </tr>
@foreach ($data as $i=> $stu)
      
  
  <tr>
    <td>{{ $i+= 1}}</td>
    <td>{{ $stu->name }}</td>
    <td>{{ $stu->email }}</td>
    <td>{{ $stu->phone }}</td>
    <td>{{ $stu->addres }}</td>
    <td> <a href="{{url('edit-student/'.$stu->id)}}">edit</a> | <td> <a href="{{url('delete-student/'.$stu->id)}}">delete</a> </td>
    
  </tr>
  
  @endforeach
</table>

</body>
</html>

