<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Models\Note;

class NotesController extends Controller
{
    public function index()
    {

        return view('notes.index');
    }

    public function store(Request $request)
    {
        $input = $request->json()->all();

        $validator = Validator::make($input, [
            'note' => 'required|min:100',
        ]);

        if ($validator->fails()) {
            return response()->json(['errors'=>$validator->errors()->all()]);
        }

        $appoint = Note::updateOrCreate($input);

//        if ($appoint) {
//
//            $client = Client::where('phone', $input['client_phone'])->get();
//            if (!count($client) > 0 ) {
//                $client = new Client();
//                $client->name = $input['client_name'];
//                $client->phone = $input['client_phone'];
//                $client->save();
//            }
//
//            return response()->json($appoint);
//        }

    }

}
