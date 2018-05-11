@extends('includes.header1')
@section('content')
<!doctype html>

<html lang="html">
<head>

</head>
  <meta charset="utf-8">
  <title>Titre de la page</title>

</head>
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
  <link rel="stylesheet" href="style.css">
  <script src="script.js"></script>
</head>
<body>
<br>
<a href="/todo" class="btn btn-info">back</a>
<div class="col-lg-4 col-lg-offset-4">
<center>   <h1>Create New Item</h1></center>
<form class="form-horizontal" action="/todo" method="post">
  {{csrf_field()}}
  <center>  <div class="form-group">
    <div class="col-lg-10">
      <textarea class="form-control" name="body" id="exampleTextarea" rows="5"></textarea>
    <br>
      <button type="submit" class="btn btn-primary">Submit</button>
    </div>
    </div></center>
  <br>
</form>

@endsection

