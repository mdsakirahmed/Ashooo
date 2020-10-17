<!--Offer Modal -->
<div class="modal fade" id="offer-modal" tabindex="-1" role="dialog" aria-hidden="true" data-backdrop="static" aria-labelledby="staticBackdropLabel">
    <div class="modal-dialog modal-sm modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header border-0">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body text-center pt-0">
                @if(Session::get('language') == 'bn')
                    <p class="text-mute">{!! $setting->bn_offer !!}</p>
                @else
                    <p class="text-mute">{!! $setting->en_offer !!}</p>
                @endif
            </div>
            <div class="modal-footer border-0">
                <button type="button" class="btn btn-default btn-lg btn-rounded shadow btn-block" class="close" aria-hidden="true" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

<!--Referral Income System Modal -->
<div class="modal fade" id="referral-income-system-modal" tabindex="-1" role="dialog" aria-hidden="true" data-backdrop="static" aria-labelledby="staticBackdropLabel">
    <div class="modal-dialog modal-sm modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header border-0">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body text-center pt-0">
                @if(Session::get('language') == 'bn')
                    <p class="text-mute">{!! $setting->bn_referral_income_system !!}</p>
                @else
                    <p class="text-mute">{!! $setting->en_referral_income_system !!}</p>
                @endif
            </div>
            <div class="modal-footer border-0">
                <button type="button" class="btn btn-default btn-lg btn-rounded shadow btn-block" class="close" aria-hidden="true" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

<!--Worker Video training Modal -->
<div class="modal fade" id="video-training-modal" tabindex="-1" role="dialog" aria-hidden="true" data-backdrop="static" aria-labelledby="staticBackdropLabel">
    <div class="modal-dialog modal-sm modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header border-0">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body text-center pt-0">
                <div class="embed-responsive embed-responsive-16by9">
                    <iframe width="560" height="315" src="{{ $setting->worker_video_training_url }}" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>
            </div>
            <div class="modal-footer border-0">
                <button type="button" class="btn btn-default btn-lg btn-rounded shadow btn-block" class="close" aria-hidden="true" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

<!--Help Line Modal -->
<div class="modal fade" id="help-line-modal" tabindex="-1" role="dialog" aria-hidden="true" data-backdrop="static" aria-labelledby="staticBackdropLabel">
    <div class="modal-dialog modal-sm modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header border-0">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body text-center pt-0">
                @if(Session::get('language') == 'bn')
                    <p class="text-mute">{!! $setting->bn_help_line !!}</p>
                @else
                    <p class="text-mute">{!! $setting->en_help_line !!}</p>
                @endif
            </div>
            <div class="modal-footer border-0">
                <button type="button" class="btn btn-default btn-lg btn-rounded shadow btn-block" class="close" aria-hidden="true" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

<!--About Modal -->
<div class="modal fade" id="about-modal" tabindex="-1" role="dialog" aria-hidden="true" data-backdrop="static" aria-labelledby="staticBackdropLabel">
    <div class="modal-dialog modal-sm modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header border-0">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body text-center pt-0">
                @if(Session::get('language') == 'bn')
                    <p class="text-mute">{!! $setting->bn_about !!}</p>
                @else
                    <p class="text-mute">{!! $setting->en_about !!}</p>
                @endif
            </div>
            <div class="modal-footer border-0">
                <button type="button" class="btn btn-default btn-lg btn-rounded shadow btn-block" class="close" aria-hidden="true" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

<!--Faq Modal -->
<div class="modal fade" id="faq-modal" tabindex="-1" role="dialog" aria-hidden="true" data-backdrop="static" aria-labelledby="staticBackdropLabel">
    <div class="modal-dialog modal-sm modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header border-0">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body text-center pt-0">
                @if(Session::get('language') == 'bn')
                    <p class="text-mute">{!! $setting->bn_faq !!}</p>
                @else
                    <p class="text-mute">{!! $setting->en_faq !!}</p>
                @endif
            </div>
            <div class="modal-footer border-0">
                <button type="button" class="btn btn-default btn-lg btn-rounded shadow btn-block" class="close" aria-hidden="true" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

