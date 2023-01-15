@extends('layouts.main')

@section('title')
    Login
@endsection

@section('main-section')
    <div class="col-6 mx-auto p-3 bg-light rounded">
        <h2 class="text-center text-warning mb-3">Login Form</h2>
        <form action="" method="">
           @csrf 

           <x-input type="text" name="name" placeholder="Email :"/>
           <x-input type="password" name="password" placeholder="Password :"/>
            <button type="submit" class="btn btn-success">Login</button>
        </form>
    </div>
@endsection