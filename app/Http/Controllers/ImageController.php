<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ImageController extends Controller
{
    public function storeImage(Request $request){
        dd($request);
        if ($request->hasFile('file')) {
            $image = $request->file('file');
            $fileName = time() . '_' . $image->getClientOriginalName();
            $path = $image->storeAs('public/uploads', $fileName);
            $url = Storage::url($path);

            return response()->json(['link' => $url]);
        }

        return response()->json(['error' => 'Erro ao fazer upload'], 400);
    }
}
