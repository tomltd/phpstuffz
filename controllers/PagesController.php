<?php


class PagesController
{
    public function home()
    {
        //die('home');
        //$users = App::get('database')->selectAll('users');

        return view('index');
    }

    public function about()
    {

        $company = "Tomltd";

        return view('about', ['company' => $company]);

    }

    public function contact()
    {
        return view('contact');
    }



}
