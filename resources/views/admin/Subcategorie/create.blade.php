@extends('admin.dashbord_layout.dashbord_layout')
@section('content')

@livewire('sub-categorie.create-sub-categorie-component',['categories'=>$categories])




   @endsection