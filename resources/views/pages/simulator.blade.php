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
                        @if (session()->has('success'))
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            {{ session('success') }}
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                            </button>
                          </div>
                        @elseif(session()->has('warning'))
                          <div class="alert alert-warning alert-dismissible fade show" role="alert">
                              {{ session('warning') }}
                              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                              </button>
                            </div>
                        @endif

                        <div class="card shadow">
                            <div class="card-body">
                                <button class="btn btn-success mb-3" data-toggle="modal" data-target="#tambah_simulator">+ Tambah Simulator</button>
                                
                                {{-- tambah modal --}}
                                <div class="modal fade" id="tambah_simulator" tabindex="-1" aria-labelledby="tambah_simualtorLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                            <h5 class="modal-title" id="tambah_simualtorLabel">Tambah Simulator</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                            </div>
                                            
                                            <form action="/tambah_simulator" method="POST">
                                                <div class="modal-body">
                                                    @csrf
                                                <label for="username">Username:</label>
                                                <input type="text" name="username" id="username" required class="form-control" placeholder="Masukkan username simulator">
                                                <span class="text-secondary" style="font-size: 12px">*Default password setiap akun adalah: <strong>pc_builder123</strong></span>
                                                
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                    <button type="submit" class="btn btn-success">Tambah</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="table-responsive">
                                    <table id="simulator" class="table table-bordered">
                                        <thead>
                                            <tr style="white-space: ">
                                                <th class="text-center">No.</th>
                                                <th>Username Simulator</th>
                                                <th>Dibuat pada</th>
                                                <th class="text-center">Aksi</th>
                                            </tr>
                                        </thead>

                                        <tbody>
                                            @php
                                                $no = 1;
                                            @endphp
                                            @foreach ($simulator as $item)
                                            <tr style="white-space: nowrap;">
                                                <td class="text-center font-weight-bold">{{ $no++ . '.' }}</td>
                                                <td>{{ $item->username }}</td>
                                                <td>{{ $item->created_at }}</td>
                                                <td class="text-center">
                                                    <button class="btn btn-danger" data-toggle="modal" data-target="{{ '#hapus_simulator'.$item->id }}"><i class="fa fa-trash"></i></button>
                                                </td>
                                            </tr>

                                            <!-- Hapus modal -->
                                            <div class="modal fade" id="{{ 'hapus_simulator'.$item->id }}" tabindex="-1" aria-labelledby="hapus_simulatorLabel" aria-hidden="true">
                                                <div class="modal-dialog modal-dialog-centered">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                    <h5 class="modal-title" id="hapus_simulatorLabel">Perhatian</h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                    </div>
                                                    <div class="modal-body">
                                                        Anda yakin untuk menghapus simulator:
                                                        <div class="border p-3 rounded mt-2 border-1-secondary">
                                                            <p class="mb-0">Username: <strong>{{ $item->username }}</strong></p>
                                                            <p class="mb-0">Dibuat pada: <strong>{{ $item->created_at }}</strong></p>
                                                        </div>
                                                    </div>
                                                    <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                    <form action="{{ url('/hapus_simulator/'.$item->id) }}" method="POST">
                                                        @csrf
                                                        <button type="submit" class="btn btn-danger">Hapus</button>
                                                    </form>
                                                    </div>
                                                </div>
                                                </div>
                                            </div>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
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