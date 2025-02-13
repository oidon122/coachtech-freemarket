<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ExhibitionRequest;
use App\Models\Exhibition;
use App\Models\Category;
use Illuminate\Support\Facades\Auth;

class ItemController extends Controller
{
    public function show()
    {
        $categories = Category::all();
        return view('sell_item', compact('categories'));
    }

    public function sell(ExhibitionRequest $request)
    {
        $data = $request->validated();
        $data['user_id'] = auth()->id();

        if ($request->hasFile('image')) {
            $data['image'] = $request->file('image')->store('items', 'public');
        }

        Exhibition::create($data);

        return redirect()->route('item.index')->with('success', '商品を出品しました！');
    }
}
