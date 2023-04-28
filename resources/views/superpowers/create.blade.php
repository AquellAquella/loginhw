@extends('layouts.master')

@section('content')

    <div class="container">
        
        <div class="row justify-content-center">
            <div class="col-12 col-md-9 col-lg-6 text-start">

                <form action="{{ route('superpowers.store') }}" method="post">
                    @csrf
                    
                    <div class="mb-3">
                        <label for="name" class="form-label">Name *</label>
                        <input type="text" name="name" class="form-control" >
                    </div>

                    <div class="mb-3">
                        <label for="description" class="form-label">Description</label><br>
                        <textarea name="description"  class="form-control" cols="50" rows="5"></textarea>
                    </div>
                    
                    <br>
                    <div class="text-end">
                        <button type="submit" class="btn btn-primary btn-lg">Create Superpower</button>
                    </div>
                </form>
            </div>
        </div>

    </div>

@endsection