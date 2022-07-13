<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreRequestUsers;
use App\Models\UsersData;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class UsersDataController extends Controller
{
    public function index()
    {
        $get = UsersData::all();
        return json_decode($get);
    }

    public function create()
    {
        //
    }

    public function store(StoreRequestUsers $request)
    {
        $data = UsersData::create($request->all());

        return response()->json([
            'status' => true,
            'message' => 'user created!!!!!!!!',
            'data' => $data,
        ], 200);
    }

    public function show(UsersData $usersData)
    {
        $data = UsersData::find($usersData);
        return response()->json([
            'status' => true,
            'message' => 'user found',
            'data' => $data,
        ], 200);
    }

    public function edit(UsersData $usersData)
    {
        //
    }

    public function update(StoreRequestUsers $request, UsersData $usersData)
    {
        $usersData->update($request->all());
        return response()->json([
            'status' => true,
            'message' => 'user updated',
            'data' => $usersData,
        ], 200);
    }

    public function destroy(UsersData $usersData)
    {
        $usersData->delete();
        return response()->json([
            'status' => true,
            'message' => 'user deleted',
        ], 200);
    }
}
