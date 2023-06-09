<div>
<div class="page-header d-print-none pt-0 mt-0">
        <div class="container-xl">
            <div class="row g-2 align-items-center col-md-8">
                <div class="col">
                    <h2 class="page-title">Add  Student Marks</h2>
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
                                        <th>Student Name</th>
                                        <th>Math</th>
                                        <th>Science</th>
                                        <th>Sst</th>
                                        <th>Evs</th>
                                        <th>Total Marks</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ($results as $key => $result)
                                    @php
                                            $maths =  $result->maths;
                                            $science =  $result->science;
                                              $sst =  $result->sst;
                                            $evs = $result->evs ;
                                            $total = $maths + $science + $sst + $evs;
                                           
                                        @endphp
                                    <tr>
                                    <td>{{ $results->firstItem() + $key }}.</td>
                                        <td>{{ $result->student->name }}</td>
                                        <td>{{ $result->maths }}</td>
                                        <td>{{ $result->science }}</td>
                                        <td>{{ $result->sst }}</td>
                                        <td>{{ $result->evs }}</td>
                                        <td>{{$total }}</td>
                                        <td class="text-end">
                                            <button class="btn btn-primary mx-2 p-1 fs-6"><i
                                                    class="fas fa-pen" wire:click='editDetails({{ $result->id }})'></i></button>
                                            <button class="btn btn-danger p-1 fs-6"><i
                                                    class="fas fa-trash-alt" wire:click='confirmDelete({{ $result->id }})'></i></button>
                                        </td>
                                    </tr>
                                    @empty
                                    <tr>
                                        <td colspan="6" class="text-center">No data found</td>
                                    </tr>
                                    @endforelse
                                </tbody>
                            </table>

                            <div class="mt-4 float-end">{{ $results->links() }}</div>
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
                                            <label for="name_en" class="mb-2">Select Student <span
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
                                        <div class="col-md-6 mb-3">
                                            <label for="name_en" class="mb-2">Maths <span
                                                    class="text-danger">*</span></label>
                                                    <input type="number" class="form-control" wire:model='maths'>
                                            
                                            <div class="text-danger">
                                                @error('maths')
                                                    {{ $message }}
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <label for="name_en" class="mb-2">Science <span
                                                    class="text-danger">*</span></label>
                                                    <input type="number" class="form-control" wire:model='science'>

                                            <div class="text-danger">
                                                @error('science')
                                                    {{ $message }}
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <label for="name_en" class="mb-2">Sst <span
                                                    class="text-danger">*</span></label>
                                                    <input type="number" class="form-control" wire:model='sst'>
                                           
                                            <div class="text-danger">
                                                @error('sst')
                                                    {{ $message }}
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <label for="name_en" class="mb-2">Evs <span
                                                    class="text-danger">*</span></label>
                                                    <input type="number" class="form-control" wire:model='evs'>
                                          
                                            <div class="text-danger">
                                                @error('evs')
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
