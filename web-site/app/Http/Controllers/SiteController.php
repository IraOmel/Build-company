<?php

namespace App\Http\Controllers;

use App\Models\Project;
use App\Models\Contact;
use App\Rules\FullNameRule;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class SiteController extends Controller
{
    public function main_page()
    {
        return view('main');
    }

    public function projects_page()
    {
        return view('projects');
    }

    public function get_message()
    {
        return view('cooperation');
    }

    public function send_info(Request $request)
    {
        $request->validate([
            'name' => ['required', new FullNameRule()],
            'email' => 'required|email',
            'text' => 'required|max:250|min:5',
        ]);
        $contact = Contact::firstOrCreate(
            ['name' => $request->input('name'),
                'email' => $request->input('email'),
                'message' => $request->input('text')]
        );

        $name = $contact['name'];
        $letter = $contact['message'];
        $user_email = $contact['email'];

        Mail::raw("Користувач $name надіслав(-ла) повідомлення:\n'$letter'.\n\nПошта для зв'язку: $user_email ",
            function ($message) {
                $message->to('buildcompany0@gmail.com', 'To company')->subject('Замовлення проекту');
                $message->from('buildcompany0@gmail.com', 'From site');
            });

        return view('cooperation', ['user' => $contact]);
    }

    public function get_project($name)
    {
        $name_project = Project::where('name', $name)->first();
        return view('one_project', ['obj' => $name_project]);
    }
}
