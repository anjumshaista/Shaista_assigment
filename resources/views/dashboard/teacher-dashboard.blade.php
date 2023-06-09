@extends('layouts.main')

@section('title', 'Dashboard | ' . config('app.name'))

@section('content')

    <!-- Page body -->
    <div class="page-body">
        <div class="container-xl">
            <div class="row row-deck row-cards mb-3">
                <div class="col-12">
                    <div class="row row-cards">
                        <div class="col-sm-6 col-lg-4">
                            <div class="card card-sm">
                                <div class="card-body">
                                    <div class="d-flex">
                                        <span class="avatar avatar-lg me-3 rounded">{{ $abbr }}</span>
                                        <div>
                                            <div>
                                                <h3>{{ $teacher->name }}</h3>
                                            </div>
                                            <div class="text-muted">{{ ucfirst($teacher->roles->value('name')) }}</div>
                                            <div class="text-muted">{{ $teacher->email }}</div>
                                            <div class="text-muted">{{ $teacher->phone }}</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-6 col-lg-4">
                            <div class="card card-sm">
                                <div class="card-body">
                                    <div class="d-flex align-items-center">
                                        {{-- <span class="avatar me-3 rounded">{{ $abbr }}</span> --}}
                                        <div>
                                            <div>
                                                <h3>{{ $teacher->mapSchool->school->school_name }}</h3>
                                            </div>
                                            <div class="text-muted">{{ $teacher->mapSchool->school->address }}</div>
                                            <div class="text-muted">{{ $teacher->mapSchool->school->email }}</div>
                                            <div class="text-muted">{{ $teacher->mapSchool->school->phone }}</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-6 col-lg-4">
                            <div class="card card-sm">
                                <div class="card-body">
                                    <div class="row align-items-center">
                                        <div class="col-auto">
                                            <span class="bg-primary text-white avatar">
                                                <i class="fas fa-user-friends"></i>
                                            </span>
                                        </div>
                                        <div class="col">
                                            <div class="font-weight-medium">
                                                {{ totalStudents() }} Student(s)
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-12 mb-3">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Students</h3>
                        <div class="ms-auto text-muted"></div>
                    </div>

                    <div class="table-responsive">
                        <table class="table card-table table-vcenter text-nowrap datatable">
                            <thead>
                                <tr>
                                    <th>No.</th>
                                    <th>Name</th>
                                    <th>Class</th>
                                    <th>Email</th>
                                    <th>Phone</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($students as $stkey => $student)
                                    <tr>
                                        <td>{{ $students->firstItem() + $stkey }}.</td>
                                        <td>{{ $student->name }}</td>
                                        <td>{{ $student->mapClass->schoolClass->school_class }}
                                            ({{ $student->mapClass->schoolClass->class_section }})
                                        </td>
                                        <td>{{ $student->email }}</td>
                                        <td>{{ $student->phone }}</td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="5">No data found</td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                    <div class="card-footer">{{ $students->links() }}</div>
                </div>
            </div>
            <div class="col-12 mb-3">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Student Results</h3>
                        <div class="ms-auto text-muted">
                            <div class="ms-2 d-inline-block">
                                <a href="{{ route('teacher.student.result') }}"><button class="btn btn-primary"
                                        data-bs-toggle="modal" data-bs-target="#add-remarks">Add New</button></a>
                            </div>
                        </div>
                    </div>

                    <div class="table-responsive">
                        <table class="table card-table table-vcenter text-nowrap datatable">
                            <thead>
                                <tr>
                                    <th>No.</th>
                                    <th>Student Name</th>
                                    <th>Maths</th>
                                    <th>Science</th>
                                    <th>Sst</th>
                                    <th>evs</th>
                                    <th>Total Marks</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($results as $rskey => $result)
                                    @php
                                        $maths = $result->maths;
                                        $science = $result->science;
                                        $sst = $result->sst;
                                        $evs = $result->evs;
                                        $total = $maths + $science + $sst + $evs;
                                        
                                    @endphp
                                    <tr>
                                        <td>{{ $results->firstItem() + $rskey }}.</td>
                                        <td>{{ $result->student->name }}</td>
                                        <td>{{ $result->maths }}</td>
                                        <td>{{ $result->science }}</td>
                                        <td>{{ $result->sst }}</td>
                                        <td>{{ $result->evs }}</td>
                                        <td>{{ $total }}</td>

                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="8">No data found</td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                    <div class="card-footer">{{ $results->links() }}</div>
                </div>
            </div>
            <div class="col-12 mb-3">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Students Attendances</h3>
                    </div>

                    <div class="table-responsive">
                        <table class="table card-table table-vcenter text-nowrap datatable">
                            <thead>
                                <tr>
                                    <th>No.</th>
                                    <th>Name</th>
                                    <th>Month - Year</th>
                                    <th>Present</th>
                                    <th>Total</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($attendances as $atkey => $attendance)
                                    <tr>
                                        <td>{{ $attendances->firstItem() + $atkey }}.</td>
                                        <td>{{ $attendance->student->name }}</td>
                                        <td>{{ $attendance->month_year }}</td>
                                        <td>{{ $attendance->total_present }}</td>
                                        <td>{{ $attendance->total_days }}</td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="5">No data found</td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                    <div class="card-footer">{{ $attendances->links() }}</div>
                </div>
            </div>

            <div class="col-12 mb-3">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Feedback and Remarks</h3>
                    </div>

                    <div class="table-responsive">
                        <table class="table card-table table-vcenter text-nowrap datatable">
                            <thead>
                                <tr>
                                    <th>No.</th>
                                    <th>Name</th>
                                    <th>Feedback</th>
                                    <th>Remark</th>
                                    <th>Date</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($remarks as $rmkey => $remark)
                                    <tr>
                                        <td>{{ $remarks->firstItem() + $rmkey }}.</td>
                                        <td>{{ $remark->student->name }}</td>
                                        <td>{{ strlen($remark->student_feedback) > 20 ? substr($remark->student_feedback, 0, 20) . ' ...' : $remark->student_feedback }}
                                        </td>
                                        <td>{{ strlen($remark->teacher_remarks) > 20 ? substr($remark->teacher_remarks, 0, 20) . ' ...' : $remark->teacher_remarks }}
                                        </td>
                                        <td>{{ date('d/m/Y', strtotime($remark->created_at)) }}</td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="6">No data found</td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                    <div class="card-footer">{{ $remarks->links() }}</div>
                </div>
            </div>
        </div>
    </div>

@endsection
