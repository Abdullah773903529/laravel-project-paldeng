@extends('layout.app')
@section('header')



<br><br>
<h1 style="text-align: center;">  تعديل معلومات العميل     </h1>
<br><br>

<form action="{{ route('buildings.update',1) }}" method="post">
    @csrf
    @method('PUT')
  <div class="input-group mb-3">
    <input type="text" class="form-control" value="{{ $building->title }}" placeholder="title" aria-label="" required>
    <span class="input-group-text"></span>
    <input type="text" class="form-control" value="{{ $building->stryt }}" placeholder="stryt" aria-label="" required>
  </div>
  <div class="input-group mb-3">
      <input type="text" class="form-control" value="{{ $building->ceaty }}" placeholder="ceaty" aria-label="" required>
      <span class="input-group-text"></span>
      <input type="text" class="form-control" value="{{ $building->cuntrey }}" placeholder="cuntrey" aria-label="" required>
    </div>
     <div class="input-group mb-3">
      <input type="text" class="form-control" value="{{ $building->sqft }}" placeholder="sqft" aria-label="" required>
      <span class="input-group-text"></span>
      <input type="text" class="form-control" value="{{ $building->room }}" placeholder="room" aria-label="" required>
    </div>
    <div class="input-group mb-3">
        <input type="text" class="form-control"  value="{{ $building->bath }}" placeholder="bath" aria-label="" required>
        <span class="input-group-text"></span>
        <input type="text" class="form-control"  value="{{ $building->price }}" placeholder="price" aria-label="" required>
      </div>
      <div class="input-group mb-3">
        <input type="text" class="form-control"  value="{{ $building->stats }}" placeholder="stats" aria-label="" required>
        <span class="input-group-text"></span>
        {{-- <input type="text" class="form-control" placeholder="section" aria-label="" required> --}}
      </div>
      {{-- <div class="input-group mb-3">
        <input type="text" class="form-control" placeholder="coustomer" aria-label="" required>
        <span class="input-group-text"></span>
        <input type="text" class="form-control" placeholder="user" aria-label="" required>
      </div> --}}
      <div class="mb-3">
        <input class="form-control" type="file" id="formFile" required>
      </div>
      <div class="mb-3">
            <label class="form-label" for="">Section</label>
           <select class="form-control" name='section' id="">
            {{-- @foreach ($section as $section) --}}
            <option value="{{$building->section->id}}">{{$building->section->title}}</option>
            {{-- @endforeach --}}
           </select>
        </div>
        <div class="mb-3">
            <label class="form-label" for="">customer</label>
           <select class="form-control" name='coustomer' id="">
            {{-- @foreach ($customer as $customer) --}}
            <option value="{{$building->customer->id}}">{{$building->customer->name}}</option>
            {{-- @endforeach --}}
           </select>
        </div>
        <div class="mb-3">
            <label class="form-label" for="">User</label>
           <select class="form-control" name='user' id="">
            {{-- @foreach ($user as $user) --}}
            <option value="{{$building->user->id}}">{{$building->user->name}}</option>
            {{-- @endforeach --}}
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