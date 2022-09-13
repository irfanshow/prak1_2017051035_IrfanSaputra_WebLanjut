<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\Mahasiswa;

class MahasiswaController extends BaseController
{
     public function index()
     {
        $mahasiswaModel = new Mahasiswa();
        $mahasiswa = $mahasiswaModel->findAll();

        $data= [
            'title'=> 'Mahasiswa',
            'mahasiswa'=>$mahasiswa
        ];

        return view('templates/header', $data)
        . view('mahasiswa\list',$data)
        . view('templates/footer');
     }

     public function create(){
         
        $data =[
            'title' =>'Create Mahasiswa'
        ];
        return view('templates/header', $data)
        . view('mahasiswa\create')
        . view('templates/footer');
     }

     // Dah gak digunain lagi
    // public function mahasiswa(){
    //     $mahasiswaModel = new Mahasiswa();
    //     $mahasiswa = $mahasiswaModel->findAll();

    //     $data= [
    //         'title'=> 'Mahasiswa',
    //         'mahasiswa'=>$mahasiswa
    //     ];

    //     return view('templates/header', $data)
    //     . view('mahasiswa\list',$data)
    //     . view('templates/footer');
    // }
}
