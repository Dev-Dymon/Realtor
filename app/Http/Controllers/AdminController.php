<?php

namespace App\Http\Controllers;

use App\Models\Properties;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class AdminController extends Controller
{

    // route method for dashboard home
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

    public function show_all_agent(){
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
        return view('dashboard.admin.properties');
    }


    // method for displaying add property page
    public function add_property()
    {
        return view('dashboard.admin.add_property');
    }


    public function create_property(Request $request)
    {
        $property = new Properties();
        $request->validate([
            'user_id' => 'required|exists:users,id',
            'name' => 'required|string|max:255',
            'location' => 'required|string|max:255',
            'city' => 'required|string|max:100',
            'country' => 'required|string|max:100',
            'no_of_bedroom' => 'required|integer|min:0',
            'no_of_toilet' => 'required|integer|min:0',
            'price' => 'required|numeric|min:0',
            'property_type' => 'required|string|max:100',
            'status' => 'required|boolean',
            'size' => 'required|string|max:50',
            'description' => 'required|string',
            'image_1' => 'required|image|mimes:jpg,jpeg,png|max:2048',
            'image_2' => 'required|image|mimes:jpg,jpeg,png|max:2048',
            'image_3' => 'required|image|mimes:jpg,jpeg,png|max:2048',
            'image_4' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
            'image_5' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
            'image_6' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
            'image_7' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
            'image_8' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
        ]);


        // assign details to column
        $property->user_id = $request->user_id;
        $property->name = $request->name;
        $property->slug = Str::slug($request->name);
        $property->location = $request->location;
        $property->city = $request->city;
        $property->country = $request->country;
        $property->no_of_bedroom = $request->no_of_bedroom;
        $property->no_of_toilet = $request->no_of_toilet;
        $property->price = $request->price;
        $property->property_type = $request->property_type;
        $property->status = $request->status;
        $property->size = $request->size;
        $property->description = $request->description;

        // process image 1
        if ($request->has('image_1')) {
            $file1 = $request->file('image_1');
            $filename1 = 'realtor_image' . time() . uniqid() . '.' . $file1->getClientOriginalExtension();
            $file1->move(public_path('uploads/properties/'), $filename1);

            $property->image_1 = $filename1;
        }

        // process image 2
        if ($request->has('image_2')) {
            $file2 = $request->file('image_2');
            $filename2 = 'realtor_image' . time() . uniqid() . '.' . $file2->getClientOriginalExtension();
            $file2->move(public_path('uploads/properties/'), $filename2);

            $property->image_2 = $filename2;
        }

        // process image 3
        if ($request->has('image_3')) {
            $file3 = $request->file('image_3');
            $filename3 = 'realtor_image' . time() . uniqid() . '.' . $file3->getClientOriginalExtension();
            $file3->move(public_path('uploads/properties/'), $filename3);

            $property->image_3 = $filename3;
        }

        // process image 4
        if ($request->has('image_4')) {
            $file4 = $request->file('image_4');
            $filename4 = 'realtor_image' . time() . uniqid() . '.' . $file4->getClientOriginalExtension();
            $file4->move(public_path('uploads/properties/'), $filename4);

            $property->image_4 = $filename4;
        }

        // process image 5
        if ($request->has('image_5')) {
            $file5 = $request->file('image_5');
            $filename5 = 'realtor_image' . time() . uniqid() . '.' . $file5->getClientOriginalExtension();
            $file5->move(public_path('uploads/properties/'), $filename5);

            $property->image_5 = $filename5;
        }

        // process image 6
        if ($request->has('image_6')) {
            $file6 = $request->file('image_6');
            $filename6 = 'realtor_image' . time() . uniqid() . '.' . $file6->getClientOriginalExtension();
            $file6->move(public_path('uploads/properties/'), $filename6);

            $property->image_6 = $filename6;
        }

        // process image 7
        if ($request->has('image_7')) {
            $file7 = $request->file('image_7');
            $filename7 = 'realtor_image' . time() . uniqid() . '.' . $file7->getClientOriginalExtension();
            $file7->move(public_path('uploads/properties/'), $filename7);

            $property->image_7 = $filename7;
        }

        // process image 8
        if ($request->has('image_8')) {
            $file8 = $request->file('image_8');
            $filename8 = 'realtor_image' . time() . uniqid() . '.' . $file8->getClientOriginalExtension();
            $file8->move(public_path('uploads/properties/'), $filename8);

            $property->image_8 = $filename8;
        }

        
        if ($property->save()) {
            return redirect()->back()->with('success', 'Property uploaded successfully');
        }else{
            return redirect()->back()->with('error', 'An error occurred');
        }
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
        }else{
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
