@extends('layouts.master')

@section('title', 'Services Page')

@section('content')

 

 
<section class="py-5" style="background-color: #000;">
    <div class="container">
        <div class="text-center text-white mb-5">
            <h1 class="text-danger">Our Services</h1>
            <p class="lead">Explore the details of the services we offer.</p>
        </div>

        <div class="row gy-5 gx-4">
            <!-- Example Card -->
            <div class="col-md-4">
                <div class="card bg-dark text-white h-100 border-0 shadow-sm p-3 mb-4">
                    <img src="https://via.placeholder.com/600x400" class="card-img-top rounded mb-3" alt="Service">
                    <div class="card-body px-2">
                        <h2 class="card-title text-danger">Digital Marketing</h2>
                        <p class="card-text">Elevate your online presence with our strategic digital marketing solutions, merging tactics and trends to grow your brand.</p>
                    </div>
                </div>
            </div>
            <!-- aro card gulo copy kore boshate paro -->
        </div>
    </div>
</section>
 


@endsection
