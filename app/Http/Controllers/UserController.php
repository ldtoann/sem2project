<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;


class UserController extends Controller
{
    public function index()
    {
        return User::select('id', 'name', 'password')->get();
    }

    public function store(Request $request)
    {
        return User::create($request->all());
    }

    public function show(string $id)
    {
        return User::findOrFail($id);
    }

    public function update(Request $request, string $id)
    {
        User::findOrFail($id)->update($request);
    }

    public function destroy(string $id)
    {
        User::findOrFail($id)->destroy();
    }
}
