<?php

namespace App\Http\Controllers;

use App\Repositories\TestInterface;
use Illuminate\Http\Request;

class UserController extends Controller
{
    protected $test;
    public function __construct(TestInterface $test)
    {
        $this->test = $test;
    }
    public function index()
    {
        $users = $this->test->all();
        return $users;
    }

    public function store(Request $request)
    {
        $this->test->store($request->all());
    }

    public function edit($id)
    {
        $user = $this->test->get($id);
        return $user;
    }

    public function update($id, Request $request)
    {
        $user = $this->test->update($id,$request->all());
        return $user;
    }

    public function destroy($id)
    {
        $this->test->delete($id);
    }
}
