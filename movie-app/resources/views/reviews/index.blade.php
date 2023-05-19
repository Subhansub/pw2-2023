@extends('layouts.main')

@section('content')
<div class="container-fluid px-4">
    <h1 class="mt-4">Reviews Data</h1>
    <div class="d-flex justify-content-between mb-4">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/">Dashboard</a></li>
            <li class="breadcrumb-item active">Reviews</li>
        </ol>
        <a href="#">
            <button class="btn btn-success" type="submit">Create Data</button>
        </a>
    </div>
    <div class="card mb-4">
        <div class="card-header">
            <i class="fas fa-table me-1"></i>
            Reviews Data
        </div>
        <div class="card-body">
            <table id="datatablesSimple">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Movie</th>
                        <th>User</th>
                        <th>Rating</th>
                        <th>Comment</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th>No</th>
                        <th>Movie</th>
                        <th>User</th>
                        <th>Rating</th>
                        <th>Comment</th>
                        <th>Action</th>
                    </tr>
                </tfoot>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>WHRAT of MAN</td>
                        <td>Jumharis</td>
                        <td>9.0</td>
                        <td>Seru nontonya</td>
                        <td>
                            <a href="" class="btn btn-sm btn-warning"> Edit</a>
                            <a href="" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure you want to delete?')"> Delete</a>
                        </td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>Pengabdi setan</td>
                        <td>Furkan</td>
                        <td>8.5</td>
                        <td>Seram Filmnya</td>
                        <td>
                            <a href="" class="btn btn-sm btn-warning"> Edit</a>
                            <a href="" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure you want to delete?')"> Delete</a>
                        </td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>Hangout</td>
                        <td>ahmadin</td>
                        <td>8.8</td>
                        <td>Komedinya dapat horornyapun dapat</td>
                        <td>
                            <a href="" class="btn btn-sm btn-warning"> Edit</a>
                            <a href="" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure you want to delete?')"> Delete</a>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
@endsection
