<?php
  $num1 = rand(1,9);
  $num2 = rand(1,9);

  $sum = $num1 + $num2;
  session()->put('randsum',$sum);
?>

<section class="contact-us  mega-section  py-0" id="contact-us">
    <div class="container">
        <section class="contact-us-form-section  mega-section  ">
            <div class="row">
                <div class="col-12 ">
                    <div class="contact-form-panel">
                        <div class="sec-heading centered    ">
                            <div class="content-area">
                                <h2 class=" title wow fadeInUp" data-wow-delay=".4s">So let's build something together</h2>
                            </div>
                        </div>
                        <div class="contact-form-inputs wow fadeInUp" data-wow-delay=".6s">
                            <div class="custom-form-area input-boxed">
                                <form class="main-form" id="contact-us-form" action="{{route('contact.store')}}"
                                    method="post"><span class="done-msg"></span>
                                    @csrf
                                    <div class="row ">
                                        <div class="col-12 col-lg-6">
                                            <div class="input-wrapper">
                                                <input class="text-input" id="user-name" name="name"
                                                    type="text" />
                                                <label class="input-label" for="user-name">Name<span
                                                        class="req">*</span></label><span
                                                    class="b-border"></span><span class="error-msg"></span>
                                            </div>
                                        </div>
                                        <div class="col-12 col-lg-6">
                                            <div class="input-wrapper">
                                                <input class="text-input" id="user-email" name="email"
                                                    type="email" />
                                                <label class="input-label" for="user-email"> E-mail <span
                                                        class="req">*</span></label><span
                                                    class="b-border"></span><span class="error-msg"></span>
                                            </div>
                                        </div>
                                        <div class="col-12 col-lg-6">
                                            <div class="input-wrapper">
                                                <input class="text-input" id="title" name="title"
                                                    type="text" />
                                                <label class="input-label" for="title">Project Title</label><span
                                                    class="b-border"></span><span class="error-msg"></span>
                                            </div>
                                        </div>
                                        <div class="col-12 col-lg-6">
                                            <div class="input-wrapper">
                                                <input class="text-input" id="msg-subject" name="subject"
                                                    type="file" />
                                                <label class="input-label" for="msg-subject">Atached file<span
                                                        class="req">*</span></label><span
                                                    class="b-border"></span><span class="error-msg"></span>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="input-wrapper">
                                                <textarea class=" text-input" name="message" id="massage"></textarea>
                                                <label class="input-label" for="msg-text">Details<span
                                                        class="req">*</span></label><span
                                                    class="b-border"></span><i></i><span class="error-msg"></span>
                                            </div>
                                        </div>
                                        <div class="col-12 col-lg-4">
                                            <div class="input-wrapper">
                                                <input class="text-input" id="rand_sum" name="rand_sum"
                                                    type="number" />
                                                <label class="input-label" for="rand_sum">{{$num1 .' + '. $num2 }} <span
                                                    class="req">*</span></label><span
                                                    class="b-border"></span><span class="error-msg"></span>
                                            </div>
                                        </div>
                                        <input type="hidden" name="package" id="package">
                                        <div class="col-12 submit-wrapper">
                                            <button class="btn-solid" id="submit-btn" type="submit">Send your message</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
</section>
@section('js')
 <script>
    $('#rand_sum').keyup(function(){

        var rand_sum = $('#rand_sum').val();
        var sum = {{$sum}};
        if(rand_sum != sum){
            $('#rand_sum').siblings(".error-msg").text('Please Enter sum of this two number').css("display", "block");
            $('#rand_sum').addClass('border-danger');
        }else{
            $('#rand_sum').siblings(".error-msg").text("").css("display", "none");
            $('#rand_sum').removeClass('border-danger');
        }
    })
 </script>
@endsection
