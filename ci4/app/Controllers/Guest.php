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

}