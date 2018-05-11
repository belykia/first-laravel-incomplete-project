@extends('includes.header1')
@section('content')

<br>
<a href="todo/create" class="btn btn-primary btn-lg">Add News</a>
  <center>   <h1>make your comment </h1></center>
<ul class="list-group">
    @foreach($todos as $todo)

  <li class="list-group-item d-flex justify-content-between align-items-center">
            {{$todo->body}}
            <form action="{{'/todo/'.$todo->id}}" method="POST">
              {{ csrf_field() }}
            {{ method_field('DELETE') }}
             <button type="submit"  >&#xf014;</button>
          </form>
</li>
    @endforeach
</ul>



@endsection
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
</body>
</html>
