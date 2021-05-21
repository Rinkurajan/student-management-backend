@extends('layouts.admin', ['title' => 'Create Student'])

@section('content')
<div class="content-wrapper">
    <section class="content">
        <div class="container-fluid">
            @include('flash::message')
            <div class="row">
                <div class="col-12">
                    <div class="card card-primary mt-3">
                        <div class="card-header">
                            <h3 class="card-title">Add Student</h3>
                        </div>
                        <form method="POST" action="{{ route('admin.student.store') }}">
                            {{csrf_field()}}
                            <div class="card-body">
                                <div class="form-group row">
                                    <label for="name" class="col-sm-3 col-form-label">Name</label>
                                    <div class="col-sm-4">
                                        <input type="text"
                                        class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}"
                                        name="name" value="{{old('name') }}">
                                        @if ($errors->has('name'))
                                        <span class="invalid-feedback d-block" role="alert">
                                            <strong>{{ $errors->first('name') }}</strong>
                                        </span>
                                        @endif
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="age" class="col-sm-3 col-form-label">Age</label>
                                    <div class="col-sm-4">
                                        <input type="text"
                                        class="form-control{{ $errors->has('age') ? ' is-invalid' : '' }}"
                                        name="age" value="{{old('age') }}">
                                        @if ($errors->has('age'))
                                        <span class="invalid-feedback d-block" role="alert">
                                            <strong>{{ $errors->first('age') }}</strong>
                                        </span>
                                        @endif
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="gender" class="col-sm-3 col-form-label">Gender</label>
                                    <div class="col-sm-4">
                                        <input type="text"
                                        class="form-control{{ $errors->has('gender') ? ' is-invalid' : '' }}"
                                        name="gender" value="{{old('gender') }}">
                                        @if ($errors->has('gender'))
                                        <span class="invalid-feedback d-block" role="alert">
                                            <strong>{{ $errors->first('gender') }}</strong>
                                        </span>
                                        @endif
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="select"
                                    class="col-sm-3 col-form-label">Reporting Teacher</label>
                                    <div class="col-sm-4">
                                        <select class="form-control{{ $errors->has('teacher_id') ? ' is-invalid' : '' }}"
                                            name="teacher_id">
                                            <option disabled selected>Select Teacher</option>
                                            @foreach ($teachers as $teacher)
                                            <option {{ old('teacher_id', $teacher->teacher_id)==$teacher->id ?'selected' : ''}} value="{{$teacher->id}}">{{ $teacher->name }}
                                            </option>
                                            @endforeach
                                        </select>
                                        @if ($errors->has('teacher_id'))
                                        <span class="invalid-feedback" style="display: block !important;" role="alert">
                                            <strong>The teacher field is required</strong>
                                        </span>
                                        @endif
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="select" class="col-sm-3 col-form-label"></label>
                                    <div class="col-sm-4">
                                        <button type="submit"
                                        class="btn btn-primary">Submit</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection
