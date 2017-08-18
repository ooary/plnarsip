<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Alert;
class UsersController extends Controller
{
    //
    public function index(Request $request){
    	$data = user::where('role','pegawai')->get();
    	return View('user.index',compact('data'));
    }

    public function create(){
    	return View('user.add');
    }

     public function edit($id){
        $data = User::findOrfail($id);
        return View('user.edit',compact('data'));
    }
     public function update(Request $request,$id){
        $data = user::find($id);
        if($data->nip != $request->get('nip')){
            $data['password'] = bcrypt($request->get('nip'));
        }
        $data->update($request->all());
        Alert::success('pegawai Berhasil di Update!');
        return Redirect('pegawai');
    }
    public function store(Request $request){
    	$data = $request->all();
    	$data['password']= bcrypt($data['nip']);
    	$data['role'] = 'pegawai';
    	$save = User::create($data);
    	Alert()->success(strtoupper($data['nama']),'Berhasil di Tambah');
    	return Redirect('pegawai');

    }
    public function destroy(Request $request,$id){
    	$data = user::findOrfail($id);

    	$user = User::where('id',$data->id)->delete();
 
    	Alert()->success(strtoupper($data->nama),'Berhasil di Hapus');
        return Redirect('pegawai');

    }
}
