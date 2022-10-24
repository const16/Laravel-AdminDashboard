@extends('admin.layouts.admin')

@section('content')
    <main>
        <header class="page-header page-header-compact page-header-light border-bottom bg-white mb-4">
            <div class="container-fluid px-4">
                <div class="page-header-content">
                    <div class="row align-items-center justify-content-between pt-3">
                        <div class="col-auto mb-3">
                            <h1 class="page-header-title">
                                <div class="page-header-icon"><i data-feather="user"></i></div>
                                Users List
                            </h1>
                        </div>
                        <div class="col-auto mb-3">
                            <a class="btn btn-sm btn-light text-primary" href="{{ route('users.create') }}">
                                <i class="me-1" data-feather="user-plus"></i>
                                Add New User
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- Main page content-->
        <div class="container-fluid px-4">
            <div class="card">
                <div class="card-body">
                    <table id="datatablesSimple">
                        <thead>
                            <tr>
                                <th>User</th>
                                <th>Email</th>
                                <th>Role</th>
                                <th>Joined Date</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th>User</th>
                                <th>Email</th>
                                <th>Role</th>
                                <th>Joined Date</th>
                                <th>Actions</th>
                            </tr>
                        </tfoot>
                        <tbody>
                            @foreach ($users as $user)
                                <tr>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <div class="avatar me-2"><img class="avatar-img img-fluid"
                                                    src="{{ asset('assets/img/illustrations/profiles/profile-1.png') }}" />
                                            </div>
                                            {{ $user->name }}
                                        </div>
                                    </td>
                                    <td>{{ $user->email }}</td>
                                    @foreach ($user->roles as $role)
                                        <td>{{ $role->title }}</td>
                                    @endforeach
                                    <td>{{ $user->created_at->diffForHumans() }}</td>
                                    <td>
                                        <a class="btn btn-datatable btn-icon btn-transparent-dark me-2"
                                            href="{{ route('users.show', $user->id) }}"><i class="fa fa-eye"
                                                aria-hidden="true"></i></a>

                                        <a class="btn btn-datatable btn-icon btn-transparent-dark me-2"
                                            href="{{ route('users.edit', $user->id) }}"><i data-feather="edit"></i></a>

                                        <form class="btn p-0" action="{{ route('users.destroy', $user->id) }}"
                                            method="POST" onsubmit="return confirm('Are you sure?');">
                                            @csrf
                                            @method('DELETE')

                                            <button type="submit"
                                                class="btn btn-datatable btn-icon btn-transparent-dark me-2">
                                                <i data-feather="trash-2"></i>
                                            </button>
                                        </form>
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
