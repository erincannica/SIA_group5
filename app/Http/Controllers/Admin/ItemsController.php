<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Item;

class ItemsController extends Controller
{
   public function default()
    {
        return view('admin.items.default',[
            'pagetitle' => 'IGP Registration',
            'title' => 'Item | Admin'
        ]);
    }
    public function create()
    {
        return view('admin.items.create',[
            'pagetitle' => 'Add Items',
            'title' => 'Item | Admin'
        ]);
    }
    public function save(Request $request)
    {
        $saveItems = new Item;
        $saveItems->product = $request->product;
        $saveItems->size = $request->size;
        $saveItems->price = $request->price;

        if ($saveItems->save()) {
            return redirect()->back();
        }
    }
    public function searchtitle(Request $request)
    {
        $item = Item::where('title', $request->title)->first();
        return json_encode($item); 
    }
}

