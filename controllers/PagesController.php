<?php

namespace App\Controllers;

use App\Core\App;

class PagesController
{
    public function home()
    {
        $title = App::get('config')['app']['name'];

        return view('index', [
            'title' => $title
        ]);
    }

    public function about()
    {
        $title = App::get('config')['app']['name'];

        return view('about', [
            'title' => $title
        ]);
    }

    public function aboutCulture()
    {
        $title = App::get('config')['app']['name'];

        return view('about-culture', [
            'title' => $title
        ]);
    }

    public function contact()
    {
        $title = App::get('config')['app']['name'];

        return view('contact', [
            'title' => $title
        ]);
    }
}
