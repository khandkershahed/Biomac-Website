<?php

namespace App\Http\Controllers\Admin;

use App\Models\Intern;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class InternController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = [
            'interns' => Intern::latest('id')->get(),
        ];
        return view('admin.pages.intern.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.pages.intern.create');
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
                'email'             => 'required|email|max:255|unique:interns,email',
                'order'             => 'nullable|integer|min:0|unique:interns,order',
                'phone'             => 'nullable|string|max:20',
                'designation'       => 'nullable|string|max:200',
                'image'             => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
                'linked_in'         => 'nullable|url|max:255',
                'instagram'         => 'nullable|url|max:255',
                'facebook'          => 'nullable|url|max:255',
                'researchgate'      => 'nullable|url|max:255',
                'tiktok'            => 'nullable|url|max:255',
                'github'            => 'nullable|url|max:255',
                'website'           => 'nullable|url|max:255',
                'status'            => 'required|in:active,on_leave,inactive',
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
                    $filePath = 'intern/' . $key;
                    $uploadedFiles[$key] = customUpload($file, $filePath);
                    if ($uploadedFiles[$key]['status'] === 0) {
                        return redirect()->back()->with('error', $uploadedFiles[$key]['error_message']);
                    }
                } else {
                    $uploadedFiles[$key] = ['status' => 0];
                }
            }

            // Create the intern model instance
            $intern = Intern::create([
                'name'            => $request->name,
                'email'           => $request->email,
                'phone'           => $request->phone,
                'affiliation'     => $request->affiliation,
                'facebook'        => $request->facebook,
                'linked_in'       => $request->linked_in,
                'gender'          => $request->gender,
                'researchgate'    => $request->researchgate,
                'github'          => $request->github,
                'website'         => $request->website,
                'status'          => $request->status,
                'order'           => $request->order,
                'image'           => $uploadedFiles['image']['status'] == 1 ? $uploadedFiles['image']['file_path'] : null,
            ]);

            // Commit the database transaction
            DB::commit();

            return redirect()->route('admin.intern.index')->with('success', 'Intern created successfully');
        } catch (\Exception $e) {
            // Rollback the database transaction in case of an error
            DB::rollback();
            Session::flash('error', 'An error occurred while creating the Intern: ' . $e->getMessage());
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
            'teamMember' => Intern::findOrFail($id),
        ];
        return view('admin.pages.intern.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        DB::beginTransaction();

        try {
            $intern = Intern::findOrFail($id);
            // Validation
            $validator = Validator::make($request->all(), [
                'name'              => 'required|string|max:255',
                'email'             => 'required|email|max:255|unique:interns,email,' . $intern->id,
                'order'             => 'nullable|integer|min:0|unique:interns,order,' . $intern->id . ',id', // Updated uniqueness rule
                'phone'             => 'nullable|string|max:20',
                'designation'       => 'nullable|string|max:200',
                'image'             => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
                'linked_in'         => 'nullable|url|max:255',
                'instagram'         => 'nullable|url|max:255',
                'facebook'          => 'nullable|url|max:255',
                'researchgate'      => 'nullable|url|max:255',
                'tiktok'            => 'nullable|url|max:255',
                'github'            => 'nullable|url|max:255',
                'website'           => 'nullable|url|max:255',
                'status'            => 'required|in:active,on_leave,inactive',
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
                'image' => $request->file('image'),
            ];
            $uploadedFiles = [];

            foreach ($files as $key => $file) {
                if (!empty($file)) {
                    $filePath = 'intern/' . $key;
                    $oldFile = $intern->$key ?? null;

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

            // Update the internMember model instance
            $intern->update([
                'name'            => $request->name,
                'email'           => $request->email,
                'phone'           => $request->phone,
                'affiliation'     => $request->affiliation,
                'facebook'        => $request->facebook,
                'linked_in'       => $request->linked_in,
                'researchgate'    => $request->researchgate,
                'gender'          => $request->gender,
                'github'          => $request->github,
                'website'         => $request->website,
                'status'          => $request->status,
                'order'           => $request->order,
                'image'           => $uploadedFiles['image']['status'] == 1 ? $uploadedFiles['image']['file_path'] : $intern->image,
            ]);

            // Commit the database transaction
            DB::commit();
            Session::flash('success', 'Intern updated successfully');
            return redirect()->back();
        } catch (\Exception $e) {
            // Rollback the database transaction in case of an error
            DB::rollback();
            Session::flash('error', 'An error occurred while updating the Intern: ' . $e->getMessage());
            return redirect()->back()->withInput();
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Intern $intern)
    {
        $files = [
            'image' => $intern->image,
        ];
        foreach ($files as $key => $file) {
            if (!empty($file)) {
                $oldFile = $intern->$key ?? null;
                if ($oldFile) {
                    Storage::delete("public/" . $oldFile);
                }
            }
        }
        $intern->delete();
    }
}
