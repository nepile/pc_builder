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
                        <form action="/tambah_rakitan" method="POST">
                            @csrf    
                            <div class="card shadow mb-2">
                                <div class="card-header">
                                    Motherboard
                                </div>
                                <div class="card-body">
                                    <label for="id_motherboard">Pilih Motherboard</label>
                                    <select required name="id_motherboard" class="form-control" id="id_motherboard">
                                        <option value="">- Pilih Motherboard -</option>
                                        @foreach ($motherboard as $item)
                                            <option class="d-flex" value="{{ $item->id_motherboard }}">
                                                {{ $item->nama }} (Rp. {{ number_format($item->harga, 0, ',', '.') }})
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                            <div class="card shadow mb-2">
                                <div class="card-header">
                                    Processor
                                </div>
                                <div class="card-body">
                                    <label for="id_processor">Pilih Processor</label>
                                    <select required name="id_processor" class="form-control" id="id_processor">
                                        <option value="">- Pilih Processor -</option>
                                        @foreach ($processor as $item)
                                            <option class="d-flex" value="{{ $item->id_processor }}">
                                                {{ $item->nama }} (Rp. {{ number_format($item->harga, 0, ',', '.') }})
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                            <div class="card shadow mb-2">
                                <div class="card-header">
                                    RAM
                                </div>
                                <div class="card-body">
                                    <label for="id_ram">Pilih ram</label>
                                    <select required name="id_ram" class="form-control" id="id_ram">
                                        <option value="">- Pilih RAM -</option>
                                        @foreach ($ram as $item)
                                            <option class="d-flex" value="{{ $item->id_ram }}">
                                                {{ $item->nama }} (Rp. {{ number_format($item->harga, 0, ',', '.') }})
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                            <div class="card shadow mb-2">
                                <div class="card-header">
                                    SSD
                                </div>
                                <div class="card-body">
                                    <label for="id_ssd">Pilih SSD</label>
                                    <select required name="id_ssd" class="form-control" id="id_ssd">
                                        <option value="">- Pilih SSD -</option>
                                        @foreach ($ssd as $item)
                                            <option class="d-flex" value="{{ $item->id_ssd }}">
                                                {{ $item->nama }} (Rp. {{ number_format($item->harga, 0, ',', '.') }})
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            
                            <div class="card shadow mb-2">
                                <div class="card-header">
                                    VGA
                                </div>
                                <div class="card-body">
                                    <label for="id_vga">Pilih VGA</label>
                                    <select required name="id_vga" class="form-control" id="id_vga">
                                        <option value="">- Pilih VGA -</option>
                                        @foreach ($vga as $item)
                                            <option class="d-flex" value="{{ $item->id_vga }}">
                                                {{ $item->nama }} (Rp. {{ number_format($item->harga, 0, ',', '.') }})
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            
                            <div class="card shadow mb-2">
                                <div class="card-header">
                                    Casing
                                </div>
                                <div class="card-body">
                                    <label for="id_casing">Pilih Casing</label>
                                    <select required name="id_casing" class="form-control" id="id_casing">
                                        <option value="">- Pilih Casing -</option>
                                        @foreach ($casing as $item)
                                            <option class="d-flex" value="{{ $item->id_casing }}">
                                                {{ $item->nama }} (Rp. {{ number_format($item->harga, 0, ',', '.') }})
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                           
                            <div class="card shadow mb-2">
                                <div class="card-header">
                                    Monitor
                                </div>
                                <div class="card-body">
                                    <label for="id_monitor">Pilih Monitor</label>
                                    <select required name="id_monitor" class="form-control" id="id_monitor">
                                        <option value="">- Pilih Monitor -</option>
                                        @foreach ($monitor as $item)
                                            <option class="d-flex" value="{{ $item->id_monitor }}">
                                                {{ $item->nama }} (Rp. {{ number_format($item->harga, 0, ',', '.') }})
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            
                            <div class="card shadow mb-2">
                                <div class="card-header">
                                    keyboard
                                </div>
                                <div class="card-body">
                                    <label for="id_keyboard">Pilih Keyboard</label>
                                    <select required name="id_keyboard" class="form-control" id="id_keyboard">
                                        <option value="">- Pilih Keyboard -</option>
                                        @foreach ($keyboard as $item)
                                            <option class="d-flex" value="{{ $item->id_keyboard }}">
                                                {{ $item->nama }} (Rp. {{ number_format($item->harga, 0, ',', '.') }})
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                            <div class="my-3">
                                <button class="btn btn-success" style="width: 100%">Simpan</button>
                            </div>
                        </form>
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