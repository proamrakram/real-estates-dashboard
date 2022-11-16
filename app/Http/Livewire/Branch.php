<?php

namespace App\Http\Livewire;

use App\Models\Branch as ModelsBranch;
use Livewire\Component;
use Livewire\WithPagination;

class Branch extends Component
{

    use WithPagination;
    protected $paginationTheme = 'bootstrap';
    public $rows_number = 10;
    public $search = '';
    public $status = null;
    public $filters = [];
    public $message = null;



    public function getBranches()
    {
        $this->status == 'all' ? $this->status = null : null;

        $this->filters['status'] = $this->status;
        $this->filters['search'] = $this->search;

        return ModelsBranch::data()->filters($this->filters)->paginate($this->rows_number);
    }

    public function render()
    {
        $branches = $this->getBranches();
        if ($branches->count() < 9) {
            $this->resetPage();
        }
        return view('livewire.branch', [
            'branches' => $branches
        ]);
    }

    public function callBranchModal($branch_id)
    {
        $this->emit('branchModal', $branch_id);
    }

    public function updateStatus($branch_id)
    {
        $branch = ModelsBranch::find($branch_id);
        if ($branch->status == 1) {
            $this->message = '👍 تم إلغاء تنشيط الفرع بنجاح';
            $branch->update(['status' => 2]);
        } else {
            $this->message = '👍 تم تنشيط الفرع بنجاح';
            $branch->update(['status' => 1]);
        }
    }
}
