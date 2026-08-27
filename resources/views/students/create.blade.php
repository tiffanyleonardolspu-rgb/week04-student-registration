<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Student Registration | CIT</title>

    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
        rel="stylesheet"
    >

    <link
        rel="preconnect"
        href="https://fonts.googleapis.com"
    >

    <link
        rel="preconnect"
        href="https://fonts.gstatic.com"
        crossorigin
    >

    <link
        href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap"
        rel="stylesheet"
    >

    <style>

        * {
            box-sizing: border-box;
        }

        body {
            margin: 0;
            font-family: 'Inter', sans-serif;
            background: #f4f7fb;
            color: #172033;
        }

        /* =========================
           TOP NAVIGATION
        ========================= */

        .topbar {
            height: 72px;
            background: #ffffff;
            border-bottom: 1px solid #e8edf4;
            display: flex;
            align-items: center;
        }

        .brand {
            display: flex;
            align-items: center;
            gap: 12px;
            font-weight: 800;
            color: #14213d;
            text-decoration: none;
            font-size: 18px;
        }

        .brand-icon {
            width: 40px;
            height: 40px;
            background: #1d4ed8;
            color: white;
            border-radius: 11px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: 800;
        }

        .brand small {
            display: block;
            font-size: 10px;
            font-weight: 500;
            color: #7b8494;
            margin-top: 1px;
        }

        /* =========================
           PAGE
        ========================= */

        .page-wrapper {
            max-width: 1120px;
            margin: 0 auto;
            padding: 45px 20px 70px;
        }

        .page-heading {
            margin-bottom: 30px;
        }

        .page-heading h1 {
            font-size: 32px;
            font-weight: 800;
            letter-spacing: -0.8px;
            margin-bottom: 8px;
            color: #111827;
        }

        .page-heading p {
            color: #6b7280;
            margin: 0;
            font-size: 15px;
        }

        /* =========================
           PROGRESS
        ========================= */

        .progress-card {
            background: #ffffff;
            border: 1px solid #e7ebf2;
            border-radius: 16px;
            padding: 22px 25px;
            margin-bottom: 24px;
        }

        .progress-wrapper {
            display: flex;
            align-items: center;
        }

        .step {
            display: flex;
            align-items: center;
            gap: 10px;
            color: #9ca3af;
            font-size: 13px;
            font-weight: 600;
            white-space: nowrap;
        }

        .step.active {
            color: #1d4ed8;
        }

        .step-number {
            width: 32px;
            height: 32px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            background: #edf2f7;
            color: #6b7280;
            font-size: 13px;
            font-weight: 700;
        }

        .step.active .step-number {
            background: #1d4ed8;
            color: white;
        }

        .progress-line {
            height: 1px;
            background: #e5e7eb;
            flex: 1;
            margin: 0 18px;
        }

        /* =========================
           MAIN CARD
        ========================= */

        .form-card {
            background: #ffffff;
            border: 1px solid #e6eaf0;
            border-radius: 18px;
            overflow: hidden;
            box-shadow: 0 8px 30px rgba(15, 23, 42, 0.05);
        }

        .card-header-custom {
            padding: 28px 32px;
            border-bottom: 1px solid #edf0f4;
        }

        .card-header-custom h2 {
            font-size: 19px;
            font-weight: 700;
            margin-bottom: 5px;
        }

        .card-header-custom p {
            margin: 0;
            color: #7b8494;
            font-size: 13px;
        }

        .form-body {
            padding: 32px;
        }

        /* =========================
           SECTION
        ========================= */

        .section {
            margin-bottom: 38px;
        }

        .section:last-child {
            margin-bottom: 0;
        }

        .section-heading {
            display: flex;
            align-items: center;
            gap: 12px;
            margin-bottom: 23px;
        }

        .section-icon {
            width: 38px;
            height: 38px;
            border-radius: 10px;
            background: #eff6ff;
            color: #1d4ed8;
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: 800;
            font-size: 14px;
        }

        .section-heading h3 {
            margin: 0;
            font-size: 15px;
            font-weight: 700;
            color: #172033;
        }

        .section-heading p {
            margin: 3px 0 0;
            color: #8a93a2;
            font-size: 12px;
        }

        /* =========================
           FORM
        ========================= */

        .form-label {
            font-size: 12px;
            font-weight: 600;
            color: #374151;
            margin-bottom: 8px;
        }

        .required {
            color: #dc2626;
        }

        .form-control,
        .form-select {
            min-height: 46px;
            border: 1px solid #dfe4eb;
            border-radius: 9px;
            font-size: 13px;
            color: #172033;
            padding: 10px 13px;
            background-color: #ffffff;
            transition: all .2s ease;
        }

        textarea.form-control {
            min-height: 105px;
            resize: vertical;
        }

        .form-control::placeholder {
            color: #b0b6c0;
        }

        .form-control:focus,
        .form-select:focus {
            border-color: #3b82f6;
            box-shadow: 0 0 0 3px rgba(59, 130, 246, .10);
        }

        .form-text {
            font-size: 11px;
            color: #9ca3af;
            margin-top: 6px;
        }

        /* =========================
           UPLOAD
        ========================= */

        .upload-area {
            border: 1.5px dashed #cbd5e1;
            border-radius: 13px;
            padding: 25px;
            background: #fafcff;
        }

        .upload-content {
            display: flex;
            align-items: center;
            gap: 20px;
        }

        .photo-preview {
            width: 82px;
            height: 82px;
            border-radius: 14px;
            background: #eef2f7;
            display: flex;
            align-items: center;
            justify-content: center;
            overflow: hidden;
            flex-shrink: 0;
        }

        .photo-preview span {
            color: #9ca3af;
            font-size: 25px;
            font-weight: 700;
        }

        .photo-preview img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            display: none;
        }

        .upload-info h4 {
            font-size: 13px;
            font-weight: 700;
            margin-bottom: 5px;
        }

        .upload-info p {
            color: #8a93a2;
            font-size: 11px;
            margin-bottom: 12px;
        }

        .upload-button {
            position: relative;
            overflow: hidden;
            display: inline-block;
            padding: 7px 13px;
            border: 1px solid #d9e0e8;
            border-radius: 7px;
            background: white;
            color: #374151;
            font-size: 11px;
            font-weight: 600;
            cursor: pointer;
        }

        .upload-button input {
            position: absolute;
            inset: 0;
            opacity: 0;
            cursor: pointer;
        }

        /* =========================
           ALERTS
        ========================= */

        .alert {
            border-radius: 10px;
            border: none;
            font-size: 13px;
        }

        /* =========================
           FOOTER BUTTONS
        ========================= */

        .form-footer {
            margin-top: 35px;
            padding-top: 24px;
            border-top: 1px solid #edf0f4;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .btn {
            border-radius: 9px;
            font-size: 13px;
            font-weight: 600;
            padding: 11px 18px;
        }

        .btn-cancel {
            color: #64748b;
            border: 1px solid #dfe4eb;
            background: white;
        }

        .btn-cancel:hover {
            background: #f8fafc;
        }

        .btn-submit {
            background: #1d4ed8;
            color: white;
            border: none;
            padding-left: 24px;
            padding-right: 24px;
        }

        .btn-submit:hover {
            background: #1e40af;
            color: white;
        }

        /* =========================
           FOOTER
        ========================= */

        .page-footer {
            text-align: center;
            margin-top: 30px;
            color: #9ca3af;
            font-size: 11px;
        }

        /* =========================
           MOBILE
        ========================= */

        @media (max-width: 768px) {

            .page-wrapper {
                padding-top: 30px;
            }

            .page-heading h1 {
                font-size: 26px;
            }

            .form-body,
            .card-header-custom {
                padding: 23px;
            }

            .progress-wrapper {
                overflow-x: auto;
            }

            .progress-line {
                min-width: 30px;
            }

            .step {
                font-size: 11px;
            }

            .upload-content {
                align-items: flex-start;
            }

            .form-footer {
                flex-direction: column-reverse;
                gap: 12px;
                align-items: stretch;
            }

            .form-footer .btn {
                width: 100%;
            }
        }

    </style>
