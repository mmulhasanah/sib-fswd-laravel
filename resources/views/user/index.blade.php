@extends('layouts.main')

@section('content')
<main>
    <div class="container-fluid px-4">
        <h1 class="my-4">User</h1>
            <div class="card mb-4">
                <div class="card-body">
                <table id="datatablesSimple" class="table table-striped">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Nim</th>
                            <th>Nama</th>
                            <th>Email</th>
                            <th>Phone</th>
                            <th>Photo</th>
                            <th>Role</th>
                            <td>Aksi</td>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>42219024</td>
                            <td>Ummul Hasanah</td>
                            <td>hasanahummul2791@gmail.com</td>
                            <td>085340670901</td>
                            <td>
                                <img src="https://placehold.co/100x100" alt="Photo">
                            </td>
                            <td>Administrator</td>
                            <td>
                                <a class="btn btn-warning" href="#">Edit</a>
                                <a class="btn btn-danger" href="#">Delete</a>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</main>
@endsection