<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">

    <meta
        name="viewport"
        content="width=device-width, initial-scale=1.0"
    >

    <title>Registered Students | CIT</title>

    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
        rel="stylesheet"
    >

    <link
        href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap"
        rel="stylesheet"
    >

    <style>

        body {
            background: #f4f7fb;
            font-family: 'Inter', sans-serif;
            color: #172033;
        }

        .topbar {
            height: 72px;
            background: white;
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
            font-size: 12px;
        }

        .page-wrapper {
            max-width: 1150px;
            margin: auto;
            padding: 45px 20px;
        }

        .page-heading {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 30px;
        }

        .page-heading h1 {
            font-size: 30px;
            font-weight: 800;
            margin-bottom: 5px;
        }

        .page-heading p {
            color: #7b8494;
            margin: 0;
            font-size: 13px;
        }

        .btn-register {
            background: #1d4ed8;
            border: none;
            color: white;
            padding: 11px 18px;
            border-radius: 9px;
            font-size: 13px;
            font-weight: 600;
        }

        .btn-register:hover {
            background: #1e40af;
            color: white;
        }

        .students-card {
            background: white;
            border: 1px solid #e5eaf0;
            border-radius: 16px;
            overflow: hidden;
            box-shadow: 0 8px 30px rgba(15, 23, 42, .05);
        }

        .card-header-custom {
            padding: 22px 25px;
            border-bottom: 1px solid #edf0f4;
        }

        .card-header-custom h2 {
            font-size: 16px;
            font-weight: 700;
            margin: 0;
        }

        .table {
            margin: 0;
        }

        .table thead th {
            background: #f8fafc;
            border-bottom: 1px solid #e5e7eb;
            color: #6b7280;
            font-size: 11px;
            font-weight: 700;
            text-transform: uppercase;
            letter-spacing: .4px;
            padding: 15px 20px;
        }

        .table tbody td {
            padding: 16px 20px;
            font-size: 13px;
            vertical-align: middle;
            border-color: #f0f2f5;
        }

        .student-photo {
            width: 45px;
            height: 45px;
            object-fit: cover;
            border-radius: 10px;
            border: 1px solid #e5e7eb;
        }

        .student-name {
            font-weight: 600;
            color: #172033;
        }

        .student-id {
            color: #6b7280;
            font-size: 11px;
            margin-top: 3px;
        }

        .program {
            color: #4b5563;
        }

        .action-buttons {
            display: flex;
            gap: 7px;
        }

        .btn-view {
            color: #1d4ed8;
            border: 1px solid #bfdbfe;
            background: #eff6ff;
            font-size: 11px;
            font-weight: 600;
            border-radius: 7px;
            padding: 7px 11px;
        }

        .btn-view:hover {
            background: #dbeafe;
            color: #1e40af;
        }

        .btn-delete {
            color: #dc2626;
            border: 1px solid #fecaca;
            background: #fef2f2;
            font-size: 11px;
            font-weight: 600;
            border-radius: 7px;
            padding: 7px 11px;
        }

        .btn-delete:hover {
            background: #fee2e2;
            color: #b91c1c;
        }

        .empty-state {
            text-align: center;
            padding: 70px 20px;
        }

        .empty-icon {
            width: 60px;
            height: 60px;
            margin: 0 auto 15px;
            background: #eff6ff;
            color: #1d4ed8;
            border-radius: 15px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: 700;
        }

        .empty-state h3 {
            font-size: 16px;
            font-weight: 700;
        }

        .empty-state p {
            color: #8a93a2;
            font-size: 13px;
        }

        .alert {
            border: none;
            border-radius: 10px;
            font-size: 13px;
        }

        @media (max-width: 768px) {

            .page-heading {
                flex-direction: column;
                align-items: flex-start;
                gap: 15px;
            }

            .btn-register {
                width: 100%;
            }

            .table {
                min-width: 850px;
            }

        }

    </style>

