@extends('layouts.main')

@section('title')
    Edit
@endsection


@section('main-section')
<div class="col-6 mx-auto p-3 bg-light rounded mt-2">
    <h2 class="text-center text-warning mb-3">Update User</h2>
    @isset($success)
    <div class="alert alert-success" role="alert">
        <strong>Success!</strong>{{$success}}</div>
      
    @endisset
    <form action="{{url('user/edit/')."/".$customer->id}}" method="post">
       @csrf 
       <input type="text" name="name" placeholder="Name :" class="form-control mb-2 border-warning" value="{{$customer->name}}"/>
       @error('name')
           <p class="text-danger">
            {{$message}}
           </p>
       @enderror
       <input type="text" name="address" placeholder="Address :" class="form-control mb-2 border-warning" value="{{$customer->address}}"/>
       @error('address')
           <p class="text-danger">
            {{$message}}
           </p>
       @enderror
       <input type="text" name="age" placeholder="Age :" class="form-control mb-2 border-warning" value="{{$customer->age}}"/>
       @error('age')
           <p class="text-danger">
            {{$message}}
           </p>
       @enderror
       <label for="birth" class="form-label text-secondary">Birth Date :</label>
       <input type="date" name="birthdate" id="birth" placeholder="Birth Date :" class="form-control mb-2 border-warning" value="{{$customer->birth}}"/>
       <input type="number" name="phone" placeholder="Phone :" class="form-control mb-2 border-warning" value="{{$customer->phone}}"/>
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