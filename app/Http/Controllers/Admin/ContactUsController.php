<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Redirect;
use Schema;
use App\ContactUs;
use App\Http\Requests\CreateContactUsRequest;
use App\Http\Requests\UpdateContactUsRequest;
use Illuminate\Http\Request;



class ContactUsController extends Controller {

	/**
	 * Display a listing of contactus
	 *
     * @param Request $request
     *
     * @return \Illuminate\View\View
	 */
	public function index(Request $request)
    {
        $contactus = ContactUs::all();

		return view('admin.contactus.index', compact('contactus'));
	}

	/**
	 * Show the form for creating a new contactus
	 *
     * @return \Illuminate\View\View
	 */
	public function create()
	{
	    
	    
	    return view('admin.contactus.create');
	}

	/**
	 * Store a newly created contactus in storage.
	 *
     * @param CreateContactUsRequest|Request $request
	 */
	public function store(CreateContactUsRequest $request)
	{
	    
		ContactUs::create($request->all());

		return redirect()->route(config('quickadmin.route').'.contactus.index');
	}

	/**
	 * Show the form for editing the specified contactus.
	 *
	 * @param  int  $id
     * @return \Illuminate\View\View
	 */
	public function edit($id)
	{
		$contactus = ContactUs::find($id);
	    
	    
		return view('admin.contactus.edit', compact('contactus'));
	}

	/**
	 * Update the specified contactus in storage.
     * @param UpdateContactUsRequest|Request $request
     *
	 * @param  int  $id
	 */
	public function update($id, UpdateContactUsRequest $request)
	{
		$contactus = ContactUs::findOrFail($id);

        

		$contactus->update($request->all());

		return redirect()->route(config('quickadmin.route').'.contactus.index');
	}

	/**
	 * Remove the specified contactus from storage.
	 *
	 * @param  int  $id
	 */
	public function destroy($id)
	{
		ContactUs::destroy($id);

		return redirect()->route(config('quickadmin.route').'.contactus.index');
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
            ContactUs::destroy($toDelete);
        } else {
            ContactUs::whereNotNull('id')->delete();
        }

        return redirect()->route(config('quickadmin.route').'.contactus.index');
    }

}
