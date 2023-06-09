<?php

namespace App\Http\Livewire\Students;

use App\Models\User;
use App\Models\Remark;
use Livewire\Component;
use Livewire\WithPagination;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class Remarks extends Component
{
    use WithPagination;

	protected $paginationTheme = 'bootstrap';
    
    public $formHeader = 'Add Feedback';
    public $formName = 'addFeedback';
    public $btnLabel = 'Add';
    public $teacherId, $feedback;
    public $feedbackId;

    protected $listeners = [
		'deleteConfirmed' => 'deleteFeedback',
	];

    public function rules()
    {
        $rules = [];
        $rules['teacherId'] = 'required';
        $rules['feedback'] = 'required';
        return $rules;
    }

    protected $validationAttributes = [
        'teacherId' => 'teacher',
        'feedback' => 'feedback',
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
        $this->teacherId = '';
        $this->feedback = '';
        $this->feedbackId = '';
    }

    public function render()
    {
        $teachers = User::role('teacher')->get();
        $remarks = Remark::where('student_id', Auth::id())->paginate(10);

        return view('livewire.students.remarks', ['teachers' => $teachers, 'remarks' => $remarks]);
    }

    public function addFeedback()
    {
        $this->validate();

        DB::beginTransaction();

        try {
            Remark::create([
                'student_id' => Auth::id(),
                'teacher_id' => $this->teacherId,
                'student_feedback' => $this->feedback,
            ]);
            DB::commit();
            $this->resetForm();

			$this->dispatchBrowserEvent('swal:success', [
				'type' => 'success',
				'title' => '',
				'text' => 'Feedback added',
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
        $this->formHeader = 'Edit Feedback';
        $this->formName = 'updateFeedback';
        $this->btnLabel = 'Save';

        $data = Remark::findOrFail($id);
        $this->teacherId = $data->teacher_id;
        $this->feedback = $data->student_feedback;
        $this->feedbackId = $id;
    }

    public function updateFeedback()
    {
        $this->validate();

        DB::beginTransaction();

        try {
            Remark::where('id', $this->feedbackId)->update([
                'teacher_id' => $this->teacherId,
                'student_feedback' => $this->feedback,
            ]);
            DB::commit();
            $this->resetForm();

			$this->dispatchBrowserEvent('swal:success', [
				'type' => 'success',
				'title' => '',
				'text' => 'Feedback updated',
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
			'text' => 'Delete feedback?',
			'btnText' => 'Delete',
			'eventType' => 'delete',
			'id' => $id,
		]);
    }

    public function deleteFeedback($id)
    {
        Remark::whereId($id)->delete();
        $this->dispatchBrowserEvent('swal:success', [
            'type' => 'success',
            'title' => '',
            'text' => 'Feedback deleted',
            'showBtn' => true,
            'timer' => false,
        ]);
    }
}
