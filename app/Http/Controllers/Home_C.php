<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Home_C extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $home = DB::table('homes')->where('status', 1)->get();
        $status = [
            'sts' => 'home'
        ];
        $data = [
            'title' => $home[0]->title,
            'body' => $home[0]->content,
            'foot' => 'Read More',
            'img' => $home[0]->image
        ];
        return view('home', ['status' => $status, 'data' => $data]);
    }
    public function about()
    {
        $about = DB::table('abouts')->where('status', 1)->get();
        $status = [
            'sts' => 'about'
        ];
        $data = [
            'title' => $about[0]->title,
            'body' => $about[0]->content,
            'foot' => 'Read More',
            'img' => $about[0]->image
        ];
        return view('home', ['status' => $status, 'data' => $data]);
    }
    public function porto()
    {
        $portodb = DB::table('portos')->where('status', 1)->get();
        $status = [
            'sts' => 'porto'
        ];
        $data = [
            'title' => $portodb[0]->title,
            'body' => $portodb[0]->content,
            'foot' => 'Read More',
            'img' => ''
        ];
        if ($portodb[0]->image != null) {
            $gb1 = explode(';', $portodb[0]->image)[0];
            $gb2 = explode(';', $portodb[0]->image)[1];
            $porto = [
                [
                    'judul' => 'gambar 1',
                    'gambar' => $gb1
                ],
                [
                    'judul' => 'gambar 2',
                    'gambar' => $gb2
                ]
            ];
        }
        return view('home', ['status' => $status, 'data' => $data, 'porto' => $porto]);
    }
    public function admin()
    {
        $status = [
            'sts' => 'admin'
        ];
        $data = [
            'title' => 'Administrator',
            'body' => 'log in to admin page if you are an admin, You can change the content of this dashboard page via the Admin Page.',
            'img' => 'lte2.png'
        ];
        return view('home', ['status' => $status, 'data' => $data]);
    }

    public function show()
    {
        return view('welcome', ['judul' => 'ITB ASIA']);
    }

    public function pass($id)
    {
        return view('welcome', ['judul' => $id]);
    }

    public function r_home()
    {
        $home = DB::table('homes')->where('status', 1)->get();
        $data = [
            'title' => $home[0]->title,
            'body' => $home[0]->content,
            'foot' => 'Read More',
            'img' => $home[0]->image
        ];
        return view('read.r_home', ['data' => $data]);
    }

    public function r_about()
    {
        $about = DB::table('abouts')->where('status', 1)->get();
        $data = [
            'title' => $about[0]->title,
            'body' => $about[0]->content,
            'foot' => 'Read More',
            'img' => $about[0]->image
        ];
        return view('read.r_about', ['data' => $data]);
    }

    public function r_porto()
    {
        $portodb = DB::table('portos')->where('status', 1)->get();
        $data = [
            'title' => $portodb[0]->title,
            'body' => $portodb[0]->content,
            'foot' => 'Read More',
            'img' => ''
        ];
        return view('read.r_porto', ['data' => $data]);
    }
}
