@extends('layout.app')
@section('header')

<br><br>
<h1 style="text-align: center;"> اظافة مبنى     </h1>
<br><br>
<form action="{{ route('builds.store') }}" method="post">
    @csrf
  <div class="input-group mb-3">
    <input type="text" class="form-control" name= 'title' placeholder="title" aria-label="" required>
    <span class="input-group-text"></span>
    <input type="text" class="form-control" name= 'stryt' placeholder="stryt" aria-label="" required>
  </div>
  <div class="input-group mb-3">
      <input type="text" class="form-control" name= 'ceaty' placeholder="ceaty" aria-label="" required>
      <span class="input-group-text"></span>
      <input type="text" class="form-control" name= 'cuntrey' placeholder="cuntrey" aria-label="" required>
    </div>
     <div class="input-group mb-3">
      <input type="text" class="form-control" name= 'sqft' placeholder="sqft" aria-label="" required>
      <span class="input-group-text"></span>
      <input type="text" class="form-control" name= 'room' placeholder="room" aria-label="" required>
    </div>
    <div class="input-group mb-3">
        <input type="text" class="form-control" name= 'bath' placeholder="bath" aria-label="" required>
        <span class="input-group-text"></span>
        <input type="text" class="form-control" name= 'price' placeholder="price" aria-label="" required>
      </div>
      <div class="input-group mb-3">
        <input type="text" class="form-control" name= 'stats' placeholder="stats" aria-label="" required>
        <span class="input-group-text"></span>
        {{-- <input type="text" class="form-control" placeholder="section" aria-label="" required> --}}
      </div>
      {{-- <div class="input-group mb-3">
        <input type="text" class="form-control" placeholder="coustomer" aria-label="" required>
        <span class="input-group-text"></span>
        <input type="text" class="form-control" placeholder="user" aria-label="" required>
      </div> --}}
      <div class="mb-3">
        <input class="form-control" name= 'img' type="file" id="formFile" required>
      </div>
       <div class="mb-3">
            <label class="form-label" for="">Section</label>
           <select class="form-control" name='section' id="">
            @foreach ($section as $section)
            <option value="{{ $section->id }}">{{$section->title}}</option>
            @endforeach
           </select>
        </div>
        <div class="mb-3">
            <label class="form-label" for="">User</label>
           <select class="form-control" name='user' id="">
            @foreach ($user as $user)
            <option value="{{ $user->id }}">{{$user->name}}</option>
            @endforeach
           </select>
        </div>
    <div class="mb-3">
    </div>
    <div style="text-align: center;"> 
      <button type="submet" class="btn btn-success">Add</button>
    </div>
    <br>
  
</form>

@endsection