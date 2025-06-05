<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('dashboard.admin.index');
    }

    public function show_profile(){
        return view('dashboard.admin.profile');
    }

    public function show_all_user(){
        $all_users = User::orderBy('id', 'DESC')->where('usertype', 'user')->paginate(10);
        return view('dashboard.admin.users', compact('all_users'));
    }

    public function show_user_details($id){
        $user = User::findOrFail($id);
        return view('dashboard.admin.user_detail', compact('user'));
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }


    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
