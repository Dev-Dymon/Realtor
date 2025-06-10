<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AgentController extends Controller
{
    //route method for directing agent to thier dashboard
    public function index()
    {
        return view('dashboard.agent.index');
    }



    // method for banning agents
    public function ban_agent(User $user){
        $agent = $user->id;
        $ban_agent = DB::table('users')->where('id', $agent)->update(['is_banned' => 1, 'banned_at' => now()]);

        if ($ban_agent) {
            return redirect()->back()->with('success', 'Agent banned successfully');
        }else{
            return redirect()->back()->with('error', 'An error occured');
        }
    }


    // method to unban agents
    public function unban_agent(User $user){
        $agent = $user->id;
        $unban_agent = DB::table('users')->where('id', $agent)->update(['is_banned' => 0]);

        if ($unban_agent) {
            return redirect()->back()->with('success', 'Agent unban successfully');
        }else{
            return redirect()->back()->with('error', 'An error occured');
        }
    }

    
    public function create()
    {
        //
    }

    
    public function store(Request $request)
    {
        //
    }

    
    public function show(string $id)
    {
        //
    }

    
    public function edit(string $id)
    {
        //
    }

    
    public function update(Request $request, string $id)
    {
        //
    }

    
    public function destroy(string $id)
    {
        //
    }
}
