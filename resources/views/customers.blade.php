@extends('layouts.main')
@section('title')
    Customers
@endsection
@section('main-section')


<div class="table bg-light p-4">
    <table class="table table-stripped" id="datatable">
        <thead>
            <tr>
                <th scope="col">Id</th>
                <th scope="col">Name </th>
                <th scope="col">Address</th>
                <th scope="col">Age</th>
                <th scope="col">Phone</th>
                <th scope="col">Join</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($data as $item)
                
            <tr class="">
                <td scope="row">{{$item->id}}</td>
                <td>{{$item->name}}</td>
                <td>{{$item->address}}</td>
                <td>{{$item->age}}</td>
                <td>{{$item->phone}}</td>
                <td>{{$item->join}}</td>
                <td>
                    <a class="btn btn-primary" href="{{url('user/edit')}}/{{$item->id}}">Edit</a>
                    <a class="btn btn-danger" href="{{url('user/delete')}}/{{$item->id}}">Delete</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>


@endsection