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

                <div class="row mb-5">

                    <div class="col-12">
                        @if (session()->has('success'))
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            {{ session('success') }}
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                            </button>
                          </div>
                        @endif
                    </div>
                    
                    @php
                        $no = 1;
                    @endphp

                    @foreach ($rakitanku as $item)
                    <div class="col-xl-4">
                        <div class="card shadow">
                            <div class="card-header px-3" style="background: #563d7c; color: #fff">
                                Rakitan {{ $no++ }}
                            </div>
                            <div class="card-body px-3">
                                
                                    <li class="font-weight-bold">Motherboard</li>
                                    <p>
                                        {{ $item['nama_motherboard'] }}
                                        (Rp. {{ number_format($item['harga_motherboard'], 0, ',', '.') }})
                                    </p>

                                    <li class="font-weight-bold">Processor</li>
                                    <p>
                                        {{ $item['nama_processor'] }}
                                        (Rp. {{ number_format($item['harga_processor'], 0, ',', '.') }})
                                    </p>

                                    <li class="font-weight-bold">RAM</li>
                                    <p>
                                        {{ $item['nama_ram'] }}
                                        (Rp. {{ number_format($item['harga_ram'], 0, ',', '.') }})
                                    </p>

                                    <li class="font-weight-bold">VGA</li>
                                    <p>
                                        {{ $item['nama_vga'] }}
                                        (Rp. {{ number_format($item['harga_vga'], 0, ',', '.') }})
                                    </p>

                                    <li class="font-weight-bold">Casing</li>
                                    <p>
                                        {{ $item['nama_casing'] }}
                                        (Rp. {{ number_format($item['harga_casing'], 0, ',', '.') }})
                                    </p>

                                    <li class="font-weight-bold">Monitor</li>
                                    <p>
                                        {{ $item['nama_monitor'] }}
                                        (Rp. {{ number_format($item['harga_monitor'], 0, ',', '.') }})
                                    </p>

                                    <li class="font-weight-bold">Keyboard</li>
                                    <p>
                                        {{ $item['nama_keyboard'] }}
                                        (Rp. {{ number_format($item['harga_keyboard'], 0, ',', '.') }})
                                    </p>
                                
                            </div>
                        </div>
                    </div>
                    @endforeach

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