@extends('layouts.main')

@section('content')
<div class="container-fluid px-4">
    <h1 class="mt-4">Users Data</h1>
    <div class="d-flex justify-content-between mb-4">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/">Dashboard</a></li>
            <li class="breadcrumb-item active">Users</li>
        </ol>
        <a href="#">
            <button class="btn btn-success" type="submit">Create Data</button>
        </a>
    </div>
    <div class="card mb-4">
        <div class="card-header">
            <i class="fas fa-table me-1"></i>
            Users Data
        </div>
        <div class="card-body">
            <table id="datatablesSimple">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama</th>
                        <th>Username</th>
                        <th>Password</th>
                        <th>Email</th>
                        <th>Role</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th>No</th>
                        <th>Nama</th>
                        <th>Username</th>
                        <th>Password</th>
                        <th>Email</th>
                        <th>Role</th>
                        <th>Action</th>
                    </tr>
                </tfoot>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>jumharis</td>
                        <td>jumhari</td>
                        <td>hore</td>
                        <td>jum34@gmail.com</td>
                        <td>Administrator</td>
                        <td>
                            <a href="" class="btn btn-sm btn-warning"> Edit</a>
                            <a href="" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure you want to delete?')"> Delete</a>
                        </td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>Dudin</td>
                        <td>dud12</td>
                        <td>ngomi</td>
                        <td>dudin45@gmail.com</td>
                        <td>User</td>
                        <td>
                            <a href="" class="btn btn-sm btn-warning"> Edit</a>
                            <a href="" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure you want to delete?')"> Delete</a>
                        </td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>ahmadin</td>
                        <td>ahmad</td>
                        <td>ticauq</td>
                        <td>ahmad99@gmail.com</td>
                        <td>User</td>
                        <td>
                            <a href="" class="btn btn-sm btn-warning"> Edit</a>
                            <a href="" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure you want to delete?')"> Delete</a>
                        </td>
                    </tr>
                    <tr>
                        <td>4</td>
                        <td>Furkan</td>
                        <td>Ka</td>
                        <td>nahu</td>
                        <td>furkan32@gmail.com</td>
                        <td>User</td>
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
