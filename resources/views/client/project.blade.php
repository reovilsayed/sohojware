@extends('layouts.client')
@section('css')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
@endsection

@section('deshboard')
    <div class="col-xxl-9 col-lg-8">
        <div class="dashboard-right-sidebar">
            <div class="dashboard-profile">
                <div class="title">
                    <h2>My Project</h2>
                    <span class="title-leaf">
                        <svg class="icon-width bg-gray">
                            <use xlink:href="https://themes.pixelstrap.com/fastkart/assets/svg/leaf.svg#leaf">
                            </use>
                        </svg>
                    </span>
                </div>
                <div class="profile-about dashboard-bg-box">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-body">
                                    <div class="row mb-2">
                                        {{-- <div class="col-sm">
                                            <div class="search-box me-2 d-inline-block">
                                                <div class="position-relative">
                                                    <input type="text" class="form-control sm" autocomplete="off"
                                                        id="searchTableList" placeholder="Search...">
                                                </div>
                                            </div>
                                        </div> --}}

                                        <div class="col-sm-auto mb-2">
                                            <div class="text-sm-end">
                                                <a href="{{ route('client.create') }}"
                                                    class="btn theme-bg-color btn-sm fw-bold text-light"><i
                                                        class="fa fa-plus me-1"></i>
                                                    Add New Project</a>
                                            </div>
                                        </div>

                                    </div>

                                    <div class="table-responsive">
                                        {{-- <style>
                                            tr:nth-child(even) {
                                                background-color: rgb(146, 124, 124)
                                            }
                                            tr:nth-child(odd) {
                                                background-color: rgb(137, 146, 154)
                                            }
                                        </style> --}}
                                        <table
                                            class="table project-list-table align-middle table-nowrap dt-responsive w-100 table-borderless"
                                            id="projectList-table">
                                            <thead class="table-light">
                                                <tr>
                                                    <th scope="col" style="width: 40px">#</th>
                                                    <th scope="col">Project Name</th>
                                                    <th scope="col">Payment Type</th>
                                                    <th scope="col">Budget</th>
                                                    <th scope="col">Created At</th>
                                                    <th scope="col" class="text-center">Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                     
                                                @foreach ($projects as $project)
                              
                                                    <tr>
                                                        <td>{{ $project->id}}</td>
                                                        <td>{{ $project->title }}</td>
                                                        <td>{{ $project->payment_type }}</td>
                                                        <td>${{ $project->budget }}</td>
                                                        <td>{{ $project->created_at->format('d/M/Y') }}</td>
                                                        <td class="d-flex justify-content-center">
                                                            <a href="{{route('client.project.view',$project)}}" class="btn btn-sm"><i
                                                                    class="fa-solid fa-eye text-warning"></i></a>
                                                            <a href="{{route('client.project.edit',$project)}}" class="btn btn-sm p-0"><i
                                                                    class="fa-solid fa-pen-to-square text-success"></i></a>
                                                            <x-actions.delete :action="route('client.destroy', $project)" />
                                                        </td>
                                                    </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                        <div>
                                            {{ $projects->links('pagination::bootstrap-5') }}
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
