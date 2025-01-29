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
                                {{-- <th>Progress</th> --}}
                                {{-- <th>Created at</th> --}}
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody></tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <!-- Create Modal -->
    <div class="modal fade" id="createModal" tabindex="-1" role="dialog" aria-labelledby="createModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="createModalLabel">Create Server App</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form id="create-server-app-form">
                        <div class="form-group">
                            <label for="server-name">Server Name</label>
                            <input type="text" class="form-control" id="server-name" name="name" required>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary" id="save-server-app">Save</button>
                </div>
            </div>
        </div>
    </div>
</section>
<script>
    function showLoading() {
        $('#loading-screen').css('display', 'flex');
    }
    function hideLoading() {
        $('#loading-screen').fadeOut('fast');
    }

    function getServerApps() {
        showLoading();
        $.ajax({
            url: "{{ route('servers.list') }}",
            type: "GET",
            data: {
                search: $('#search-value').val()
            },
            success: function(response) {
                hideLoading();
                let tbody = $('table tbody');
                tbody.empty();
                if (response.length == 0) {
                    $('table tbody').append('<tr><td colspan="4" class="text-center">No data available</td></tr>');
                    return;
                }
                $.each(response, function(index, value) {
                    let tr = $('<tr></tr>');
                    tr.append('<td>' + value.code + '</td>');
                    tr.append('<td>' + value.name + '</td>');
                    // tr.append('<td>' + value.progress + '</td>');
                    // tr.append('<td>' + value.created_at + '</td>');
                    tr.append('<td><button class="btn btn-sm btn-info">Edit</button> <button class="btn btn-sm btn-danger">Delete</button></td>');
                    tbody.append(tr);
                });
            },
            error: function(xhr) {
                hideLoading();
                console.log(xhr);
            }
        });
    }

    $(document).ready(function() {
        getServerApps();
        $('#search').click(function() {
            getServerApps();
        });

        $('#createModal').on('show.bs.modal', function() {
            $('#create-server-app-form').trigger('reset');
        });

        $('#save-server-app').click(function() {
            let formData = $('#create-server-app-form').serialize();
            $.ajax({
                url: "{{ route('servers.store') }}",
                type: "POST",
                data: formData + "&_token={{ csrf_token() }}",
                success: function(response) {
                    $('#createModal').modal('hide');
                    getServerApps();
                },
                error: function(xhr) {
                    console.log(xhr);
                }
            });
            console.log(formData);
        });
    })
</script>
@endsection