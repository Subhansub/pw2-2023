@extends('layouts.main')

@section('content')
<div class="container-fluid px-4">
    <h1 class="mt-4">Genres Data</h1>
    <div class="d-flex justify-content-between mb-4">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/">Dashboard</a></li>
            <li class="breadcrumb-item active">Genres</li>
        </ol>
        <a href="#">
            <button class="btn btn-success" type="submit">Create Data</button>
        </a>
    </div>
    <div class="card mb-4">
        <div class="card-header">
            <i class="fas fa-table me-1"></i>
            Genres Data
        </div>
        <div class="card-body">
            <table id="datatablesSimple">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama Genre</th>
                        <th>Deskripsi</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th>No</th>
                        <th>Nama Genre</th>
                        <th>Deskripsi</th>
                        <th>Action</th>
                    </tr>
                </tfoot>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>Anime</td>
                        <td>Film animasi Jepang</td>
                        <td>
                            <a href="" class="btn btn-sm btn-warning">Edit</a>
                            <a href="" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure you want to delete?')">Delete</a>
                        </td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>Horor</td>
                        <td>Film Seram</td>
                        <td>
                            <a href="" class="btn btn-sm btn-warning">Edit</a>
                            <a href="" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure you want to delete?')">Delete</a>
                        </td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>Action</td>
                        <td>Film Laga</td>
                        <td>
                            <a href="" class="btn btn-sm btn-warning">Edit</a>
                            <a href="" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure you want to delete?')">Delete</a>
                        </td>
                    </tr>
                    <tr>
                        <td>4</td>
                        <td>Drama</td>
                        <td>Film Kehidupan</td>
                        <td>
                            <a href="" class="btn btn-sm btn-warning">Edit</a>
                            <a href="" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure you want to delete?')">Delete</a>
                        </td>
                    </tr>
                    <tr>
                        <td>5</td>
                        <td>Komedi</td>
                        <td>Film Lucu</td>
                        <td>
                            <a href="" class="btn btn-sm btn-warning">Edit</a>
                            <a href="" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure you want to delete?')">Delete</a>
                        </td>
                    </tr>
                    <!-- Add more rows for other genres -->
                </tbody>
            </table>
        </div>
    </div>
@endsection
