@extends('layouts.admin', ['title' => 'Student Marks'])

@section('content')
<div class="content-wrapper">
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">

                </div>
                <div class="col-sm-6">
                    <a href="{{ route('admin.mark.create') }}"
                    class="btn btn-primary float-sm-right">Add Student Mark</a>
                </div>
            </div>
        </div>
        <div class="container-fluid">
            @include('flash::message')
            <div class="row">
                <div class="col-12">
                    <div class="card card-primary mt-3">
                        <div class="card-header">
                            <h3 class="card-title">Student Marks</h3>
                        </div>
                        <div class="card-body p-0">
                            @include('admin.shared.empty', ['lists' => $marks])

                            @if(!$marks->isEmpty())
                                <table class="table table-hover-table-responsive">
                                    <thead>
                                        <tr>
                                            <th width="10">ID</th>
                                            <th width="10%">Name</th>
                                            <th width="10%">Maths</th>
                                            <th width="10%">Science</th>
                                            <th width="10%">History</th>
                                            <th width="10%">Term</th>
                                            <th width="10%">Total Marks</th>
                                            <th width="20%">Created On</th>
                                            <th width="10">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($marks as $key => $mark)
                                            <tr>
                                                <td>{{ $mark->id }}</td>
                                                <td>{{ $mark->student->name }}</td>
                                                <td>{{ $mark->maths }}</td>
                                                <td>{{ $mark->science }}</td>
                                                <td>{{ $mark->history }}</td>
                                                <td>{{ $mark->term }}</td>
                                                <td>{{ $mark->maths + $mark->science + $mark->history}}</td>
                                                <td>{{ date('M d,Y  h:i A', strtotime($mark->created_at)) }}
                                                </td>
                                                <td><a href="{{ route('admin.mark.edit', $mark) }}">Edit</a></td>
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
        {{ $marks->links() }}
    </section>
</div>
@endsection
