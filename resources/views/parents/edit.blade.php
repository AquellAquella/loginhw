@extends('layouts.master')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-md-9 col-lg-6 text-start">
                <form action="{{  route('parents.update', $parent->id) }}" method="post">
                    @method('put')
                    @csrf
                    
                    <div class="mb-3">
                    <label for="name" class="form-label">Name *</label>
                    <input type="text" name="name" class="form-control form-control-lg" value="{{ $parent->name }}">
                    </div>

                    <div class="mb-3">
                        <label for="gender" class="form-label">Gender</label><br>
                        <select name="gender" class="form-control form-control-lg">
                            <option value="Female">Female</option>
                            <option value="Male">Male</option>
                            <option value="NA">NA</option>
                        </select>
                    </div>

                    <br><br>
                    <div class="text-end">
                        <button type="submit" class="btn btn-warning btn-lg btn-block">Edit Parent</button><br>
                    </div>
                </form>
            </div>
        </div>
    </div>

@endsection