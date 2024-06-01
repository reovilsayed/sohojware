<div class="modal fade" id="modalId" tabindex="-1" data-bs-backdrop="static" data-bs-keyboard="false" role="dialog"
    aria-labelledby="modalTitleId" aria-hidden="true">
    <div class="modal-dialog  modal-dialog-centered modal-xl" role="document">
        <div class="modal-content">
            <div class="modal-body">
                
                <form action="{{ route('popup.store') }}" method="POST" id="survey">
                    @csrf
                    <div class="multi-step-form">
                         
                        <div class="multi-step-form__ilustration d-none d-md-block">
                            <img src="{{ asset('assets/images/popup/side.jpg') }}" alt="">
                        </div>

                        <div class="steps">

                            <div class="step" data-step="1">
                                <div class="step-container">
                                    <div class="step-title">
                                        <h3>What type of service are you looking for ?</h3>
                                        <p>We offer website development, mobile app creation, SEO, digital marketing,
                                            graphic
                                            design, and video editing services. Our diverse skill sets
                                            enable us to
                                            support businesses of all sizes and industries
                                            .</p>
                                    </div>
                                    <div class="step-body">
                                        <div class="options">
                                            <div class="option">
                                                <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" value="web_development"
                                                        id="web1" name="services[]"  />
                                                    <label class="form-check-label" for="web1">
                                                        <span>Web Development. </span>
                                                        <i class="fa-solid fa-arrow-right"></i>
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="option">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value="android_ios_application"
                                                        id="web2" name="services[]" />
                                                    <label class="form-check-label" for="web2">
                                                        <span>Android & IOS Application.</span>
                                                        <i class="fa-solid fa-arrow-right"></i>
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="option">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value="digital_marketing"
                                                        id="web3" name="services[]" />
                                                    <label class="form-check-label" for="web3">
                                                        <span>Digital Marketing <small>(Seo , Smm ,
                                                                etc)</small>.</span>
                                                        <i class="fa-solid fa-arrow-right"></i>
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="option">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value="graphics_design"
                                                        id="web4" name="services[]" />
                                                    <label class="form-check-label" for="web4">
                                                        <span>Graphics Design <small>(Figma , Banner , Logo , UI/UX ,
                                                                etc)</small>.</span>
                                                        <i class="fa-solid fa-arrow-right"></i>
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="option">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value="video_editing"
                                                        id="web5" name="services[]" />
                                                    <label class="form-check-label" for="web5">
                                                        <span>Video Editing <small>(Event Videos , Corporate Videos ,
                                                                Social
                                                                Media Content , etc)</small>.</span>
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
                                        <h3>
                                            Provide specific details to help us understand your vision.
                                        </h3>
                                        <p>Crafting your ideas into reality.</p>
                                    </div>
                                    <div class="step-body">
                                        <div class="options">
                                            <div class="option">
                                                <div class="mb-3">
                                                    <label for="FormControlInput" class="form-label ">Title</label>
                                                    <input type="text" class="form-control" id="FormControlInput"
                                                        placeholder="Title..." name="title">
                                                </div>
                                                <div class="mb-4">
                                                    <label for="FormControlTextarea"
                                                        class="form-label">Description</label>
                                                    <textarea class="form-control" id="FormControlTextarea" placeholder="Text here..." rows="6" name="description"></textarea>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
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
                                            <div class="option">
                                                <div class="mb-3">
                                                    <label for="FormControlInput" class="form-label">Name</label>
                                                    <input type="text" class="form-control" id="FormControlInput"
                                                        placeholder="Name..." name="name">
                                                </div>
                                                <div class="row">
                                                    <div class="mb-3 col-lg-6">
                                                        <label for="FormControlInput" class="form-label">Email
                                                            address</label>
                                                        <input type="email" class="form-control"
                                                            id="FormControlInput" placeholder="name@example.com"
                                                            name="email">
                                                    </div>
                                                    <div class="mb-3 col-lg-6">
                                                        <label for="FormControlInput" class="form-label">Phone
                                                            Number</label>
                                                        <input type="tel" class="form-control"
                                                            id="FormControlInput" placeholder="" name="phone">
                                                    </div>
                                                </div>

                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <button type="button" class="step-btn" id="back-btn">Back</button>
                                <button type="button" class="step-btn" id="next-btn">Next</button>
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
    const myModal = new bootstrap.Modal(
        document.getElementById("modalId"),
        options,
    );
</script>
<script>
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

        // Show the first step initially
        steps[currentStep].classList.add('active');

        // Function to go to the next step
        function nextStep() {
            steps[currentStep].classList.remove('active');
            currentStep++;
            if (currentStep == steps.length) {
                document.querySelector('#next-btn').type = 'submit';
            }
            steps[currentStep].classList.add('active');
        }

        function backStep() {
            if (currentStep > 0) {
                steps[currentStep].classList.remove('active');
                currentStep--;
                steps[currentStep].classList.add('active');
            }
        }

        // Add event listeners to the Next buttons
        const nextButton = document.querySelector('#next-btn');
        nextButton.addEventListener('click', nextStep);
        const backButton = document.querySelector('#back-btn');
        backButton.addEventListener('click', backStep);
    });
</script>
