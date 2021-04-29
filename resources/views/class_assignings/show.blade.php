@extends('layouts.app')

@section('content')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Class Assigning Details</h1>
                </div>
            </div>
        </div>
    </section>

    <div class="content px-3">
        <div class="card">

            <div class="card-body">
                <div class="row" style="padding-left:20px">
                    @include('class_assignings.show_fields')
                    <a href="{!! route('classAssignings.index') !!}" class="btn btn-default">
                </div>
            </div>

        </div>
    </div>
@endsection
