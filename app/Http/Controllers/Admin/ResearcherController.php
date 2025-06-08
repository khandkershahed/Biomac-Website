<?php

namespace App\Http\Controllers\Admin;

use App\Models\Researcher;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class ResearcherController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = [
            'researchers' => Researcher::latest('id')->get(),
        ];
        return view('admin.pages.researcher.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.pages.researcher.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        DB::beginTransaction();

        try {
            // Validation
            $validator = Validator::make($request->all(), [
                'name'              => 'required|string|max:255',
                'email'             => 'required|email|max:255|unique:researchers,email',
                'order'             => 'nullable|integer|min:0|unique:researchers,order',
                'phone'             => 'nullable|string|max:20',
                'designation'       => 'nullable|string|max:200',
                'image'             => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
                'linked_in'         => 'nullable|url|max:255',
                'instagram'         => 'nullable|url|max:255',
                'facebook'          => 'nullable|url|max:255',
                'youtube'           => 'nullable|url|max:255',
                'tiktok'            => 'nullable|url|max:255',
                'github'            => 'nullable|url|max:255',
                'website'           => 'nullable|url|max:255',
                'discord'           => 'nullable|string|max:200',
                'portfolio'         => 'nullable|url|max:255',
                'biography'         => 'nullable|string',
                'location'          => 'nullable|string|max:100',
                'start_date'        => 'nullable|date',
                'status'            => 'required|in:active,on_leave,inactive',
                'language'          => 'nullable|string|max:255',
                'skills'            => 'nullable|string',
                'awards'            => 'nullable|string',
                'interests'         => 'nullable|string',
            ], [
                'name.required'     => 'The full name field is required.',
                'email.required'    => 'The email field is required.',
                'email.email'       => 'The email must be a valid email address.',
                'email.unique'      => 'The email has already been taken.',
                'image.image'       => 'The uploaded file must be an image.',
                'image.mimes'       => 'The image must be a file of type: jpg, jpeg, png.',
                'image.max'         => 'The image may not be greater than 2MB.',
                // Add more custom messages for other fields as needed
            ]);

            if ($validator->fails()) {
                foreach ($validator->messages()->all() as $message) {
                    Session::flash('error', $message);
                }
                return redirect()->back()->withInput();
            }

            // Handle file upload
            $files = [
                'image'    => $request->file('image'),
            ];
            $uploadedFiles = [];
            foreach ($files as $key => $file) {
                if (!empty($file)) {
                    $filePath = 'researcher/' . $key;
                    $uploadedFiles[$key] = customUpload($file, $filePath);
                    if ($uploadedFiles[$key]['status'] === 0) {
                        return redirect()->back()->with('error', $uploadedFiles[$key]['error_message']);
                    }
                } else {
                    $uploadedFiles[$key] = ['status' => 0];
                }
            }

            // Create the Researcher model instance
            $researcher = Researcher::create([
                'name'            => $request->name,
                'email'           => $request->email,
                'phone'           => $request->phone,
                'designation'     => $request->designation,
                'image'           => $uploadedFiles['image']['status'] == 1 ? $uploadedFiles['image']['file_path'] : null,
                'linked_in'       => $request->linked_in,
                'instagram'       => $request->instagram,
                'facebook'        => $request->facebook,
                'youtube'         => $request->youtube,
                'tiktok'          => $request->tiktok,
                'github'          => $request->github,
                'website'         => $request->website,
                'discord'         => $request->discord,
                'portfolio'       => $request->portfolio,
                'biography'       => $request->biography,
                'location'        => $request->location,
                'start_date'      => $request->start_date,
                'status'          => $request->status,
                'language'        => $request->language,
                'order'           => $request->order,
                'skills'          => $request->skills,
                'awards'          => $request->awards,
                'interests'       => $request->interests,
            ]);

            // Commit the database transaction
            DB::commit();

            return redirect()->route('admin.researcher.index')->with('success', 'Researcher created successfully');
        } catch (\Exception $e) {
            // Rollback the database transaction in case of an error
            DB::rollback();
            Session::flash('error', 'An error occurred while creating the researcher: ' . $e->getMessage());
            return redirect()->back()->withInput();
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
        $data = [
            'researcher' => Researcher::findOrFail($id),
        ];
        return view('admin.pages.researcher.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        DB::beginTransaction();

        try {
            $researcher = Researcher::findOrFail($id);
            // Validation
            $validator = Validator::make($request->all(), [
                'name'              => 'required|string|max:255',
                'email'             => 'required|email|max:255|unique:researchers,email,' . $researcher->id,
                'order'             => 'nullable|integer|min:0|unique:researchers,order,' . $researcher->id . ',id', // Updated uniqueness rule
                'phone'             => 'nullable|string|max:20',
                'designation'       => 'nullable|string|max:200',
                'image'             => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
                'linked_in'         => 'nullable|url|max:255',
                'instagram'         => 'nullable|url|max:255',
                'facebook'          => 'nullable|url|max:255',
                'youtube'           => 'nullable|url|max:255',
                'tiktok'            => 'nullable|url|max:255',
                'github'            => 'nullable|url|max:255',
                'website'           => 'nullable|url|max:255',
                'discord'           => 'nullable|string|max:200',
                'portfolio'         => 'nullable|url|max:255',
                'biography'         => 'nullable|string',
                'location'          => 'nullable|string|max:100',
                'start_date'        => 'nullable|date',
                'status'            => 'required|in:active,on_leave,inactive',
                'language'          => 'nullable|string|max:255',
                'skills'            => 'nullable|string',
                'awards'            => 'nullable|string',
                'interests'         => 'nullable|string',
            ], [
                'name.required'     => 'The full name field is required.',
                'email.required'    => 'The email field is required.',
                'email.email'       => 'The email must be a valid email address.',
                'email.unique'      => 'The email has already been taken.',
                'image.image'       => 'The uploaded file must be an image.',
                'image.mimes'       => 'The image must be a file of type: jpg, jpeg, png.',
                'image.max'         => 'The image may not be greater than 2MB.',
                // Add more custom messages for other fields as needed
            ]);

            if ($validator->fails()) {
                foreach ($validator->messages()->all() as $message) {
                    Session::flash('error', $message);
                }
                return redirect()->back()->withInput();
            }
            $files = [
                'image'    => $request->file('image'),
            ];
            // Handle file upload
            $uploadedFiles = [];
            foreach ($files as $key => $file) {
                if (!empty($file)) {
                    $filePath = 'researcher/' . $key;
                    $oldFile = $researcher->$key ?? null;
                    if ($oldFile) {
                        Storage::delete("public/" . $oldFile);
                    }
                    $uploadedFiles[$key] = customUpload($file, $filePath);
                    if ($uploadedFiles[$key]['status'] === 0) {
                        return redirect()->back()->with('error', $uploadedFiles[$key]['error_message']);
                    }
                } else {
                    $uploadedFiles[$key] = ['status' => 0];
                }
            }

            // Update the Researcher model instance
            $researcher->update([
                'name'            => $request->name,
                'email'           => $request->email,
                'phone'           => $request->phone,
                'designation'     => $request->designation,
                'image'           => isset($uploadedFiles['image']) ? $uploadedFiles['image']['file_path'] : $researcher->image,
                'linked_in'       => $request->linked_in,
                'instagram'       => $request->instagram,
                'facebook'        => $request->facebook,
                'youtube'         => $request->youtube,
                'tiktok'          => $request->tiktok,
                'github'          => $request->github,
                'website'         => $request->website,
                'discord'         => $request->discord,
                'portfolio'       => $request->portfolio,
                'biography'       => $request->biography,
                'location'        => $request->location,
                'start_date'      => $request->start_date,
                'status'          => $request->status,
                'language'        => $request->language,
                'order'           => $request->order,
                'skills'          => $request->skills,
                'awards'          => $request->awards,
                'interests'       => $request->interests,
            ]);

            // Commit the database transaction
            DB::commit();

            return redirect()->route('admin.researcher.index')->with('success', 'Researcher updated successfully');
        } catch (\Exception $e) {
            // Rollback the database transaction in case of an error
            DB::rollback();
            Session::flash('error', 'An error occurred while updating the researcher: ' . $e->getMessage());
            return redirect()->back()->withInput();
        }
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Researcher $researcher)
    {
        $files = [
            'image' => $researcher->image,
        ];
        foreach ($files as $key => $file) {
            if (!empty($file)) {
                $oldFile = $researcher->$key ?? null;
                if ($oldFile) {
                    Storage::delete("public/" . $oldFile);
                }
            }
        }
        $researcher->delete();
    }
}
