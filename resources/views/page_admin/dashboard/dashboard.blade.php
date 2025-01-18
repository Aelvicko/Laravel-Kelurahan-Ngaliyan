@extends('template_admin.layout')

@section('content')
    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Tables /</span> Users</h4>

        <div class="card">
            <div class="card-body">
                <div class="table-responsive text-nowrap">
                    <table id="example" class="display compact nowrap" style="width:100%">
                        <thead>
                            <tr>
                                <th>NAMA</th>
                                <th>USERNAME</th>
                                <th>EMAIL</th>
                                <th>ROLE</th>
                                <th>AKSI</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($users as $user)
                                <tr id="user-{{ $user->id }}">
                                    <td class="editable" data-field="nama">{{ $user->nama }}</td>
                                    <td class="editable" data-field="username">{{ $user->username }}</td>
                                    <td class="editable" data-field="email">{{ $user->email }}
                                        <button class="btn btn-sm btn-secondary" onclick="copyToClipboard('{{ $user->email }}')">Copy</button>
                                    </td>
                                    <td class="editable" data-field="role">{{ $user->role }}</td>
                                    <td>
                                        <!-- Edit Button -->
                                        <button class="btn btn-sm btn-warning edit-btn" data-id="{{ $user->id }}">Edit</button>

                                        <!-- Hapus Button -->
                                        <form action="{{ route('dashboard.destroy', $user->id) }}" method="POST" style="display:inline-block;">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Apakah Anda yakin ingin menghapus user ini?')">Hapus</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal Edit User -->
    <div class="modal fade" id="editUserModal" tabindex="-1" aria-labelledby="editUserModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="editUserModalLabel">Edit User</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form id="editUserForm">
                        @csrf
                        <input type="hidden" id="user_id">
                        <div class="mb-3">
                            <label for="edit-nama" class="form-label">Nama</label>
                            <input type="text" class="form-control" id="edit-nama">
                        </div>
                        <div class="mb-3">
                            <label for="edit-username" class="form-label">Username</label>
                            <input type="text" class="form-control" id="edit-username">
                        </div>
                        <div class="mb-3">
                            <label for="edit-email" class="form-label">Email</label>
                            <input type="email" class="form-control" id="edit-email">
                        </div>
                        <div class="mb-3">
                            <label for="edit-role" class="form-label">Role</label>
                            <input type="text" class="form-control" id="edit-role">
                        </div>
                        <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('script')
<script>
    function copyToClipboard(text) {
        navigator.clipboard.writeText(text).then(function() {
            alert('Email copied to clipboard');
        }, function(err) {
            console.error('Could not copy text: ', err);
        });
    }

    // Handle Edit Button click
    document.querySelectorAll('.edit-btn').forEach(button => {
        button.addEventListener('click', function() {
            const userId = this.dataset.id;
            const row = document.getElementById('user-' + userId);

            // Get current user data
            const nama = row.querySelector('.editable[data-field="nama"]').innerText;
            const username = row.querySelector('.editable[data-field="username"]').innerText;
            const email = row.querySelector('.editable[data-field="email"]').innerText;
            const role = row.querySelector('.editable[data-field="role"]').innerText;

            // Set data to modal
            document.getElementById('user_id').value = userId;
            document.getElementById('edit-nama').value = nama;
            document.getElementById('edit-username').value = username;
            document.getElementById('edit-email').value = email;
            document.getElementById('edit-role').value = role;

            // Show the modal
            $('#editUserModal').modal('show');
        });
    });

    // Handle form submission (AJAX)
    document.getElementById('editUserForm').addEventListener('submit', function(event) {
        event.preventDefault();

        const userId = document.getElementById('user_id').value;
        const nama = document.getElementById('edit-nama').value;
        const username = document.getElementById('edit-username').value;
        const email = document.getElementById('edit-email').value;
        const role = document.getElementById('edit-role').value;

        // AJAX request to update the user data
        fetch('{{ route("dashboard.update", "") }}/' + userId, {
            method: 'PUT',
            headers: {
                'Content-Type': 'application/json',
                'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
            },
            body: JSON.stringify({
                nama: nama,
                username: username,
                email: email,
                role: role
            })
        })
        .then(response => response.json())
        .then(data => {
            // Update the table row
            const row = document.getElementById('user-' + userId);
            row.querySelector('.editable[data-field="nama"]').innerText = data.nama;
            row.querySelector('.editable[data-field="username"]').innerText = data.username;
            row.querySelector('.editable[data-field="email"]').innerText = data.email;
            row.querySelector('.editable[data-field="role"]').innerText = data.role;

            // Close the modal
            $('#editUserModal').modal('hide');
        })
        .catch(error => {
            console.error('Error:', error);
        });
    });
</script>
@endsection