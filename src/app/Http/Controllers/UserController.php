<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\ProfileRequest;
use App\Models\Profile;
use App\Models\Exhibition;


class UserController extends Controller
{
    public function showProfile()
    {
        $user = Auth::user();
        $profile = $user->profile ?? new Profile();

        return view('profile', compact('user', 'profile'));
    }

    public function editProfile(ProfileRequest $request)
    {
        $user = Auth::user();
        $profile = $user->profile ?? new Profile(['user_id' => $user->id]);

        if ($request->hasFile('image')) {
            $path = $request->file('image')->store('profile_images', 'public');
            $profile->image = $path;
        }

        $profile->fill($request->only(['postal_code', 'address', 'building']));
        $profile->save();

        $user->update(['name' => $request->name]);

        return redirect()->route('index')->with('success', 'プロフィールを更新しました！');
    }

    public function index(Request $request)
    {
        $user = Auth::user();

        $sellItems = Exhibition::where('user_id', $user->id)->latest()->get();

        $tab = $request->query('tab', 'sell');

        return view('mypage', compact('user', 'sellItems', 'tab', 'request'));
    }
}