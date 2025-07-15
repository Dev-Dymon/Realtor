<?php

namespace App\Http\Controllers;

use App\Models\Properties;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Str;
use Illuminate\Validation\Rule;
use Illuminate\Validation\Rules\File;

class PropertiesController extends Controller
{

    // method for displaying add property page
    public function index()
    {
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

        // dd($countries);
        return view('dashboard.admin.add_property', compact('countries', 'states'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
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

            'image_1' => [
                'required',
                File::image()->types(['jpg', 'png', 'jpeg'])->max(2048)
                    ->dimensions(Rule::dimensions()->maxHeight(1000)
                        ->maxWidth(1000))
            ],
            'image_2' => [
                'required',
                File::image()->types(['jpg', 'png', 'jpeg'])->max(2048)
                    ->dimensions(Rule::dimensions()->maxHeight(1000)
                        ->maxWidth(1000))
            ],
            'image_3' => [
                'required',
                File::image()->types(['jpg', 'png', 'jpeg'])->max(2048)
                    ->dimensions(Rule::dimensions()->maxHeight(1000)
                        ->maxWidth(1000))
            ],
            'image_4' => [
                'required',
                File::image()->types(['jpg', 'png', 'jpeg'])->max(2048)
                    ->dimensions(Rule::dimensions()->maxHeight(1000)
                        ->maxWidth(1000))
            ],
            'image_5' => [
                File::image()->types(['jpg', 'png', 'jpeg'])->max(2048)
                    ->dimensions(Rule::dimensions()->maxHeight(1000)
                        ->maxWidth(1000))
            ],
            'image_6' => [
                File::image()->types(['jpg', 'png', 'jpeg'])->max(2048)
                    ->dimensions(Rule::dimensions()->maxHeight(1000)
                        ->maxWidth(1000))
            ],
            'image_7' => [
                File::image()->types(['jpg', 'png', 'jpeg'])->max(2048)
                    ->dimensions(Rule::dimensions()->maxHeight(1000)
                        ->maxWidth(1000))
            ],
            'image_8' => [
                File::image()->types(['jpg', 'png', 'jpeg'])->max(2048)
                    ->dimensions(Rule::dimensions()->maxHeight(1000)
                        ->maxWidth(1000))
            ],
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
        } else {
            return redirect()->back()->with('error', 'An error occurred');
        }
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request, Properties $property)
    {
        // dd($request->image_1);

        $request->validate([
            'user_id' => 'sometimes|exists:users,id',
            'name' => 'sometimes|string|max:255',
            'location' => 'sometimes|string|max:255',
            'city' => 'sometimes|string|max:100',
            'country' => 'sometimes|string|max:100',
            'no_of_bedroom' => 'sometimes|integer|min:0',
            'no_of_toilet' => 'sometimes|integer|min:0',
            'price' => 'sometimes|numeric|min:0',
            'property_type' => 'sometimes|string|max:100',
            'status' => 'sometimes|boolean',
            'size' => 'sometimes|string|max:50',
            'description' => 'sometimes|string',

            'image_1' => [
                'sometimes',
                File::image()->types(['jpeg, jpg, png'])->max(2048)
                    ->dimensions(Rule::dimensions()->maxHeight(1000)
                        ->maxWidth(1000))
            ],
            'image_2' => [
                'sometimes',
                File::image()->types(['jpg', 'png', 'jpeg'])->max(2048)
                    ->dimensions(Rule::dimensions()->maxHeight(1000)
                        ->maxWidth(1000))
            ],
            'image_3' => [
                'sometimes',
                File::image()->types(['jpg', 'png', 'jpeg'])->max(2048)
                    ->dimensions(Rule::dimensions()->maxHeight(1000)
                        ->maxWidth(1000))
            ],
            'image_4' => [
                'sometimes',
                File::image()->types(['jpg', 'png', 'jpeg'])->max(2048)
                    ->dimensions(Rule::dimensions()->maxHeight(1000)
                        ->maxWidth(1000))
            ],
            'image_5' => [
                'sometimes',
                File::image()->types(['jpg', 'png', 'jpeg'])->max(2048)
                    ->dimensions(Rule::dimensions()->maxHeight(1000)
                        ->maxWidth(1000))
            ],
            'image_6' => [
                'sometimes',
                File::image()->types(['jpg', 'png', 'jpeg'])->max(2048)
                    ->dimensions(Rule::dimensions()->maxHeight(1000)
                        ->maxWidth(1000))
            ],
            'image_7' => [
                'sometimes',
                File::image()->types(['jpg', 'png', 'jpeg'])->max(2048)
                    ->dimensions(Rule::dimensions()->maxHeight(1000)
                        ->maxWidth(1000))
            ],
            'image_8' => [
                'sometimes',
                File::image()->types(['jpg', 'png', 'jpeg'])->max(2048)
                    ->dimensions(Rule::dimensions()->maxHeight(1000)
                        ->maxWidth(1000))
            ],
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
            $oldimage = public_path('uploads/properties'. $property->image_1);
            if (file_exists($oldimage)) {
                unlink($oldimage);
            }

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
            return redirect()->route('admin.properties')->with('success', 'Property updated successfully');
        } else {
            return redirect()->back()->with('error', 'An error occurred');
        }
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
