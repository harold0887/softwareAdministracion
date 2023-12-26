<?php

namespace App\Http\Livewire\Superadmin;

use Livewire\Component;
use App\Models\Condominio;
use Livewire\WithPagination;

class IndexCondominios extends Component
{
    use WithPagination;


    public $search = '';
    public $sortDirection = 'asc';
    public $sortField = 'id';
    public $perPage = 10;



    public function updatingSearch()
    {
        $this->resetPage();
    }

    protected $paginationTheme = 'bootstrap';




    public function render()
    {

        $condominios = Condominio::where(function ($query) {
            $query->where('name', 'like', '%' . $this->search . '%');
        })->orderBy($this->sortField, $this->sortDirection)
            ->paginate($this->perPage);



        return view('livewire.superadmin.index-condominios', compact('condominios'));
    }

    //sort
    public function setSort($field)
    {

        $this->sortField = $field;

        if ($this->sortDirection == 'desc') {
            $this->sortDirection = 'asc';
        } else {
            $this->sortDirection = 'desc';
        }
    }

    public function clearSearch()
    {
        $this->reset(['search']);
    }

    public function changeStatus(Condominio $condominio)
    {
      
        try {

            if ($condominio->status == 1) {
                $condominio->update([
                    'status' => 0,
                ]);
                $this->emit('success-auto-close', [
                    'message' => 'El condominios ha sido bloqueado con éxito',
                ]);
            } else {
                $condominio->update([
                    'status' => 1,
                ]);
                $this->emit('success-auto-close', [
                    'message' => 'El condominios ha sido desbloaquedo con éxito',
                ]);
            }
        } catch (\Throwable $e) {
            $this->emit('error', [
                'message' => $e->getMessage(),
            ]);
        }
    }
}
