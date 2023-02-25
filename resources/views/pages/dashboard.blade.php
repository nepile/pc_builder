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
                <a href="@if(auth()->user()->role == 'admin') {{ route('komponen') }} @else {{ route('buat_rakitan') }} @endif" class="btn btn-success mb-4">
                    @if (auth()->user()->role == 'admin')
                        + Tambah komponen
                    @else
                        + Buat Rakitan    
                    @endif
                </a>
                
                <div class="row">

                    @if (auth()->user()->role == 'admin')
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
                    @endif

                    <div class="col-12">
                        <nav class="mb-3">
                            <div class="nav nav-tabs" id="nav-tab" role="tablist">
                              <a class="nav-item nav-link active" id="nav-motherboard-tab" data-toggle="tab" href="#nav-motherboard" role="tab" aria-controls="nav-motherboard" aria-selected="true">Motherboard</a>
                              <a class="nav-item nav-link" id="nav-processor-tab" data-toggle="tab" href="#nav-processor" role="tab" aria-controls="nav-processor" aria-selected="false">Processor</a>
                              <a class="nav-item nav-link" id="nav-ram-tab" data-toggle="tab" href="#nav-ram" role="tab" aria-controls="nav-ram" aria-selected="false">RAM</a>
                              <a class="nav-item nav-link" id="nav-ssd-tab" data-toggle="tab" href="#nav-ssd" role="tab" aria-controls="nav-ssd" aria-selected="false">SSD</a>
                              <a class="nav-item nav-link" id="nav-vga-tab" data-toggle="tab" href="#nav-vga" role="tab" aria-controls="nav-vga" aria-selected="false">VGA</a>
                              <a class="nav-item nav-link" id="nav-casing-tab" data-toggle="tab" href="#nav-casing" role="tab" aria-controls="nav-casing" aria-selected="false">Casing</a>
                              <a class="nav-item nav-link" id="nav-monitor-tab" data-toggle="tab" href="#nav-monitor" role="tab" aria-controls="nav-casing" aria-selected="false">Monitor</a>
                              <a class="nav-item nav-link" id="nav-keyboard-tab" data-toggle="tab" href="#nav-keyboard" role="tab" aria-controls="nav-casing" aria-selected="false">Keyboard</a>
                            </div>
                          </nav>
                          <div class="tab-content" id="nav-tabContent">
                            <div class="tab-pane fade show active" id="nav-motherboard" role="tabpanel" aria-labelledby="nav-motherboard-tab">
                                <div class="row" style="row-gap: 15px;">
                                    @foreach ($motherboard as $item)
                                    <div class="col-xl-3">
                                        <div class="card">
                                            <div class="card-body p-0" style="height: 35vh">
                                                <img src="{{ asset('component/'.$item->gambar) }}" style="height: 100%; object-fit: cover; width: 100%;" alt="">
                                            </div>
                                            <div class="card-footer px-3" style="background: #fff;">
                                                <p>
                                                    {{ $item->nama }}
                                                </p>
                                                
                                                <div class="mt-3">
                                                    <span class="bg-success text-light px-2" style="font-weight: bold; border-radius: 2px">Rp. {{ number_format($item->harga, 0, ',', '.') }}</span>
                                                </div>
                                            </div>
    
                                        </div>
                                    </div>
                                    @endforeach
                                </div>
                            </div>

                            <div class="tab-pane fade" id="nav-processor" role="tabpanel" aria-labelledby="nav-processor-tab">
                                <div class="row" style="row-gap: 15px;">
                                    @foreach ($processor as $item)
                                    <div class="col-xl-3">
                                        <div class="card">
                                            <div class="card-body p-0" style="height: 35vh">
                                                <img src="{{ asset('component/'.$item->gambar) }}" style="height: 100%; object-fit: cover; width: 100%;" alt="">
                                            </div>
                                            <div class="card-footer px-3" style="background: #fff;">
                                                <p>
                                                    {{ $item->nama }}
                                                </p>
                                                
                                                <div class="mt-3">
                                                    <span class="bg-success text-light px-2" style="font-weight: bold; border-radius: 2px">Rp. {{ number_format($item->harga, 0, ',', '.') }}</span>
                                                </div>
                                            </div>
    
                                        </div>
                                    </div>
                                    @endforeach
                                </div>
                            </div>

                            <div class="tab-pane fade" id="nav-ram" role="tabpanel" aria-labelledby="nav-ram-tab">
                                <div class="row" style="row-gap: 15px;">
                                    @foreach ($ram as $item)
                                    <div class="col-xl-3">
                                        <div class="card">
                                            <div class="card-body p-0" style="height: 35vh">
                                                <img src="{{ asset('component/'.$item->gambar) }}" style="height: 100%; object-fit: cover; width: 100%;" alt="">
                                            </div>
                                            <div class="card-footer px-3" style="background: #fff;">
                                                <p>
                                                    {{ $item->nama }}
                                                </p>
                                                
                                                <div class="mt-3">
                                                    <span class="bg-success text-light px-2" style="font-weight: bold; border-radius: 2px">Rp. {{ number_format($item->harga, 0, ',', '.') }}</span>
                                                </div>
                                            </div>
    
                                        </div>
                                    </div>
                                    @endforeach
                                </div>
                            </div>

                            <div class="tab-pane fade" id="nav-ssd" role="tabpanel" aria-labelledby="nav-ssd-tab">
                                <div class="row" style="row-gap: 15px;">
                                    @foreach ($ssd as $item)
                                    <div class="col-xl-3">
                                        <div class="card">
                                            <div class="card-body p-0" style="height: 35vh">
                                                <img src="{{ asset('component/'.$item->gambar) }}" style="height: 100%; object-fit: cover; width: 100%;" alt="">
                                            </div>
                                            <div class="card-footer px-3" style="background: #fff;">
                                                <p>
                                                    {{ $item->nama }}
                                                </p>
                                                
                                                <div class="mt-3">
                                                    <span class="bg-success text-light px-2" style="font-weight: bold; border-radius: 2px">Rp. {{ number_format($item->harga, 0, ',', '.') }}</span>
                                                </div>
                                            </div>
    
                                        </div>
                                    </div>
                                    @endforeach
                                </div>
                            </div>

                            <div class="tab-pane fade" id="nav-vga" role="tabpanel" aria-labelledby="nav-vga-tab">
                                <div class="row" style="row-gap: 15px;">
                                    @foreach ($vga as $item)
                                    <div class="col-xl-3">
                                        <div class="card">
                                            <div class="card-body p-0" style="height: 35vh">
                                                <img src="{{ asset('component/'.$item->gambar) }}" style="height: 100%; object-fit: cover; width: 100%;" alt="">
                                            </div>
                                            <div class="card-footer px-3" style="background: #fff;">
                                                <p>
                                                    {{ $item->nama }}
                                                </p>
                                                
                                                <div class="mt-3">
                                                    <span class="bg-success text-light px-2" style="font-weight: bold; border-radius: 2px">Rp. {{ number_format($item->harga, 0, ',', '.') }}</span>
                                                </div>
                                            </div>
    
                                        </div>
                                    </div>
                                    @endforeach
                                </div>
                            </div>
                            
                            <div class="tab-pane fade" id="nav-casing" role="tabpanel" aria-labelledby="nav-casing-tab">
                                <div class="row" style="row-gap: 15px;">
                                    @foreach ($casing as $item)
                                    <div class="col-xl-3">
                                        <div class="card">
                                            <div class="card-body p-0" style="height: 35vh">
                                                <img src="{{ asset('component/'.$item->gambar) }}" style="height: 100%; object-fit: cover; width: 100%;" alt="">
                                            </div>
                                            <div class="card-footer px-3" style="background: #fff;">
                                                <p>
                                                    {{ $item->nama }}
                                                </p>
                                                
                                                <div class="mt-3">
                                                    <span class="bg-success text-light px-2" style="font-weight: bold; border-radius: 2px">Rp. {{ number_format($item->harga, 0, ',', '.') }}</span>
                                                </div>
                                            </div>
    
                                        </div>
                                    </div>
                                    @endforeach
                                </div>
                            </div>

                            <div class="tab-pane fade" id="nav-monitor" role="tabpanel" aria-labelledby="nav-monitor-tab">
                                <div class="row" style="row-gap: 15px;">
                                    @foreach ($monitor as $item)
                                    <div class="col-xl-3">
                                        <div class="card">
                                            <div class="card-body p-0" style="height: 35vh">
                                                <img src="{{ asset('component/'.$item->gambar) }}" style="height: 100%; object-fit: cover; width: 100%;" alt="">
                                            </div>
                                            <div class="card-footer px-3" style="background: #fff;">
                                                <p>
                                                    {{ $item->nama }}
                                                </p>
                                                
                                                <div class="mt-3">
                                                    <span class="bg-success text-light px-2" style="font-weight: bold; border-radius: 2px">Rp. {{ number_format($item->harga, 0, ',', '.') }}</span>
                                                </div>
                                            </div>
    
                                        </div>
                                    </div>
                                    @endforeach
                                </div>
                            </div>

                            <div class="tab-pane fade" id="nav-keyboard" role="tabpanel" aria-labelledby="nav-keyboard-tab">
                                <div class="row" style="row-gap: 15px;">
                                    @foreach ($keyboard as $item)
                                    <div class="col-xl-3">
                                        <div class="card">
                                            <div class="card-body p-0" style="height: 35vh">
                                                <img src="{{ asset('component/'.$item->gambar) }}" style="height: 100%; object-fit: cover; width: 100%;" alt="">
                                            </div>
                                            <div class="card-footer px-3" style="background: #fff;">
                                                <p>
                                                    {{ $item->nama }}
                                                </p>
                                                
                                                <div class="mt-3">
                                                    <span class="bg-success text-light px-2" style="font-weight: bold; border-radius: 2px">Rp. {{ number_format($item->harga, 0, ',', '.') }}</span>
                                                </div>
                                            </div>
    
                                        </div>
                                    </div>
                                    @endforeach
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