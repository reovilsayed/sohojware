<div class="modal fade" id="modalId" role="dialog" aria-labelledby="modalTitleId" aria-hidden="true">
    <div class="modal-dialog  modal-dialog-centered modal-xl" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <form action="{{ route('popup.store') }}" method="POST" id="survey">
                    @csrf
                    <div class="multi-step-form">
                        <div class="multi-step-form__ilustration d-none d-md-block">
                            <img src="{{ asset('assets/images/popup/side-2.jpg') }}" alt="">
                        </div>
                        <div class="steps">
                            <div class="step" data-step="1">
                                <div class="step-container">
                                    <div class="step-title">
                                        <h3>What type of service are you looking for ?</h3>
                                        <p>We offer website development, mobile app, SEO, digital marketing,
                                            graphic
                                            design, and video editing services.</p>
                                    </div>
                                    <div class="step-body">
                                        <div class="options">
                                            <div class="option">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox"
                                                        value="web_development" id="web1" name="services[]" />
                                                    <label class="form-check-label" for="web1">
                                                        <span class="service">Web Development. </span>
                                                        <i class="fa-solid fa-arrow-right"></i>
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="option">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox"
                                                        value="android_ios_application" id="web2"
                                                        name="services[]" />
                                                    <label class="form-check-label" for="web2">
                                                        <span class="service">Android & IOS Application.</span>
                                                        <i class="fa-solid fa-arrow-right"></i>
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="option">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox"
                                                        value="digital_marketing" id="web3" name="services[]" />
                                                    <label class="form-check-label" for="web3">
                                                        <span class="service">Digital Marketing <small>(Seo , Smm ,
                                                                etc)</small>.</span>
                                                        <i class="fa-solid fa-arrow-right"></i>
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="option">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox"
                                                        value="graphics_design" id="web4" name="services[]" />
                                                    <label class="form-check-label" for="web4">
                                                        <span class="service">Graphics Design <small>(Figma , Banner ,
                                                                Logo , UI/UX ,
                                                                etc)</small>.</span>
                                                        <i class="fa-solid fa-arrow-right"></i>
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="option">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox"
                                                        value="video_editing" id="web5" name="services[]" />
                                                    <label class="form-check-label" for="web5">
                                                        <span class="service">Video Editing <small>(Event Videos ,
                                                                Corporate Videos ,
                                                                etc)</small>.</span>
                                                        <i class="fa-solid fa-arrow-right"></i>
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="step" data-step="2">
                                <div class="step-container">
                                    <div class="step-title">
                                        <h3 style="letter-spacing: 0px;">
                                            Provide specific details to help us understand your vision.
                                        </h3>
                                        <p>Crafting your ideas into reality.</p>
                                    </div>
                                    <div class="step-body">
                                        <div class="options">

                                            <div class="form-style-5">
                                                <fieldset>
                                                    <legend><span class="number">#</span> Project Info</legend>
                                                    <input type="text" name="title" placeholder="Your tilte *"
                                                        required>
                                                    <textarea name="description" placeholder="Describe the project" rows="4" required></textarea>
                                                </fieldset>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            @auth
                            @else
                                <div class="step" data-step="3">
                                    <div class="step-container">
                                        <div class="step-title">
                                            <h3>
                                                How can we connect with you
                                            </h3>
                                            <p>Providing the best services & it solutions.</p>
                                        </div>
                                        <div class="step-body">
                                            <div class="options">

                                                <div class="form-style-5">
                                                    <fieldset>
                                                        <legend><span class="number">#</span> Client Info</legend>
                                                        <input type="text" name="name" id="client-name"
                                                            placeholder="Your name *">
                                                        <input type="email" name="email" id="client-email"
                                                            placeholder="Your email *">
                                                        <input type="tel" name="phone" id="client-phone"
                                                            placeholder="Your phone  ">
                                                    </fieldset>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endauth
                            <span id="err-message"></span>
                            <div>
                                <button type="button" class="step-btn text-dark" id="back-btn"><i
                                        class="fa-solid fa-caret-left"></i> Back</button>
                                <button type="button" class="step-btn text-dark" id="next-btn">Next <i
                                        class="fa-solid fa-caret-right"></i></button>
                            </div>
                        </div>
                    </div>
            </div>
            </form>
        </div>
    </div>
</div>

<!-- Optional: Place to the bottom of scripts -->

<script>
    const CheckStep = {
        step0: () => {
            var services = document.querySelectorAll('input[name="services[]"]:checked');
            if (services.length === 0) {
                return 'You need to select an option *';
            };
            return false;
        },
        step1: () => {
            var nameInput = document.querySelector('input[name="title"]');
            if (!nameInput.value.length) {
                return 'You need to enter a title *';
            };
            return false;
        },
        step2: () => {
            var emailInput = document.getElementById('client-email');
            if (!emailInput.value.length) {
                return 'You need to enter an email *';
            };
            var nameInput = document.getElementById('client-name');
            if (!nameInput.value.length) {
                return 'You need to enter a name *';
            };
            return false;
        }
    };

    function check(element) {
        // Find the checkbox or radio input within the clicked .option element
        const input = element.querySelector('.form-check-input');

        // Toggle the checked state of the input
        input.checked = !input.checked;

        // Toggle the 'option-check' class based on the checked state
        if (input.checked) {
            element.classList.add('option-check');
        } else {
            element.classList.remove('option-check');
        }
    }

    document.addEventListener('DOMContentLoaded', function() {
        document.querySelectorAll('.option').forEach(option => {
            option.addEventListener('click', function() {
                check(this);
            });
        });
    });
    document.addEventListener('DOMContentLoaded', () => {
        const steps = document.querySelectorAll('.step');
        let currentStep = 0;
        if (currentStep === 0) {
            document.getElementById('back-btn').classList.add('btn-hidden')
        }

        // Show the first step initially
        steps[currentStep].classList.add('active');

        // Function to go to the next step
        function nextStep() {
            var errMessage = document.getElementById('err-message');
            var nextBtn = document.getElementById('next-btn');
            const stepValidation = CheckStep[`step${currentStep}`]();
            if (stepValidation.length) {
                errMessage.innerHTML = stepValidation;
                return;
            } else {
                errMessage.innerHTML = '';
            }
            steps[currentStep].classList.remove('active');
            currentStep++;
            if (currentStep == steps.length) {
                $('#modalId').modal('hide');
                document.querySelector('#next-btn').type = 'submit';
            }
            steps[currentStep].classList.add('active');
            if (currentStep === 0) {
                document.getElementById('back-btn').classList.add('btn-hidden')
            } else {
                document.getElementById('back-btn').classList.remove('btn-hidden')
            }
        }

        function backStep() {
            if (currentStep > 0) {
                steps[currentStep].classList.remove('active');
                currentStep--;
                steps[currentStep].classList.add('active');
            }
            if (currentStep === 0) {
                document.getElementById('back-btn').classList.add('btn-hidden')
            } else {
                document.getElementById('back-btn').classList.remove('btn-hidden')
            }
        }

        // Add event listeners to the Next buttons
        const nextButton = document.querySelector('#next-btn');
        nextButton.addEventListener('click', nextStep);
        const backButton = document.querySelector('#back-btn');
        backButton.addEventListener('click', backStep);
    });
</script>
