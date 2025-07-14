<?php

namespace App\Http\Controllers;

use App\Models\Properties;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Http;

class AdminController extends Controller
{

    // route method for dashboard home
    public function index()
    {
        $properties = Properties::with('agent')->orderBy('id', 'DESC')->limit(10)->get();
        $property = Properties::count();
        $user = User::where('usertype', 'user')->count();
        $agent = User::where('usertype', 'agent')->count();
        return view('dashboard.admin.index', compact('properties', 'property', 'user', 'agent'));
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

    public function show_all_agent()
    {
        $all_agents = User::orderBy('id', 'DESC')->where('usertype', 'agent')->paginate(10);
        return view('dashboard.admin.agents', compact('all_agents'));
    }

    // route method for displaying selected agent details
    public function show_agent_details($id)
    {
        $agent = User::findOrFail($id);
        return view('dashboard.admin.agent_detail', compact('agent'));
    }


    // method for displaying all properties
    public function all_properties()
    {
        $properties = Properties::with('agent')->orderBy('id', 'DESC')->paginate(15);
        return view('dashboard.admin.properties', compact('properties'));
    }

    public function edit_property(Properties $property){
        $country_url = env('COUNTRY_API');
        $state_url = env('STATE_API');
        $api_key = env('COUNTRY_STATE_API_KEY');

        // get country list
        if (!Cache::has('countries_data')) {
            $country_response = Http::timeout(30)->withHeaders([
                'X-CSCAPI-KEY' => $api_key,
                'Accept' => 'application/json',
            ])->get($country_url);

            $countries = $country_response->json();
            Cache::put('countries_data', $countries, now()->addMinutes(60));
        } else {
            $countries = Cache::get('countries_data');
        }

        // get state list
        if (!Cache::has('state_data')) {
            $state_response = Http::timeout(30)->withHeaders([
                'X-CSCAPI-KEY' => $api_key,
                'Accept' => 'application/json',
            ])->get($state_url);

            $states = $state_response->json();
            Cache::put('state_data', $states, now()->addMinutes(60));
        } else {
            $states = Cache::get('state_data');
        }

        return view('dashboard.admin.edit.edit_property', compact('property', 'countries', 'states'));
    }


    public function store(Request $request)
    {
        //
    }


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
    public function edit_profile(Request $request, string $id)
    {
        $user = User::findOrFail($id);
        $request->validate([
            'name' => 'sometimes|string|max:225',
            'email' => 'sometimes|email|max:225',
            'phone' => 'sometimes|string|max:20',
            'bio' => 'sometimes|string|max:1024',
            'image' => 'sometimes|image|mimes:png,jpg,jpeg',
        ]);

        $user->name = $request->name;
        $user->email = $request->email;
        $user->phone = $request->phone;
        $user->bio = $request->bio;

        // process image
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $filename = 'realtor_image' . uniqid() . '.' . $file->getClientOriginalExtension();

            // delete old image
            $old_image = public_path('uploads/users/') . $user->image;
            if ($user->image && file_exists($old_image)) {
                unlink($old_image);
            }

            $file->move(public_path('uploads/users/'), $filename);

            $user->image = $filename;
        }

        if ($user->save()) {
            return redirect()->back()->with('success', 'Profile updated successfully');
        } else {
            return redirect()->back()->with('error', 'An error occured');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
