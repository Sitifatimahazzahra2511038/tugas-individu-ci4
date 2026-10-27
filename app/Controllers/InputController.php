<?php

namespace App\Controllers;

class InputController extends BaseController
{
    public function index()
    {
        return view('input/index');
    }

    public function store()
    {
        $nama = trim($this->request->getPost('nama') ?? '');
        $keterangan = trim($this->request->getPost('keterangan') ?? '');

        if ($nama === '' || $keterangan === '') {
            return redirect()->to('/input')
                ->withInput()
                ->with('error', 'Semua kolom wajib diisi.');
        }

        return redirect()->to('/input')
            ->with('success', 'Data berhasil diproses!')
            ->with('nama', $nama)
            ->with('keterangan', $keterangan);
    }
}
