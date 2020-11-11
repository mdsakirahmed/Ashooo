@extends('customer.layout.app')
@push('title') Home @endpush
@push('head')

@endpush
@section('content')
    <div class="wrapper homepage">
        <!-- header -->
        <div class="header">
            <div class="row no-gutters">
                <div class="col-auto">
                    <button class="btn  btn-link text-dark menu-btn"><i class="material-icons">menu</i><span class="new-notification"></span></button>
                </div>
                <div class="col text-center"><img src="{{ asset('uploads/images/'.$setting->logo_header) }}" alt="" class="header-logo"></div>
                <div class="col-auto">
                    <a href="#" class="btn  btn-link text-dark position-relative"><i class="material-icons">notifications_none</i><span class="counts">9+</span></a>
                </div>
            </div>
        </div>
        <!-- header ends -->
        <!-- Start title -->
       <div>
           <div class="alert alert-primary text-center" role="alert">
               <b>General Services</b>
           </div>
       </div>
        <!-- End title -->

        <!-- Start worker service category -->
        <div class="container">
            <div class="row text-center mt-4">
                @foreach($categories as $category)
                    <div class="col-6 col-md-3">
                        <div class="card shadow border-0 mb-3">
                            <div class="card-body">
                                <div class="avatar avatar-60 no-shadow border-0">
                                    <div class="overlay bg-template"></div>
                                    <img src="{{ asset('uploads/images/worker/service-category/'.$category->icon) }}" height="50px" width="50px" style="border-radius: 15px;">
                                </div>
                                <a href="{{ route('customer.showMembershipServices',\Illuminate\Support\Facades\Crypt::encryptString($category->id)) }}"> <p class="mt-3 mb-0 font-weight-bold">{{ $category->name }}</p></a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
        <!-- End worker service category -->

        <!-- Start top ads. by controller this upazila -->
        <div class="swiper-container offer-slide swiper-container-horizontal swiper-container-android">
            <div class="swiper-wrapper" style="transform: translate3d(0px, 0px, 0px); transition-duration: 0ms;">
                @foreach(auth()->user()->upazila->controllers as $controller)
                    @foreach($controller->controllerAds as $controllerAds)
                        <div class="swiper-slide swiper-slide-active">
                            <div class="card shadow border-0 bg-template">
                                <div class="card-body">
                                    <a  @if($controllerAds->url) href="{{ $controllerAds->url }}" target="_blank" @endif >
                                        <img src="{{ asset('uploads/images/ads/controller/'.$controllerAds->image) }}" height="100%" width="100%" style="border-radius: 5px;">
                                    </a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                @endforeach
            </div>
            <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span>
        </div>
        <!-- End top ads.  by controller this upazila -->
        <hr>
        <!-- Start middle ads. by admin for all-->
        <div class="swiper-container offer-slide swiper-container-horizontal swiper-container-android">
            <div class="swiper-wrapper" style="transform: translate3d(0px, 0px, 0px); transition-duration: 0ms;">
                @foreach($adminAds as $adminAds)
                    <div class="swiper-slide swiper-slide-active">
                        <div class="card shadow border-0 bg-template">
                            <div class="card-body">
                                <a  @if($adminAds->url) href="{{ $adminAds->url }}" target="_blank" @endif >
                                    <img src="{{ asset('uploads/images/ads/admin/'.$adminAds->image) }}" height="100%" width="100%" style="border-radius: 5px;">
                                </a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span>
        </div>
        <!-- End middle ads. by admin for all-->

        <!-- footer-->
        <div class="footer">
            <div class="no-gutters">
                <div class="col-auto mx-auto">
                    <div class="row no-gutters justify-content-center">
                        <div class="col-auto">
                            <a href="{{ route('customer.home.index') }}" class="btn btn-link-default active">
                                <i class="material-icons">home</i>
                            </a>
                        </div>
                        <div class="col-auto">
                            <a href="#" class="btn btn-link-default">
                                <i class="material-icons">insert_chart_outline</i>
                            </a>
                        </div>
                        <div class="col-auto">
                            <a href="#" class="btn btn-link-default">
                                <i class="material-icons">account_balance_wallet</i>
                            </a>
                        </div>
                        <div class="col-auto">
                            <a href="#" class="btn btn-link-default">
                                <i class="material-icons">widgets</i>
                            </a>
                        </div>
                        <div class="col-auto">
                            <a href="#" class="btn btn-link-default">
                                <i class="material-icons">account_circle</i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- footer ends-->
    </div>

    <script>
        $(document).ready(function() {
            //Submit new Job
            $('#job-submit-button').click(function(){
                var formData = new FormData();
                formData.append('title', $('#title').val())
                formData.append('description', $('#description').val())
                formData.append('address', $('#address').val())
                formData.append('service', $('#service').val())
                formData.append('day', $('#day').val())
                formData.append('budget', $('#budget').val())

                $.ajax({
                    method: 'POST',
                    url: '/customer/job',
                    headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
                    data: formData,
                    processData: false,
                    contentType: false,
                    success: function (data) {
                        $('#title').val('');
                        $('#description').val('');
                        $('#address').val('');
                        //$('#service').val('');
                        $('#day').val('');
                        $('#budget').val('');
                        Swal.fire({
                            position: 'top-end',
                            icon: 'success',
                            title: 'Successfully add new job.',
                            showConfirmButton: false,
                            timer: 1500
                        })
                    },
                    error: function (xhr) {
                        var errorMessage = '<div class="card bg-danger">\n' +
                            '                        <div class="card-body text-center p-5">\n' +
                            '                            <span class="text-white">';
                        $.each(xhr.responseJSON.errors, function(key,value) {
                            errorMessage +=(''+value+'<br>');
                        });
                        errorMessage +='</span>\n' +
                            '                        </div>\n' +
                            '                    </div>';
                        Swal.fire({
                            icon: 'error',
                            title: 'Oops...',
                            footer: errorMessage
                        })
                    },
                })
            });
        });
    </script>
@endsection
