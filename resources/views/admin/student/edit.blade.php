@extends('layouts.admin', ['title' => 'Update Student'])

@section('content')
<div class="content-wrapper">
    <section class="content">
        <div class="container-fluid">
            @include('flash::message')
            <div class="row">
                <div class="col-12">
                    <div class="card card-primary mt-3">
                        <div class="card-header">
                            <h3 class="card-title">Edit Student</h3>
                        </div>
                        <form method="POST" action="{{ route('admin.student.update', $student) }}">
                            {{ csrf_field() }}
                            {{ method_field('PUT') }}

                            <div class="card-body">
                                <div class="form-group row">
                                    <label for="name" class="col-sm-3 col-form-label">Name</label>
                                    <div class="col-sm-4">
                                        <input type="text" class="form-control {{ $errors->has('name') ? ' is-invalid' : '' }}"
                                        name="name" value="{{ old('name', $student->name) }}">
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
                                        <input type="text" class="form-control {{ $errors->has('age') ? ' is-invalid' : '' }}"
                                        name="age" value="{{ old('age', $student->age) }}">
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
                                        <input type="text" class="form-control {{ $errors->has('gender') ? ' is-invalid' : '' }}"
                                        name="gender" value="{{ old('gender', $student->gender) }}">
                                        @if ($errors->has('gender'))
                                        <span class="invalid-feedback d-block" role="alert">
                                            <strong>{{ $errors->first('gender') }}</strong>
                                        </span>
                                        @endif
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="select" class="col-sm-3 col-form-label">Reporting Teacher</label>
                                    <div class="col-sm-4">
                                        <select class="form-control {{ $errors->has('teacher_id') ? ' is-invalid' : '' }}" name="teacher_id">
                                            @foreach($teachers as $teacher)
                                            <option value="{{ $teacher->id }}" {{ $teacher->id == $student->teacher_id ? 'selected': ''}}>{{$teacher->name }}</option>
                                            @endforeach
                                        </select>
                                        @if ($errors->has('teacher_id'))
                                        <span class="error invalid-feedback d-block" role="alert">
                                            <strong>The teacher name field is required</strong>
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
                    <x-admin.delete :action="route('admin.student.destroy',$student)" />
                </div>
            </div>
        </div>
    </div>
</div>
</div>
</section>
</div>
@endsection
