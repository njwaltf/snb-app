<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\Models\Report;
use Illuminate\Http\Request;

class EvidenceAdminController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    protected $title = 'SNB | Admin';
    public function index()
    {
        return view('admin.evidence.index',[
            'title' => $this->title,
            'evidences' => Report::paginate(8)
        ]);
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
    public function show(Report $report)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Report $report)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Report $report)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Report $report)
    {
        //
    }
}
