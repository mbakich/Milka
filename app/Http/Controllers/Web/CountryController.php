<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Http\Requests\Countries\CountryStoreRequest;
use App\Http\Requests\Countries\CountryUpdateRequest;
use App\Models\Web\Country;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class CountryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
    //    $countries = Country::latest()->paginate(5);
        $countries = Country::all();

        return view('countries.index', compact('countries'));
        //    ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        return view('countries.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CountryStoreRequest $request): RedirectResponse
    {
        Country::create($request->validated());

        return redirect()->route('countries.index')
            ->with('success', 'Country created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Country $country): View
    {
        return view('countries.show',compact('country'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Country $country): View
    {
        return view('countries.edit',compact('country'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(CountryUpdateRequest $request, Country $country): RedirectResponse
    {
        $country->update($request->validated());

        return redirect()->route('countries.index')
            ->with('success','Country updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Country $country): RedirectResponse
    {
        $country->delete();

        return redirect()->route('countries.index')
            ->with('success','Country deleted successfully');
    }
}
