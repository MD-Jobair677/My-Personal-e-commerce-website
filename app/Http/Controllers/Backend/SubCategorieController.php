<?php

namespace App\Http\Controllers\Backend;

use App\Models\Categorie;
use App\Models\Subcategorie;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SubCategorieController extends Controller
{
    public function index(){


      
      $subcategories = Subcategorie::with('categorie')->get();
      $categories = Categorie::with('Subcategorie')->select('id','name')->latest()->get();
        return view('admin.Subcategorie.create',compact('categories','subcategories'));
    }


    public function story(){
        return view('admin.Subcategorie.list_subcategorie');
    }

    public function edit($id){
        return view('admin.Subcategorie.edit_subcategory',compact('id'));
    }
    
    public function deleted($id){
        Subcategorie::find($id)->delete();
        return back();
       }

       
    ///product page subcategorie
   public function getSubcategories(Request $request){
    $subcategories= Subcategorie::where('categorie_id',$request->categoryId)->get();
    return $subcategories;
  }
  
}