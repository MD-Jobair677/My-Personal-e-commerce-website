<?php

namespace App\Livewire\SubCategorie;

use Livewire\Component;
use App\Models\Subcategorie;

class ListSubCategorieComponent extends Component
{
    
    public $subcategories;
    public function mount()
    {
        $this->subcategories = Subcategorie::all();
    }
    public function render()
    {
        return view('livewire.sub-categorie.list-sub-categorie-component');
    }
}