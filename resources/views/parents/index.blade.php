@extends('layouts.master')
    
@section('content')

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-9 text-center">
                <table class="table table-hover table-striped text-center">
                    <thead class="table-dark">
                        <tr>
                            <th scope="col" style="width: 20%">ID</th>
                            <th scope="col" style="width: 30%">Name</th>
                            <th scope="col">Gender</th>
                        </tr>
                    </thead>

                    <tbody>
                        @forelse($parents as $parent)
                            <tr>
                                <td>{{ $parent->id }}</td>
                                <td>
                                    <a href="{{  route('parents.show', $parent->id) }}">{{ $parent->name }}</a>
                                </td>
                                <td>{{ $parent->gender }}</td>
                            </tr>
                        @empty
                            <p>There's no parent registers under this user...</p>
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
                <br><a href=" {{ route('parents.create') }}" class="btn btn-primary btn-lg">Create Parent</a>
            </div>
        </div>
    </div>
@endsection