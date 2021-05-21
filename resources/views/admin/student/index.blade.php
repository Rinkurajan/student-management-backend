@extends('layouts.admin', ['title' => 'Students'])

@section('content')
<div class="content-wrapper">
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                </div>
                <div class="col-sm-6">
                    <a href="{{ route('admin.student.create') }}"
                    class="btn btn-primary float-sm-right">Add Student</a>
                </div>
            </div>
        </div>
        <div class="container-fluid">
            @include('flash::message')
            <div class="row">
                <div class="col-12">
                    <div class="card card-primary mt-3">
                        <div class="card-header">
                            <h3 class="card-title">Students</h3>
                        </div>
                        <div class="card-body p-0">
                            @include('admin.shared.empty', ['lists' => $students])

                            @if(!$students->isEmpty())
                                <table class="table table-hover-table-responsive">
                                    <thead>
                                        <tr>
                                            <th width="10">ID</th>
                                            <th width="20%">Name</th>
                                            <th width="20%">Age</th>
                                            <th width="20%">Gender</th>
                                            <th width="20%">Reporting Teacher</th>
                                            <th width="10">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($students as $key => $student)
                                            <tr>
                                                <td>{{ $student->id }}</td>
                                                <td>{{ $student->name }}</td>
                                                <td>{{ $student->age }}</td>
                                                <td>{{ $student->gender }}</td>
                                                <td>{{ $student->teacher->name }}</td>
                                                <td><a href="{{ route('admin.student.edit', $student) }}">Edit</a></td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
        {{ $students->links() }}
    </section>
</div>
@endsection
