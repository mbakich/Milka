<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\Web\Receipt;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\View\View;
use App\Http\Requests\Receipts\ReceiptStoreRequest;
use App\Http\Requests\Receipts\ReceiptUpdateRequest;

class ReceiptController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
     //   $receipts = Receipt::latest()->paginate(5);

        $receipts = Receipt::all();

        return view('receipts.index', compact('receipts'));
        //    ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        return view('receipts.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ReceiptStoreRequest $request): RedirectResponse
    {
        Receipt::create($request->validated());

        return redirect()->route('receipts.index')
            ->with('success', 'Receipt created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Receipt $receipt): View
    {
        return view('receipts.show',compact('receipt'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Receipt $receipt): View
    {
        return view('receipts.edit',compact('receipt'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(ReceiptUpdateRequest $request, Receipt $receipt): RedirectResponse
    {
        $receipt->update($request->validated());

        return redirect()->route('receipts.index')
            ->with('success','Receipt updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Receipt $receipt): RedirectResponse
    {
        $receipt->delete();

        return redirect()->route('receipts.index')
            ->with('success','Receipt deleted successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function process(Receipt $receipt)
    {
        $receipts = Receipt::all();

        return view('receipts.process', compact('receipts'));
    }
}
