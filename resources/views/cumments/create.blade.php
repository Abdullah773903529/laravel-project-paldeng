@extends('layout.app')
@section('header')


<form method="post" action="{{ route('cumments.store') }}">
    @csrf
    <div class="mb-3">
        <label class="form-label" for="">Description</label>
        <textarea class="form-control" rows="3" name="describtion"></textarea>
    </div>
    <div class="mb-3">
        <label class="form-label" for="">Post Creator</label>
       <select class="form-control" name='customer_id' id="">
        @foreach ($customer as $customer)
        <option value="{{$customer->id}}">{{$customer->name}}</option>
        @endforeach
       </select>
    </div>
    <div class="mb-3">
        <input class="form-control" name= 'img' type="file" id="formFile" required>
      </div>

    <button class="btn btn-success">Submit</button>

</form>

@endsection