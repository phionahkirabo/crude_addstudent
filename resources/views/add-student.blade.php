<html>
<body>
<h2>Add student</h2>
  {{-- @if(session::('success')):
 <div class="alert alert-success" role="alert"> 
    {{ session::get('success') }}
</div>
@endif   --}}
<form action="{{ url('save-student') }}" method="post">
    @csrf
Name: <input type="text" name="name"><br>
E-mail: <input type="text" name="email"><br>
Phone: <input type="text" name="phone"><br>
Address: <input type="text" name="address"><br>
<button type="submit" class="btn btn-primary">Submit</button>
<a href="{{url('studentlist')}}" class="btn btn-dange">Back</a>

</form>

</body>
</html>