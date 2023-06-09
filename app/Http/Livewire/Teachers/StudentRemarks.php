<?php

namespace App\Http\Livewire\Teachers;

use App\Models\Remark;
use Livewire\Component;
use Livewire\WithPagination;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class StudentRemarks extends Component
{
    use WithPagination;

    protected $paginationTheme = 'bootstrap';

    public $formHeader = 'Add Feedback';
    public $formName = 'addFeedback';
    public $btnLabel = 'Add';
    public $feedbackId, $remarks;
    public $studentName, $studentFeedback;

    protected $listeners = [
        'deleteConfirmed' => 'deleteFeedback',
    ];

    public function rules()
    {
        $rules = [];
        $rules['remarks'] = 'required';
        return $rules;
    }

    protected $validationAttributes = [
        'remarks' => 'remarks',
    ];

    protected $messages = [
        '*.required' => ':Attribute is required',
    ];

    public function updated($attr)
    {
        $this->validateOnly($attr);
    }

    public function resetForm()
    {
        $this->resetErrorBag();
        $this->resetValidation();

        $this->formHeader = 'Add Feedback';
        $this->formName = 'addFeedback';
        $this->btnLabel = 'Add';
        $this->feedbackId = '';
        $this->remarks = '';
        $this->studentName = 'Student name';
        $this->studentFeedback = 'Student feedback';
    }

    public function render()
    {
        $teacherRemarks = Remark::where('teacher_id', Auth::id())->paginate(10);

        return view('livewire.teachers.student-remarks', ['teacherRemarks' => $teacherRemarks]);
    }

    public function editDetails($id)
    {
        $this->resetForm();
        $this->formHeader = 'Add / Edit Remarks';
        $this->formName = 'updateFeedback';
        $this->btnLabel = 'Save';

        $data = Remark::findOrFail($id);
        $this->studentName = $data->student->name;
        $this->studentFeedback = $data->student_feedback;
        $this->feedbackId = $id;
    }

    public function updateFeedback()
    {
        $this->validate();

        DB::beginTransaction();

        try {
            Remark::updateOrCreate([
                'id' => $this->feedbackId
            ], [
                'teacher_remarks' => $this->remarks,
            ]);
            DB::commit();
            $this->resetForm();

            $this->dispatchBrowserEvent('swal:success', [
                'type' => 'success',
                'title' => '',
                'text' => 'Remarks updated',
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
            'text' => 'Delete remark?',
            'btnText' => 'Delete',
            'eventType' => 'delete',
            'id' => $id,
        ]);
    }

    public function deleteFeedback($id)
    {
        Remark::whereId($id)->update(['teacher_remarks' => NULL]);
        $this->dispatchBrowserEvent('swal:success', [
            'type' => 'success',
            'title' => '',
            'text' => 'Feedback deleted',
            'showBtn' => true,
            'timer' => false,
        ]);
    }
}
