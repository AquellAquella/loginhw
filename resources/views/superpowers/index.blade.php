@extends('layouts.master')

@section('content')
    
    <div class="container">
        
        <div class="row justify-content-center">
            <div class="col-12 col-lg-9 text-center">

                <table class="table table-hover table-striped text-center">
                    <thead class="table-dark">
                        <tr>
                            <th scope="col" style="width: 20%;">ID</th>
                            <th scope="col" style="width: 30%;">Name</th>
                            <th scope="col">Description</th>
                        </tr>
                    </thead>

                    <tbody>
                        @forelse($superpowers as $superpower)
                            <tr>
                                <td>{{$superpower->id}}</td>
                                <td>
                                    <a href="{{ route('superpowers.show', $superpower->id) }}">{{$superpower->name}}</a>
                                </td>
                                <td>{{$superpower->description}}</td>
                            </tr>
                        @empty
                            <p>There're no superpowers</p>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
        
    </div>

@endsection

@section('button')
    <div class="container">
        <div class="row text-end">
            <div class="col-12">
            <br><a href="{{ route('superpowers.create') }}" class="btn btn-primary btn-lg">Create Superpower</a>
            </div>
        </div>
    </div>
@endsection