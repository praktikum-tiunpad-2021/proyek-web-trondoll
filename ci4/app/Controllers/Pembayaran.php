<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\PembayaranModel;
use App\Models\UserProfilModel;

class Pembayaran extends Controller
{
    // Insert Data
    public function save()
    {
        $model = new PembayaranModel();
        $newData = array(
            'email' => $this->request->getPost('email'),
            'nama_kelas' => $this->request->getPost('nama_kelas'),
            'jenis_pembayaran' => $this->request->getPost('jenis_pembayaran'),
        );

        $model->saveData($newData);
        // dd($newData);
        return redirect()->to('/kelas');
    }

    public function view()
    {
        $model1 = new UserProfilModel();
        $model2 = new PembayaranModel();
        $data['users'] = $model1->getUsers(session()->get('email'));
        $data['pembayaran'] = $model2->getData(session()->get('email'));
        return view('keranjang', $data);
    }

    public function delete($id)
    {
        $model = new PembayaranModel();
        $model->deleteData($id);
        return redirect()->to('/kelas');
    }

    public function getKeterangan()
    {
        $model = new PembayaranModel();
        $keterangan = $model->getKeterangan(session()->get('email'));
        $data = [
            'keterangan' => $keterangan,
        ];
        // dd($data);

        if ($keterangan['keterangan'] == 'Belum dibayar') {
            return redirect()->to('/keranjang');
        } else {
            return redirect()->to('/kelas');
        }
        // return view('/landingpage');
    }
}
