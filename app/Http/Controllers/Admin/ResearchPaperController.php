<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Models\ResearchPaper;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;

class ResearchPaperController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.pages.researchPaper.index', ['papers' => ResearchPaper::get()]);
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
        // Validate the incoming request data
        $validator = Validator::make($request->all(), [
            'name'           => 'required|string|max:255',
            'date'            => 'nullable|date',
            'author'          => 'nullable|string|max:255',
            'impact_factor'   => 'nullable|string|max:255',
            'journal_name'    => 'nullable|string|max:255',
            'citation'        => 'nullable|integer|min:0',
            'doi'             => 'nullable|string|max:255',
            'link'            => 'nullable|url|max:255',
            'status'          => 'required|in:active,inactive',
            'image'           => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'attachment'      => 'nullable|mimes:pdf|max:10240', // Max size of 10MB for PDF
            'url'             => 'nullable|url|max:255',
        ], [
            'name.required'            => 'The title field is required.',
            'name.string'              => 'The title must be a string.',
            'name.max'                 => 'The title may not be greater than :max characters.',
            'slug.string'               => 'The slug must be a string.',
            'slug.max'                  => 'The slug may not be greater than :max characters.',
            'date.date'                 => 'The date must be a valid date.',
            'author.string'             => 'The author must be a string.',
            'author.max'                => 'The author may not be greater than :max characters.',
            'impact_factor.string'      => 'The impact factor must be a string.',
            'impact_factor.max'         => 'The impact factor may not be greater than :max characters.',
            'journal_name.string'       => 'The journal name must be a string.',
            'journal_name.max'          => 'The journal name may not be greater than :max characters.',
            'citation.integer'          => 'The citation must be an integer.',
            'citation.min'              => 'The citation must be at least :min.',
            'doi.string'                => 'The DOI must be a string.',
            'doi.max'                   => 'The DOI may not be greater than :max characters.',
            'link.url'                  => 'The link must be a valid URL.',
            'link.max'                  => 'The link may not be greater than :max characters.',
            'status.required'           => 'The status field is required.',
            'status.in'                 => 'The status must be one of: active, inactive.',
            'image.image'               => 'The image must be an image file.',
            'image.mimes'               => 'The image must be a file of type: jpeg, png, jpg, gif, svg.',
            'image.max'                 => 'The image may not be greater than :max kilobytes.',
            'attachment.mimes'          => 'The attachment must be a PDF file.',
            'attachment.max'            => 'The attachment may not be greater than :max kilobytes.',
            'url.url'                   => 'The URL must be a valid URL.',
            'url.max'                   => 'The URL may not be greater than :max characters.',
        ]);

        // Check if validation fails
        if ($validator->fails()) {
            foreach ($validator->messages()->all() as $message) {
                Session::flash('error', $message);
            }
            return redirect()->back()->withInput()->with('error', $validator->messages()->all());
        }



        // Create the paper in the database
        ResearchPaper::create([
            'name'          => $request->name,
            'date'          => $request->date,
            'author'        => $request->author,
            'impact_factor' => $request->impact_factor,
            'journal_name'  => $request->journal_name,
            'citation'      => $request->citation,
            'doi'           => $request->doi,
            'link'          => $request->link,
            'status'        => $request->status,

        ]);
        Session::flash('success', 'Data has been saved successfully!');
        // Redirect back with success message
        return redirect()->route('admin.research-paper.index');
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
        $paper = ResearchPaper::findOrFail($id);
        $validator = Validator::make($request->all(), [
            'name'           => 'required|string|max:255',
            'date'            => 'nullable|date',
            'author'          => 'nullable|string|max:255',
            'impact_factor'   => 'nullable|string|max:255',
            'journal_name'    => 'nullable|string|max:255',
            'citation'        => 'nullable|integer|min:0',
            'doi'             => 'nullable|string|max:255',
            'link'            => 'nullable|url|max:255',
            'status'          => 'required|in:active,inactive',
            'image'           => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'attachment'      => 'nullable|mimes:pdf|max:10240', // Max size of 10MB for PDF
            'url'             => 'nullable|url|max:255',
        ], [
            'name.required'            => 'The title field is required.',
            'name.string'              => 'The title must be a string.',
            'name.max'                 => 'The title may not be greater than :max characters.',
            'slug.string'               => 'The slug must be a string.',
            'slug.max'                  => 'The slug may not be greater than :max characters.',
            'date.date'                 => 'The date must be a valid date.',
            'author.string'             => 'The author must be a string.',
            'author.max'                => 'The author may not be greater than :max characters.',
            'impact_factor.string'      => 'The impact factor must be a string.',
            'impact_factor.max'         => 'The impact factor may not be greater than :max characters.',
            'journal_name.string'       => 'The journal name must be a string.',
            'journal_name.max'          => 'The journal name may not be greater than :max characters.',
            'citation.integer'          => 'The citation must be an integer.',
            'citation.min'              => 'The citation must be at least :min.',
            'doi.string'                => 'The DOI must be a string.',
            'doi.max'                   => 'The DOI may not be greater than :max characters.',
            'link.url'                  => 'The link must be a valid URL.',
            'link.max'                  => 'The link may not be greater than :max characters.',
            'status.required'           => 'The status field is required.',
            'status.in'                 => 'The status must be one of: active, inactive.',
            'image.image'               => 'The image must be an image file.',
            'image.mimes'               => 'The image must be a file of type: jpeg, png, jpg, gif, svg.',
            'image.max'                 => 'The image may not be greater than :max kilobytes.',
            'attachment.mimes'          => 'The attachment must be a PDF file.',
            'attachment.max'            => 'The attachment may not be greater than :max kilobytes.',
            'url.url'                   => 'The URL must be a valid URL.',
            'url.max'                   => 'The URL may not be greater than :max characters.',
        ]);

        // Check if validation fails
        if ($validator->fails()) {
            foreach ($validator->messages()->all() as $message) {
                Session::flash('error', $message);
            }
            return redirect()->back()->withInput();
        }



        // Create the paper in the database
        $paper->update([
            'name'          => $request->name,
            'date'          => $request->date,
            'author'        => $request->author,
            'impact_factor' => $request->impact_factor,
            'journal_name'  => $request->journal_name,
            'citation'      => $request->citation,
            'doi'           => $request->doi,
            'link'          => $request->link,
            'status'        => $request->status,

        ]);
        Session::flash('success', 'Data has been saved successfully!');
        // Redirect back with success message
        return redirect()->route('admin.research-paper.index')->with('success', 'Data has been saved successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $paper = ResearchPaper::findOrFail($id);
        $paper->delete();
    }
}
