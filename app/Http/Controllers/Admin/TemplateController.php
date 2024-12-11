<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Template;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;


class TemplateController extends Controller
{

//    public function __construct() {
//        $this->middleware('permission:templateSettings-list', ['only' => ['index']]);
//        $this->middleware('permission:templateSettings-create', ['only' => ['store']]);
//        $this->middleware('permission:templateSettings-edit', ['only' => ['edit', 'update']]);
//        $this->middleware('permission:templateSettings-delete', ['only' => ['destroy']]);
//    }

    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $templates = Template::orderBy('created_at', 'desc')->get();
        return view('admin.template.index', compact('templates'));
    }


    public function create(){
      $template = new Template();
        return view('admin.template.form', compact('template'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse
    {
        try {
            $data = $request->validate([
                'subject' => 'required',
                'name' => 'required',
                'body' => 'required',
            ]);

            Template::updateOrCreate(
                ['id' => $request->template_id],  // Search by ID if provided
                $data  // Fields to update or create with
            );

        } catch (\Throwable $th) {
            return redirect()->route('templates.index')
                ->with('warning', 'Server Error.');
        }
        return redirect()->route('templates.index')
            ->with('success', 'Data delete  successfully.');
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
    public function edit(string $id): RedirectResponse|View
    {
        try {
            $template = Template::find($id);
        } catch (\Throwable $th) {
            return redirect()->route('templates.index')
                ->with('warning', 'Date not find.');
        }
        return view('admin.template.form', compact('template'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id): RedirectResponse
    {
        try {
            $template = Template::find($id);
            $template->destory();
        } catch (\Throwable $th) {

            return redirect()->route('templates.index')
                ->with('warning', 'Data not delete  successfully.');


        }
        return redirect()->route('templates.index')
            ->with('success', 'Data delete  successfully.');
    }
}

