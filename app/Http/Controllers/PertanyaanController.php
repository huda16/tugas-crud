<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ItemModel;

class PertanyaanController extends Controller
{
    public function create()
    {
        return view('item.form');
    }

    public function store(Request $request)
    {
        // dd($request->all());
        $new_item = ItemModel::save($request->all());
        return redirect('/pertanyaan');
    }

    public function index()
    {
        $items = ItemModel::get_all();
        // dd($items);
        return view('item.index', compact('items'));
    }

    public function show($id)
    {
        $item = ItemModel::find_by_id($id);
        return view('item.show', compact('item'));
    }

    public function edit($id)
    {
        $item = ItemModel::find_by_id($id);
        return view('item.edit', compact('item'));
    }

    public function update($id, Request $request)
    {
        $item = ItemModel::update($id, $request->all());
        return redirect('/pertanyaan');
    }

    public function destroy($id)
    {
        $deleted = ItemModel::destroy($id);
        return redirect('/pertanyaan');
    }
}
