@extends('layouts.master')
@section('content')
<div class="card m-4">
    <div class="card-header d-flex ">
        <div>
            <h1>Categories</h1>
        </div>
        <div class="ms-auto">
            <a href="{{ url('admin/add_category') }}" class="btn btn-secondary">Add New</a>
        </div>
    </div>
    <div class="card-body">
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>name</th>
                    <th>slug</th>
                    <th>Description</th>
                    <th>meta Title </th>
                    <th>status</th>
                    <th>Created By</th>
                    <th>Image</th>
                    <th>Edit/Delete</th>
                </tr>
            </thead>
            <tbody>
                @foreach($category as $item)
                    <tr>
                        <td>{{$item->id}}</td>
                        <td>{{$item->name}}</td>
                        <td>{{$item->slug}}</td>
                        <td>{{$item->description}}</td>
                        <td>{{$item->meta_title}}</td>
                        <td>{{$item->status== true?'Active':'Inactive'}}</td>
                        <td>{{$item->created_by}}</td>
                        <td class="text-center"><img src="{{ asset('public/images/category/'.$item->image)}}" width="40px" alt=""></td>
                        <td class="btn-group btn-sm"> 
                            <a href="" class="btn btn-warning">Edit</a>
                            <a href="" class="btn btn-danger">Delete</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>

        </table>
    </div>
</div>

@endsection