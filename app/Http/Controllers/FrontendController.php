<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class FrontendController extends Controller
{
	public function index()
	{
    	return view('front.welcome');
	}
	public function index_harga()
	{
    	return view('front.harga');
	}
	public function index_promo()
	{
    	return view('front.promo');
	}
	public function index_gallery()
	{
    	return view('front.gallery');
	}
	public function index_testimoni()
	{
    	return view('front.testimoni');
	}
	public function index_berita()
	{
    	return view('front.berita');
	}
	public function index_contact()
	{
    	return view('front.contact');
	}
	public function index_kredit()
	{
    	return view('front.kredit');
	}
	public function post_contact(Request $request)
	{

	}
}
