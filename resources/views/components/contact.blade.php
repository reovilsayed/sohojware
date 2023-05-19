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
                                        <div class="col-12 col-lg-4">
                                            <div class="input-wrapper">
                                                <input class="text-input" id="user-name" name="name"
                                                    type="text" />
                                                <label class="input-label" for="user-name">Name<span
                                                        class="req">*</span></label><span
                                                    class="b-border"></span><span class="error-msg"></span>
                                            </div>
                                        </div>
                                        <div class="col-12 col-lg-4">
                                            <div class="input-wrapper">
                                                <input class="text-input" id="user-email" name="email"
                                                    type="email" />
                                                <label class="input-label" for="user-email"> E-mail <span
                                                        class="req">*</span></label><span
                                                    class="b-border"></span><span class="error-msg"></span>
                                            </div>
                                        </div>
                                        <div class="col-12 col-lg-4">
                                            <div class="input-wrapper">
                                                <input class="text-input" id="user-phone" name="phone"
                                                    type="text" />
                                                <label class="input-label" for="user-phone">Phone <small>(Optional)</small></label><span
                                                    class="b-border"></span><span class="error-msg"></span>
                                            </div>
                                        </div>
                                        <div class="col-12 ">
                                            <div class="input-wrapper">
                                                <input class="text-input" id="msg-subject" name="subject"
                                                    type="text" />
                                                <label class="input-label" for="msg-subject">Subject<span
                                                        class="req">*</span></label><span
                                                    class="b-border"></span><span class="error-msg"></span>
                                            </div>
                                        </div>
                                        <div class="col-12 ">
                                            <div class="input-wrapper">
                                                <textarea class=" text-input" id="msg-text" name="message"></textarea>
                                                <label class="input-label" for="msg-text">Details<span
                                                        class="req">*</span></label><span
                                                    class="b-border"></span><i></i><span class="error-msg"></span>
                                            </div>
                                        </div>
                                        <input type="hidden" name="package">
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

 </script>
@endsection
