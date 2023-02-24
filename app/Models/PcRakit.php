<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class PcRakit extends Model
{
    use HasFactory;
    protected $table = 'pc_rakit';

    public function getAllData()
    {
        DB::table('pc_rakit')
            ->join('motherboard', 'pc_rakit.id_motherboard', '=', 'motherboard.id_motherboard')
            ->join('processor', 'pc_rakit.id_processor', '=', 'processor.id_processor')
            ->join('ram', 'pc_rakit.id_ram', '=', 'ram.id_ram')
            ->join('ssd', 'pc_rakit.id_ssd', '=', 'ssd.id_ssd')
            ->join('vga', 'pc_rakit.id_vga', '=', 'vga.id_vga')
            ->join('casing', 'pc_rakit.id_casing', '=', 'casing.id_casing')
            ->join('monitor', 'pc_rakit.id_monitor', '=', 'monitor.id_monitor')
            ->join('keyboard', 'pc_rakit.id_keyboard', '=', 'keyboard.id_keyboard')
            ->join('users', 'pc_rakit.id_user', '=', 'users.id_user')
            ->get();
    }
}
