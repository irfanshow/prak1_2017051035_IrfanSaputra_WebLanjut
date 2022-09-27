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

        // return view('templates/header', $data);
         return view('mahasiswa\list',$data); # gak perlu lagi karena udah ada admin LTE
        // . view('templates/footer');
     }

     public function create(){
         
        $data =[
            'title' =>'Create Mahasiswa'
        ];
        return view('mahasiswa/create', $data);
        // . view('mahasiswa\create')
        // . view('templates/footer');
     }

     public function store()
     {
        if(!$this->validate([
            'npm' => 'required',
            'nama' =>'required',
            'alamat'=>'required',
            'deskripsi'=>'required',
        ])){
            return redirect()->to('/create');
        }
        $mahasiswaModel = new Mahasiswa();
        $data=[
            'npm' => $this->request->getPost('npm'),
            'nama'=> $this->request->getPost('nama'),
            'alamat'=>$this->request->getPost('alamat'),
            'deskripsi'=> $this->request->getPost('deskripsi')
        ];

        $mahasiswaModel->save($data);
        return redirect()->to('/mahasiswa');

    }

     public function delete($id){
        $mahasiswaModel = new Mahasiswa();
        $mahasiswaModel -> delete($id);

        return redirect() -> to('/mahasiswa');
     }


     public function edit($id){
        $mahasiswaModel = new Mahasiswa();
        $mahasiswa = $mahasiswaModel->find($id);

        $data = [
            'title' => ' Edit Mahasiswa',
            'mahasiswa' => $mahasiswa
        ];
        return view('mahasiswa/edit' , $data);
    }

    public function update($id)
    {
        if(!$this->validate([
            'npm' => 'required',
            'nama' =>'required',
            'alamat'=>'required',
            'deskripsi'=>'required'
        ])){
            return redirect()->to('/edit/'.$id);
        }
        $mahasiswaModel = new Mahasiswa();
        $data=[
            'npm' => $this->request->getVar('npm'),
            'nama'=> $this->request->getVar('nama'),
            'alamat'=>$this->request->getVar('alamat'),
            'deskripsi'=> $this->request->getVar('deskripsi')
        ];

        $mahasiswaModel->update($id, $data);
        return redirect()->to('/mahasiswa');

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
