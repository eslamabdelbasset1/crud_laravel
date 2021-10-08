<?php

namespace App\Http\Controllers;
use App\Models\cat;
use Illuminate\Http\Request;

class CatController extends Controller
{
    public function getCats()
    {
        $cats = cat::all();
        return view('categories/cats',
            ['cats'=> $cats]);
    }
    public function show($id)
    {
        $cats = cat::findOrFail($id);
        return view('categories.show',[
            'cats' => $cats
        ]);
    }
    public function create()
    {
        return view('categories.create');
    }
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required |string | max:100',
            'desc' => 'required |string'
        ]);
        cat::create([
            'name' => $request->name,
            'desc' => $request->desc,
        ]);
        return redirect(url('/categories'));
    }

    public function edit($id)
    {
        $cats = cat::findOrFail($id);
        return view('categories.edit', [
            'cats'=> $cats
        ]);
    }

    public function update($id, Request $request)
    {

        $request->validate([
            'name' => 'required |string | max:100',
            'desc' => 'required |string'
        ]);
        cat::findOrFail($id)->update([
            'name' => $request->name,
            'desc' => $request->desc,
        ]);
        return redirect(url('/categories'));
    }
    public function destroy($id)
    {
        $cats = cat::findOrFail($id)->delete;
        return redirect(url('/categories'));
    }
}
