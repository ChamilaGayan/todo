<?php

namespace App\Http\Controllers;

use App\Models\Item;
use Illuminate\Http\Request;

class ItemController extends Controller
{
    public function index()
    {
        return view('form');
    }


    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|min:2|max:1000',
            'quantity' => 'required|max:1000',
            'price' => 'required|max:1000',
            'image' => 'required'
            ],[
            'name.required' => ' The name field is required.',
            'quantity.required' => ' The quantity field is required.',
            'price.required' => ' The price field is required.',
            'image.required' => ' The image is required.'
            ]);

            if($request->hasFile('image')){
                $filename = $request->image->getClientOriginalName();
                $request->image->storeAs('images',$filename,'public');

                Item::create([
                    'user_id' =>auth()->user()->id,
                    'name' => $request->name,
                    'quantity' => $request->quantity,
                    'price' => $request->price,
                    'image' => $filename
                ]);
            }

        return redirect()->back()->with('status','Item Added Successfully');
    }

    public function viewitem()
    {
        $item = Item::get();
        return view('viewitem', ['items'=> $item]);
    }

    public function edit($item_id)
    {
        $item = Item::find($item_id);
        return view('updateitem', compact('item'));
    }

    public function delete($item_id)
    {
        $item = Item::find($item_id);
        $item->delete();
        // return view('viewitem', ['items'=> $item])->with('status','Task Delete Successfully');
    }

    public function update(Request $request, $item_id)
    {
        $item = Item::find($item_id);
        $item->name = $request->input('name');
        $item->price = $request->input('price');
        $item->quantity = $request->input('quantity');
        $item->update();
        return redirect()->back()->with('status','Item Update Successfully');
    }

}
