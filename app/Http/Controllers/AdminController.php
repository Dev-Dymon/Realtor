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

    public function show_profile()
    {
        return view('dashboard.admin.profile');
    }

    public function show_all_user()
    {
        $all_users = User::orderBy('id', 'DESC')->where('usertype', 'user')->paginate(10);
        return view('dashboard.admin.users', compact('all_users'));
    }

    public function show_user_details($id)
    {
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
    public function edit_profile(Request $request, $id)
    {
        $user = User::findOrFail($id);
        $request->validate([
            'name' => 'sometimes|string|min:5|max:255',
            'email' => 'sometimes|email|min:10|max:225',
            'phone' => 'sometimes|string|min:9|max:20',
            'bio' => 'sometimes|string|max:1000',
            'image' => 'sometimes|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        // dd($id);
        // dd($user);

        // process image
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $filename = 'realtor_image' . time() . '.' .  $file->getClientOriginalExtension();

            // delete old image 
            $old_image = public_path('uploads/users/'. $user->image);
            if ($user->image && file_exists($old_image)) {
                unlink($old_image);
            }

            // move new image in
            $file->move(public_path('uploads/users'), $filename);

            $user->image = $filename;
        }
        
        $user->name = $request->name;
        $user->email = $request->email;
        $user->phone = $request->phone;
        $user->bio = $request->bio;

        if ($user->save()) {
            return redirect()->route('admin.profile')->with('success', 'Profile updated successfully');
        }else {
            return redirect()->route('admin.profile')->with('error', 'Something went wrong');
        }
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
