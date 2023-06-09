<?php

namespace App\Http\Livewire\Teachers;
use App\Models\User;
use App\Models\StudentResult;
use Livewire\Component;
use Livewire\WithPagination;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class Results extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';

    public $formHeader = 'Add Student Result';
    public $formName = 'addResult';
    public $btnLabel = 'Add';
    public $studentId, $maths,  $science, $sst, $evs;
    public $resultId;

    protected $listeners = [
		'deleteConfirmed' => 'deleteResult',
	];

    public function rules()
    {
        $rules = [];
        $rules['studentId'] = 'required';
        $rules['maths'] = 'required';
        $rules['science'] = 'required';
        $rules['sst'] = 'required';
        $rules['evs'] = 'required';
        return $rules;
    }

    protected $validationAttributes = [
        'studentId' => 'student',
        'maths' => 'maths',
        'science' => 'science',
        'sst' => 'sst',
        'evs' => 'evs',
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

        $this->formHeader = 'Add Student Result';
        $this->formName = 'addResult';
        $this->btnLabel = 'Add';
        $this->studentId = '';
        $this->maths = '';
        $this->science = '';
        $this->sst = '';
        $this->evs = '';
        $this->resultId = '';
    }

    public function render()

    {
        $students = User::role('student')->get();
        $results = StudentResult::paginate(10);
        // dd($results);
        return view('livewire.teachers.results', ['students' => $students, 'results' => $results]);
    }
    public function addResult()
    {
        $this->validate();

        DB::beginTransaction();

        try {
            StudentResult::create([
                'student_id' => $this->studentId,
                'teacher_id' => Auth::id(),
                'maths' => $this->maths,
                'science' => $this->science,
                'sst' => $this->sst,
                'evs' => $this->evs,
            ]);
            DB::commit();
            $this->resetForm();

			$this->dispatchBrowserEvent('swal:success', [
				'type' => 'success',
				'title' => '',
				'text' => 'Student Result added',
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
        $this->formHeader = 'Edit Student Result';
        $this->formName = 'updateResult';
        $this->btnLabel = 'Save';

        $data = StudentResult::findOrFail($id);
        $this->studentId = $data->student_id;
        $this->maths = $data->maths;
        $this->science = $data->science;
        $this->sst = $data->sst;
        $this->evs = $data->evs;
        $this->resultId = $id;
    }

    public function updateResult()
    {
        $this->validate();

        DB::beginTransaction();

        try {
            StudentResult::where('id', $this->resultId)->update([
                'student_id' => $this->studentId,
                'maths' => $this->maths,
                'science' => $this->science,
                'sst' => $this->sst,
                'evs' => $this->evs,
            ]);
            DB::commit();
            $this->resetForm();

			$this->dispatchBrowserEvent('swal:success', [
				'type' => 'success',
				'title' => '',
				'text' => 'Student Result updated',
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
			'text' => 'Delete Student Result?',
			'btnText' => 'Delete',
			'eventType' => 'delete',
			'id' => $id,
		]);
    }

    public function deleteResult($id)
    {
        StudentResult::whereId($id)->delete();
        $this->dispatchBrowserEvent('swal:success', [
            'type' => 'success',
            'title' => '',
            'text' => 'Student Result deleted',
            'showBtn' => true,
            'timer' => false,
        ]);
    }
}
