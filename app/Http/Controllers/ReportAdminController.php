<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Report;
use App\Models\BullyType;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class ReportAdminController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public $title = 'SNB | Admin';
    public function index(Request $request)
    {
        $reports = Report::query();

        $reports->when($request->status, function ($query) use ($request) {
            return $query->where('status', $request->status);
        });

        return view('admin.report.index', [
            'title' => $this->title,
            'reports' => $reports->get(),
            'admins' => User::where('id', 2)->get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

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
        return view('admin.report.show', [
            'report' => $report,
            'title' => $this->title
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Report $report)
    {
        return view('admin.report.edit', [
            'title' => $this->title,
            'bully_types' => BullyType::all(),
            'report' => $report,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Report $report)
    {
        $validatedData = $request->validate([
            // 'title' => ['nullable', 'max:100'],
            // 'bully_desc' => ['nullable'],
            // 'bully_type_id' => ['nullable', 'max:1'],
            // 'isAnonym' => ['nullable'],
            // 'suspect_total' => ['nullable'],
            // 'victim_total' => ['nullable'],
            // 'victim_name' => ['nullable'],
            // 'suspect_name' => ['nullable'],
            // 'date' => ['nullable'],
            // 'place' => ['nullable'],
            // 'incident_total' => ['nullable'],
            // 'evidence_img' => ['image', 'file'],
            'status' => ['required'],
            // 'user_id' => ['nullable'],
        ]);
        $report = Report::where('id', $report->id)->update($validatedData);
        return redirect('/dashboard/admin/reports/')->with('successEdit', 'Laporan berhasil diperbarui!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Report $report)
    {
        //
    }
}