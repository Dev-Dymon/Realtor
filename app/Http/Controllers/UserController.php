<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('dashboard.user.index');
    }

    // method to ban user
    public function ban_user(User $user){

        // $ban_user = DB::raw("UPDATE `users` set is_banned = 1 WHERE id = $user->id");
        $ban_user = DB::table('users')->where('id', $user->id)->update(['is_banned' => 1, 'banned_at' => now()]);

        if ($ban_user) {
            return redirect()->back()->with('success', 'User has been banned');
        }else {
            return redirect()->back()->with('error', 'An error occured');
        }
    }

    public function unban_user(User $user){
        $unban_user = DB::table('users')->where('id', $user->id)->update(['is_banned' => 0]);

        if ($unban_user) {
            return redirect()->back()->with('success', 'User has been unbanned');
        }else {
            return redirect()->back()->with('error', 'An error occured');
        }
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
