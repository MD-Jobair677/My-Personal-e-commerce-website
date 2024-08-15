<?php

namespace App\Livewire\Categorie;

use Livewire\Component;
use App\Models\Categorie;

class ShowallCategorieComponent extends Component
{
    
    
    public $categories;
    public function mount()
    {
        $this->categories = Categorie::all();
    }
    public function render()
    {
        return view('livewire.categorie.showall-categorie-component');
    }
}