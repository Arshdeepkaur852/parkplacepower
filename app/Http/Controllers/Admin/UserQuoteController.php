<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Redirect;
use Schema;
use App\UserQuote;
use App\Http\Requests\CreateUserQuoteRequest;
use App\Http\Requests\UpdateUserQuoteRequest;
use Illuminate\Http\Request;



class UserQuoteController extends Controller {

	/**
	 * Display a listing of userquote
	 *
     * @param Request $request
     *
     * @return \Illuminate\View\View
	 */
	public function index(Request $request)
    {
        $userquote = UserQuote::all();

		return view('admin.userquote.index', compact('userquote'));
	}

	/**
	 * Show the form for creating a new userquote
	 *
     * @return \Illuminate\View\View
	 */
	public function create()
	{
	    
	    
	    return view('admin.userquote.create');
	}

	/**
	 * Store a newly created userquote in storage.
	 *
     * @param CreateUserQuoteRequest|Request $request
	 */
	public function store(CreateUserQuoteRequest $request)
	{
	    
		UserQuote::create($request->all());

		return redirect()->route(config('quickadmin.route').'.userquote.index');
	}

	/**
	 * Show the form for editing the specified userquote.
	 *
	 * @param  int  $id
     * @return \Illuminate\View\View
	 */
	public function edit($id)
	{
		$userquote = UserQuote::find($id);
	    
	    
		return view('admin.userquote.edit', compact('userquote'));
	}

	/**
	 * Update the specified userquote in storage.
     * @param UpdateUserQuoteRequest|Request $request
     *
	 * @param  int  $id
	 */
	public function update($id, UpdateUserQuoteRequest $request)
	{
		$userquote = UserQuote::findOrFail($id);

        

		$userquote->update($request->all());

		return redirect()->route(config('quickadmin.route').'.userquote.index');
	}

	/**
	 * Remove the specified userquote from storage.
	 *
	 * @param  int  $id
	 */
	public function destroy($id)
	{
		UserQuote::destroy($id);

		return redirect()->route(config('quickadmin.route').'.userquote.index');
	}

    /**
     * Mass delete function from index page
     * @param Request $request
     *
     * @return mixed
     */
    public function massDelete(Request $request)
    {
        if ($request->get('toDelete') != 'mass') {
            $toDelete = json_decode($request->get('toDelete'));
            UserQuote::destroy($toDelete);
        } else {
            UserQuote::whereNotNull('id')->delete();
        }

        return redirect()->route(config('quickadmin.route').'.userquote.index');
    }

}
