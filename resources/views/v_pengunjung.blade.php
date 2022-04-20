@extends('layout.v_template')

@section('title', 'Data Pengunjung')

@section('content')

<!-- Basic Bootstrap Table -->
<div class="card">
    <h5 class="card-header">Table Basic</h5>
    <div class="table-responsive text-nowrap">
      <table class="table">
        <thead>
          <tr>
            <th>No</th>
            <th>Antrian</th>
            <th>Waktu</th>
            <th>Status</th>
            <th>Actions</th>
          </tr>
        </thead>
        <tbody class="table-border-bottom-0">
          <tr>
            <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong>#</strong></td>
            <td>Antrian A1</td>
            <td>09:00/today</td>
            <td><span class="badge bg-label-primary me-1">Ada</span></td>
            <td>
              <div class="dropdown">
                <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                  <i class="bx bx-dots-vertical-rounded"></i>
                </button>
                <div class="dropdown-menu">
                  <a class="dropdown-item" href="javascript:void(0);"
                    ><i class="bx bx-edit-alt me-1"></i> Edit</a
                  >
                  <a class="dropdown-item" href="javascript:void(0);"
                    ><i class="bx bx-trash me-1"></i> Delete</a
                  >
                </div>
              </div>
            </td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
  <!--/ Basic Bootstrap Table -->

@endsection