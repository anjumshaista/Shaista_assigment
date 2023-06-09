<?php

namespace App\Http\Livewire\Teachers;

use App\Models\Attendance;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Livewire\Component;
use Livewire\WithPagination;

class UpdateAttendance extends Component
{
    use WithPagination;

    protected $paginationTheme = 'bootstrap';

    public $formHeader = 'Add Attendance';
    public $formName = 'addAttendance';
    public $btnLabel = 'Add';
    public $studentId, $monthYear, $totalDays, $totalPresent, $comments;
    public $attendanceId;

    protected $listeners = [
        'deleteConfirmed' => 'deleteAttendance'
    ];

    public function rules()
    {
        $rules = [];
        $rules['studentId'] = 'required';
        $rules['monthYear'] = 'required|before:today';
        $rules['totalDays'] = 'required|numeric|max:31';
        $rules['totalPresent'] = 'required|numeric|max:' . $this->totalDays;
        return $rules;
    }

    protected $validationAttributes = [
        'studentId' => 'student',
        'monthYear' => 'month-year',
        'totalDays' => 'total days',
        'totalPresent' => 'total present',
    ];

    protected $messages = [
        '*.required' => ':Attribute is required',
        '*.before' => ':Attribute cannot be a future date',
        '*.numeric' => ':Attribute must be a number',
    ];

    public function updated($attr)
    {
        $this->validateOnly($attr);
    }

    public function resetForm()
    {
        $this->resetErrorBag();
        $this->resetValidation();

        $this->formHeader = 'Add Attendance';
        $this->formName = 'addAttendance';
        $this->btnLabel = 'Add';
        $this->studentId = '';
        $this->monthYear = '';
        $this->totalDays = '';
        $this->totalPresent = '';
        $this->comments = '';
    }

    public function render()
    {
        $students = User::role('student')->get();
        $attendances = Attendance::latest()->paginate(10);

        return view('livewire.teachers.update-attendance', ['students' => $students, 'attendances' => $attendances]);
    }

    public function addAttendance()
    {
        $this->validate();

        DB::beginTransaction();
        try {
            $monthYearArray = explode('-', $this->monthYear);
            $month = $monthYearArray[1];
            $year = $monthYearArray[0];

            Attendance::updateOrCreate([
                'student_id' => $this->studentId,
                'month_year' => $this->monthYear,
            ], [
                'teacher_id' => Auth::id(),
                'student_id' => $this->studentId,
                'month' => $month,
                'year' => $year,
                'month_year' => $this->monthYear,
                'total_days' => $this->totalDays,
                'total_present' => $this->totalPresent,
                'comments' => $this->comments != '' ? $this->comments : NULL,
            ]);
            DB::commit();

            $this->studentId = '';
            $this->totalPresent = '';
            $this->comments = '';

            $this->dispatchBrowserEvent('swal:success', [
                'type' => 'success',
                'title' => '',
                'text' => 'Attendance added',
                'showBtn' => true,
                'timer' => false,
            ]);
        } catch (\Throwable $th) {
            DB::rollBack();
            $this->dispatchBrowserEvent('swal:error', [
                'type' => 'error',
                'title' => '',
                'text' => 'Something went wrong! ' . $th->getMessage(),
                'showBtn' => true,
                'timer' => false,
            ]);
        }
    }

    public function editDetails($id)
    {
        $this->resetForm();
        $this->formHeader = 'Edit Attendance';
        $this->formName = 'updateAttendance';
        $this->btnLabel = 'Save';
        $data = Attendance::findOrFail($id);
        $this->studentId = $data->student_id;
        $this->monthYear = $data->month_year;
        $this->totalDays = $data->total_days;
        $this->totalPresent = $data->total_present;
        $this->comments = $data->comments;
        $this->attendanceId = $id;
    }

    public function updateAttendance()
    {
        $this->validate();
        DB::beginTransaction();
        try {
            $monthYearArray = explode('-', $this->monthYear);
            $month = $monthYearArray[1];
            $year = $monthYearArray[0];

            Attendance::where('id', $this->attendanceId)->update([
                'student_id' => $this->studentId,
                'month' => $month,
                'year' => $year,
                'month_year' => $this->monthYear,
                'total_days' => $this->totalDays,
                'total_present' => $this->totalPresent,
                'comments' => $this->comments != '' ? $this->comments : NULL,
            ]);
            DB::commit();
            $this->resetForm();

            $this->dispatchBrowserEvent('swal:success', [
                'type' => 'success',
                'title' => '',
                'text' => 'Attendance updated',
                'showBtn' => true,
                'timer' => false,
            ]);
        } catch (\Throwable $th) {
            DB::rollBack();
            $this->dispatchBrowserEvent('swal:error', [
                'type' => 'error',
                'title' => '',
                'text' => 'Something went wrong! ' . $th->getMessage(),
                'showBtn' => true,
                'timer' => false,
            ]);
        }
    }

    public function confirmDelete($id)
    {
        $this->resetForm();

        $this->dispatchBrowserEvent('swal:confirm', [
            'type' => 'warning',
            'title' => '',
            'text' => 'Delete attendance?',
            'btnText' => 'Delete',
            'eventType' => 'delete',
            'id' => $id,
        ]);
    }

    public function deleteAttendance($id)
    {
        Attendance::whereId($id)->delete();

        $this->dispatchBrowserEvent('swal:success', [
            'type' => 'success',
            'title' => '',
            'text' => 'Attendance deleted',
            'showBtn' => true,
            'timer' => false,
        ]);
    }
}
