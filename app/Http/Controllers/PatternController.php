<?php

namespace App\Http\Controllers;

use App\Pattern;
use App\Brand;
use App\Http\Requests\PatternsRequest;

class PatternController extends Controller
{
    public function index()
    {
        return view('admin.patterns.index',
        [
            'patterns'=> Pattern::orderby('brand_id', 'ASC')->paginate('12')
        ]);
    }

    public function show(Pattern $pattern)
    {
        return view('admin.patterns.show', ['patterns'=> $pattern]);
    }

    public function create()
    {
        return view('admin.patterns.create', ['brands'=> Brand::all()]);
    }

    public function store(PatternsRequest $request)
    {
        $patterns= new Pattern($request->all());
        $patterns->save();
        return redirect('/pattern');
    }

    public function edit(Pattern $pattern,Brand $brand)
    {   
        return view('admin.patterns.edit', ['patterns'=>$pattern], ['brands'=> Brand::all()]);
    }

    public function update(PatternsRequest $request, Pattern $pattern)
    {
        $pattern->update($request->all());
        return redirect('/pattern');
    }

    public function destroy(Pattern $pattern)
    {   

        $pattern->delete();
        return redirect('/pattern');


        // $relacion = isset($pattern->brand_id);
        // //  $a = isset($relacion);
        // if ($relacion === true){
        //     return redirect('/pattern')->with('msj','NO podemos borrar este registro existen datos asociados a el mismo');
        // } else{
        //     $pattern->delete();
        //     return redirect('/pattern');
        // }   
    }
}
