@extends('layouts.admin')

@section('title', 'Server Apps')

@section('sidebar')
    @parent
@endsection

@section('content')
<section class="section">
    <div class="section-header">
        <h1>Servers App Menu</h1>
    </div>
    <div class="section-body">
        <div class="card">
            <div class="card-header">
                <div class="row w-100">
                    <div class="col-md-4">
                        <h4>List of Server Apps</h4>
                    </div>
                    <div class="col-md-4 d-flex justify-content-center card-header-form">
                            <div class="input-group">
                                <input id="search-value" type="text" class="form-control" placeholder="Search">
                                <div class="input-group-btn">
                                    <a id="search" class="btn btn-primary text-white"><i class="fas fa-search"></i></a>
                                </div>
                            </div>
                    </div>
                    <div class="col-md-4 text-right">
                        <a type="button" class="btn btn-sm btn-primary text-white" data-toggle="modal" data-target="#createModal">Create</a>
                    </div>
                </div>
            </div>
                <div class="table-responsive">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>Server Code</th>
                                <th>Server Name</th>
                                <th>Module Code</th>
                                <th>Module Name</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody></tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection