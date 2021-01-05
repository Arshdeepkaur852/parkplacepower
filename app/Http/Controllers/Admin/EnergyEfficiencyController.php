<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Redirect;
use Schema;
use App\EnergyEfficiency;
use App\Http\Requests\CreateEnergyEfficiencyRequest;
use App\Http\Requests\UpdateEnergyEfficiencyRequest;
use Illuminate\Http\Request;



class EnergyEfficiencyController extends Controller {

	/**
	 * Display a listing of energyefficiency
	 *
     * @param Request $request
     *
     * @return \Illuminate\View\View
	 */
	public function index(Request $request)
    {
        $energyefficiency = EnergyEfficiency::all();

		return view('admin.energyefficiency.index', compact('energyefficiency'));
	}

	/**
	 * Show the form for creating a new energyefficiency
	 *
     * @return \Illuminate\View\View
	 */
	public function create()
	{
	    
	    
	    return view('admin.energyefficiency.create');
	}

	/**
	 * Store a newly created energyefficiency in storage.
	 *
     * @param CreateEnergyEfficiencyRequest|Request $request
	 */
	public function store(CreateEnergyEfficiencyRequest $request)
	{
	    
		EnergyEfficiency::create($request->all());

		return redirect()->route(config('quickadmin.route').'.energyefficiency.index');
	}

	/**
	 * Show the form for editing the specified energyefficiency.
	 *
	 * @param  int  $id
     * @return \Illuminate\View\View
	 */
	public function edit($id)
	{
		$energyefficiency = EnergyEfficiency::find($id);
	    
	    
		return view('admin.energyefficiency.edit', compact('energyefficiency'));
	}

	/**
	 * Update the specified energyefficiency in storage.
     * @param UpdateEnergyEfficiencyRequest|Request $request
     *
	 * @param  int  $id
	 */
	public function update($id, UpdateEnergyEfficiencyRequest $request)
	{
		$energyefficiency = EnergyEfficiency::findOrFail($id);

        

		$energyefficiency->update($request->all());

		return redirect()->route(config('quickadmin.route').'.energyefficiency.index');
	}

	/**
	 * Remove the specified energyefficiency from storage.
	 *
	 * @param  int  $id
	 */
	public function destroy($id)
	{
		EnergyEfficiency::destroy($id);

		return redirect()->route(config('quickadmin.route').'.energyefficiency.index');
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
            EnergyEfficiency::destroy($toDelete);
        } else {
            EnergyEfficiency::whereNotNull('id')->delete();
        }

        return redirect()->route(config('quickadmin.route').'.energyefficiency.index');
    }

}
