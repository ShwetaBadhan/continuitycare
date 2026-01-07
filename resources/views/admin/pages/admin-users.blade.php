@extends("admin.layout.master")
@section("title","Admin Users")
@section("content")

	<!-- Page Wrapper -->
		<div class="page-wrapper">
			<div class="content">

				<!-- Breadcrumb -->
				<div class="d-md-flex d-block align-items-center justify-content-between page-breadcrumb mb-3">
					<div class="my-auto mb-2">
						<h2 class="mb-1">Users</h2>
						<nav>
							<ol class="breadcrumb mb-0">
								<li class="breadcrumb-item">
									<a href=""><i class="ti ti-smart-home"></i></a>
								</li>
								<li class="breadcrumb-item">
									Administration
								</li>
								<li class="breadcrumb-item active" aria-current="page">Users</li>
							</ol>
						</nav>
					</div>
					<div class="d-flex my-xl-auto right-content align-items-center flex-wrap ">
						<div class="me-2 mb-2">
							<div class="dropdown">
								<a href="javascript:void(0);" class="dropdown-toggle btn btn-white d-inline-flex align-items-center" data-bs-toggle="dropdown">
									<i class="ti ti-file-export me-1"></i>Export
								</a>
								<ul class="dropdown-menu  dropdown-menu-end p-3">
									<li>
										<a href="javascript:void(0);" class="dropdown-item rounded-1"><i class="ti ti-file-type-pdf me-1"></i>Export as PDF</a>
									</li>
									<li>
										<a href="javascript:void(0);" class="dropdown-item rounded-1"><i class="ti ti-file-type-xls me-1"></i>Export as Excel </a>
									</li>
								</ul>
							</div>
						</div>
						<div class="mb-2">
							<a href="#" data-bs-toggle="modal" data-bs-target="#add_users" class="btn btn-primary d-flex align-items-center"><i class="ti ti-circle-plus me-2"></i>Add User</a>
						</div>
						<div class="head-icons ms-2">
							<a href="javascript:void(0);" class="" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-original-title="Collapse" id="collapse-header">
								<i class="ti ti-chevrons-up"></i>
							</a>
						</div>
					</div>
				</div>
				<!-- /Breadcrumb -->

				<!-- Performance Indicator list -->
				<div class="card">
					<div class="card-header d-flex align-items-center justify-content-between flex-wrap row-gap-3">
						<h5>Users List</h5>
						<div class="d-flex my-xl-auto right-content align-items-center flex-wrap row-gap-3">
							<div class="me-3">
								<div class="input-icon-end position-relative">
									<input type="text" class="form-control date-range bookingrange" placeholder="dd/mm/yyyy - dd/mm/yyyy">
									<span class="input-icon-addon">
										<i class="ti ti-chevron-down"></i>
									</span>
								</div>
							</div>
							<div class="dropdown me-3">
								<a href="javascript:void(0);" class="dropdown-toggle btn btn-white d-inline-flex align-items-center" data-bs-toggle="dropdown">
									Role
								</a>
								<ul class="dropdown-menu  dropdown-menu-end p-3">
									<li>
										<a href="javascript:void(0);" class="dropdown-item rounded-1">Employee</a>
									</li>
									<li>
										<a href="javascript:void(0);" class="dropdown-item rounded-1">Client</a>
									</li>
								</ul>
							</div>
							<div class="dropdown me-3">
								<a href="javascript:void(0);" class="dropdown-toggle btn btn-white d-inline-flex align-items-center" data-bs-toggle="dropdown">
									Status
								</a>
								<ul class="dropdown-menu  dropdown-menu-end p-3">
									<li>
										<a href="javascript:void(0);" class="dropdown-item rounded-1">Active</a>
									</li>
									<li>
										<a href="javascript:void(0);" class="dropdown-item rounded-1">Inactive</a>
									</li>
								</ul>
							</div>
							<div class="dropdown">
								<a href="javascript:void(0);" class="dropdown-toggle btn btn-white d-inline-flex align-items-center" data-bs-toggle="dropdown">
									Sort By : Last 7 Days
								</a>
								<ul class="dropdown-menu  dropdown-menu-end p-3">
									<li>
										<a href="javascript:void(0);" class="dropdown-item rounded-1">Recently Added</a>
									</li>
									<li>
										<a href="javascript:void(0);" class="dropdown-item rounded-1">Ascending</a>
									</li>
									<li>
										<a href="javascript:void(0);" class="dropdown-item rounded-1">Desending</a>
									</li>
									<li>
										<a href="javascript:void(0);" class="dropdown-item rounded-1">Last Month</a>
									</li>
									<li>
										<a href="javascript:void(0);" class="dropdown-item rounded-1">Last 7 Days</a>
									</li>
								</ul>
							</div>
						</div>
					</div>
					<div class="card-body p-0">
						<div class="custom-datatable-filter table-responsive">
							<table class="table datatable">
    <thead class="thead-light">
        <tr>
            <th class="no-sort">
                <div class="form-check form-check-md">
                    <input class="form-check-input" type="checkbox" id="select-all">
                </div>
            </th>
            <th>Name</th>
            <th>Email</th>
            <th>Created Date</th>
            {{-- <th>Role</th> --}}
            <th>Status</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>

    @foreach($users as $user)
        <tr>
            <td>
                <div class="form-check form-check-md">
                    <input class="form-check-input" type="checkbox">
                </div>
            </td>

            <td>
                <div class="d-flex align-items-center file-name-icon">
                   
                    <div class="ms-2">
                        <h6 class="fw-medium">
                            <a href="#">{{ $user->name }}</a>
                        </h6>
                    </div>
                </div>
            </td>

            <td>
                <a href="mailto:{{ $user->email }}">
                    {{ $user->email }}
                </a>
            </td>

            <td>
                {{ $user->created_at->format('d M Y') }}
            </td>

            {{-- <td>
                <span class="badge badge-md p-2 fs-10 badge-soft-purple">
                    {{ $user->role ?? 'User' }}
                </span>
            </td> --}}

            <td>
                @if($user->status ?? 1)
                    <span class="badge badge-success d-inline-flex align-items-center badge-xs">
                        <i class="ti ti-point-filled me-1"></i>Active
                    </span>
                @else
                    <span class="badge badge-danger d-inline-flex align-items-center badge-xs">
                        <i class="ti ti-point-filled me-1"></i>Inactive
                    </span>
                @endif
            </td>

            <td>
                <div class="action-icon d-inline-flex">
                    <a href="#" class="me-2"><i class="ti ti-shield"></i></a>

                   <a href="#"
   class="me-2 editUserBtn"
   data-bs-toggle="modal"
   data-bs-target="#edit_user"
   data-id="{{ $user->id }}"
   data-first="{{ $user->name }}"
   data-username="{{ $user->username }}"
   data-email="{{ $user->email }}"
   data-phone="{{ $user->phone ?? '' }}"
   data-status="{{ $user->status == 1 ? 'Active' : 'Inactive' }}">
   <i class="ti ti-edit"></i>
