@extends('layout.app')
@section('header')

<div class="container-xxl py-5">
    <div class="container">
        <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
            <h1 class="mb-3">Property Types</h1>
            <p>Eirmod sed ipsum dolor sit rebum labore magna erat. Tempor ut dolore lorem kasd vero ipsum sit eirmod sit. Ipsum diam justo sed rebum vero dolor duo.</p>
        </div>
        <div class="row g-4">
         {{-- @foreach ($section as $section ) --}}
             
         <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.3s">
             <a class="cat-item d-block bg-light text-center rounded p-3" href="">
                 <div class="rounded p-4">
                     <div class="icon mb-3">
                         <img class="img-fluid" src="{{asset('assets/img/'.$section->img )}}" alt="Icon">
                     </div>
                     <h6>{{$section->title}}</h6>
                     <span> </span>
                     {{-- {{$sectionmanager->manager->name}} --}}
                 </div>
             </a>
         </div>
         {{-- @endforeach --}}
          
        </div>
    </div>
 </div>
 <!-- Category End -->


        
        <!-- Property List Start -->
        <div class="container-xxl py-5">
            <div class="container">
               
                <div class="tab-content">
                    <div id="tab-1" class="tab-pane fade show p-0 active">
                        <div class="row g-4">
                            @foreach ($data as $build)
                            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                                <div class="property-item rounded overflow-hidden">
                                    <div class="position-relative overflow-hidden">
                                        <a href="{{ route('builds.showe',$build->id) }}"><img class="img-fluid" src="{{asset('assets/img/'.$build->img)}}" alt=""></a>
                                        <div class="bg-primary rounded text-white position-absolute start-0 top-0 m-4 py-1 px-3">{{$build->stats}}</div>
                                        <div class="bg-white rounded-top text-primary position-absolute start-0 bottom-0 mx-4 pt-1 px-3">{{$build->title}}</div>
                                    </div>
                                    <div class="p-4 pb-0">
                                        <h5 class="text-primary mb-3">${{$build->price}}</h5>
                                        <a class="d-block h5 mb-2" href="{{ route('builds.edit',$build->id) }}">Golden Urban Building {{$build->stats}}</a>
                                        <p><i class="fa fa-map-marker-alt text-primary me-2"></i> {{$build->stryt}} Street, {{$build->ceaty}}, {{$build->cuntrey}}</p>
                                    </div>
                                    <div class="d-flex border-top">
                                        <small class="flex-fill text-center border-end py-2"><i class="fa fa-ruler-combined text-primary me-2"></i>{{$build->sqft}}Sqft</small>
                                        <small class="flex-fill text-center border-end py-2"><i class="fa fa-bed text-primary me-2"></i>{{$build->room}} Bed</small>
                                        <small class="flex-fill text-center py-2"><i class="fa fa-bath text-primary me-2"></i>{{$build->bath}} Bath</small>
                                        <small class="flex-fill text-center border-end py-2"></i>
                                            <form  method="POST" action="{{ route('builds.destroy',$build->id) }}">
                                                @csrf
                                                @method('DELETE')
                                                {{-- style="display: inline" --}}
                                                <button type='submit' class="btn btn-danger">Delete</button></td>
                                              </form>
                                        
                                        </small>
                                        
                                    </div>
                                </div>
                            </div>
                            @endforeach
                           
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Property List End -->



@endsection