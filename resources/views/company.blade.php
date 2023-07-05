<!-- @extends('layouts.app')

@section('content') -->
<body>
<h3 class="account-title">Create New Company</h3>
<head>
	<meta charset="UTF-8">
	<meta name="csrf-token" content="{{ csrf_token() }}">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css" />
	<link href="https://cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css" rel="stylesheet">
	<link href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css" rel="stylesheet">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>  
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.js"></script>
	<script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
	<script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" >
</head>


<body>
@if ($message = Session::get('success'))
	<div class="alert alert-success">
		<p>{{ $message }}</p>
	</div>
@endif
<div class="pull-right mb-2">
	<a class="btn btn-success" href="{{ route('create-company') }}" style="margin-left:120px;"> Create New Company</a>
</div>
<div class="container">
    <div class="row">
        <div class="col-12 table-responsive">
            <table class="table table-bordered user_datatable">
                <thead>
				<tr>
					<th>ID</th>
                    <th width="10%">Name</th>
                    <th>Email</th>
                    <th>Logo</th>
                    <th>URL</th>
                    <th>Contact Person</th>
					<th>Contact Person</th>
				</tr>
                </thead>
                <tbody></tbody>
            </table>
        </div>
    </div>
</div>
</body>
<script type="text/javascript">
  $(function () {
    var table = $('.user_datatable').DataTable({
        processing: true,
        serverSide: true,
        ajax: "{{ route('company') }}",
        columns: [
            {data: 'id', name: 'id'},
			{data: 'name', name: 'name'},
			{data: 'email', name: 'email'},
			{data: 'logo', name: 'logo'
			// render: function( data, type, full, meta ) {
            //             return "<img src=\"../storage/app/public/" + data + "\" height=\"50\"/>";
            //         }
		},
			{data: 'url', name: 'url'},
			{data: 'contact_person', name: 'contact_person'},
			{data: 'action', name: 'action', orderable: false, searchable: false},
        ]
    });
  });
</script>
</html>
<!-- @endsection -->