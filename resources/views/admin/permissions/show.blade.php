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
                                    <i data-feather="permission"></i>
                                </div>
                                Permissions List
                            </h1>
                        </div>
                        <div class="col-12 col-xl-auto mb-3">
                            <a class="btn btn-sm btn-light text-primary" href="{{ route('permissions.create') }}"">
                                <i class="me-1" data-feather="permission-plus"></i>
                                Add New Permission
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
                                <a href="{{ route('permissions.index') }}">Back to list</a>
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
                                                        {{ $permission->id }}
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th scope="col">
                                                        Title
                                                    </th>
                                                    <td>
                                                        {{ $permission->title }}
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th>
                                                        Created Date
                                                    </th>
                                                    <td>
                                                        {{ $permission->created_at->diffForHumans() }}
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
