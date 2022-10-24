@extends('admin.layouts.admin')

@section('content')
    <main>
        <header class="page-header page-header-compact page-header-light border-bottom bg-white mb-4">
            <div class="container-fluid px-4">
                <div class="page-header-content">
                    <div class="row align-items-center justify-content-between pt-3">
                        <div class="col-auto mb-3">
                            <h1 class="page-header-title">
                                <div class="page-header-icon">
                                    <i data-feather="role"></i>
                                </div>
                                Roles List
                            </h1>
                        </div>
                        <div class="col-12 col-xl-auto mb-3">
                            <a class="btn btn-sm btn-light text-primary" href="{{ route('roles.create') }}"">
                                <i class="me-1" data-feather="role-plus"></i>
                                Add New Role
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
                    <div>
                        <div>
                            <div>
                                <a href="{{ route('roles.index') }}">Back to list</a>
                            </div>
                            <div>
                                <div>
                                    <div>
                                        <div>
                                            <table>
                                                <tr>
                                                    <th scope="col">
                                                        ID
                                                    </th>
                                                    <td>
                                                        {{ $role->id }}
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th scope="col">
                                                        Title
                                                    </th>
                                                    <td>
                                                        {{ $role->title }}
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th>
                                                        Created Date
                                                    </th>
                                                    <td>
                                                        {{ $role->created_at->diffForHumans() }}
                                                    </td>
                                                </tr>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
