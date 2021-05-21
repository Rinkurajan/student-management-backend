@extends('layouts.admin', ['title' => 'Update Student Mark'])

@section('content')
<div class="content-wrapper">
    <section class="content">
        <div class="container-fluid">
            @include('flash::message')
            <div class="row">
                <div class="col-12">
                    <div class="card card-primary mt-3">
                        <div class="card-header">
                            <h3 class="card-title">Edit Student Mark</h3>
                        </div>
                        <form method="POST" action="{{ route('admin.mark.update', $mark) }}">
                            {{ csrf_field() }}
                            {{ method_field('PUT') }}

                            <div class="card-body">
                                <div class="form-group row">
                                    <label for="name" class="col-sm-3 col-form-label">Name</label>
                                    <div class="col-sm-4">
                                        <select
                                        class="form-control {{ $errors->has('student_id') ? ' is-invalid' : '' }}"
                                        name="student_id">
                                        @foreach($students as $student)
                                        <option value="{{ $student->id }}"
                                            {{ $student->id == $mark->student_id ? 'selected': ''}}>
                                            {{$student->name }}</option>
                                            @endforeach
                                        </select>
                                        @if ($errors->has('student_id'))
                                        <span class="error invalid-feedback d-block" role="alert">
                                            <strong>The name field is required</strong>
                                        </span>
                                        @endif
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="select" class="col-sm-3 col-form-label">Term</label>
                                    <div class="col-sm-4">
                                        <select class="form-control {{ $errors->has('term') ? ' is-invalid' : '' }}"
                                            name="term">
                                            <option disabled selected>Select</option>
                                            <option value="one" @if (old('term', $mark->term) == "one")
                                                {{ 'selected' }} @endif>One</option>
                                                <option value="two" @if (old('term', $mark->term) == "two")
                                                    {{ 'selected' }} @endif>Two</option>
                                                </select>
                                                @if ($errors->has('term'))
                                                <span class="invalid-feedback" style="display: block !important;" role="alert">
                                                    <strong>{{ $errors->first('term') }}</strong>
                                                </span>
                                                @endif
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="maths" class="col-sm-3 col-form-label">Maths</label>
                                            <div class="col-sm-4">
                                                <input type="text"
                                                class="form-control {{ $errors->has('maths') ? ' is-invalid' : '' }}"
                                                name="maths" value="{{ old('maths', $mark->maths) }}">
                                                @if ($errors->has('maths'))
                                                <span class="invalid-feedback d-block" role="alert">
                                                    <strong>{{ $errors->first('maths') }}</strong>
                                                </span>
                                                @endif
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="science" class="col-sm-3 col-form-label">Science</label>
                                            <div class="col-sm-4">
                                                <input type="text"
                                                class="form-control {{ $errors->has('science') ? ' is-invalid' : '' }}"
                                                name="science" value="{{ old('science', $mark->science) }}">
                                                @if ($errors->has('science'))
                                                <span class="invalid-feedback d-block" role="alert">
                                                    <strong>{{ $errors->first('science') }}</strong>
                                                </span>
                                                @endif
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="history" class="col-sm-3 col-form-label">History</label>
                                            <div class="col-sm-4">
                                                <input type="text"
                                                class="form-control {{ $errors->has('history') ? ' is-invalid' : '' }}"
                                                name="history" value="{{ old('history', $mark->history) }}">
                                                @if ($errors->has('history'))
                                                <span class="invalid-feedback d-block" role="alert">
                                                    <strong>{{ $errors->first('history') }}</strong>
                                                </span>
                                                @endif
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="select" class="col-sm-3 col-form-label"></label>
                                            <div class="col-sm-4">
                                                <button type="submit" class="btn btn-primary">Submit</button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <x-admin.delete :action="route('admin.mark.destroy',$mark)" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
</div>
@endsection
