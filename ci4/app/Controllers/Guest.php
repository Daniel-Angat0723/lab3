<?php

namespace App\Controllers;

class Guest extends BaseController
{
    public function index()
    {
        $model = model(GuestModel::class);

        $data = [
            'guest'  => $model->getGuest(),
        ];

        return view('templates/header', $data)
            . view('pages/guest')
            . view('templates/footer');
    }

    public function create()
    {
        helper('form');

        // Checks whether the form is submitted.
        if (! $this->request->is('post')) {
            // The form is not submitted, so returns the form.
            return view('templates/header')
                . view('pages/create')
                . view('templates/footer');
        }

        $post = $this->request->getPost(['fname', 'lname','tagline']);

        $model = model(GuestModel::class);

        $model->save([
            'fname' => $post['fname'],
            'lname'  => $post['lname'],
            'tagline'  => $post['tagline'],
        ]);

        return view('templates/header')
            . view('pages/success')
            . view('templates/footer');
    }
}