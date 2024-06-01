<div class="modal fade" id="modalId" tabindex="-1" data-bs-backdrop="static" data-bs-keyboard="false" role="dialog"
    aria-labelledby="modalTitleId" aria-hidden="true">
    <div class="modal-dialog  modal-dialog-centered modal-xl" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <div class="multi-step-form">
                    <div class="multi-step-form__ilustration d-none d-md-block">
                        <img src="{{ asset('assets/images/popup/side.jpg') }}" alt="">
                    </div>
                    <div class="steps">
                        <div class="step" data-step="1">
                            <div class="step-container">
                                <div class="step-title">
                                    <h3>What type of service are you looking for ? 1</h3>
                                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nemo, quos.</p>
                                </div>
                                <div class="step-body">
                                    <div class="options">
                                        <div class="option">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value=""
                                                    id="web1" />
                                                <label class="form-check-label" for="web1">
                                                    <span>Web Design & Development. </span>
                                                    <i class="fa-solid fa-arrow-right"></i>
                                                </label>
                                            </div>
                                        </div>
                                        <div class="option">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value=""
                                                    id="web2" />
                                                <label class="form-check-label" for="web2">
                                                    <span>Android & IOS Application.</span>
                                                    <i class="fa-solid fa-arrow-right"></i>
                                                </label>
                                            </div>
                                        </div>
                                        <div class="option">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value=""
                                                    id="web5" />
                                                <label class="form-check-label" for="web5">
                                                    <span>Digital Marketing <small>(Seo , Smm ,
                                                            etc)</small>.</span>
                                                    <i class="fa-solid fa-arrow-right"></i>
                                                </label>
                                            </div>
                                        </div>
                                        <div class="option">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value=""
                                                    id="web3" />
                                                <label class="form-check-label" for="web3">
                                                    <span>Graphics Design <small>()</small>.</span>
                                                    <i class="fa-solid fa-arrow-right"></i>
                                                </label>
                                            </div>
                                        </div>
                                        <div class="option">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value=""
                                                    id="web4" />
                                                <label class="form-check-label" for="web4">
                                                    <span>Video Editing <small>(Figma , Banner , Logo , UI/UX ,
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
                                    <h3>
                                        What kind of video editing do you need?
                                    </h3>
                                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nemo, quos.</p>
                                </div>
                                <div class="step-body">
                                    <div class="options">
                                        <div class="option">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value=""
                                                    id="web1" />
                                                <label class="form-check-label" for="web1">
                                                    <span>Corporate Videos .</span>
                                                    <i class="fa-solid fa-arrow-right"></i>
                                                </label>
                                            </div>
                                        </div>
                                        <div class="option">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value=""
                                                    id="web2" />
                                                <label class="form-check-label" for="web2">
                                                    <span>Promotional Videos .</span>
                                                    <i class="fa-solid fa-arrow-right"></i>
                                                </label>
                                            </div>
                                        </div>
                                        <div class="option">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value=""
                                                    id="web3" />
                                                <label class="form-check-label" for="web3">
                                                    <span>Social Media Content.</span>
                                                    <i class="fa-solid fa-arrow-right"></i>
                                                </label>
                                            </div>
                                        </div>
                                        <div class="option">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value=""
                                                    id="web4" />
                                                <label class="form-check-label" for="web4">
                                                    <span>Animation and Motion Graphics .</span>
                                                    <i class="fa-solid fa-arrow-right"></i>
                                                </label>
                                            </div>
                                        </div>
                                        <div class="option">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value=""
                                                    id="web5" />
                                                <label class="form-check-label" for="web5">
                                                    <span>Event Videos .</span>
                                                    <i class="fa-solid fa-arrow-right"></i>
                                                </label>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="step" data-step="3">
                            <div class="step-container">
                                <div class="content">
                                    <h3 class="d-flex align-items-center justify-content-center">Thank you</h3>
                                </div>
                            </div>
                        </div>
                        <div>
                            <button class="step-btn" id="back-btn">Back</button>
                            <button class="step-btn" id="next-btn">Next</button>
                        </div>
                    </div>
                </div>
            </div>

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
            if (currentStep < steps.length - 1) {
                steps[currentStep].classList.remove('active');
                currentStep++;
                steps[currentStep].classList.add('active');
            }
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
