@extends('layouts.main')

@section('content')
    <main>
        <div class="container-fluid px-4">
            <h1 class="my-4">Create Category</h1>
                <div class="card mb-4">
                    <div class="card-body">

                        <form action="{{ route('category.store') }}" method="POST">
                            @csrf
                            <div class="mb-3">
                                <label for="name" class="form-name">Nama</label>
                                <input type="text" class="form-control" name="name" id="name"  required>
                            </div>
                             <button type="submit" class="btn btn-primary">Submit</button>
                             <button type="button" class="btn btn-secondary">Cancel</button>
                        </form>
                        
                    </div>
                </div>
        </div>
    </main>
@endsection