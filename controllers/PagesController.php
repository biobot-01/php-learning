<?php

class PagesController
{
    public function home()
    {
        $title = App::get('config')['app']['name'];

        $tasks = App::get('database')->selectAll('todos');

        return view('index', [
            'title' => $title,
            'tasks' => $tasks
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
