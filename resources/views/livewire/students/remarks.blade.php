<div>
    <div class="page-header d-print-none pt-0 mt-0">
        <div class="container-xl">
            <div class="row g-2 align-items-center col-md-8">
                <div class="col">
                    <h2 class="page-title">Add Feedback</h2>
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
                                        <th>Teacher</th>
                                        <th>Feedback</th>
                                        <th>Remarks</th>
                                        <th>Date</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ($remarks as $key => $remark)
                                    <tr>
                                        <td>{{ $remarks->firstItem() + $key }}.</td>
                                        <td>{{ $remark->teacher->name }}</td>

                                        <td title="{{ $remark->student_feedback }}">{{ strlen($remark->student_feedback) > 20 ? substr($remark->student_feedback, 0, 20).' ...' : $remark->student_feedback }}</td>

                                        <td title="{{ $remark->teacher_remarks }}">{{ $remark->teacher_remarks ? (strlen($remark->teacher_remarks) > 20 ? substr($remark->teacher_remarks, 0, 20).' ...' : $remark->teacher_remarks) : '' }}</td>

                                        <td>{{ date('d/m/Y', strtotime($remark->created_at)) }}</td>
                                        <td class="text-end">
                                            <button class="btn btn-primary mx-2 p-1 fs-6"><i
                                                    class="fas fa-pen" wire:click='editDetails({{ $remark->id }})'></i></button>
                                            <button class="btn btn-danger p-1 fs-6"><i
                                                    class="fas fa-trash-alt" wire:click='confirmDelete({{ $remark->id }})'></i></button>
                                        </td>
                                    </tr>
                                    @empty
                                    <tr>
                                        <td colspan="6" class="text-center">No data found</td>
                                    </tr>
                                    @endforelse
                                </tbody>
                            </table>

                            <div class="mt-4 float-end">{{ $remarks->links() }}</div>
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
                                            <label for="name_en" class="mb-2">Select teacher <span
                                                    class="text-danger">*</span></label>
                                            <select class="form-control" wire:model='teacherId'>
                                                <option value="">Select</option>
                                                @foreach ($teachers as $teacher)
                                                    <option value="{{ $teacher->id }}">
                                                        {{ $teacher->name }}</option>
                                                @endforeach
                                            </select>
                                            <div class="text-danger">
                                                @error('teacherId')
                                                    {{ $message }}
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-12 mb-3">
                                            <label for="name_en" class="mb-2">Feedback <span
                                                    class="text-danger">*</span></label>
                                            <textarea class="form-control" wire:model='feedback' cols="30" rows="5"></textarea>
                                            <div class="text-danger">
                                                @error('feedback')
                                                    {{ $message }}
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        {{-- {{ var_export($this->states) }} --}}

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
