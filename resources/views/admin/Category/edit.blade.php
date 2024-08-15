@extends('admin.dashbord_layout.dashbord_layout')
@section('content')

@livewire('categorie.edite-categorie-component',['id'=>$id])
   @endsection