@extends('dashboard.layouts.main')

@section('container')

    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Input</h1>
    </div>

    <div class="table-responsive">
        <table class="table table-striped table-sm">
          <thead>
            <tr>
              <th scope="col">#</th>
              <th scope="col">Nama pengajar</th>
              <th scope="col">No Telpon</th>
              <th scope="col">Wilayah</th>
            </tr>
          </thead>
          <tbody>
            {{-- @foreach ($users as $user )
            <tr>
              <td>{{ $loop->iteration }}</td>
              <td>{{ $user->name }}</td>
              <td>{{ $user->id }}</td>
              <td>{{ $user->email }}</td>
            </tr>
            @endforeach --}}
          </tbody>
        </table>
      </div>

      

@endsection