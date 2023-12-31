<?php

namespace App\Http\Controllers;

use App\Models\Notification;
use App\Models\Report;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    // public $notifications = Notification::where('user_id', auth()->user()->id)->get();

    public function index()
    {
        return view('dashboard-user.dashboard', [
            'title' => 'SNB | Dashboard',
            'notifications' => Notification::where('user_id', auth()->user()->id)->get(),
            'reports' => Report::where('user_id', auth()->user()->id)->latest()->skip(0)->take(2)->latest()->get(),
            'evidences' => Report::where('user_id', auth()->user()->id)->latest()->skip(0)->take(4)->latest()->get()
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