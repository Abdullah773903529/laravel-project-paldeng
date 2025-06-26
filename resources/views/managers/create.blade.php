@extends('layout.app')

@section('header')


<br><br>
<h1 style="text-align: center;">اظافة مدير  </h1>
<br><br>
<form action="{{ route('manager.store') }}" method="post">
  @csrf
  <div class="input-group mb-3">
    <input type="text" class="form-control" name="name" placeholder="Name" aria-label="" required>
    <span class="input-group-text"></span>
    <input type="text" class="form-control" name="job" placeholder="job" aria-label="" required>
  </div>
    <div class="mb-3">
    </div>
    <div class="mb-3">
      <input class="form-control" name= 'img' type="file" id="formFile" required>
    </div>
    <div style="text-align: center;"> 
       <button type="supmit" class="btn btn-success">Add</button>
    </div>
    <br>
  
</form>
@endsection