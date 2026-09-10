<?php

namespace App\Controllers;

/**
 * Handles the static, content-only pages of the site:
 * the landing page and the about page.
 */
class Pages extends BaseController
{
    /**
     * Landing page ("/")
     */
    public function index(): string
    {
        $data = [
            'title' => 'Welcome',
        ];

        return view('pages/landing', $data);
    }

    /**
     * About page ("/about")
     */
    public function about(): string
    {
        $data = [
            'title' => 'About',
        ];

        return view('pages/about', $data);
    }
}
