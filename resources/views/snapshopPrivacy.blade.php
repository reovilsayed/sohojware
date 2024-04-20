@extends('layouts.app')
@section('title', 'Snapshop Privacy Policy')
@section('social_media')
    <meta property="og:title" content="{{ setting('site.title') }}" />
    <meta property="og:description"content="{{ setting('site.description') }}" />
    <meta property="og:url" content="{{ route('snapshop.privacy') }}" />
@endsection

@section('css')
    <style>
        .header-basic a,
        .header-basic .menu-link {
            color: var(--clr-white) !important;
        }
    </style>
@endsection
@section('content')
    <x-breadcrumb :title="'Snapshop Privacy Policy'" />

    <h1>SnapShop Privacy Policy</h1>

    <p>This Privacy Policy ("Policy") applies to SnapShop, an ecommerce application available for download on the Google
        Play Store. SnapShop is developed and operated by the entity identified on the app's Google Play listing. We are
        committed to safeguarding the privacy of our users, and this Policy outlines how we collect, use, and protect your
        personal information.</p>

    <h3>Contact Information:</h3>
    <p>If you have any questions or concerns regarding this Policy or your privacy while using SnapShop, please don't
        hesitate to contact us at <a href="mailto:furioussayed@gmail.com">furioussayed@gmail.com</a>.</p>

    <h3>Accessibility:</h3>
    <p>You can easily access this Policy on SnapShop's store listing page on the Google Play Store and within the app
        itself. Additionally, it is available on a publicly accessible URL, ensuring readability in standard browsers
        without requiring any additional software.</p>

    <h3>Non-Editable:</h3>
    <p>To maintain the accuracy and transparency of our data handling practices, this Policy is non-editable.</p>

    <h3>Data Handling:</h3>
    <p>SnapShop is committed to transparently disclosing how we handle user data, including:</p>
    <ul>
        <li>The types of personal and sensitive data we collect, such as name, contact information, transaction details, and
            device identifiers.</li>
        <li>How we use this data, which includes managing user accounts, processing orders, personalizing user experiences,
            and improving our services.</li>
        <li>Parties with whom we may share user data, such as third-party service providers assisting with app functionality
            or legal authorities as required by law.</li>
        <li>Our procedures for securely handling and protecting user data, including encryption, access controls, and data
            retention policies.</li>
    </ul>

    <h3>Changes to This Policy:</h3>
    <p>SnapShop reserves the right to update or modify this Policy as needed. Any changes will be prominently displayed
        within the app and on the Google Play Store listing. Your continued use of SnapShop following any changes to this
        Policy indicates your acceptance of those changes.</p>

    <p>If you have any questions or concerns about our Privacy Policy, please reach out to us at <a
            href="mailto:furioussayed@gmail.com">furioussayed@gmail.com</a>.</p>

@endsection
