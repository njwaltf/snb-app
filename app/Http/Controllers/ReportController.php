<?php

namespace App\Http\Controllers;

use App\Models\Report;
use App\Models\BullyType;
use Illuminate\Routing\Controller;
use App\Http\Requests\StoreReportRequest;
use App\Http\Requests\UpdateReportRequest;
use App\Models\Notification;
use Illuminate\Http\Request;

class ReportController extends Controller
{
    public $title = 'SNB | Report';
    // public $notifications = Notification::where('user_id', auth()->user()->id)->get();
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        // $reports = Report::query();

        // $reports->when($request->status, function ($query) use ($request) {
        //     return $query->where('status', $request->status)
        //         ->where('user_id', auth()->user()->id)->first();
        // });
        return view('dashboard-user.report.index', [
            'title' => $this->title,
            'reports' => Report::where('user_id', auth()->user()->id)->latest()->get(),
            'notifications' => Notification::where('user_id', auth()->user()->id)->get()
        ]);
        // Report::where('user_id', auth()->user()->id)->latest()->get()
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard-user.report.create', [
            'title' => $this->title,
            'bully_types' => BullyType::all(),
            'notifications' => Notification::where('user_id', auth()->user()->id)->get()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreReportRequest $request)
    {
        $validatedData = $request->validate([
            'title' => ['required', 'max:100'],
            'bully_desc' => ['required'],
            'bully_type_id' => ['required', 'max:1'],
            'isAnonym' => ['required'],
            'suspect_total' => ['required'],
            'victim_total' => ['required'],
            'victim_name' => ['required'],
            'suspect_name' => ['required'],
            'date' => ['required'],
            'place' => ['required'],
            'incident_total' => ['required'],
            'evidence_img' => ['nullable', 'image', 'file'],
            'status' => ['required'],
            'user_id' => ['required']
        ]);

        if ($request->file('evidence_img')) {
            $validatedData['evidence_img'] = $request->file('evidence_img')->store('evidences');
        }

        Report::create($validatedData);
        return redirect('dashboard/reports')->with('success', 'Laporan berhasil terkirim!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Report $report)
    {
        return view('dashboard-user.report.show', [
            'report' => $report,
            'title' => $this->title,
            'notifications' => Notification::where('user_id', auth()->user()->id)->get()
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Report $report)
    {
        return view('dashboard-user.report.edit', [
            'title' => $this->title,
            'bully_types' => BullyType::all(),
            'report' => $report,
            'notifications' => Notification::where('user_id', auth()->user()->id)->get()
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateReportRequest $request, Report $report)
    {
        $validatedData = $request->validate([
            'title' => ['required', 'max:100'],
            'bully_desc' => ['required'],
            'bully_type_id' => ['required', 'max:1'],
            'isAnonym' => ['required'],
            'suspect_total' => ['required'],
            'victim_total' => ['required'],
            'victim_name' => ['required'],
            'suspect_name' => ['required'],
            'date' => ['required'],
            'place' => ['required'],
            'incident_total' => ['required'],
            'evidence_img' => ['image', 'file'],
            'status' => ['required'],
            'user_id' => ['required']
        ]);
        if ($request->file('evidence_img')) {
            $validatedData['evidence_img'] = $request->file('evidence_img')->store('evidences');
        }
        $report = Report::where('id', $report->id)->update($validatedData);
        return redirect('/dashboard/reports/')->with('successEdit', 'Laporan kamu berhasil diperbarui!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Report $report)
    {
        Report::destroy($report->id);
        return redirect('/dashboard/reports')->with('successDelete', 'Report berhasil dibatalkan!');
    }
}