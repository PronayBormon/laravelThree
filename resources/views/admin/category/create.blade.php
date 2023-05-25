@extends('layouts.master')
@section('content')
<div class="card m-4">
    <div class="card-header d-flex ">
        <div>
            <h1>Categories</h1>
        </div>
        <div class="ms-auto">
            <a href="{{ url('admin/category') }}" class="btn btn-secondary">View All </a>
        </div>
    </div>
    <div class="card-body">
    @if($errors->any())
        {!! implode('', $errors->all('<div class="alert alert-danger">:message</div>')) !!}
    @endif
        <form action="{{ url('admin/add_category') }}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <label for="Name">Name </label>
                <input type="text" name="name" required placeholder="Enter your name" class="form-control">
            </div>
            <div class="mb-3">
                <label for="slug">slug </label>
                <input type="text" name="slug" placeholder="Enter your slug" class="form-control">
            </div>
            <div class="mb-3">
                <label for="slug">Description </label>
                <textarea name="description" class="form-control" placeholder="Enter your Description" id="" cols="30" rows="4"></textarea>                
            </div>            
            <div class="mb-3">
                <label for="image">Image </label>
                <input type="file" name="image" class="form-control">
            </div>
            <div class="mb-3">
                <label for="title">Meta Title </label>
                <input type="text" name="meta_title" placeholder="Enter your slug" class="form-control">
            </div>
            
            <div class="mb-3">
                <label for="slug">Meta Description </label>
                <textarea name="meta_description" class="form-control" placeholder="Enter your meta Description" id="" cols="30" rows="4"></textarea>  
            </div>
            <div class="mb-3">
                <label for="keyword">Meta Keyword </label>
                <input type="text" name="meta_keyword" placeholder="Enter your keyword" class="form-control">
            </div>
            
            <div class="mb-3">
                <label for="status">Nav Status </label> 
                <input type="checkbox" name="nav_status" >
            </div>
            <div class="mb-3">
                <label for="status"> Status </label> 
                <input type="checkbox" name="status" >
            </div>
            <div class="mb-3">
                <button class="btn btn-secondary"> Create</button>
            </div>

        </form>
    </div>
</div>

@endsection