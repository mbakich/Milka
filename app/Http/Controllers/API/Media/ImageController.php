<?php

namespace App\Http\Controllers\API\Media;

use App\Http\Controllers\Controller;
use App\Models\Web\Image;
use Illuminate\Http\Request;
use App\Http\Controllers\API\BaseController as BaseController;

class ImageController extends BaseController
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $images = Image::all();

        //$images
        //    ->addMediaFromRequest('image')
        //    ->toMediaCollection();

        return $this->sendResponse($images, 'Images retrieved successfully.');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
