<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ExhibitionRequest;
use App\Models\Exhibition;
use App\Models\Category;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class ItemController extends Controller
{
    public function show()
    {
        $categories = Category::all();
        return view('sell_item', compact('categories'));
    }

    public function sellItem(ExhibitionRequest $request)
    {

        $validatedData = $request->validated();

        $path = null;
        if ($request->hasFile('image')) {
            $path = $request->file('image')->store('items', 'public');
        }

        $exhibition = Exhibition::create([
            'user_id' => Auth::id(),
            'name' => $validatedData['name'],
            'condition' => $validatedData['condition'],
            'brand' => $validatedData['brand'] ?? null,
            'price' => $validatedData['price'],
            'description' => $validatedData['description'],
            'image' => $path,
        ]);

        if ($request->has('category_ids')) {
            $exhibition->categories()->attach($request->category_ids);
        }

        return redirect()->route('mypage')->with('success', '商品を出品しました！');
    }
}
