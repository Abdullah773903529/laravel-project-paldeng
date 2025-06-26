@extends('layout.app')

@section('header')


<br><br>
<h1 style="text-align: center;">اظافة مدير  </h1>
<br><br>
<form action="" method="post">
    
  <div class="input-group mb-3">
    <input type="text" class="form-control" placeholder="Name" aria-label="" required>
    <span class="input-group-text"></span>
    <input type="text" class="form-control" placeholder="job" aria-label="" required>
  </div>
    <div class="mb-3">
    </div>
    <div style="text-align: center;"> 
       <button type="button" class="btn btn-success">Add</button>
    </div>
    <br>
  
</form>
@endsection