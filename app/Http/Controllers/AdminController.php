<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    function index()
    {
        return view('admin');
    }
    function mahasiswa()
    {
        return view('mahasiswa');
    }
    function dosenwali()
    {
        return view('admin');
    }
    function departemen()
    {
        return view('admin');
    }
    function operator()
    {
        return view('operator');
    }
}