<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Student Profile</title>

    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
        rel="stylesheet"
    >

    <style>

        body {
            background: #f5f7fb;
        }

        .profile-card {
            max-width: 850px;
            margin: 60px auto;
            border: none;
            border-radius: 20px;
            overflow: hidden;
        }

        .profile-header {
            background: #4f46e5;
            color: white;
            text-align: center;
            padding: 35px;
        }

        .profile-image {
            width: 150px;
            height: 150px;
            border-radius: 50%;
            object-fit: cover;
            border: 5px solid white;
            margin-bottom: 15px;
        }

        .profile-body {
            padding: 35px;
        }

        .info-label {
            font-weight: 600;
            color: #6c757d;
        }

        .info-value {
            font-weight: 500;
            margin-bottom: 20px;
        }

    </style>

</head>

<body>

<div class="container">

    <div class="card shadow profile-card">

        <div class="profile-header">

            <img
                src="{{ asset('storage/' . $student->profile_picture) }}"
                alt="Student Profile Picture"
                class="profile-image"
            >

            <h2>
                {{ $student->first_name }}
                {{ $student->middle_name }}
                {{ $student->last_name }}
            </h2>

            <p class="mb-0">
                Student ID: {{ $student->student_id }}
            </p>

        </div>


        <div class="profile-body">

            @if(session('success'))

                <div class="alert alert-success">
                    {{ session('success') }}
                </div>

            @endif


            <h4 class="mb-4">
                Student Information
            </h4>


            <div class="row">

                <div class="col-md-6">

                    <div class="info-label">
                        Student ID
                    </div>

                    <div class="info-value">
                        {{ $student->student_id }}
                    </div>

                </div>


                <div class="col-md-6">

                    <div class="info-label">
                        Email Address
                    </div>

                    <div class="info-value">
                        {{ $student->email }}
                    </div>

                </div>


                <div class="col-md-6">

                    <div class="info-label">
                        First Name
                    </div>

                    <div class="info-value">
                        {{ $student->first_name }}
                    </div>

                </div>


                <div class="col-md-6">

                    <div class="info-label">
                        Middle Name
                    </div>

                    <div class="info-value">
                        {{ $student->middle_name ?: 'N/A' }}
                    </div>

                </div>


                <div class="col-md-6">

                    <div class="info-label">
                        Last Name
                    </div>

                    <div class="info-value">
                        {{ $student->last_name }}
                    </div>

                </div>


                <div class="col-md-6">

                    <div class="info-label">
                        Mobile Number
                    </div>

                    <div class="info-value">
                        {{ $student->mobile_number }}
                    </div>

                </div>


                <div class="col-md-6">

                    <div class="info-label">
                        Date of Birth
                    </div>

                    <div class="info-value">
                        {{ $student->date_of_birth->format('F d, Y') }}
                    </div>

                </div>


                <div class="col-md-6">

                    <div class="info-label">
                        Gender
                    </div>

                    <div class="info-value">
                        {{ $student->gender }}
                    </div>

                </div>


                <div class="col-md-6">

                    <div class="info-label">
                        Program
                    </div>

                    <div class="info-value">
                        {{ $student->program }}
                    </div>

                </div>


                <div class="col-md-6">

                    <div class="info-label">
                        Year Level
                    </div>

                    <div class="info-value">
                        {{ $student->year_level }}
                    </div>

                </div>


                <div class="col-12">

                    <div class="info-label">
                        Address
                    </div>

                    <div class="info-value">
                        {{ $student->address }}
                    </div>

                </div>

            </div>


            <div class="mt-3">

                <a
                    href="{{ route('students.create') }}"
                    class="btn btn-primary"
                >
                    Register Another Student
                </a>

                <a
                    href="{{ route('students.index') }}"
                    class="btn btn-outline-secondary"
                >
                    View All Students
                </a>

            </div>

        </div>

    </div>

</div>

</body>
</html>