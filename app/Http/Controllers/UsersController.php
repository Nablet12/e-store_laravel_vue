<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Users;

class UsersController extends Controller
{
    public function index()
    {
        return Users::all();
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        $users = Users::create($request -> all());
        return $users;
    }

    public function show($id)
    {
        $users = Users::find($id);
        return $users;
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        $users = Users::find($id) -> update($request->all());
        return $users;
    }

    public function destroy($id)
    {
        $users = Users::find($id) -> delete();
        return $users;
    }
}
