@extends('admin.layouts.app')

@section('title', 'Manage Users')

@section('content')
    <!-- Card for User Management -->
    <div class="card overflow-hidden">
        <div class="card-header d-flex justify-content-between align-items-center">
            <h5 class="mb-0">Users</h5>
            <div>
                <!-- Bulk delete button -->
                <button id="bulk-delete" class="btn btn-danger">Delete</button>
                <!-- Add User button -->
                <a href="{{ route('admin.users.create') }}" class="btn btn-primary">Add User</a>
            </div>
        </div>

        <div class="table-responsive text-nowrap">
            <!-- DataTable for Users -->
            <table class="table" id="users-table">
                <thead>
                    <tr>
                        <th><input type="checkbox" id="select-all"></th>
                        <th>#</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Phone</th>
                        <th>Status</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- Data will be loaded dynamically via DataTables -->
                </tbody>
            </table>
        </div>
    </div>
@endsection

@push('scripts')
<script>
  
    $(document).ready(function () {
        var table = $('#users-table').DataTable({
        processing: true,
        serverSide: true,
        scrollY: '60vh',
        scrollCollapse: true,
        paging: true,
        fixedHeader: true,
        responsive: true,
        ajax: '{{ route("admin.users.index") }}',
        pageLength: 25,
        lengthMenu: [[10, 25, 50, 100, 250, 500, -1], [10, 25, 50, 100, 250, 500, "All"]],
        order: [[1, 'desc']], // This will sort by the first column (ID) in descending order
        columns: [
            { data: 'id', render: function(data) {
                return '<input type="checkbox" class="user-checkbox" value="' + data + '">';
            }, orderable: false, searchable: false },
            { data: null, render: function (data, type, row, meta) {
                return meta.row + meta.settings._iDisplayStart + 1;
            }, orderable: false, searchable: false },
            { data: 'full_name', name: 'full_name' },
            { data: 'email', name: 'email' },
            { data: 'phone', name: 'phone' },
            { 
                data: 'status', 
                name: 'status', 
                render: function(data) {
                     
                    return data == "Active"
                        ? '<select class="form-select status-dropdown" data-status="1"><option value="1" selected>Active</option><option value="0">In-Active</option></select>'
                        : '<select class="form-select status-dropdown" data-status="0"><option value="1">Active</option><option value="0" selected>In-Active</option></select>';
                },
                orderable: false, 
                searchable: false 
            },
            { data: 'action', name: 'action', orderable: false, searchable: false }
        ]
    });

        // Select all checkboxes
        $('#select-all').click(function(){
            $('.user-checkbox').prop('checked', this.checked);
        });

        // Bulk delete users
        $('#bulk-delete').click(function(){
            var ids = [];
            $('.user-checkbox:checked').each(function(){
                ids.push($(this).val());
            });

            if(ids.length > 0){
                $.confirm({
                    title: 'Confirm Deletion',
                    theme: 'modern',
                    content: 'Are you sure you want to delete the selected ' + ids.length + ' user(s)?',
                    buttons: {
                        confirm: {
                            text: 'Delete',
                            btnClass: 'btn-danger',
                            action: function () {
                                $.ajax({
                                    url: '{{ route("admin.users.bulk_delete") }}',
                                    type: 'POST',
                                    data: {
                                        ids: ids,
                                        _token: '{{ csrf_token() }}'
                                    },
                                    success: function(response) {
                                        $('#select-all').prop('checked', false);
                                        $('.user-checkbox').prop('checked', false);
                                        toastr.success(response.message);
                                        table.ajax.reload();
                                    },
                                    error: function(xhr) {
                                        toastr.error(xhr.responseJSON.message || 'Error deleting users');
                                    }
                                });
                            }
                        },
                        cancel: {
                            text: 'Cancel',
                            btnClass: 'btn-default'
                        }
                    }
                });
            } else {
                toastr.warning('No users selected.');
            }
        });

        // Single user deletion
        $(document).on('click', '.delete-user', function(){
            var userId = $(this).data('id');

            $.confirm({
                title: 'Confirm Deletion',
                theme: 'modern',
                content: 'Are you sure you want to delete this user?',
                buttons: {
                    confirm: {
                        text: 'Delete',
                        btnClass: 'btn-danger',
                        action: function () {
                            $.ajax({
                                url: '{{ url("admin/users") }}/' + userId,
                                type: 'DELETE',
                                data: { 
                                    _token: '{{ csrf_token() }}' 
                                },
                                success: function(response) {
                                    toastr.success(response.message);
                                    table.ajax.reload();
                                },
                                error: function(xhr) {
                                    toastr.error(xhr.responseJSON.message || 'Error deleting user');
                                }
                            });
                        }
                    },
                    cancel: {
                        text: 'Cancel',
                        btnClass: 'btn-default'
                    }
                }
            });
        });

        // Edit user
        $(document).on('click', '.edit-user', function(){
            var userId = $(this).data('id');
            window.location.href = '{{ url("admin/users") }}/' + userId + '/edit';
        });

        // Update user status
        $('#users-table').on('change', '.status-dropdown', function() {
            var row = $(this).closest('tr');
            var userId = row.find('td:first input.user-checkbox').val();    
            $.ajax({
                url: '{{ route("admin.users.updateStatus") }}',
                method: 'POST',
                data: {
                    _token: $('meta[name="csrf-token"]').attr('content'),
                    id: userId,  
                    status: $(this).val()  
                },
                success: function(response) {
                    if (response.success) {
                        toastr.success('Status updated successfully!');
                    } else {
                        toastr.error('Failed to update status');
                    }
                }
            });
        });
    });
</script>
@endpush