</a>


                    <a href="#"
                       data-bs-toggle="modal"
                       data-bs-target="#delete_modal"
                       data-id="{{ $user->id }}">
                        <i class="ti ti-trash"></i>
                    </a>
                </div>
            </td>
        </tr>
    @endforeach

    </tbody>
</table>

						</div>
					</div>
				</div>
				<!-- /Performance Indicator list -->

			</div>

			
		</div>
		<!-- /Page Wrapper -->

		<!-- Add Users -->
		<div class="modal fade" id="add_users">
			<div class="modal-dialog modal-dialog-centered modal-md">
				<div class="modal-content">
					<div class="modal-header">
						<h4 class="modal-title">Add User</h4>
						<button type="button" class="btn-close custom-btn-close" data-bs-dismiss="modal" aria-label="Close">
							<i class="ti ti-x"></i>
						</button>
					</div>
					<form action="{{ route('users.store') }}" method="POST">
                        @csrf
						<div class="modal-body pb-0">
							<div class="row">
								<div class="col-md-6">
									<div class="mb-3">
										<label class="form-label">Name</label>
										<input type="text"  name="name" class="form-control">
									</div>	
								</div>
								<div class="col-md-6">
									<div class="mb-3">
										<label class="form-label">User  Name</label>
										<input type="text" name="username" class="form-control">
									</div>	
								</div>
								<div class="col-md-6">
									<div class="mb-3">
										<label class="form-label">Email</label>
										<input type="text" name="email" class="form-control">
									</div>	
								</div>
								<div class="col-md-6">
									<div class="mb-3">
										<label class="form-label">Phone</label>
										<input type="text" name="phone" class="form-control">
									</div>	
								</div>
								<div class="col-md-6">
									<div class="mb-3">
										<label class="form-label">Password</label>
										<div class="pass-group">
											<input type="password" name="password" class="pass-input form-control">
											<span class="ti toggle-password ti-eye-off"></span>
										</div>
									</div>	
								</div>
								<div class="col-md-6">
									<div class="mb-3">
										<label class="form-label">Confirm Password</label>
										<div class="pass-group">
											<input type="password" name="password_confirmation" class="pass-inputs form-control">
											<span class="ti toggle-passwords ti-eye-off"></span>
										</div>
									</div>	
								</div>
								
								<div class="col-md-6">
									<div class="mb-3">
										<label class="form-label">Status</label>
										<select class="select" name="status">
											<option value="" selected disabled>Select Status</option>
											<option value="Active">Active</option>
											<option value="Inactive">Inactive</option>
										</select>
									</div>	
								</div>
								
							</div>
						</div>
						<div class="modal-footer">
							<button type="button" class="btn btn-white border me-2" data-bs-dismiss="modal">Cancel</button>
							<button type="submit" class="btn btn-primary">Add User</button>
						</div>
					</form>
				</div>
			</div>
		</div>
		<!-- /Add Users -->

		<!-- Edit  Users -->
		<div class="modal fade" id="edit_user">
			<div class="modal-dialog modal-dialog-centered modal-lg">
				<div class="modal-content">
					<div class="modal-header">
						<h4 class="modal-title">Edit User</h4>
						<button type="button" class="btn-close custom-btn-close" data-bs-dismiss="modal" aria-label="Close">
							<i class="ti ti-x"></i>
						</button>
					</div>
					<form id="editUserForm">
    @csrf
	   <input type="hidden" name="user_id" id="edit_user_id">
						<div class="modal-body pb-0">
							<div class="row">
								<div class="col-md-6">
									<div class="mb-3">
										<label class="form-label">Name</label>
										<input type="text"  name="name" id="edit_name" class="form-control">
									</div>	
								</div>
								<div class="col-md-6">
									<div class="mb-3">
										<label class="form-label">User  Name</label>
										<input type="text" name="username" id="edit_username" class="form-control">
									</div>	
								</div>
								<div class="col-md-6">
									<div class="mb-3">
										<label class="form-label">Email</label>
										<input type="text" name="email" id="edit_email" class="form-control">
									</div>	
								</div>
								<div class="col-md-6">
									<div class="mb-3">
										<label class="form-label">Phone</label>
										<input type="text" name="phone" id="edit_phone" class="form-control">
									</div>	
								</div>
								<div class="col-md-6">
									<div class="mb-3">
										<label class="form-label">Password</label>
										<div class="pass-group">
											<input type="password" name="password" class="pass-input form-control">
											<span class="ti toggle-password ti-eye-off"></span>
										</div>
									</div>	
								</div>
								<div class="col-md-6">
									<div class="mb-3">
										<label class="form-label">Confirm Password</label>
										<div class="pass-group">
											<input type="password" name="password_confirmation" class="pass-inputs form-control">
											<span class="ti toggle-passwords ti-eye-off"></span>
										</div>
									</div>	
								</div>
								
								<div class="col-md-6">
									<div class="mb-3">
										<label class="form-label">Status</label>
										<select class="select" id="edit_status" name="status">
    <option value="">Select Status</option>
    <option value="Active">Active</option>
    <option value="Inactive">Inactive</option>
