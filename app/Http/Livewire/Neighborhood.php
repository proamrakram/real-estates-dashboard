<?php

namespace App\Http\Livewire;

use App\Models\Neighborhood as ModelsNeighborhood;
use Livewire\Component;
use Livewire\WithPagination;

class Neighborhood extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';
    public $rows_number = 10;
    public $search = '';
    public $status = null;
    public $filters = [];

    public function render()
    {
        $this->status == 'all' ? $this->status = null : null;

        $this->filters['status'] = $this->status;
        $this->filters['search'] = $this->search;

        $neighborhoods = ModelsNeighborhood::data()->filters($this->filters)->paginate($this->rows_number);
        $this->resetPage();


        return view('livewire.neighborhood', [
            'neighborhoods' => $neighborhoods
        ]);
    }

    public function updateStatus($neighborhood_id)
    {
        $neighborhood = ModelsNeighborhood::find($neighborhood_id);
        if ($neighborhood->status == 1) {
            $neighborhood->update(['status' => 2]);
        } else {
            $neighborhood->update(['status' => 1]);
        }
    }
}
