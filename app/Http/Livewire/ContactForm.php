<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Mail;

class ContactForm extends Component
{
    public $name;
    public $email;
    public $comment;
    public $success;
    protected $rules = [
        'name' => 'required',
        'email' => 'required|email',
        'comment' => 'required|min:5',
    ];
    public function render()
    {
        return view('livewire.contact-form');
    }

    public function contactFormSubmit()
    {
        // dd('aaaaaa');
        $this->validate();

        $details = [
            'name' => $this->name,
            'email' => $this->email,
            'comment' => $this->comment
        ];

        Mail::to('jozwiak.lukasz6@gmail.com')->send(new \App\Mail\ContactMail($details));

        $this->success = 'Thank you for reaching out to us!';

        $this->clearFields();
    }

    private function clearFields()
    {
        $this->name = '';
        $this->email = '';
        $this->comment = '';
    }
}