</head>


<body>

<!-- TOP BAR -->

<header class="topbar">

    <div class="container">

        <a href="#" class="brand">

            <div class="brand-icon">
                CIT
            </div>

            <div>
                Student Portal
                <small>College of Information Technology</small>
            </div>

        </a>

    </div>

</header>


<!-- PAGE -->

<main class="page-wrapper">


    <!-- PAGE HEADING -->

    <div class="page-heading">

        <h1>Student Registration</h1>

        <p>
            Complete the form below to create a student record.
        </p>

    </div>


    <!-- PROGRESS -->

    <div class="progress-card">

        <div class="progress-wrapper">

            <div class="step active">

                <div class="step-number">
                    1
                </div>

                Student Information

            </div>


            <div class="progress-line"></div>


            <div class="step">

                <div class="step-number">
                    2
                </div>

                Academic Details

            </div>


            <div class="progress-line"></div>


            <div class="step">

                <div class="step-number">
                    3
                </div>

                Confirmation

            </div>

        </div>

    </div>


    <!-- FORM CARD -->

    <div class="form-card">


        <div class="card-header-custom">

            <h2>Registration Details</h2>

            <p>
                Fields marked with <span class="required">*</span> are required.
            </p>

        </div>


        <div class="form-body">


            {{-- VALIDATION ERRORS --}}

            @if($errors->any())

                <div class="alert alert-danger mb-4">

                    <strong>Please review your information.</strong>

                    <ul class="mb-0 mt-2">

                        @foreach($errors->all() as $error)

                            <li>{{ $error }}</li>

                        @endforeach

                    </ul>

                </div>

            @endif


            <form
                action="{{ route('students.store') }}"
                method="POST"
                enctype="multipart/form-data"
            >

                @csrf


                <!-- PERSONAL INFORMATION -->

                <div class="section">

                    <div class="section-heading">

                        <div class="section-icon">
                            01
                        </div>

                        <div>

                            <h3>Personal Information</h3>

                            <p>
                                Basic information about the student
                            </p>

                        </div>

                    </div>


                    <div class="row g-4">


                        <!-- STUDENT ID -->

                        <div class="col-md-6">

                            <label class="form-label">
                                Student ID <span class="required">*</span>
                            </label>

                            <input
                                type="text"
                                name="student_id"
                                value="{{ old('student_id') }}"
                                class="form-control @error('student_id') is-invalid @enderror"
                                placeholder="e.g. 2026-0001"
                            >

                            @error('student_id')

                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>

                            @enderror

                        </div>


                        <!-- EMAIL -->

                        <div class="col-md-6">

                            <label class="form-label">
                                Email Address <span class="required">*</span>
                            </label>

                            <input
                                type="email"
                                name="email"
                                value="{{ old('email') }}"
                                class="form-control @error('email') is-invalid @enderror"
                                placeholder="student@example.com"
                            >

                            @error('email')

                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>

                            @enderror

                        </div>


                        <!-- FIRST NAME -->

                        <div class="col-md-4">

                            <label class="form-label">
                                First Name <span class="required">*</span>
                            </label>

                            <input
                                type="text"
                                name="first_name"
                                value="{{ old('first_name') }}"
                                class="form-control @error('first_name') is-invalid @enderror"
                                placeholder="First name"
                            >

                            @error('first_name')

                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>

                            @enderror

                        </div>


                        <!-- MIDDLE NAME -->

                        <div class="col-md-4">

                            <label class="form-label">
                                Middle Name
                            </label>

                            <input
                                type="text"
                                name="middle_name"
                                value="{{ old('middle_name') }}"
                                class="form-control @error('middle_name') is-invalid @enderror"
                                placeholder="Middle name"
                            >

                            @error('middle_name')

                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>

                            @enderror

                        </div>


                        <!-- LAST NAME -->

                        <div class="col-md-4">

                            <label class="form-label">
                                Last Name <span class="required">*</span>
                            </label>

                            <input
                                type="text"
                                name="last_name"
                                value="{{ old('last_name') }}"
                                class="form-control @error('last_name') is-invalid @enderror"
                                placeholder="Last name"
                            >

                            @error('last_name')

                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>

                            @enderror

                        </div>


                        <!-- MOBILE -->

                        <div class="col-md-6">

                            <label class="form-label">
                                Mobile Number <span class="required">*</span>
                            </label>

                            <input
                                type="text"
                                name="mobile_number"
                                value="{{ old('mobile_number') }}"
                                class="form-control @error('mobile_number') is-invalid @enderror"
                                placeholder="09XXXXXXXXX"
                            >

                            @error('mobile_number')

                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>

                            @enderror

                        </div>


                        <!-- DATE -->

                        <div class="col-md-6">

                            <label class="form-label">
                                Date of Birth <span class="required">*</span>
                            </label>

                            <input
                                type="date"
                                name="date_of_birth"
                                value="{{ old('date_of_birth') }}"
                                class="form-control @error('date_of_birth') is-invalid @enderror"
                            >

                            @error('date_of_birth')

                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>

                            @enderror

                        </div>


                        <!-- ADDRESS -->

                        <div class="col-12">

                            <label class="form-label">
                                Complete Address <span class="required">*</span>
                            </label>

                            <textarea
                                name="address"
                                class="form-control @error('address') is-invalid @enderror"
                                placeholder="Enter the student's complete address"
                            >{{ old('address') }}</textarea>

                            @error('address')

                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>

                            @enderror

                        </div>

                    </div>

                </div>


                <!-- ACADEMIC INFORMATION -->

                <div class="section">

                    <div class="section-heading">

                        <div class="section-icon">
                            02
                        </div>

                        <div>

                            <h3>Academic Information</h3>

                            <p>
                                Program and enrollment details
                            </p>

                        </div>

                    </div>


                    <div class="row g-4">


                        <!-- GENDER -->

                        <div class="col-md-4">

                            <label class="form-label">
                                Gender <span class="required">*</span>
                            </label>

                            <select
                                name="gender"
                                class="form-select @error('gender') is-invalid @enderror"
                            >

                                <option value="">
                                    Select gender
                                </option>

                                <option value="Male"
                                    {{ old('gender') == 'Male' ? 'selected' : '' }}>
                                    Male
                                </option>

                                <option value="Female"
                                    {{ old('gender') == 'Female' ? 'selected' : '' }}>
                                    Female
                                </option>

                            </select>

                            @error('gender')

                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>

                            @enderror

                        </div>


                        <!-- PROGRAM -->

                        <div class="col-md-4">

                            <label class="form-label">
                                Program <span class="required">*</span>
                            </label>

                            <select
                                name="program"
                                class="form-select @error('program') is-invalid @enderror"
                            >

                                <option value="">
                                    Select program
                                </option>

                                <option value="BS Information Technology"
                                    {{ old('program') == 'BS Information Technology' ? 'selected' : '' }}>
                                    BS Information Technology
                                </option>

                                <option value="BS Computer Science"
                                    {{ old('program') == 'BS Computer Science' ? 'selected' : '' }}>
                                    BS Computer Science
                                </option>

                                <option value="BS Information Systems"
                                    {{ old('program') == 'BS Information Systems' ? 'selected' : '' }}>
                                    BS Information Systems
                                </option>

                            </select>

                            @error('program')

                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>

                            @enderror

                        </div>


                        <!-- YEAR -->

                        <div class="col-md-4">

                            <label class="form-label">
                                Year Level <span class="required">*</span>
                            </label>

                            <select
                                name="year_level"
                                class="form-select @error('year_level') is-invalid @enderror"
                            >

                                <option value="">
                                    Select year level
                                </option>

                                <option value="1st Year">1st Year</option>
                                <option value="2nd Year">2nd Year</option>
                                <option value="3rd Year">3rd Year</option>
                                <option value="4th Year">4th Year</option>

                            </select>

                            @error('year_level')

                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>

                            @enderror

                        </div>

                    </div>

                </div>


                <!-- PROFILE -->

                <div class="section">

                    <div class="section-heading">

                        <div class="section-icon">
                            03
                        </div>

                        <div>

                            <h3>Profile Picture</h3>

                            <p>
                                Upload a clear identification photo
                            </p>

                        </div>

                    </div>


                    <div class="upload-area">

                        <div class="upload-content">


                            <div class="photo-preview">

                                <span id="photo-placeholder">
                                    👤
                                </span>

                                <img
                                    id="preview"
                                    alt="Profile Preview"
                                >

                            </div>


                            <div class="upload-info">

                                <h4>
                                    Student Profile Photo
                                </h4>

                                <p>
                                    JPG, JPEG or PNG · Maximum file size 2MB
                                </p>


                                <label class="upload-button">

                                    Choose Photo

                                    <input
                                        type="file"
                                        name="profile_picture"
                                        id="profile_picture"
                                        accept=".jpg,.jpeg,.png"
                                    >

                                </label>


                                @error('profile_picture')

                                    <div class="text-danger mt-2"
                                         style="font-size:11px;">
                                        {{ $message }}
                                    </div>

                                @enderror

                            </div>

                        </div>

                    </div>

                </div>


                <!-- FOOTER -->

                <div class="form-footer">

                    <a
                        href="{{ route('students.index') }}"
                        class="btn btn-cancel"
                    >
                        Cancel
                    </a>


                    <button
                        type="submit"
                        class="btn btn-submit"
                    >
                        Register Student →
                    </button>

                </div>


            </form>

        </div>

    </div>


    <div class="page-footer">

        Student Registration System · College of Information Technology

    </div>


</main>


<script>

    const fileInput = document.getElementById('profile_picture');

    const preview = document.getElementById('preview');

    const placeholder = document.getElementById('photo-placeholder');


    fileInput.addEventListener('change', function(event) {

        const file = event.target.files[0];

        if (file) {

            preview.src = URL.createObjectURL(file);

            preview.style.display = 'block';

            placeholder.style.display = 'none';

        } else {

            preview.style.display = 'none';

            placeholder.style.display = 'block';

        }

    });

</script>

</body> \\tiff

</html>