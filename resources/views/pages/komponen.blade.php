@extends('templates.app')

@section('content')
<div id="wrapper">

    @include('components.sidebar')

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

        <!-- Main Content -->
        <div id="content">

            @include('components.navbar')

            <!-- Begin Page Content -->
            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="h4 font-weight-bold">{{ $title }}</div>
                <div class="mb-4">
                    <a href="{{ route('dashboard') }}">
                        <i class="fa fa-home"></i> Dashboard <span></span>
                    </a> / 
                    <span>{{ $title }}</span>
                </div>

                <div class="row">
                    <div class="col-12">
                      <div class="dropdown">
                        <a class="btn btn-secondary dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-expanded="false">
                          Pilih Komponen
                        </a>
                      
                        <div class="dropdown-menu">
                          <a class="dropdown-item" data-toggle="modal" data-target="#motherboard">Motherboard</a>
                          <a class="dropdown-item" data-toggle="modal" data-target="#processor">Processor</a>
                          <a class="dropdown-item" data-toggle="modal" data-target="#ram">RAM</a>
                          <a class="dropdown-item" data-toggle="modal" data-target="#ssd">SSD</a>
                          <a class="dropdown-item" data-toggle="modal" data-target="#vga">VGA</a>
                          <a class="dropdown-item" data-toggle="modal" data-target="#casing">Casing</a>
                          <a class="dropdown-item" data-toggle="modal" data-target="#monitor">Monitor</a>
                          <a class="dropdown-item" data-toggle="modal" data-target="#keyboard">Keyboard</a>
                        </div>
                      </div>
                    </div>
                    
                  <!-- Modal -->
                  <div class="modal fade" id="motherboard" tabindex="-1" aria-labelledby="motherboardLabel" aria-hidden="true">
                    <div class="modal-dialog">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title" id="motherboardLabel">Tambah Motherboard</h5>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>
                        <form action="/tambah_komponen" method="POST" enctype="multipart/form-data">
                          <div class="modal-body">
                            @csrf 
                            <input type="hidden" name="modelReq" value="MotherBoard">

                            <div class="mt-0">
                              <label for="nama">Nama Item:</label>
                              <input type="text" name="nama" class="form-control" id="nama" placeholder="Masukkan nama item" required>
                            </div>

                            <div class="mt-2">
                              <label for="model">Model:</label>
                              <input type="text" name="model" class="form-control" id="model" placeholder="Masukkan model item" required>
                            </div>

                            <div class="mt-2">
                              <label for="harga">Harga:</label>
                              <input type="number" min="0" name="harga" class="form-control" id="harga" placeholder="Masukkan harga item" required>
                            </div>

                            <div class="mt-2">
                              <label for="harga">File Gambar:</label>
                              <input type="file" accept=".jpg, .jpeg, .png" name="gambar" class="form-control" id="gambar" required>
                            </div>

                          </div>
                          <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Simpan</button>
                          </div>
                        </form>

                      </div>
                    </div>
                  </div>

                  <!-- Modal -->
                  <div class="modal fade" id="processor" tabindex="-1" aria-labelledby="processorLabel" aria-hidden="true">
                    <div class="modal-dialog">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title" id="processorLabel">Tambah Processor</h5>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>
                        <form action="/tambah_komponen" method="POST" enctype="multipart/form-data">
                          <div class="modal-body">
                            @csrf 
                            <input type="hidden" name="modelReq" value="Processor">

                            <div class="mt-0">
                              <label for="nama">Nama Item:</label>
                              <input type="text" name="nama" class="form-control" id="nama" placeholder="Masukkan nama item" required>
                            </div>

                            <div class="mt-2">
                              <label for="model">Model:</label>
                              <input type="text" name="model" class="form-control" id="model" placeholder="Masukkan model item" required>
                            </div>

                            <div class="mt-2">
                              <label for="harga">Harga:</label>
                              <input type="number" min="0" name="harga" class="form-control" id="harga" placeholder="Masukkan harga item" required>
                            </div>

                            <div class="mt-2">
                              <label for="harga">File Gambar:</label>
                              <input type="file" accept=".jpg, .jpeg, .png" name="gambar" class="form-control" id="gambar" required>
                            </div>

                          </div>
                          <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Simpan</button>
                          </div>
                        </form>

                      </div>
                    </div>
                  </div>

                  <!-- Modal -->
                  <div class="modal fade" id="ram" tabindex="-1" aria-labelledby="ramLabel" aria-hidden="true">
                    <div class="modal-dialog">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title" id="ramLabel">Tambah RAM</h5>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>
                        <form action="/tambah_komponen" method="POST" enctype="multipart/form-data">
                          <div class="modal-body">
                            @csrf 
                            <input type="hidden" name="modelReq" value="RAM">

                            <div class="mt-0">
                              <label for="nama">Nama Item:</label>
                              <input type="text" name="nama" class="form-control" id="nama" placeholder="Masukkan nama item" required>
                            </div>

                            <div class="mt-2">
                              <label for="model">Model:</label>
                              <input type="text" name="model" class="form-control" id="model" placeholder="Masukkan model item" required>
                            </div>

                            <div class="mt-2">
                              <label for="harga">Harga:</label>
                              <input type="number" min="0" name="harga" class="form-control" id="harga" placeholder="Masukkan harga item" required>
                            </div>

                            <div class="mt-2">
                              <label for="harga">File Gambar:</label>
                              <input type="file" accept=".jpg, .jpeg, .png" name="gambar" class="form-control" id="gambar" required>
                            </div>

                          </div>
                          <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Simpan</button>
                          </div>
                        </form>

                      </div>
                    </div>
                  </div>
                  
                  <!-- Modal -->
                  <div class="modal fade" id="ssd" tabindex="-1" aria-labelledby="ssdLabel" aria-hidden="true">
                    <div class="modal-dialog">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title" id="ssdLabel">Tambah SSD</h5>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>
                        <form action="/tambah_komponen" method="POST" enctype="multipart/form-data">
                          <div class="modal-body">
                            @csrf 
                            <input type="hidden" name="modelReq" value="SSD">

                            <div class="mt-0">
                              <label for="nama">Nama Item:</label>
                              <input type="text" name="nama" class="form-control" id="nama" placeholder="Masukkan nama item" required>
                            </div>

                            <div class="mt-2">
                              <label for="model">Model:</label>
                              <input type="text" name="model" class="form-control" id="model" placeholder="Masukkan model item" required>
                            </div>

                            <div class="mt-2">
                              <label for="harga">Harga:</label>
                              <input type="number" min="0" name="harga" class="form-control" id="harga" placeholder="Masukkan harga item" required>
                            </div>

                            <div class="mt-2">
                              <label for="harga">File Gambar:</label>
                              <input type="file" accept=".jpg, .jpeg, .png" name="gambar" class="form-control" id="gambar" required>
                            </div>

                          </div>
                          <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Simpan</button>
                          </div>
                        </form>

                      </div>
                    </div>
                  </div>

                  <!-- Modal -->
                  <div class="modal fade" id="vga" tabindex="-1" aria-labelledby="vgaLabel" aria-hidden="true">
                    <div class="modal-dialog">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title" id="vgaLabel">Tambah VGA</h5>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>
                        <form action="/tambah_komponen" method="POST" enctype="multipart/form-data">
                          <div class="modal-body">
                            @csrf 
                            <input type="hidden" name="modelReq" value="VGA">

                            <div class="mt-0">
                              <label for="nama">Nama Item:</label>
                              <input type="text" name="nama" class="form-control" id="nama" placeholder="Masukkan nama item" required>
                            </div>

                            <div class="mt-2">
                              <label for="model">Model:</label>
                              <input type="text" name="model" class="form-control" id="model" placeholder="Masukkan model item" required>
                            </div>

                            <div class="mt-2">
                              <label for="harga">Harga:</label>
                              <input type="number" min="0" name="harga" class="form-control" id="harga" placeholder="Masukkan harga item" required>
                            </div>

                            <div class="mt-2">
                              <label for="harga">File Gambar:</label>
                              <input type="file" accept=".jpg, .jpeg, .png" name="gambar" class="form-control" id="gambar" required>
                            </div>

                          </div>
                          <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Simpan</button>
                          </div>
                        </form>

                      </div>
                    </div>
                  </div>

                  <!-- Modal -->
                  <div class="modal fade" id="casing" tabindex="-1" aria-labelledby="casingLabel" aria-hidden="true">
                    <div class="modal-dialog">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title" id="casingLabel">Tambah Casing</h5>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>
                        <form action="/tambah_komponen" method="POST" enctype="multipart/form-data">
                          <div class="modal-body">
                            @csrf 
                            <input type="hidden" name="modelReq" value="Casing">

                            <div class="mt-0">
                              <label for="nama">Nama Item:</label>
                              <input type="text" name="nama" class="form-control" id="nama" placeholder="Masukkan nama item" required>
                            </div>

                            <div class="mt-2">
                              <label for="model">Model:</label>
                              <input type="text" name="model" class="form-control" id="model" placeholder="Masukkan model item" required>
                            </div>

                            <div class="mt-2">
                              <label for="harga">Harga:</label>
                              <input type="number" min="0" name="harga" class="form-control" id="harga" placeholder="Masukkan harga item" required>
                            </div>

                            <div class="mt-2">
                              <label for="harga">File Gambar:</label>
                              <input type="file" accept=".jpg, .jpeg, .png" name="gambar" class="form-control" id="gambar" required>
                            </div>

                          </div>
                          <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Simpan</button>
                          </div>
                        </form>

                      </div>
                    </div>
                  </div>

                  <!-- Modal -->
                  <div class="modal fade" id="monitor" tabindex="-1" aria-labelledby="monitorLabel" aria-hidden="true">
                    <div class="modal-dialog">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title" id="monitorLabel">Tambah Monitor</h5>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>
                        <form action="/tambah_komponen" method="POST" enctype="multipart/form-data">
                          <div class="modal-body">
                            @csrf 
                            <input type="hidden" name="modelReq" value="Monitor">

                            <div class="mt-0">
                              <label for="nama">Nama Item:</label>
                              <input type="text" name="nama" class="form-control" id="nama" placeholder="Masukkan nama item" required>
                            </div>

                            <div class="mt-2">
                              <label for="model">Model:</label>
                              <input type="text" name="model" class="form-control" id="model" placeholder="Masukkan model item" required>
                            </div>

                            <div class="mt-2">
                              <label for="harga">Harga:</label>
                              <input type="number" min="0" name="harga" class="form-control" id="harga" placeholder="Masukkan harga item" required>
                            </div>

                            <div class="mt-2">
                              <label for="harga">File Gambar:</label>
                              <input type="file" accept=".jpg, .jpeg, .png" name="gambar" class="form-control" id="gambar" required>
                            </div>

                          </div>
                          <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Simpan</button>
                          </div>
                        </form>

                      </div>
                    </div>
                  </div>

                  <div class="modal fade" id="keyboard" tabindex="-1" aria-labelledby="keyboardLabel" aria-hidden="true">
                    <div class="modal-dialog">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title" id="keyboardLabel">Tambah Keyboard</h5>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>
                        <form action="/tambah_komponen" method="POST" enctype="multipart/form-data">
                          <div class="modal-body">
                            @csrf 
                            <input type="hidden" name="modelReq" value="Keyboard">

                            <div class="mt-0">
                              <label for="nama">Nama Item:</label>
                              <input type="text" name="nama" class="form-control" id="nama" placeholder="Masukkan nama item" required>
                            </div>

                            <div class="mt-2">
                              <label for="model">Model:</label>
                              <input type="text" name="model" class="form-control" id="model" placeholder="Masukkan model item" required>
                            </div>

                            <div class="mt-2">
                              <label for="harga">Harga:</label>
                              <input type="number" min="0" name="harga" class="form-control" id="harga" placeholder="Masukkan harga item" required>
                            </div>

                            <div class="mt-2">
                              <label for="harga">File Gambar:</label>
                              <input type="file" accept=".jpg, .jpeg, .png" name="gambar" class="form-control" id="gambar" required>
                            </div>

                          </div>
                          <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Simpan</button>
                          </div>
                        </form>

                      </div>
                    </div>
                  </div>

                </div>

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- End of Main Content -->

        <!-- Footer -->
        <footer class="sticky-footer bg-white">
            <div class="container my-auto">
                <div class="copyright text-center my-auto">
                
                    <span>&copy; {{ date('Y', strtotime('now')) }} <strong>PC Builder</strong></span>
                </div>
            </div>
        </footer>
        <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->

</div>
<!-- End of Page Wrapper -->

@endsection