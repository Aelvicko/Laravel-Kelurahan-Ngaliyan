@extends('template_admin.layout')

@section('content')
<div class="table-container">
    <h2 class="text-center">Daftar Pesan</h2>
    <table class="table table-hover">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Email</th>
                <th>Pesan</th>
                <th>Tanggal</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($contacts as $index => $contact)
                <tr>
                    <td>{{ $index + 1 }}</td>
                    <td>{{ $contact->nama }}</td>
                    <td>{{ $contact->email }}</td>
                    <td>{{ $contact->pesan }}</td>
                    <td>{{ $contact->created_at->format('d M Y') }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
</div>
@endsection