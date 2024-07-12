<?php

namespace App\Http\Controllers;

use App\Models\Partner;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;

class MitraController extends Controller
{
    public function update_info_pt(Request $request)
    {
        try {
        $partner = Partner::where('user_id',Auth::user()->id)->first();
        $partner->partnerName = $request->input('partnerName');
        $partner->save();
        return Redirect::route('profile.edit');
        } catch (\Throwable $e) {
            // dd($e);
            // return response()->json(['error' => $e], 500);
            return Redirect::route('profile.edit');
        }
    }
}
