<?php

namespace App\Http\Controllers\Admin;

use App\Models\Training;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;

class TrainingController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.pages.training.index', ['trainings' => Training::latest()->get()]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.pages.training.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
{
    DB::beginTransaction();

    try {
        // ✅ Validation
        $validator = Validator::make($request->all(), [
            'name'                => 'required|string|max:255',
            'slug'                => 'nullable|string|max:255|unique:trainings,slug',
            'start_date'          => 'nullable|date',
            'start_time'          => 'nullable|date_format:H:i',
            'end_date'            => 'nullable|date',
            'end_time'            => 'nullable|date_format:H:i',
            'max_attendees'       => 'nullable|integer|min:0',
            'current_attendees'   => 'nullable|integer|min:0',
            'event_short_descp'   => 'nullable|string',
            'instructor'          => 'nullable|string|max:255',
            'registration_fee'    => 'nullable|string|max:255',
            'student_fee'         => 'nullable|numeric|min:0',
            'job_holder_fee'      => 'nullable|numeric|min:0',
            'whatsapp_link'       => 'nullable|url|max:255',
            'facebook_link'       => 'nullable|url|max:255',
            'linkedin_link'       => 'nullable|url|max:255',
            'registration_link'   => 'nullable|url|max:255',
            'training_mode'       => 'nullable|string|max:100',
            'organizer_text'      => 'nullable|string|max:255',
            'map_link'            => 'nullable|url|max:255',
            'website_link'        => 'nullable|url|max:255',

            // ✅ Row One – Five Sections
            'row_one_title'             => 'nullable|string|max:255',
            'row_one_description'       => 'nullable|string',
            'row_one_button_name'       => 'nullable|string|max:255',
            'row_one_button_link'       => 'nullable|url|max:255',

            'row_two_title'             => 'nullable|string|max:255',
            'row_two_description'       => 'nullable|string',

            'row_three_badge'           => 'nullable|string|max:255',
            'row_three_title'           => 'nullable|string|max:255',
            'row_three_description'     => 'nullable|string',
            'row_three_button_name'     => 'nullable|string|max:255',
            'row_three_button_link'     => 'nullable|url|max:255',

            'row_four_badge'            => 'nullable|string|max:255',
            'row_four_title'            => 'nullable|string|max:255',
            'row_four_description'      => 'nullable|string',
            'row_four_button_name'      => 'nullable|string|max:255',
            'row_four_button_link'      => 'nullable|url|max:255',

            'row_five_title'            => 'nullable|string|max:255',
            'row_five_description'      => 'nullable|string',
            'row_five_button_name'      => 'nullable|string|max:255',
            'row_five_button_link'      => 'nullable|url|max:255',

            'other_link'          => 'nullable|url|max:255',

            // ✅ Status & Payment
            'status'              => 'nullable|in:canceled,ongoing,upcoming,completed,registration_open,registration_close',
            'event_type'          => 'nullable|in:workshop,seminar,concert,conference,webinar',
            'payment_type'        => 'nullable|in:free,paid',
            'ticket_price'        => 'nullable|numeric|min:0',
            'currency'            => 'nullable|string|max:50',

            // ✅ Location & Contact
            'location'            => 'nullable|string|max:255',
            'contact'             => 'nullable|string|max:255',
            'event_status'        => 'nullable|string|max:100',

            // ✅ File Uploads
            'banner_image'        => 'nullable|image|mimes:jpg,jpeg,png,webp|max:4096',
            'thumbnail_image'     => 'nullable|image|mimes:jpg,jpeg,png,webp|max:4096',
        ]);

        if ($validator->fails()) {
            foreach ($validator->messages()->all() as $message) {
                Session::flash('error', $message);
            }
            return redirect()->back()->withInput();
        }

        // ✅ Handle file uploads
        $files = [
            'banner_image'    => $request->file('banner_image'),
            'thumbnail_image' => $request->file('thumbnail_image'),
        ];

        $uploadedFiles = [];
        foreach ($files as $key => $file) {
            if (!empty($file)) {
                $filePath = 'training/' . $key;
                $uploadedFiles[$key] = customUpload($file, $filePath);
                if ($uploadedFiles[$key]['status'] === 0) {
                    return redirect()->back()->with('error', $uploadedFiles[$key]['error_message']);
                }
            } else {
                $uploadedFiles[$key] = ['status' => 0];
            }
        }

        // ✅ Create the Training
        $training = Training::create([
            'name'                  => $request->name,
            'slug'                  => $request->slug ?: Str::slug($request->name),
            'start_date'            => $request->start_date,
            'start_time'            => $request->start_time,
            'end_date'              => $request->end_date,
            'end_time'              => $request->end_time,
            'max_attendees'         => $request->max_attendees,
            'current_attendees'     => $request->current_attendees,
            'event_short_descp'     => $request->event_short_descp,
            'instructor'            => $request->instructor,
            'registration_fee'      => $request->registration_fee,
            'student_fee'           => $request->student_fee,
            'job_holder_fee'        => $request->job_holder_fee,
            'whatsapp_link'         => $request->whatsapp_link,
            'facebook_link'         => $request->facebook_link,
            'linkedin_link'         => $request->linkedin_link,
            'registration_link'     => $request->registration_link,
            'training_mode'         => $request->training_mode,
            'organizer_text'        => $request->organizer_text,
            'map_link'              => $request->map_link,
            'website_link'          => $request->website_link,
            'banner_image'          => $uploadedFiles['banner_image']['status'] == 1 ? $uploadedFiles['banner_image']['file_path'] : null,
            'thumbnail_image'       => $uploadedFiles['thumbnail_image']['status'] == 1 ? $uploadedFiles['thumbnail_image']['file_path'] : null,

            // ✅ Row One – Five
            'row_one_title'             => $request->row_one_title,
            'row_one_description'       => $request->row_one_description,
            'row_one_button_name'       => $request->row_one_button_name,
            'row_one_button_link'       => $request->row_one_button_link,

            'row_two_title'             => $request->row_two_title,
            'row_two_description'       => $request->row_two_description,

            'row_three_badge'           => $request->row_three_badge,
            'row_three_title'           => $request->row_three_title,
            'row_three_description'     => $request->row_three_description,
            'row_three_button_name'     => $request->row_three_button_name,
            'row_three_button_link'     => $request->row_three_button_link,

            'row_four_badge'            => $request->row_four_badge,
            'row_four_title'            => $request->row_four_title,
            'row_four_description'      => $request->row_four_description,
            'row_four_button_name'      => $request->row_four_button_name,
            'row_four_button_link'      => $request->row_four_button_link,

            'row_five_title'            => $request->row_five_title,
            'row_five_description'      => $request->row_five_description,
            'row_five_button_name'      => $request->row_five_button_name,
            'row_five_button_link'      => $request->row_five_button_link,

            'other_link'                => $request->other_link,

            // ✅ Payment, Status, Contact
            'status'              => $request->status,
            'event_type'          => $request->event_type,
            'payment_type'        => $request->payment_type,
            'ticket_price'        => $request->ticket_price,
            'currency'            => $request->currency,
            'location'            => $request->location,
            'contact'             => $request->contact,
            'event_status'        => $request->event_status,
            'added_by'            => auth('admin')->id(),
        ]);

        DB::commit();
        return redirect()->route('admin.training.index')->with('success', 'Training created successfully.');

    } catch (\Exception $e) {
        DB::rollback();
        Session::flash('error', 'An error occurred while creating the training: ' . $e->getMessage());
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
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
{
    DB::beginTransaction();

    try {
        $training = Training::findOrFail($id);

        // ✅ Validation
        $validator = Validator::make($request->all(), [
            'name'                => 'required|string|max:255',
            'slug'                => 'nullable|string|max:255|unique:trainings,slug,' . $training->id,
            'start_date'          => 'nullable|date',
            'start_time'          => 'nullable|date_format:H:i',
            'end_date'            => 'nullable|date',
            'end_time'            => 'nullable|date_format:H:i',
            'max_attendees'       => 'nullable|integer|min:0',
            'current_attendees'   => 'nullable|integer|min:0',
            'event_short_descp'   => 'nullable|string',
            'instructor'          => 'nullable|string|max:255',
            'registration_fee'    => 'nullable|string|max:255',
            'student_fee'         => 'nullable|numeric|min:0',
            'job_holder_fee'      => 'nullable|numeric|min:0',
            'whatsapp_link'       => 'nullable|url|max:255',
            'facebook_link'       => 'nullable|url|max:255',
            'linkedin_link'       => 'nullable|url|max:255',
            'registration_link'   => 'nullable|url|max:255',
            'training_mode'       => 'nullable|string|max:100',
            'organizer_text'      => 'nullable|string|max:255',
            'map_link'            => 'nullable|url|max:255',
            'website_link'        => 'nullable|url|max:255',

            // ✅ Row One – Five
            'row_one_title'             => 'nullable|string|max:255',
            'row_one_description'       => 'nullable|string',
            'row_one_button_name'       => 'nullable|string|max:255',
            'row_one_button_link'       => 'nullable|url|max:255',

            'row_two_title'             => 'nullable|string|max:255',
            'row_two_description'       => 'nullable|string',

            'row_three_badge'           => 'nullable|string|max:255',
            'row_three_title'           => 'nullable|string|max:255',
            'row_three_description'     => 'nullable|string',
            'row_three_button_name'     => 'nullable|string|max:255',
            'row_three_button_link'     => 'nullable|url|max:255',

            'row_four_badge'            => 'nullable|string|max:255',
            'row_four_title'            => 'nullable|string|max:255',
            'row_four_description'      => 'nullable|string',
            'row_four_button_name'      => 'nullable|string|max:255',
            'row_four_button_link'      => 'nullable|url|max:255',

            'row_five_title'            => 'nullable|string|max:255',
            'row_five_description'      => 'nullable|string',
            'row_five_button_name'      => 'nullable|string|max:255',
            'row_five_button_link'      => 'nullable|url|max:255',

            'other_link'          => 'nullable|url|max:255',

            // ✅ Status & Payment
            'status'              => 'nullable|in:canceled,ongoing,upcoming,completed,registration_open,registration_close',
            'event_type'          => 'nullable|in:workshop,seminar,concert,conference,webinar',
            'payment_type'        => 'nullable|in:free,paid',
            'ticket_price'        => 'nullable|numeric|min:0',
            'currency'            => 'nullable|string|max:50',

            // ✅ Location & Contact
            'location'            => 'nullable|string|max:255',
            'contact'             => 'nullable|string|max:255',
            'event_status'        => 'nullable|string|max:100',

            // ✅ File Uploads
            'banner_image'        => 'nullable|image|mimes:jpg,jpeg,png,webp|max:4096',
            'thumbnail_image'     => 'nullable|image|mimes:jpg,jpeg,png,webp|max:4096',
        ]);

        if ($validator->fails()) {
            foreach ($validator->messages()->all() as $message) {
                Session::flash('error', $message);
            }
            return redirect()->back()->withInput();
        }

        // ✅ Handle file uploads and delete old ones if replaced
        $files = [
            'banner_image'    => $request->file('banner_image'),
            'thumbnail_image' => $request->file('thumbnail_image'),
        ];

        $uploadedFiles = [];
        foreach ($files as $key => $file) {
            if (!empty($file)) {
                $filePath = 'training/' . $key;
                $uploadedFiles[$key] = customUpload($file, $filePath);
                if ($uploadedFiles[$key]['status'] === 0) {
                    return redirect()->back()->with('error', $uploadedFiles[$key]['error_message']);
                }

                // ✅ Delete old file
                if (!empty($training->$key) && file_exists(public_path($training->$key))) {
                    @unlink(public_path($training->$key));
                }
            } else {
                $uploadedFiles[$key] = ['status' => 0];
            }
        }

        // ✅ Update training
        $training->update([
            'name'                  => $request->name,
            'slug'                  => $request->slug ?: Str::slug($request->name),
            'start_date'            => $request->start_date,
            'start_time'            => $request->start_time,
            'end_date'              => $request->end_date,
            'end_time'              => $request->end_time,
            'max_attendees'         => $request->max_attendees,
            'current_attendees'     => $request->current_attendees,
            'event_short_descp'     => $request->event_short_descp,
            'instructor'            => $request->instructor,
            'registration_fee'      => $request->registration_fee,
            'student_fee'           => $request->student_fee,
            'job_holder_fee'        => $request->job_holder_fee,
            'whatsapp_link'         => $request->whatsapp_link,
            'facebook_link'         => $request->facebook_link,
            'linkedin_link'         => $request->linkedin_link,
            'registration_link'     => $request->registration_link,
            'training_mode'         => $request->training_mode,
            'organizer_text'        => $request->organizer_text,
            'map_link'              => $request->map_link,
            'website_link'          => $request->website_link,

            'banner_image'          => $uploadedFiles['banner_image']['status'] == 1 ? $uploadedFiles['banner_image']['file_path'] : $training->banner_image,
            'thumbnail_image'       => $uploadedFiles['thumbnail_image']['status'] == 1 ? $uploadedFiles['thumbnail_image']['file_path'] : $training->thumbnail_image,

            // ✅ Row One – Five
            'row_one_title'             => $request->row_one_title,
            'row_one_description'       => $request->row_one_description,
            'row_one_button_name'       => $request->row_one_button_name,
            'row_one_button_link'       => $request->row_one_button_link,

            'row_two_title'             => $request->row_two_title,
            'row_two_description'       => $request->row_two_description,

            'row_three_badge'           => $request->row_three_badge,
            'row_three_title'           => $request->row_three_title,
            'row_three_description'     => $request->row_three_description,
            'row_three_button_name'     => $request->row_three_button_name,
            'row_three_button_link'     => $request->row_three_button_link,

            'row_four_badge'            => $request->row_four_badge,
            'row_four_title'            => $request->row_four_title,
            'row_four_description'      => $request->row_four_description,
            'row_four_button_name'      => $request->row_four_button_name,
            'row_four_button_link'      => $request->row_four_button_link,

            'row_five_title'            => $request->row_five_title,
            'row_five_description'      => $request->row_five_description,
            'row_five_button_name'      => $request->row_five_button_name,
            'row_five_button_link'      => $request->row_five_button_link,

            'other_link'                => $request->other_link,

            // ✅ Payment, Status, Contact
            'status'              => $request->status,
            'event_type'          => $request->event_type,
            'payment_type'        => $request->payment_type,
            'ticket_price'        => $request->ticket_price,
            'currency'            => $request->currency,
            'location'            => $request->location,
            'contact'             => $request->contact,
            'event_status'        => $request->event_status,
            'updated_by'          => auth('admin')->id(),
        ]);

        DB::commit();
        return redirect()->route('admin.training.index')->with('success', 'Training updated successfully.');

    } catch (\Exception $e) {
        DB::rollback();
        Session::flash('error', 'An error occurred while updating the training: ' . $e->getMessage());
        return redirect()->back()->withInput();
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
