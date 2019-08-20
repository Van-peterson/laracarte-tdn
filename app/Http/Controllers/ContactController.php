<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactForm;
use App\Mail\ContactMessageCreated;
use App\Models\Message;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function create() {
        return view('contact.create');
    }

    public function store(ContactForm $request) {
        /* $this->validate($request, [
            'name' => 'required|min:3',
            'email' => 'required|email',
            'message' => 'required|min:10'
        ]); */

        /* $message = new Message;
        $message->name = $request->name;
        $message->email = $request->email;
        $message->message = $request->message;
        $message->save(); */

        $message = Message::create($request->only('name', 'email', 'message'));

        Mail::to(config('laracarte.admin_support_email'))
            ->send(new ContactMessageCreated($message));

        flashy('Nous vous répondrons dans les plus brefs délais!');
        // flashy()->success('You have been logged out.', 'http://your-awesome-link.com');

        return redirect()->route('root_path');
    }
}