</select>
									</div>	
								</div>
								
							</div>
						</div>
						<div class="modal-footer">
							<button type="button" class="btn btn-white border me-2" data-bs-dismiss="modal">Cancel</button>
							<button type="submit" class="btn btn-primary">Update User</button>
						</div>
					</form>
				</div>
			</div>
		</div>
		<!-- /Edit  Users -->

		<!-- Delete Modal -->
		<div class="modal fade" id="delete_modal">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-body text-center">
                <span class="avatar avatar-xl bg-transparent-danger text-danger mb-3">
                    <i class="ti ti-trash-x fs-36"></i>
                </span>
                <h4 class="mb-1">Confirm Delete</h4>
                <p class="mb-3">You want to delete this user. This cannot be undone.</p>
                <div class="d-flex justify-content-center">
                    <button type="button" id="confirmDeleteBtn" class="btn btn-danger">Yes, Delete</button> &nbsp;
                    <button type="button" class="btn btn-light me-3" data-bs-dismiss="modal">Cancel</button>
                </div>
            </div>
        </div>
    </div>
</div>
		<!-- /Delete Modal -->


@endsection

@push('scripts')
<script>
    // Show success message from session (after store)
    @if(session('success'))
        Swal.fire({
            icon: 'success',
            title: 'Success!',
            text: "{{ session('success') }}",
            timer: 3000,
            showConfirmButton: false
        });
    @endif

    // Show validation errors (after failed store)
    @if($errors->any())
        let errorMsg = `@foreach($errors->all() as $error) {{ str_replace("'", "\\'", $error) }}<br>@endforeach`;
        Swal.fire({
            icon: 'error',
            title: 'Validation Error',
            html: errorMsg,
            timer: 4000,
            showConfirmButton: false
        });
    @endif

    // Populate edit modal when edit button is clicked
    $(document).on('click', '.editUserBtn', function () {
    let id = $(this).data('id');
    let name = $(this).data('first');
    let username = $(this).data('username');
    let email = $(this).data('email');
    let phone = $(this).data('phone') || '';
    let status = $(this).data('status');

    // 🔍 Debug: Check values in console
    console.log('Edit data:', { id, name, username, email, phone, status });

    // Set values
    $('#edit_user_id').val(id);
    $('#edit_name').val(name);
    $('#edit_username').val(username);
    $('#edit_email').val(email);
    $('#edit_phone').val(phone);
    $('#edit_status').val(status).trigger('change'); // Ensure select updates
});

    // Handle edit form submit via AJAX
    $('#editUserForm').on('submit', function (e) {
    e.preventDefault();

    let userId = $('#edit_user_id').val();

    if (!userId) {
        Swal.fire('Error!', 'User ID missing.', 'error');
        return;
    }

    // 👇 Fix: Use serialize() as string, append _method and _token
    let formData = $(this).serialize() + '&_method=PUT&_token=' + $('meta[name="csrf-token"]').attr('content');

    console.log('Submitting:', formData); // Debug

    $.ajax({
        url: `/users/${userId}`,
        type: 'POST',
        data: formData,
        success: function (res) {
            Swal.fire('Success!', res.message, 'success');
            $('#edit_user').modal('hide');
            setTimeout(() => location.reload(), 1200);
        },
        error: function (xhr) {
            if (xhr.status === 422) {
                let errors = xhr.responseJSON.errors;
                let message = '';
                $.each(errors, function(key, value) {
                    message += `${key}: ${value[0]}\n`;
                });
                Swal.fire('Validation Failed', message, 'error');
            } else {
                Swal.fire('Error!', 'Something went wrong!', 'error');
            }
        }
    });
});
let userIdToDelete = null;

// When the delete icon is clicked, store the user ID
$('#delete_modal').on('show.bs.modal', function (event) {
    const button = $(event.relatedTarget); // Button that triggered the modal
    userIdToDelete = button.data('id');
});

// Handle "Yes, Delete" click
$('#confirmDeleteBtn').on('click', function () {
    if (!userIdToDelete) {
        Swal.fire('Error!', 'User ID not found.', 'error');
        return;
    }

    $.ajax({
        url: `/users/${userIdToDelete}`,
        type: 'POST',
        data: {
            _method: 'DELETE',
            _token: $('meta[name="csrf-token"]').attr('content')
        },
        success: function (res) {
            Swal.fire('Deleted!', res.message, 'success');
            $('#delete_modal').modal('hide');
            // Optional: Remove the row from the table
            $(`a[data-id="${userIdToDelete}"]`).closest('tr').fadeOut(300, function() {
                $(this).remove();
            });
            userIdToDelete = null;
        },
        error: function (xhr) {
            Swal.fire('Error!', 'Failed to delete user.', 'error');
            userIdToDelete = null;
        }
    });
});
</script>
@endpush