<?php

namespace  App\Http\Controllers;

use App\Models\Outbreak;
use Illuminate\Http\Request;

class OutbreakController extends Controller 
{
    /**
     * Display a listing of the Outbreak.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        // $this->authorize('manage_Outbreak');

        $outbreakQuery = Outbreak::query();
        $outbreakQuery->where('name', 'like', '%'.request('q').'%');
        $outbreaks = $outbreakQuery->paginate(25);

        return view('outbreaks.index', compact('outbreaks'));
    }

    /**
     * Show the form for creating a new Outbreak.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        $this->authorize('create', new Outbreak);

        return view('outbreaks.create');
    }

    /**
     * Store a newly created Outbreak in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Routing\Redirector
     */
    public function store(Request $request)
    {
        $this->authorize('create', new Outbreak);

        $newOutbreak = $request->validate([
            'name'      => 'required|max:60',
            'address'   => 'nullable|max:255',
            'latitude'  => 'nullable|required_with:longitude|max:15',
            'longitude' => 'nullable|required_with:latitude|max:15',
        ]);
        $newOutbreak['creator_id'] = auth()->id();

        $outbreak = Outbreak::create($newOutbreak);

        return redirect()->route('outbreaks.show', $outbreak);
    }

    /**
     * Display the specified Outbreak.
     *
     * @param  \App\Outbreak  $outbreak
     * @return \Illuminate\View\View
     */
    public function show(Outbreak $outbreak)
    {
        return view('outbreaks.show', compact('outbreak'));
    }

    /**
     * Show the form for editing the specified Outbreak.
     *
     * @param  \App\Outbreak  $outbreak
     * @return \Illuminate\View\View
     */
    public function edit(Outbreak $outbreak)
    {
        $this->authorize('update', $outbreak);

        return view('outbreaks.edit', compact('outbreak'));
    }

    /**
     * Update the specified Outbreak in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Outbreak  $outbreak
     * @return \Illuminate\Routing\Redirector
     */
    public function update(Request $request, Outbreak $outbreak)
    {
        $this->authorize('update', $outbreak);

        $outbreakData = $request->validate([
            'name'      => 'required|max:60',
            'address'   => 'nullable|max:255',
            'latitude'  => 'nullable|required_with:longitude|max:15',
            'longitude' => 'nullable|required_with:latitude|max:15',
        ]);
        $outbreak->update($outbreakData);

        return redirect()->route('outbreaks.show', $outbreak);
    }

    /**
     * Remove the specified Outbreak from storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Outbreak  $outbreak
     * @return \Illuminate\Routing\Redirector
     */
    public function destroy(Request $request, Outbreak $outbreak)
    {
        $this->authorize('delete', $outbreak);

        $request->validate(['outbreak_id' => 'required']);

        if ($request->get('outbreak_id') == $outbreak->id && $outbreak->delete()) {
            return redirect()->route('outbreaks.index');
        }

        return back();
    }
}