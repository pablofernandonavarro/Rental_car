<?php

namespace App\Http\Controllers;

use App\Additional;
use App\AdditionalText;
use App\Lang;
use App\Http\Requests\AdditionalsRequest;
use Illuminate\Http\Request;


class AdditionalController extends Controller
{
    public function index()
    {

        return view('admin.additionals.index', ['adds'=>AdditionalText::orderby('additional_name', 'ASC')->paginate('6')]);
    }

    public function show(AdditionalText $additional)
    {
        return view('admin.additionals.show', ['adds'=>$additional]);
    }

    public function edit(AdditionalText $additional)
    {
        return view('admin.additionals.edit', [
            'adds'=>$additional,
            'langs'=>Lang::all()
        ]);
    }

    public function update(Request $request, $id)
    {
        $text = AdditionalText::find($id);
        $image = "";
        
        if ($request->hasFile('additional_image')) {
            $image = $request->file('additional_image');
            $name = $request->input('additional_name');
            $extension = $request->file('additional_image')->extension();
            $route = '/public_images/additionals'.'/'.$name.'.'.$extension;
            $image = $image->storeAs($route ,$name);
        }

        $text->additional_name = $request->input('additional_name');
        $text->additional_description = $request->input('additional_description');
        $text->lang_id = $request->input('lang_id');
        $text->additional->additional_image = $image;
        $text->update();

        return redirect('/additional');
    }

    public function create()
    {
        return view('admin.additionals.create');
    }

    public function store(AdditionalsRequest $request)
    {
        $imageName = "";
        if ($request->hasFile('additional_image')) {
            $extension = $request->file('additional_image')->extension();
            $request->file('additional_image')->storeAs('public/public_images/additionals/',$request->input('additional_name_es').'.'.$extension);
            $imageName = '/public_images/additionals/'.$request->input('additional_name').'.'.$extension;
        }

        $add = new Additional();
        $add->additional_image = $imageName;
        $add->save();
        $lang = Lang::all();

        if ($request->input('additional_name_es')) {
            $textes = new AdditionalText();
            $textes->additional_id = $add->id;
            $textes->additional_name = $request->input('additional_name_es');
            $textes->additional_description = $request->input('additional_description_es');
            $textes->lang_id = $lang[0]->id;
            $textes->save();
        }
        if ($request->input('additional_name_en')) {
            $texten = new AdditionalText();
            $texten->additional_id = $add->id;
            $texten->additional_name = $request->input('additional_name_en');
            $texten->additional_description = $request->input('additional_description_en');
            $textes->lang_id = $lang[1]->id;
            $texten->save();
        }
        if ($request->input('additional_name_pt')) {
            $textpt = new AdditionalText();
            $textpt->additional_id = $add->id;
            $textpt->additional_name = $request->input('additional_name_pt');
            $textpt->additional_description = $request->input('additional_description_pt');
            $textes->lang_id = $lang[2]->id;
            $textpt->save();
        }

        return redirect('/additional');
    }

    public function destroy($id)
    {
        $additional = AdditionalText::find($id);
        $additional->delete();
        return redirect('/additional');
    }
}