@extends('layouts.app')

@section('content')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Class Assignings</h1>
                </div>
                <div class="col-sm-6">
                    <a class="btn btn-primary float-right" data-toggle="modal" data-target="#schedule-show">
                       {{-- href="{{ route('classAssignings.create') }}"   --}}
                        Add New Class Assigning
                    </a>
                </div>
            </div>
        </div>
    </section>

    <div class="content px-3">

        @include('flash::message')

        <div class="clearfix"></div>

        <div class="card">
            <div class="card-body p-0">
                @include('class_assignings.table')
                @include('class_assignings.show_fields')
                <div class="card-footer clearfix float-right">
                    <div class="float-right">
                        
                    </div>
                </div>
            </div>

        </div>
    </div>

@endsection

