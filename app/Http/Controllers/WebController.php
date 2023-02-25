<?php

namespace App\Http\Controllers;

use App\Models\Casing;
use App\Models\Keyboard;
use App\Models\Monitor;
use App\Models\MotherBoard;
use App\Models\PcRakit;
use App\Models\Processor;
use App\Models\RAM;
use App\Models\SSD;
use App\Models\User;
use App\Models\VGA;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class WebController extends Controller
{
    public function index()
    {
        $title = 'Portal Login';
        return view('pages.login', compact('title'));
    }

    public function handle_login(Request $request)
    {
        $credential = $this->validate(
            $request,
            [
                'username' => 'required',
                'password' => 'required'
            ],
            [
                'username.required' => 'Username tidak boleh kosong.',
                'password.required' => 'Password tidak boleh kosong'
            ]
        );

        if (Auth::attempt($credential)) {
            return redirect()->intended('/dashboard');
        }

        return redirect()->back()->with('error', 'Username atau password salah');
    }

    public function handle_logout()
    {
        Auth::logout();

        return redirect()->route('login')->with('warning', 'Anda telah logout.');
    }

    public function dashboard()
    {
        $data = [
            'title' => 'Dashboard',
            'id_page' => 1,
            'motherboard' => MotherBoard::all(),
            'processor' => Processor::all(),
            'ram' => RAM::all(),
            'ssd' => SSD::all(),
            'vga' => VGA::all(),
            'casing' => Casing::all(),
            'monitor' => Monitor::all(),
            'keyboard' => Keyboard::all(),
        ];
        return view('pages.dashboard', $data);
    }

    public function komponen()
    {
        $data = [
            'title' => 'Manajemen Komponen',
            'id_page' => 2
        ];

        return view('pages.komponen', $data);
    }

    public function tambah_komponen(Request $request)
    {
        $this->validate($request, [
            'nama' => 'required',
            'model' => 'required',
            'harga' => 'required',
            'gambar' => 'required'
        ]);
        $identitas = $request->modelReq;
        $modelName = "App\\Models\\" . $request->modelReq;
        $model = new $modelName;

        $model->nama = $request->nama;
        $model->model = $request->model;
        $model->harga = $request->harga;
        if ($request->hasFile('gambar')) {
            $request->file('gambar')->move('component/', $request->file('gambar')->getClientOriginalName());
            $model->gambar = $request->file('gambar')->getClientOriginalName();
        }
        $model->save();

        return redirect()->route('dashboard')->with('success', $identitas . ' berhasil ditambahkan');
    }

    public function simulator()
    {
        $data = [
            'title' => 'Manajemen Simulator',
            'id_page' => 3,
            'simulator' => User::where('role', '=', 'simulator')->get()
        ];

        return view('pages.simulator', $data);
    }

    public function tambah_simulator(Request $request)
    {
        $new_user = new User();

        $new_user->username = $request->username;
        $new_user->password = Hash::make('pc_builder123');
        $new_user->role = 'simulator';

        $new_user->save();

        return redirect()->back()->with('success', 'Simulator berhasil ditambahkan');
    }

    public function hapus_simulator($id)
    {
        $find_user = User::find($id);
        $find_user->delete();

        return redirect()->back()->with('warning', 'Simulator telah dihapus!');
    }

    public function buat_rakitan()
    {
        $data = [
            'title' => 'Buat Rakitan',
            'id_page' => 4,
            'motherboard' => MotherBoard::select(['id_motherboard', 'nama', 'harga'])->get(),
            'processor' => Processor::select(['id_processor', 'nama', 'harga'])->get(),
            'ram' => RAM::select(['id_ram', 'nama', 'harga'])->get(),
            'ssd' => SSD::select(['id_ssd', 'nama', 'harga'])->get(),
            'vga' => VGA::select(['id_vga', 'nama', 'harga'])->get(),
            'casing' => Casing::select(['id_casing', 'nama', 'harga'])->get(),
            'monitor' => Monitor::select(['id_monitor', 'nama', 'harga'])->get(),
            'keyboard' => Keyboard::select(['id_keyboard', 'nama', 'harga'])->get(),
        ];

        return view('pages.buat_rakitan', $data);
    }


    public function tambah_rakitan(Request $request)
    {
        $data = new PcRakit();

        $data->id_motherboard = $request->id_motherboard;
        $data->id_processor = $request->id_processor;
        $data->id_ram = $request->id_ram;
        $data->id_ssd = $request->id_ssd;
        $data->id_vga = $request->id_vga;
        $data->id_casing = $request->id_casing;
        $data->id_monitor = $request->id_monitor;
        $data->id_keyboard = $request->id_keyboard;
        $data->id_user = auth()->user()->id;

        $data->save();

        return redirect()->to('/rakitanku')->with('success', 'Berhasil membuat rakitan.');
    }

    public function rakitanku()
    {
        $data = [
            'title' => 'Rakitanku',
            'id_page' => 5,
            'rakitanku' => PcRakit::join('motherboard', 'pc_rakit.id_motherboard', '=', 'motherboard.id_motherboard')
                ->join('processor', 'pc_rakit.id_processor', '=', 'processor.id_processor')
                ->join('ram', 'pc_rakit.id_ram', '=', 'ram.id_ram')
                ->join('ssd', 'pc_rakit.id_ssd', '=', 'ssd.id_ssd')
                ->join('vga', 'pc_rakit.id_vga', '=', 'vga.id_vga')
                ->join('casing', 'pc_rakit.id_casing', '=', 'casing.id_casing')
                ->join('monitor', 'pc_rakit.id_monitor', '=', 'monitor.id_monitor')
                ->join('keyboard', 'pc_rakit.id_keyboard', '=', 'keyboard.id_keyboard')
                ->join('users', 'pc_rakit.id_user', '=', 'users.id')
                ->select([
                    'motherboard.nama as nama_motherboard',
                    'motherboard.harga as harga_motherboard',
                    'processor.nama as nama_processor',
                    'processor.harga as harga_processor',
                    'ram.nama as nama_ram',
                    'ram.harga as harga_ram',
                    'ssd.nama as nama_ssd',
                    'ssd.harga as harga_ssd',
                    'vga.nama as nama_vga',
                    'vga.harga as harga_vga',
                    'casing.nama as nama_casing',
                    'casing.harga as harga_casing',
                    'monitor.nama as nama_monitor',
                    'monitor.harga as harga_monitor',
                    'keyboard.nama as nama_keyboard',
                    'keyboard.harga as harga_keyboard',
                ])
                ->where('users.id', '=', auth()->user()->id)
                ->get()
                ->toArray()
        ];

        return view('pages.rakitanku', $data);
    }
}
