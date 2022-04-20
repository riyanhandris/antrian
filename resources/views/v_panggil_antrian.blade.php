@extends('layout.v_template')

@section('content')

  <h4 style="text-align: center" class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Pemanggilan</span> Antrian</h4>
  <div class="table-responsive text-nowrap">
    <table class="table">
      <thead>
        <tr>
          <th>A</th>
          <th>B</th>
          <th>C</th>
        </tr>
      </thead>
      <tbody class="table-border-bottom-0">
        <tr>
          <td>
            <div class="col-md-6 col-lg-12">
            <div class="card text-center mb-3">
              <div class="card-body">
                <h5 class="card-title">Antrian A</h5>
                <h3 style="font-size: 70px" class="card-text text-nowrap mb-2">{{ $panggilA->antrian }}</h3>
                {{-- <form action="/panggil_antri" method="POST">
                @csrf
                <button type='submit' class="btn rounded-pill btn-primary">Panggil</button>
              </form> --}}
                <form action="/panggil/ada/{{ $panggilA->id }}" method="POST">
                  @csrf
                  <button type='submit' class="btn rounded-pill btn btn-success">Ada</button>
                </form>
               
                <form action="/panggil/tidak/{{ $panggilA->id }}" method="POST">
                  @csrf
                  <button type="submit" class="btn rounded-pill btn btn-warning">Tidak ada</button>
              </div>
                </form>
                
            </div>
          </div>
        </td>
          <td>
            <div class="col-md-6 col-lg-12">
              <div class="card text-center mb-3">
                <div class="card-body">
                  <h5 class="card-title">Antrian B</h5>
                  <h3 style="font-size: 70px" class="card-text text-nowrap mb-2">{{ $panggilB->antrian }}</h3>
                  
                  {{-- <form action="/panggil_antri" method="POST">
                    @csrf
                    <button type='submit' class="btn rounded-pill btn-primary">Panggil</button>
                  </form> --}}
                  <form action="/panggil/ada/{{ $panggilB->id }}" method="post">
                  @csrf
                  <button type='submit' class="btn rounded-pill btn btn-success">Ada</button>
                  </form>
                  
                  <form action="/panggil/tidak/{{ $panggilB->id }}" method="post">
                  @csrf
                  <button type='submit' class="btn rounded-pill btn btn-warning">Tidak ada</button>
                  </form>
                </div>
              </div>
            </div>
          </td>
          <td>
            <div class="col-md-6 col-lg-12">
              <div class="card text-center mb-3">
                <div class="card-body">
                  <h5 class="card-title">Antrian C</h5>
                  <h3 style="font-size: 70px" class="card-text text-nowrap mb-2">{{ $panggilC->antrian }}</h3>
                  
                  {{-- <form action="/panggil_antri" method="POST">
                    @csrf
                    <button type='submit' class="btn rounded-pill btn-primary">Panggil</button>
                  </form> --}}
                  <form action="/panggil/ada/{{ $panggilC->id }}" method="post">
                  @csrf                
                  <button type='submit' class="btn rounded-pill btn btn-success">Ada</button>
                </form>
                <form action="/panggil/tidak/{{ $panggilC->id }}" method="post">
                  @csrf
                  <button type='submit' class="btn rounded-pill btn btn-warning">Tidak ada</button>
                </form>
                </div>
              </div>
            </div>
          </td>
        </tr>
      </tbody>
    </table>

  </div>

    <!-- Text alignment -->
    <div class="row mb-5">
      
     
      
    </div>
    

@endsection