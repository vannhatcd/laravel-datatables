@extends('index')

@section('container')
    <table class="table table-bordered" id="users-table">
        <thead>
            <tr>
                <th>Id</th>
                <th>Realname</th>
                <th>Email</th>
                <th>Birthday</th>
                <th>Created_at</th>
                <th>Action</th>
            </tr>
        </thead>
    </table>
@endsection

@section('scripts')
<script type="text/javascript">
    $(function () {
        var table = $('#users-table').DataTable({
            processing: true,
            serverSide: true,
            responsive: true,
            searching: false,
            ajax: "{{ route('customers_list') }}",
            columns: [
                {data: 'id', name: 'id'},
                {data: 'realname', name: 'realname'},
                {data: 'email', name: 'email'},
                {data: 'birthday', name: 'birthday'},
                {data: 'created_at', name: 'created_at'},
                {
                    data: 'action', 
                    name: 'action', 
                    orderable: true, 
                    searchable: true
                },
            ],
        });
    });
  </script>
@endsection
