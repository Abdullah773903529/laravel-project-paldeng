@extends('layout.app')
@section('header')

<br><br>
<h1 style="text-align: center;"> تعديل المعلومات   </h1>
<br><br>
<form  method="post" action="{{ route('builds.update',$build->id) }}">
    @csrf
    @method('PUT')
  <div class="input-group mb-3">
    <input type="text" class="form-control" value="{{ $build->title }}" name="title" placeholder="title" aria-label="" required>
    <span class="input-group-text"></span>
    <input type="text" class="form-control" value="{{ $build->stryt }}" name="stryt" placeholder="stryt" aria-label="" required>
  </div>
  <div class="input-group mb-3">
      <input type="text" class="form-control" value="{{ $build->ceaty }}" name="ceaty" placeholder="ceaty" aria-label="" required>
      <span class="input-group-text"></span>
      <input type="text" class="form-control" value="{{ $build->cuntrey }}" name="cuntrey" placeholder="cuntrey" aria-label="" required>
    </div>
     <div class="input-group mb-3">
      <input type="text" class="form-control" value="{{ $build->sqft }}" name="sqft" placeholder="sqft" aria-label="" required>
      <span class="input-group-text"></span>
      <input type="text" class="form-control" value="{{ $build->room }}"  name="room"placeholder="room" aria-label="" required>
    </div>
    <div class="input-group mb-3">
        <input type="text" class="form-control" value="{{ $build->bath }}" name="bath" placeholder="bath" aria-label="" required>
        <span class="input-group-text"></span>
        <input type="text" class="form-control" value="{{ $build->price }}" name="price" placeholder="price" aria-label="" required>
      </div>
      <div class="input-group mb-3">
        <input type="text" class="form-control" value="{{ $build->stats }}" name="stats" placeholder="stats" aria-label="" required>
        <span class="input-group-text"></span>
        {{-- <input type="text" class="form-control" placeholder="section" aria-label="" required> --}}
      </div>
      {{-- <div class="input-group mb-3">
        <input type="text" class="form-control" placeholder="coustomer" aria-label="" required>
        <span class="input-group-text"></span>
        <input type="text" class="form-control" placeholder="user" aria-label="" required>
      </div> --}}
      <div class="mb-3">
        <input class="form-control" name="img" type="file" id="formFile" value="{{ $build->img }}" required>
      </div>
       <div class="mb-3">
            <label class="form-label" for="">Section</label>
           <select class="form-control" name='section' id="">
            {{-- @foreach ($users as $user) --}}
            <option value="{{ $build->id }}">{{ $build->title }}</option>
            {{-- @endforeach --}}
           </select>
        </div>
        <div class="mb-3">
            <label class="form-label" for="">User</label>
           <select class="form-control" name='user' id="">
            {{-- @foreach ($users as $user) --}}
            <option value="{{ $build->user->id }}">{{ $build->user->name }}</option>
            {{-- @endforeach --}}
           </select>
        </div>
    <div class="mb-3">
    </div>
    <div style="text-align: center;"> 
       <button type="submit" class="btn btn-success">Edit</button>
    </div>
    <br>
  
</form>

@endsection