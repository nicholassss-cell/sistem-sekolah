<?php
namespace App\Controllers;


class StudentController
{

public function index()
    {
        echo '<h1>Daftar Siswa</h1>';
        echo '<p>Menampilkan daftar siswa</p>';
 
    }

    public function create()
    {
        echo '<h1>Tambah siswa</h1>';
        echo '<p>Menampilkan form tambah siswa.</p>';
    }

    public function show(string $id)
    {
        echo '<h1>Detail siswa</h1>';
        echo '<p>Menampilkan detail siswa dengan ID: ' . htmlspecialchars($id) . '</p>';
    }

}