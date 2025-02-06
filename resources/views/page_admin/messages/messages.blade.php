@extends('template_admin.layout')

@section('content')

<div class="container-xxl flex-grow-1 container-p-y">
    <div class="table-container">
        <h4 class="fw-bold py-3 mb-1"><span class="text-muted fw-light"></span> Daftar Pesan</h4>
        <div class="card-tools">
            <form action="{{ route('messages.search') }}" method="GET" class="w-100">
                <div class="input-group">
                    <span class="input-group-text bg-white border-end-0">
                        <i class="bx bx-search fs-4 lh-0"></i>
                    </span>
                    <input type="search" name="search" id="search" class="form-control border-start-0"
                        placeholder="Search">
                </div>
            </form>
        </div>

        <table class="table table-hover">
            <thead>
                <tr>
                    <th style="width: 5%;">No</th>
                    <th style="width: 10%;">Nama</th>
                    <th style="width: 20%;">Email</th>
                    <th style="width: 40%;">Pesan</th>
                    <th style="width: 15%;">Tanggal</th>
                    <th style="width: 10%;">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($contacts as $index => $contact)
                    <tr>
                        <td>{{ $index + 1 }}</td>
                        <td>{{ $contact->nama }}</td>
                        <td>{{ $contact->email }}</td>
                        <td>{{ $contact->pesan }}</td>
                        <td>{{ $contact->created_at->format('d-m-Y') }}</td>
                        <td>
                            <!-- Tombol delete dengan ID masing-masing contact -->
                            <form action="{{ route('messages.destroy', $contact->id) }}" method="POST"
                                style="display:inline-block;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-sm btn-danger"
                                    onclick="return confirm('Apakah Anda yakin ingin menghapus pesan ini?')">Hapus</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection