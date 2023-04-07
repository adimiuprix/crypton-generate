<?php
namespace App\Controllers;

use IEXBase\TronAPI\Provider\HttpProvider;
use IEXBase\TronAPI\Tron;

class TronController extends BaseController
{
    public function index(){
        // Inisialisasi koneksi ke jaringan Tron
        $full_node = new HttpProvider('https://api.trongrid.io');
        $solidity_node = new HttpProvider('https://api.trongrid.io');
        $event_server = new HttpProvider('https://api.trongrid.io');
        $tron = new Tron($full_node, $solidity_node, $event_server);
    
        // Buat akun Tron baru
        $account = $tron->generateAddress();

        // Ambil data dari objek akun dengan method getRawData()
        $data = [
            'rawdata' => $account->getRawData()
        ];

        return view('tron', $data);
    }
}