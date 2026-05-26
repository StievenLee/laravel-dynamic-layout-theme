@extends('layouts.master')

@section('content')
    <h1>Product List</h1>
    <div class="alert alert-primary">
        <b>Name shop: </b>{{ $shop_data['name'] }}
        <br>
        <b>Address: </b>  {{ $shop_data['address'] }}
        <br>
        <b>Type: </b> {{ $shop_data['type'] }}
    </div>
    <div class="card">
        <div class="card-header d-flex justify-content-between align-items-center">
            <h4 class="mb-0">List</h4>
            <button type="button" class="btn btn-primary">Primary</button>
        </div>
        <div class="card-body">
            
            <table class="table table-striped table-bordered align-middle text-center">
                <thead>
                    <tr>
                    <th scope="col">No</th>
                    <th scope="col">Name Product</th>
                    <th scope="col">Stock</th>
                    <th scope="col">Settings</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                    <th scope="row">1</th>
                    <td>Mark</td>
                    <td>Otto</td>
                    <td>
                        <button type="button" class="btn btn-warning">Edit</button>
                        <button type="button" class="btn btn-danger">Delete</button>
                    </td>
                    </tr>
                </tbody>
            </table>

        </div>
    </div>
    
@endsection