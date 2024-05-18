@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <div class="table-responsive card">
        <div class="card-header">
            <div class="w-100 d-flex justify-content-end gap-2">
                <a href="{{ route('student-information.create') }}" class="btn btn-primary">Create</a>
                <a href="{{ route('export.csv') }}" class="btn btn-success">Export CSV</a>
            </div>
        </div>
        <div class="card-body">
            <table class="table no-border table-hover table-select-row" id="myTable">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Date</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                </tbody>
            </table>
        </div>
    </div>
</div>

@endsection

@section('script')
    <script>
        $(document).ready(function() {
            let = DataTable = $('#myTable').DataTable({
                "processing": true,
                "serverSide": true,
                "ajax": '{{ route('student-information.index') }}',
                "columns": [
                    { data: "fullname", name: 'fullname' },
                    { data: "date", name: 'date' },
                    { data: "actions", name: 'actions' },
                ],
            });
        })

        // Delete
        $(document).on('click', '.delete-button', function() {
            id = $(this).attr('data-id');

            swal.fire({
                title: "Are you sure?",
                text: "You won't be able to revert this!",
                icon: "warning",
                showCancelButton: true,
                confirmButtonColor: "#3085d6",
                cancelButtonColor: "#d33",
                confirmButtonText: "Yes, delete it!"
            }).then((result) => {
                if(result.isConfirmed) {
                    axios.delete(`/student-information/${id}`)
                    .then(response => {
                        DataTable.ajax.reload();
                        Swal.fire({
                            title: "Deleted!",
                            text: "Your data has been deleted.",
                            icon: "success"
                        });
                    })
                    .catch(error => {
                        Swal.fire({
                            title: "Oops!",
                            text: "Something went wrong, try again later!",
                            icon: "error"
                        });
                    })
                }
            })
        })

        // Edit show
        let id = null;
        $(document).on('click', '.edit-button', function() {
            id = $(this).attr('data-id');
            window.location.href = `/student-information/${id}/edit`;
        })

    </script>
@endsection