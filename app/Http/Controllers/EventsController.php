<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EventsController extends Controller
{
    //
    public function index()
    {
        $events = [
            'Laravel Hacking and Coffee',
            'IoT with Raspberry Pi',
            'Free Vue.js Lessons'
        ];
        return view('events.index')->withEvents($events);
    }

    public function show($id)
    {
        return view('events.show')->withId($id)->withName('Laravel Hacking and Coffee');
    }

    public function category($category, $subcategory='all')
    {
        dd("Category: {$category} Subcategory: {$subcategory}");
    }
}
