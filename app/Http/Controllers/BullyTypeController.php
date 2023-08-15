<?php

namespace App\Http\Controllers;

use App\Models\BullyType;
use App\Models\Admin;
use App\Http\Requests\StoreBullyTypeRequest;
use Illuminate\Http\Request;
use App\Http\Requests\UpdateBullyTypeRequest;

class BullyTypeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public $title = 'SNB | Admin';
    public function index(Request $request)
    {
        return view('admin.bullyType.index', [
            'title' => $this->title,
            'bullyTypes' => BullyType::all(),
            'admins' => Admin::where('id', 2)->get(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.bullyType.create',[
            'title' => $this->title
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreBullyTypeRequest $request)
    {
        $validatedData = $request->validate([
            'status' => ['required'],
            'name' => ['required'],
            'desc' => ['required'],
            'image' => ['image','file','required']
        ]);

        if ($request->file('image')) {
            $validatedData['image'] = $request->file('image')->store('bully-types');
        }

        BullyType::create($validatedData);
        return redirect('dashboard/admin/bully-types')->with('success', 'Jenis berhasil ditambahkan!');
    }

    /**
     * Display the specified resource.
     */
    public function show(BullyType $bullyType)
    {
        return view('admin.bullyType.show',[
            'title' => $this->title,
            'bullyType' => $bullyType
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(BullyType $bullyType)
    {
        return view('admin.bullyType.edit',[
            'title' => $this->title,
            'bullyType' => $bullyType
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateBullyTypeRequest $request, BullyType $bullyType)
    {
        $validatedData = $request->validate([
            'name' => ['required'],
            'desc' => ['required'],
            'status' => ['required'],
            'image' => ['image','file']
        ]);
        if ($request->file('image')) {
            $validatedData['image'] = $request->file('image')->store('types');
        }
        $bullyType = BullyType::where('id', $bullyType->id)->update($validatedData);
        return redirect('/dashboard/admin/bully-types/')->with('successEdit', "Jenis $request->name berhasil diperbarui!");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(BullyType $bullyType)
    {
        BullyType::destroy($bullyType->id);
        return redirect('/dashboard/admin/bully-types')->with('successDelete', 'Jenis berhasil dihapus!');
    }
}
