@extends('admin.layouts.app')

@section('title', 'Agent Students')

@section('content')


   <div class="card overflow-hidden">

    <div class="card-header d-flex justify-content-between align-items-center pb-0">
         
        <div class="text-center flex-grow-1 fs-4 fw-bold">  
                @if($agent)
                    {{ $agent->full_name }}
                @else
                    All Agent Students
                @endif
        </div>
        <div>
            <h5 class="mb-0 fs-5 fw-bold">Total Students: {{ $totalStudents }}</h5>
        </div>
    </div>

        <div class="card-header">
                <div class="d-flex flex-wrap gap-2"> 
                    @foreach ($filters as $filter)
                        <span class="badge {{ $filter['class'] }} filter-badge" 
                                data-type="{{ $filter['type'] }}" 
                                data-status="{{ $filter['status'] }}">
                            {{ $filter['label'] }} ({{ $filter['count'] }})
                        </span>
                    @endforeach
                       
                </div>
       </div>



        <div class="box-body table-responsive">
            <table class="table table-striped" id="students-table">
                <thead>
                        <tr>
                            <th><input type="checkbox" id="select-all"></th>
                            <th>#</th>
                            <th>Actions</th>
                            <th>Name</th>
                            <th>Father's Name</th>
                            <th>Mother's Name</th>
                            <th>OTR Number</th>
                            <th>Application ID</th>
                            <th>Aadhar Card Number</th>
                            <th>College Name</th>
                            <th>Course Name</th>
                            
                        </tr>
                    </thead>
                <tbody>
                    <!-- Data will be populated by DataTables -->
                </tbody>
            </table>
        </div>
    </div>

 
@endsection

@section('scripts')
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.2/jquery-confirm.min.js"></script>
<script>
    $(document).ready(function () {
    var table = $('#students-table').DataTable({
        processing: true,
        serverSide: true,
        scrollY: '60vh',
        scrollCollapse: true,  
        paging: true,  
        fixedHeader: true,  
        responsive: true,
        ajax: {
            url: '{{ $agentId === "all" ? route("admin.agents.students", "all") : route("admin.agents.students", $agent->id) }}',
            data: function (d) {
                d.type = $('#type-filter').val(); // Pass type filter to the server
                d.status = $('#status-filter').val(); // Pass status filter to the server
            }
        },
        pageLength: 25,
        lengthMenu: [[10, 25, 50, 100, 250, 500, 1000], [10, 25, 50, 100, 250, 500, '1000']],
        columns: [
            { 
                data: 'id', 
                name: 'id', 
                render: function(data, type, row, meta) {
                    return '<input type="checkbox" class="student-checkbox" value="' + data + '">';
                }, 
                orderable: false, 
                searchable: false 
            },
            { 
                data: null, 
                name: 'id', 
                searchable: false, 
                orderable: false, 
                render: function (data, type, row, meta) {
                    return meta.row + meta.settings._iDisplayStart + 1; 
                }
            },
            { data: 'action', name: 'action', orderable: false, searchable: false },
            { data: 'student_name', name: 'student_name' },
            { data: 'father_name', name: 'father_name' },
            { data: 'mother_name', name: 'mother_name' },
            { data: 'otr_number', name: 'otr_number' },
            { data: 'application_id', name: 'application_id' },
            { data: 'aadhar_card_number', name: 'aadhar_card_number' },
            { data: 'college_name', name: 'college_name' },
            { data: 'course_name', name: 'course_name' },
          
        ],
        order: [[1, 'asc']], 
    });

    window.onpageshow = function(event) {
        if (event.persisted || sessionStorage.getItem('reloadDataTable') === 'true') {
            sessionStorage.removeItem('reloadDataTable');  
            table.ajax.reload(null, false); 
        }
    };

    $('.filter-badge').on('click', function () {
        // Remove active class from all badges
        $('.filter-badge').removeClass('active-badge');

        // Add active class to the clicked badge
        $(this).addClass('active-badge');

        var type = $(this).data('type'); // Get the type from the badge
        var status = $(this).data('status'); // Get the status from the badge

        // Reload DataTable with the new filter
        table.ajax.url('{{ $agentId === "all" ? route("admin.agents.students", "all") : route("admin.agents.students", $agent->id) }}?type=' + type + '&status=' + status).load();
    });

    $('#select-all').click(function(){
        var rows = table.rows({ 'search': 'applied' }).nodes();
        $('input[type="checkbox"]', rows).prop('checked', this.checked);
    });

    // Handle click on checkbox to set state of "Select all" control
    $('#students-table tbody').on('change', 'input[type="checkbox"]', function(){
        // If checkbox is not checked
        if(!this.checked){
            var el = $('#select-all').get(0);
            // If "Select all" control is checked and has 'indeterminate' property
            if(el && el.checked && ('indeterminate' in el)){
                el.indeterminate = true;
            }
        }
    });

    $('#bulk-delete').click(function(){
        var ids = [];
        $('.student-checkbox:checked').each(function(){
            ids.push($(this).val());
        });

        if(ids.length > 0){
            $.confirm({
                title: 'Confirm Deletion',
                content: 'Are you sure you want to delete these students?',
                buttons: {
                    confirm: function () {
                        $.ajax({
                            url: '{{ route("admin.students.bulk_delete") }}',
                            type: 'POST',
                            data: {
                                ids: ids,
                                _token: $('meta[name="csrf-token"]').attr('content')
                            },
                            success: function(data) {
                                if (data.success) {
                                    $('#select-all').prop('checked', false);  
                                    $('#bulk-students-table input[type="checkbox"]').prop('checked', false); 
                                    toastr.success('Selected students have been deleted.');
                                    table.ajax.reload();
                                } else {
                                    toastr.error(data.message);
                                }
                            },
                            error: function(xhr, status, error) {
                                toastr.error('An error occurred while deleting the students: ' + xhr.responseText);
                            }
                        });
                    },
                    cancel: function () {
                        // close
                    }
                }
            });
        } else {
            toastr.warning('No students selected.');
        }
    });
});
</script>
@endsection