</head>


<body>


<!-- TOP BAR -->

<header class="topbar">

    <div class="container">

        <a
            href="{{ route('students.create') }}"
            class="brand"
        >

            <div class="brand-icon">
                CIT
            </div>

            <div>
                Student Portal
            </div>

        </a>

    </div>

</header>


<!-- PAGE -->

<main class="page-wrapper">


    <!-- HEADING -->

    <div class="page-heading">

        <div>

            <h1>Registered Students</h1>

            <p>
                Manage student records and registration information.
            </p>

        </div>


        <a
            href="{{ route('students.create') }}"
            class="btn btn-register"
        >
            + Register Student
        </a>

    </div>


    <!-- SUCCESS MESSAGE -->

    @if(session('success'))

        <div class="alert alert-success mb-4">

            {{ session('success') }}

        </div>

    @endif


    <!-- STUDENTS CARD -->

    <div class="students-card">


        <div class="card-header-custom">

            <h2>
                Student Records
            </h2>

        </div>


        @if($students->count() > 0)

            <div class="table-responsive">

                <table class="table">

                    <thead>

                        <tr>

                            <th>
                                Student
                            </th>

                            <th>
                                Email
                            </th>

                            <th>
                                Mobile
                            </th>

                            <th>
                                Program
                            </th>

                            <th>
                                Year Level
                            </th>

                            <th>
                                Actions
                            </th>

                        </tr>

                    </thead>


                    <tbody>

                        @foreach($students as $student)

                            <tr>

                                <!-- STUDENT -->

                                <td>

                                    <div class="d-flex align-items-center gap-3">

                                        @if($student->profile_picture)

                                            <img
                                                src="{{ asset('storage/' . $student->profile_picture) }}"
                                                class="student-photo"
                                                alt="Profile Picture"
                                            >

                                        @else

                                            <div class="student-photo d-flex align-items-center justify-content-center bg-light">
                                                —
                                            </div>

                                        @endif


                                        <div>

                                            <div class="student-name">

                                                {{ $student->first_name }}

                                                {{ $student->last_name }}

                                            </div>

                                            <div class="student-id">

                                                {{ $student->student_id }}

                                            </div>

                                        </div>

                                    </div>

                                </td>


                                <!-- EMAIL -->

                                <td>

                                    {{ $student->email }}

                                </td>


                                <!-- MOBILE -->

                                <td>

                                    {{ $student->mobile_number }}

                                </td>


                                <!-- PROGRAM -->

                                <td>

                                    <div class="program">

                                        {{ $student->program }}

                                    </div>

                                </td>


                                <!-- YEAR -->

                                <td>

                                    {{ $student->year_level }}

                                </td>


                                <!-- ACTIONS -->

                                <td>

                                    <div class="action-buttons">


                                        <!-- VIEW -->

                                        <a
                                            href="{{ route('students.show', $student->id) }}"
                                            class="btn btn-view"
                                        >
                                            View
                                        </a>


                                        <!-- DELETE -->

                                        <form
                                            action="{{ route('students.destroy', $student->id) }}"
                                            method="POST"
                                            onsubmit="return confirm('Are you sure you want to remove this student? This action cannot be undone.');"
                                        >

                                            @csrf

                                            @method('DELETE')

                                            <button
                                                type="submit"
                                                class="btn btn-delete"
                                            >
                                                Delete
                                            </button>

                                        </form>

                                    </div>

                                </td>

                            </tr>

                        @endforeach

                    </tbody>

                </table>

            </div>

        @else


            <!-- EMPTY -->

            <div class="empty-state">

                <div class="empty-icon">
                    +
                </div>

                <h3>
                    No students registered
                </h3>

                <p>
                    There are currently no student records.
                </p>

                <a
                    href="{{ route('students.create') }}"
                    class="btn btn-register"
                >
                    Register First Student
                </a>

            </div>


        @endif

    </div>


</main>


</body>

</html>