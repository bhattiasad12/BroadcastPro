<?php

namespace App\Http\Controllers;

use App\Models\MailingList;
use App\Http\Requests\StoreMailingListRequest;
use App\Http\Requests\UpdateMailingListRequest;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Http\Request;

class MailingListController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $perPage = (int) request()->perPage ??  10;
        $mailinglists = MailingList::paginate($perPage);

        return response()->json($mailinglists);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreMailingListRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(MailingList $mailingList)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(MailingList $mailingList)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateMailingListRequest $request, MailingList $mailingList)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(MailingList $mailingList)
    {
        //
    }
}
