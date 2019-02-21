@extends('layouts.bootstrap')

@section('content')

        @if(session('sukses'))
            <div class="alert alert-success" role="alert">
                {{ session('sukses') }}
            </div>
        @endif

        <!-- Breadcrumbs-->
          <ol class="breadcrumb">
            <li class="breadcrumb-item">
              <a href="#">Dashboard</a>
            </li>
            <li class="breadcrumb-item active">Overview</li>
          </ol>

        <!-- DataTables Example -->
          <div class="card mb-3">
            <div class="card-header">
              <i class="fas fa-table"></i>
              Data Table Pasien <div class="" style="float: right;">
                <!-- Button trigger modal -->
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                      Tambah Data
                    </button>
                     </div></div>

            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>No</th>
                      <th>Name</th>
                      <th>Jenis Kelamin</th>
                      <th>Umur</th>
                      <th>Tanggal Lahir</th>
                      <th>Telepon</th>
                      <th>Alamat</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                  <?php $no=1; ?>
                  @foreach ($pasien as $pasien)

                    <tr>
                      <td>{{ $no++ }}</td>
                      <td>{{ $pasien->nama_pasien }}</td>
                      <td>{{ $pasien->jenis_kelamin }}</td>
                      <td>{{ $pasien->umur }}</td>
                      <td>{{ $pasien->tanggal_lahir }}</td>
                      <td>{{ $pasien->no_telepon }}</td>
                      <td>{{ $pasien->alamat }}</td>
                      <td></td>
                    </tr>
                    @endforeach
                  </tbody>
                </table>
              </div>
            </div>
            <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
          </div>

           <!-- Modal -->
                    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                      <div class="modal-dialog" role="document">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Tambah Pasien</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                            </button>
                          </div>
                          <div class="modal-body">
                            <form action="pasien/create" method="POST">
                            {{ csrf_field() }}
                              <div class="form-group has-error">
                                <label for="exampleInputName">Nama Pasien</label>
                                <input type="text" name="nama_pasien" class="form-control" id="nama_pasien" placeholder="Nama Pasien">
                              </div>

                               <div class="form-group has-error">
                                <label for="exampleFormControlSelect1">Jenis Kelamin</label>
                                <select class="form-control" id="exampleFormControlSelect1" name="jenis_kelamin">
                                  <option selected="selected"></option>
                                  <option value="Pria">Pria</option>
                                  <option value="Wanita">Wanita</option>
                                </select>
                              </div>

                              <div class="form-group">
                                <label for="exampleInputAge">Umur</label>
                                <input type="text" name="umur" class="form-control" id="umur" placeholder="Umur">
                              </div>
                              
                              <div class="form-group">
                                <label for="exampleInputAge">Tanggal Lahir</label>
                                <input type="date" name="tanggal_lahir" class="form-control" id="tanggal_lahir">
                              </div>

                              <div class="form-group">
                                <label for="exampleInputAge">No Telepon</label>
                                <input type="text" name="no_telepon" class="form-control" id="no_telepon" placeholder="Nomor Telepon">
                              </div>

                              <div class="form-group">
                                <label for="exampleFormControlTextarea1">Alamat</label>
                                <textarea class="form-control" id="alamat" name="alamat" rows="3"></textarea>
                              </div>


                          </div>
                          <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Submit</button>
                            </form>
                          </div>
                        </div>
                      </div>
                    </div>
                   

@endsection