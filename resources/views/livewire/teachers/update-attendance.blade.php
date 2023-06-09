<div>
    <div class="page-header d-print-none pt-0 mt-0">
        <div class="container-xl">
            <div class="row g-2 align-items-center col-md-8">
                <div class="col">
                    <h2 class="page-title">Add / Edit Student Attendance</h2>
                </div>
            </div>
        </div>
    </div>
    <div class="page-body">
        <div class="container-xl">
            <div class="row row-deck row-cards">
                <div class="col-12 col-xxl-8 col-lg-8 col-md-12 col-sm-12">
                    <div class="card">
                        <div class="table-responsive">
                            <table
                                class="table card-table table-vcenter text-nowrap table-hover table-striped datatable fs-5">
                                <thead>
                                    <tr>
                                        <th>NO.</th>
                                        <th>Student</th>
                                        <th>Month / Year</th>
                                        <th>Present</th>
                                        <th>Total Days</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ($attendances as $key => $attendance)
                                    <tr>
                                        <td>{{ $attendances->firstItem() + $key }}.</td>
                                        <td>{{ $attendance->student->name }}</td>
                                        <td>{{ $attendance->month_year }}</td>
                                        <td>{{ $attendance->total_present }}</td>
                                        <td>{{ $attendance->total_days }}</td>
                                        <td class="text-end">
                                            <button class="btn btn-primary mx-2 p-1 fs-6"><i
                                                    class="fas fa-pen" wire:click='editDetails({{ $attendance->id }})'></i></button>
                                            <button class="btn btn-danger p-1 fs-6"><i
                                                    class="fas fa-trash-alt" wire:click='confirmDelete({{ $attendance->id }})'></i></button>
                                        </td>
                                    </tr>
                                    @empty
                                    <tr>
                                        <td colspan="6" class="text-center">No data found</td>
                                    </tr>
                                    @endforelse
                                </tbody>
                            </table>

                            <div class="mt-4 float-end">{{ $attendances->links() }}</div>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-xxl-4 col-lg-4 col-md-12 col-sm-12 card">
                    <div class="card-header">
                        <h4 class="card-title">
                            {{ $formHeader }}</h4>
                    </div>
                    <form wire:submit.prevent="{{ $formName }}">
                        <div class="card row">
                            <div class="card-body">
                                <div class="tab-content">
                                    <div class="row">
                                        <div class="col-md-12 mb-3">
                                            <label for="name_en" class="mb-2">Select student <span
                                                    class="text-danger">*</span></label>
                                            <select class="form-control" wire:model='studentId'>
                                                <option value="">Select</option>
                                                @foreach ($students as $student)
                                                    <option value="{{ $student->id }}">
                                                        {{ $student->name }}</option>
                                                @endforeach
                                            </select>
                                            <div class="text-danger">
                                                @error('studentId')
                                                    {{ $message }}
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-12 mb-3">
                                            <label for="name_en" class="mb-2">Select month-year <span
                                                    class="text-danger">*</span></label>
                                            <input type="month" class="form-control" wire:model='monthYear' />
                                            <div class="text-danger">
                                                @error('monthYear')
                                                    {{ $message }}
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-12 mb-3">
                                            <label for="name_en" class="mb-2">Total no. of days <span
                                                    class="text-danger">*</span></label>
                                            <input type="text" class="form-control" wire:model='totalDays' />
                                            <div class="text-danger">
                                                @error('totalDays')
                                                    {{ $message }}
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-12 mb-3">
                                            <label for="name_en" class="mb-2">Total present in the month <span
                                                    class="text-danger">*</span></label>
                                            <input type="text" class="form-control" wire:model='totalPresent' />
                                            <div class="text-danger">
                                                @error('totalPresent')
                                                    {{ $message }}
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-12 mb-3">
                                            <label for="name_en" class="mb-2">Comments </label>
                                            <textarea class="form-control" wire:model='comments' cols="30" rows="5"></textarea>
                                            <div class="text-danger">
                                                @error('comments')
                                                    {{ $message }}
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="card-footer text-end">
                            <div class="d-flex">
                                <button type="submit" class="btn btn-primary" wire:loading.attr="disabled"
                                    wire:target='{{ $formName }}'>{{ $btnLabel }}</button>

                                <button type="button" class="btn btn-default ms-3"
                                    wire:click='resetForm'>Reset</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>