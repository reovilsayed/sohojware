<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&display=swap"
        rel="stylesheet">
</head>
<style>
    * {
        margin: 0;
        padding: 0;
    }

    body {

        text-transform: none !important;
        font-family: "Inter", sans-serif;
        font-size: 14px;
        font-style: normal;
    }

    .fw-bold {
        font-weight: 700 !important;
    }

    .fw-medium {
        font-weight: 500 !important;
    }

    .fw-regular {
        font-weight: 300 !important;
    }

    .fw-light {
        font-weight: 200 !important;
    }

    .containar {
        margin: 0 auto;
    }

    .header {
        display: flex;
        background: #F8F8F8
    }

    .logo {
        margin-left: 20px;
        margin-top: 18px;
    }

    .title {
        margin-left: 228px;
        margin-top: 32px;
        color: #111111;
    }

    .content {
        margin: 0 23px;
    }

    .content_item {
        display: flex;
        width: 754px;
        border-radius: 5px;
        border: 1px solid #EAEAEA;
    }

    .form_content {
        width: 754px;
        border-radius: 4px;
        border: 1px solid #EAEAEA;
    }

    .lable {
        margin: 20px 72px 0 0;
    }

    .data {
        margin: 21px 0;
    }

    .lable-gorup {
        padding: 25px;
        display: inline;
        width: 220;
    }

    .data-group {
        padding: 25px 0;
    }

    .sub-content {
        margin-left: 8px;
        margin-top: 23px;
        margin-bottom: 8px;
    }

    .form_content_item {
        display: flex;
    }

    hr {
        margin: 2px;
        height: 1px;
        background-color: #EAEAEA;
        border: none;
    }

    .check-group {
        margin: 25px;
    }

    .check-item-2 {
        margin: 16px 0 0 0;
    }

    input[type='checkbox'] {
        accent-color: #4E4E4E;
    }

    .content-text {
        font-size: 12px;
        padding: 0 25px 25px 25px;
    }
</style>

<body style="background-color: grey">
    <div class="containar" style="width: 800px; background-color: white">
        <section class="header" style="height: 80px;">
            <div class="logo">
                <img src="{{ asset('assets/157.png') }}" alt="">
            </div>
            <div class="title">
                <p>Exclusive Content Submission</p>
            </div>
        </section>
        <section class="content">
            <div class="content_title" style="color: #1111AA;">
                <div class="fw-bold sub-content">Submitted Content</div>
            </div>
            <div class="content_item" style="background-color: #FAFAFA">
                <div class="lable-gorup">
                    <div class="fw-medium lable">Uploaded file:</div>
                    <div class="fw-medium lable">Public video link:</div>
                    <div class="fw-medium lable">Suggest title:</div>
                    <div class="fw-medium lable">Video description:</div>
                </div>
                <div class="data-group" style="padding-left: 8px;">
                    <div class="fw-regular data" style="font-size: 13px !important;">
                        https://downloads.viralsnare.com/videos/KmbVTwzrdGpwpao.mov</div>
                    <div class="fw-regular data" style="font-size: 13px !important;">https://www.tiktok.com/t/ZP8R53BKx/
                    </div>
                    <div class="fw-regular data" style="font-size: 13px !important;">Bear playing with his feet in
                        sierra madre Pond</div>
                    <div class="fw-regular data" style="font-size: 13px !important;">Bear came to our pond to cool off
                        and played with his feet</div>
                </div>
            </div>
        </section>
        <section class="content">
            <div class="content_title" style="color: #1111AA;">
                <div class="fw-bold sub-content">Submitter Details</div>
            </div>
            <div class="content_item">
                <div class="lable-gorup">
                    <div class="fw-medium lable">Full name:</div>
                    <div class="fw-medium lable">Email address:</div>
                    <div class="fw-medium lable">Date of birth:</div>
                    <div class="fw-medium lable">Phone number:</div>
                </div>
                <div class="data-group" style="padding-left: 28px;">
                    <div class="fw-regular data" style="font-size: 13px !important;">Sandy Duvall</div>
                    <div class="fw-regular data" style="font-size: 13px !important;">sandy@sierrafit.com</div>
                    <div class="fw-regular data" style="font-size: 13px !important;">March 14, 1960</div>
                    <div class="fw-regular data" style="font-size: 13px !important;">+1 (459) 799-4651</div>
                </div>
            </div>
        </section>
        <section class="content">
            <div class="content_title" style="color: #1111AA;">
                <div class="fw-bold sub-content">Exclusive Submission Confirmation</div>
            </div>
            <div class="form_content">
                <div class="form_content_item">
                    <div class="lable-gorup">
                        <div class="fw-medium lable">Form submitted on:</div>

                    </div>
                    <div class="data-group">
                        <div class="fw-regular data" style="font-size: 13px !important;">Sep 26, 2024 at 00:22:30 (UTC)
                        </div>
                        <div class="fw-regular data" style="font-size: 13px !important;">Sep 26, 2024 at 00:22:30 (GMT)
                        </div>
                        <div class="fw-regular data" style="font-size: 13px !important;">Sep 26, 2024 at 00:22:30 (CET)
                        </div>
                        <div class="fw-regular data" style="font-size: 13px !important;">Sep 26, 2024 at 00:22:30 (ET)
                        </div>
                        <div class="fw-regular data" style="font-size: 13px !important;">Sep 26, 2024 at 00:22:30 (PT)
                        </div>
                    </div>
                </div>
                <hr>
                <div class="check-group">
                    <div class="check-item">
                        <input type="checkbox" name="" id="" checked>
                        <label for="">Yes, I have read and agreed to the Terms of Service.</label>
                    </div>
                    <div class="check-item-2">
                        <input type="checkbox" name="" id="" checked>
                        <label for="">Yes, I have read and agreed to the Terms of Service.</label>
                    </div>
                </div>
                <hr style="margin: 25px;">
                <div class="content-text fw-light" style="text-align: justify;">
                    Upon uploading, submitting, emailing, posting, publishing or otherwise transmitting any User
                    Submissions to the Site, you retain ownership of any intellectual property rights you hold in and to
                    the User Submissions; however, you grant ViralSnare an exclusive, worldwide, assignable and
                    sublicensable, perpetual and irrevocable right and license to use, reproduce, modify, adapt,
                    rearrange, promote, market, prepare derivative works based on, perform, display, publish,
                    distribute, transmit, stream, broadcast and otherwise exploit such User Submissions in any form,
                    method, medium, platform or technology now known or later developed, including without limitation on
                    the Site and third party websites, podcast, video game consoles and services, mobile apps,
                    video-on-demand and television (the “Licensed Rights”).
                </div>

            </div>
            <br>

        </section>
    </div>
</body>

</html>
