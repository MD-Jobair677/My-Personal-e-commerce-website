<?php

namespace App\Livewire\Brand;

use Livewire\Component;
use App\Models\Categorie;
use App\Http\Controllers\Helpers\SlugGenerator;

class ListBrandComponent extends Component
{
    
    
    use SlugGenerator;
    public $name="";
    public $slug="";
    public $status="1";
    public $showhome="No";


    function addCategory(){
   $this->validate([
 
     'name'=> 'required|max:12',
     'status'=>'required',
     'showhome'=>'required',

   ]);
    $category = new Categorie();
  
    $category->name = $this->name;
    $category->slug=$this->generateslug($this->name,Categorie::class);
    // $category->slug = $this->name;
    $category->status = $this->status;
    $category->showhome = $this->showhome;
    $category->save();
    return back()->with('success','Category Successfull Create');
    

    }


    public function render()
    {
        return view('livewire.brand.list-brand-component');
    }
}