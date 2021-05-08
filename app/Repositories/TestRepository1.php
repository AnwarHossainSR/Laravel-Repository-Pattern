<?php 
namespace App\Repositories;

use App\Models\User;

class TestRepository1 implements TestInterface{
    public function all(){
        return User::all();
    }
    public function get($id){
        return User::find($id);
    }
    public function store(array $data){
        return User::create($data);
    }
    public function update($id, array $data){
        return User::find($id)->update($data);
    }
    public function delete($id){
        return User::destroy($id);
    }
}