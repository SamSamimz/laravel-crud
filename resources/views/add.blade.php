@extends('layouts.main')

@section('title')
    Add
@endsection

@section('main-section')
<div class="col-6 mx-auto p-3 bg-light rounded mt-2">
    <h2 class="text-center text-warning mb-3">Add User</h2>
    @isset($success)
    <div class="alert alert-success" role="alert">
        <strong>Success!</strong>{{$success}}</div>
      
    @endisset
    <form action="{{url('user/add')}}" method="post">
       @csrf 
       <x-input type="text" name="name" placeholder="Name :"/>
       @error('name')
           <p class="text-danger">
            {{$message}}
           </p>
       @enderror
       <x-input type="text" name="address" placeholder="Address :"/>
       @error('address')
           <p class="text-danger">
            {{$message}}
           </p>
       @enderror
       <x-input type="text" name="age" placeholder="Age :"/>
       @error('age')
           <p class="text-danger">
            {{$message}}
           </p>
       @enderror
       <label for="birth" class="form-label text-secondary">Birth Date :</label>
       <x-input type="date" name="birthdate" id="birth" placeholder="Birth Date :"/>
       <x-input type="number" name="phone" placeholder="Phone :"/>
       @error('phone')
           <p class="text-danger">
            {{$message}}
           </p>
       @enderror
       {{-- Button Submit --}}
        <button type="submit" class="btn btn-success">Save</button>
    </form>
</div>
@endsection