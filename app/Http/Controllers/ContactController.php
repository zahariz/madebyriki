<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ContactController extends Controller
{
    public function store(Request $request)
    {

        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'email' => 'required|email',
            'project' => 'required',
            'message' => 'required',
            'g-recaptcha-response' => 'recaptcha',
        ]);
        if($validator->fails())
        {
            toastr()->error('Field wajib di isi');
            return redirect('/');
        }

        Contact::create([
            'name' => $request->name,
            'email' => $request->email,
            'project' => $request->project,
            'message' => $request->message,
        ]);
        toastr()->success('Pesan berhasil dikirim!');
        return redirect('/');
    }
}
