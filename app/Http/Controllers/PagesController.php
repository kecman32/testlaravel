<?php

namespace App\Http\Controllers;

/**
 * 
 */
class PagesController extends Controller
{
	
	public function getIndex() {
		return view('pages.welcome');
	}

	public function getAbout() {
		$first = 'Zoran';
		$last = 'Janicijevic';
		$fullname = $first." ".$last;
		$email = 'kecman32@gmail.com';
		$data = ['fullname' => $fullname, 'email' => $email];
		

		return view('pages.about')->withData($data);
	}

	public function getContact() {
		return view('pages.contact');
	}
}