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
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>111</td>
                    <td>Pronay</td>
                </tr>
            </tbody>

        </table>
    </div>
</div>

@endsection