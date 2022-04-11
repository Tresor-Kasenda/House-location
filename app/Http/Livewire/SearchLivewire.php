<?php
declare(strict_types=1);

namespace App\Http\Livewire;

use App\Models\House;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Livewire\Component;

class SearchLivewire extends Component
{
    public $product = [];
    public $search = 'tresor';
    public $error = '';

    public function searchProduct()
    {
        if (strlen($this->search) > 2){
            $this->product = House::query()
                ->where('prices', 'like', '%'.$this->search.'%')
                ->orWhere('commune', 'like', '%'.$this->search.'%')
                ->orWhere('address', 'like', '%'.$this->search.'%')
                ->orWhere('town', 'like', '%'.$this->search.'%')
                ->get();
        }
        dd($this->search);
    }

    public function render()
    {
        return view('livewire.search-livewire');
    }
}
