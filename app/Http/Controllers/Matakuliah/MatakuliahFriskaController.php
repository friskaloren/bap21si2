<?php

namespace App\Http\Controllers\Matakuliah;

use App\Http\Controllers\Controller;
use App\Http\Requests;

use App\Models\MatakuliahFriska;
use Illuminate\Http\Request;

class MatakuliahFriskaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function index(Request $request)
    {
        $keyword = $request->get('search');
        $perPage = 25;

        if (!empty($keyword)) {
            $matakuliahfriska = MatakuliahFriska::where('kodeMataKuliah', 'LIKE', "%$keyword%")
                ->orWhere('namaMataKuliah', 'LIKE', "%$keyword%")
                ->orWhere('sks', 'LIKE', "%$keyword%")
                ->latest()->paginate($perPage);
        } else {
            $matakuliahfriska = MatakuliahFriska::latest()->paginate($perPage);
        }

        return view('matakuliah.matakuliah-friska.index', compact('matakuliahfriska'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('matakuliah.matakuliah-friska.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function store(Request $request)
    {
        
        $requestData = $request->all();
        
        MatakuliahFriska::create($requestData);

        return redirect('matakuliah/matakuliah-friska')->with('flash_message', 'MatakuliahFriska added!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     *
     * @return \Illuminate\View\View
     */
    public function show($id)
    {
        $matakuliahfriska = MatakuliahFriska::findOrFail($id);

        return view('matakuliah.matakuliah-friska.show', compact('matakuliahfriska'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     *
     * @return \Illuminate\View\View
     */
    public function edit($id)
    {
        $matakuliahfriska = MatakuliahFriska::findOrFail($id);

        return view('matakuliah.matakuliah-friska.edit', compact('matakuliahfriska'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param  int  $id
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function update(Request $request, $id)
    {
        
        $requestData = $request->all();
        
        $matakuliahfriska = MatakuliahFriska::findOrFail($id);
        $matakuliahfriska->update($requestData);

        return redirect('matakuliah/matakuliah-friska')->with('flash_message', 'MatakuliahFriska updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function destroy($id)
    {
        MatakuliahFriska::destroy($id);

        return redirect('matakuliah/matakuliah-friska')->with('flash_message', 'MatakuliahFriska deleted!');
    }
}
