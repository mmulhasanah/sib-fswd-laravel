@extends('layouts.main')

@section('content')
        <main>
                    <div class="container-fluid px-4">
                        <h1 class="my-4">Category</h1>

                        <a class="btn btn-primary mb-2"  href="{{ route('category.create') }}" role="button">Create New</a>

                        <div class="card mb-4">
                            <div class="card-body">
                                <table id="datatablesSimple">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Nama</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($categories as $category)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $category['name']}}</td>
                                            <td>
                                                <a href="#" class="btn btn-warning">Edit</a>
                                                <button class="btn btn-danger">Delete</button>
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
        </main>
@endsection