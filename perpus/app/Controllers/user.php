<?php

namespace App\Controllers;

use App\Models\UserModel;
use CodeIgniter\HTTP\ResponseInterface;

class User extends BaseController
{
    public function index()
    {
        $model = new UserModel();
        $data['users'] = $model->findAll();
        return view('user/index', $data);
    }
    public function create()
    {
       echo view('user/create');
    }
    public function tambah()
    {
        $model = new UserModel();
        $data = [
            'Username' => $this->request->getVar('Username'),
            'Password' => md5($this->request->getVar('Password')),
            'Email' => $this->request->getVar('Email'),
            'NamaLengkap' => $this->request->getVar('NamaLengkap'),
            'Alamat' => $this->request->getVar('Alamat'),
        ];
        $model->insert($data);
        return redirect()->to('/user');
    }
    public function update($id)
    {   
        $model = new UserModel();
        $data['user'] = $model->find($id);
        return view('user/update', $data);
    }
    public function edit($id)
    {
        $model = new UserModel();
        
        $user = $model->find($id);

        
        $data = [
            'Username' => $this->request->getVar('Username'),
            'Email' => $this->request->getVar('Email'),
            'NamaLengkap' => $this->request->getVar('NamaLengkap'),
            'Alamat' => $this->request->getVar('Alamat'),
        ];

        // Ambil password baru dari input
        $newPassword = $this->request->getPost('Password');

        // Cek apakah password diubah
        if (!empty($newPassword)) {
            // Jika password diubah, enkripsi kembali
            $data['Password'] = md5($newPassword);
        } else {
            // Jika password tidak diubah, gunakan password lama
            $data['Password'] = $user['Password'];
        }

        // Update data di database
        $model->update($id, $data);

        // Redirect setelah update berhasil
        return redirect()->to('/user');
        
    }

    public function delete($id)
    {
        $model = new UserModel();
        $model->delete($id);
        return redirect()->to('/user');
    }
}