<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Boolfolio;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use SebastianBergmann\CodeCoverage\Report\Xml\Project;
use Symfony\Contracts\Service\Attribute\Required;

class BoolfolioController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $boolfolios = Boolfolio::orderByDesc('id')->paginate();

        return view('admin.boolfolios.index', compact('boolfolios'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.boolfolios.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //dd($request->all());
        $val_data = $request->validate([
            "nome" => 'required',
            'descrizione' => 'nullable',
            'cover_image' => 'nullable | image',
        ]);

        if ($request->has('cover_image')) {
            //save the image
            $image_path = Storage::put('uploads', $request->cover_image);
            $val_data['cover_image'] = $image_path;
            //dd($image_path, $val_data);
        }
        //dd($val_data);

        Boolfolio::create($val_data);

        return to_route('admin.boolfolios.index')->with('message', 'progetto creato');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $boolfolio = Boolfolio::findOrFail($id);
        return view('admin.boolfolios.show', compact('boolfolio'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(boolfolio $boolfolio)
    {
        return view('admin.boolfolios.edit', compact('boolfolio'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, boolfolio $boolfolio)
    {

        //dd($request->all());

        $val_data = $request->validate([
            "nome" => 'required',
            'descrizione' => 'nullable',
            'cover_image' => 'nullable | image',
        ]);

        if ($request->has('cover_image')) {
            //save the image
            $image_path = Storage::put('uploads', $request->cover_image);
            if ($boolfolio->cover_image && !Str::startsWith($boolfolio->cover_image, 'http')) {
                //se non null o non inizia con http viene cancellata
                Storage::delete($boolfolio->cover_image);
            }
            $val_data['cover_image'] = $image_path;
        }

        $boolfolio::create($val_data);
        //dd($val_data);
        return to_route('admin.boolfolios.index', $boolfolio)->with('message', 'progetto modificato');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(boolfolio $boolfolio)
    {

        if ($boolfolio->cover_image && !Str::startsWith($boolfolio->cover_image, 'http')) {
            //se non null o non inizia con http viene cancellata
            Storage::delete($boolfolio->cover_image);
        }
        $boolfolio->delete();

        return to_route('admin.boolfolios.index', $boolfolio)->with('message', 'progetto eliminato');
    }
}
