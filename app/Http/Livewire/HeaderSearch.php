<?php
declare(strict_types=1);

namespace App\Http\Livewire;

use App\Models\House;
use Livewire\Component;

class HeaderSearch extends Component
{
    public $search = '';
    public $results;

    public function render()
    {
        if (strlen($this->search) > 2){
            $this->results = House::query()
                ->where('commune', 'like', '%'. $this->search .'%')
                ->orWhere('guarantees', 'like', '%'. $this->search .'%')
                ->orWhere('prices', 'like', '%'. $this->search .'%')
                ->orWhere('address', 'like', '%'. $this->search .'%')
                ->orWhere('town', 'like', '%'. $this->search .'%')
                ->get();
        }
        return view('livewire.header-search', [
            'results' => $this->results
        ]);
    }
}
