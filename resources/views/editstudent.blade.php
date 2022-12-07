<html>
<body>
<h2>Edit student</h2>
  {{-- @if(session::('success')):
 <div class="alert alert-success" role="alert"> 
    {{ session::get('success') }}
</div>
@endif   --}}
<form action="{{ url('update-student',$data->id) }}" method="post">
    @csrf
   
    <input type="hidden" name ='id' value="{{ $data->id }}">
Name: <input type="text" name="name" value={{$data->name}}><br>
E-mail: <input type="text" name="email" value={{$data->email}}><br>
Phone: <input type="text" name="phone" value={{$data->phone}}><br>
Address: <input type="text" name="address"value={{$data->addres}}><br>
<button type="submit" class="btn btn-primary">Submit</button>
<a href="{{url('student-list')}}" class="btn btn-dange">Back</a>

</form>

</body>
</html>