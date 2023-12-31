<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Dotenv\Validator;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $userList = User::all();
        return view('admin.users.index', compact('userList'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.users.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $messages = [
            'name.required1' => trans('validation.user.required1'),
            'name.email' => trans('validation.user.email'),
            'name.password' => trans('validation.user.password')
        ];

        $validator = Validator($request->all(), [
            'name' => 'required|min:5',
            'email' => 'required|min:10',
            'password' => 'required|min:8',

        ], $messages);

        if ($validator->fails()) {
            return redirect()->route('admin.users.create')
                ->withErrors($validator)
                ->withInput();
        }

        $user = User::create($request->only([
            'name', 'email', 'password', 'role'
        ]));
        if ($images = $request->file('images')) {
            foreach ($images as $image) {
                $user->addMedia($image)->toMediaCollection('images');
            }
        }
        $message = "Success Create";
        if ($user == null) {
            $message = "Create Failed";
        }
        return redirect()->route('admin.users.index')->with('message', $message);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }
    public function edit(string $id)
    {
        $user = User::findOrFail($id);
        return view('admin.users.edit', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $user = User::findOrFail($id);
        $bool = $user->update(
            $request->only(['name', 'email', 'password', 'role'])
        );
        if ($images = $request->file('images')) {
            foreach ($images as $image) {
                $user->addMedia($image)->toMediaCollection('images');
            }
        }
        $message =  "Success  Update";
        if (!$bool) {
            $message = "Update Failed";
        }
        return redirect()->route('admin.users.index')->with('message', $message);
    }


    public function destroy(string $id)
    {

        $message =  "Delete Full Failed";
        if (User::destroy($id)) {
            $message = "Success Delete";
        }
        return redirect()->route('admin.users.index')->with('message', $message);
    }
}
