@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="h1 text-center m-5">Categories</div>
        <table class="table table-striped table-bordered table-dark">
            <thead>
                <tr>
                    <th scope="col">Category</th>
                    <th scope="col">Description</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($categories as $category)
                    <tr>
                        <td>{{ $category->category }}</td>
                        <td>{{ $category->description }}</td>
                    </tr>
                @endforeach
            </tbody>
          </table>
    </div>

@endsection
