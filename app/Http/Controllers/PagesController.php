<?php

namespace App\Http\Controllers;

class PagesController extends Controller {

	public function getIndex() {
		return view('pages/welcome');
		
	}

	public function getAbout() {
		$first = 'Ngala';
		$last = 'Dirane';
		$email = "diranengala@gmail.com";
		$fullname = $first." ".$last;
		$data = [];
		$data['email'] = $email;
		$data['fullname'] = $fullname;
		
		return view('pages.about')->withData($data);
	}

	public function getContact() {
		return view('pages.contact');

	}

}
        //process variable data or params
		//talt to the model
		//receive from the model
		//compile or process data from the model if needed
		//pass that data to the correct view