<!--Terms And Condition Modal -->
<div class="modal fade" id="terms-and-condition-modal" tabindex="-1" role="dialog" aria-hidden="true" data-backdrop="static" aria-labelledby="staticBackdropLabel">
    <div class="modal-dialog modal-sm modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header border-0">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body text-center pt-0">
                @if(Session::get('language') == 'bn')
                    <p class="text-mute">{!! $setting->bn_terms_and_condition !!}</p>
                @else
                    <p class="text-mute">{!! $setting->en_terms_and_condition !!}</p>
                @endif
            </div>
            <div class="modal-footer border-0">
                <button type="button" class="btn btn-default btn-lg btn-rounded shadow btn-block" class="close" aria-hidden="true" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

<!--Privacy Policy Modal -->
<div class="modal fade" id="privacy-policy-modal" tabindex="-1" role="dialog" aria-hidden="true" data-backdrop="static" aria-labelledby="staticBackdropLabel">
    <div class="modal-dialog modal-sm modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header border-0">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body text-center pt-0">
                @if(Session::get('language') == 'bn')
                    <p class="text-mute">{!! $setting->bn_privacy_policy !!}</p>
                @else
                    <p class="text-mute">{!! $setting->en_privacy_policy !!}</p>
                @endif
            </div>
            <div class="modal-footer border-0">
                <button type="button" class="btn btn-default btn-lg btn-rounded shadow btn-block" class="close" aria-hidden="true" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>


<script>
    $(document).ready(function() {
        $('.offer-modal-btn').click(function(){
            $('#offer-modal').modal('show');
        });

        $('.referral-income-system-btn').click(function(){
            $('#referral-income-system-modal').modal('show');
        });

        $('.video-training-btn').click(function(){
            $('#video-training-modal').modal('show');
        });

        $('.help-line-btn').click(function(){
            $('#help-line-modal').modal('show');
        });

        $('.about-btn').click(function(){
            $('#about-modal').modal('show');
        });

        $('.faq-btn').click(function(){
            $('#faq-modal').modal('show');
        });

        $('.terms-and-condition-btn').click(function(){
            $('#terms-and-condition-modal').modal('show');
        });

        $('.privacy-policy-btn').click(function(){
            $('#privacy-policy-modal').modal('show');
        });
    });
</script>




<!-- Payment Modal -->
<div class="modal fade" id="" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-sm modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header border-0">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body text-center pt-0">
                <img src="{{ asset('assets/mobile/img/surjopay.png') }}" alt="logo" class="logo-small">
                <div class="form-group mt-4" style="display: none">
                    <input type="text" class="form-control form-control-lg bg-secondary text-white text-center payment-amount" placeholder="Enter amount" required="" autofocus="">
                </div>
                <br>
                <p class="text-mute">Your due amount id <b class="text-red-600">{{ auth()->user()->balance->due }} ৳</b></p>
            </div>
            <div class="modal-footer border-0">
                <button type="button" class="btn btn-default btn-lg btn-rounded shadow btn-block payment">Pay Now</button>
            </div>
        </div>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="payment-modal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-sm modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header border-0 text-center">
                <h5 style="color: tomato">
                    @if(auth()->user()->balance->due > 0)
                        Due: {{ auth()->user()->balance->due }} ৳
                    @else
                        Due clear
                    @endif
                </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body pt-0">
                <div class="card shadow border-0 mb-3">
                    <div class="card-body">
                        <div class="row align-items-center">
                            <div class="col-auto pr-0">
                                <div class="avatar avatar-60 no-shadow border-0">
                                    <img src="{{ asset('uploads/images/users/'.auth()->user()->image) }}" alt="">
                                </div>
                            </div>
                            <div class="col">
                                <h6 class="font-weight-normal mb-1">{{ auth()->user()->full_name }}</h6>
                                <p class="text-mute small text-secondary">{{ auth()->user()->phone }}</p>
                            </div>
                        </div>
                    </div>
                </div>
                <hr>
                <div class="form-group mt-4 text-center">
                    <img src="{{ asset('assets/mobile/img/surjopay.png') }}" alt="logo" class="logo-small">
                </div>
            </div>
            <div class="modal-footer border-0">
                @if(auth()->user()->balance->due > 0)
                    <button type="button" class="btn btn-default btn-lg btn-rounded shadow btn-block payment">Pay Now</button>
                @endif
            </div>
        </div>
    </div>
</div>


<script>
    $(document).ready(function() {
        $('.payment-modal-btn').click(function(){
            $('#payment-modal').modal('show');
        });

        $('.payment').click(function (){
            $('.payment-amount').val()
            location.replace("{{ route('worker.duePay', 'payment') }}");
        });
    });
</script>


