<?php

namespace App\Http\Controllers;

use App\Folder;
use App\Book;
use Auth;
use App\Campaign;
use App\Client;

class ViewsController extends Controller
{

	/**
	 * Show Home Page
	 *
	 * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
	 */
	public function getHome()
	{
		return view('home');
	}

	public function getCampaigns()
	{
		$folders = Auth::user()->folders;

		$data = [
			'folders' => $folders,
		];

		return view('campaigns.home', $data);
	}

	public function getCampaignsAjax()
	{
		$campaigns = Campaign::paginate(10);

		$data = [
			'campaigns' => $campaigns,
		];

		return view('campaigns.campaigns', $data);
	}

	public function getFoldersAjax()
	{
		$folders = Folder::paginate(10);

		$data = [
			'folders' => $folders,
		];

		return view('campaigns.folders', $data);
	}

	public function getClients()
	{
		$clients = Client::all();

		$data = [
			'clients' => $clients
		];

		return view('clients', $data);
	}

	public function getBooksAjax()
	{
		$books = Book::paginate(10);

		$data = [
			'books' => $books,
		];

		return view('clients.books', $data);
	}

	public function getSend()
	{
		return view('send');
	}

	public function getUsers()
	{
		return view('users');
	}

	public function getProfile()
	{
		return view('profile');
	}


	/**
	 * Show About Page
	 * ----------------------------------------------------------------
	 * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
	 */
	public function getAbout()
	{
		return view('about');
	}
}