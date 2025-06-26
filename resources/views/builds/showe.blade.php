@extends('layout.app')

@section('header')

 <!-- About Start -->
 <div class="container-xxl py-5">
    <div class="container">
        <div class="row g-5 align-items-center">
            <div class="col-lg-6 wow fadeIn" data-wow-delay="0.1s">
                <div class="about-img position-relative overflow-hidden p-5 pe-0">
                    <img class="img-fluid w-100" src="{{asset('assets/img/'.$build->img)}}">
                </div>
            </div>
            <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">
                <h1 class="mb-4">{{$build->title}}</h1>
                <p class="mb-4">{{$build->cuntrey}}  {{$build->ceaty}}  {{$build->stryt}} street</p>
                <p><i class="fa fa-check text-primary me-3"></i> {{$build->sqft}} قدم مربع</p>
                <p><i class="fa fa-check text-primary me-3"></i>{{$build->room}}دورة مياة {{$build->bath}}غرفة </p>
                <p><i class="fa fa-check text-primary me-3"></i>${{$build->price}}</p>
                <a class="btn btn-primary py-3 px-5 mt-3" href="{{ route('buildings.create') }}">{{$build->stats}}</a>
            </div>
        </div>
    </div>
</div>
<!-- About End -->

@endsection