<?php

namespace App\Http\Controllers\Api\V1;

use App\Models\Campaign;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use App\Http\Requests\StoreCampaignRequest;
use App\Http\Requests\UpdateCampaignRequest;

class CampaignController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function sendGoodResponse($data)
    {
        return response()->json(
            [
                'status' => true,
                'data' => $data
            ], 200
        );
    }

    protected function sendErrResponse($errs) 
    {
        return response()->json(
            [
                'status' => false,
                'message' => $errs
            ], 500
        );
    }

    public function index()
    {
        $campaigns = Campaign::paginate(10);
        return $this->sendGoodResponse($campaigns);
      
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
    public function store(StoreCampaignRequest $request)
    {
        $validatedRequest = Validator::make($request->all(), [
            'title' => 'required',
            'description' => 'required',
            'target_group' => 'required',
            'status' => 'required'
        ]);

        if($validatedRequest->fails())
        {
            return $this->sendErrResponse($validatedRequest->messages());
        }

        $campaign = new Campaign();
        $campaign->title = $request->input('title');
        $campaign->description = $request->input('description');
        $campaign->target_group = $request->input('target_group');
        $campaign->status = $request->input('status');

        $campaign->save();

        return $this->sendGoodResponse($campaign);
    }

    /**
     * Display the specified resource.
     */
    public function show( $campaign)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Campaign $campaign)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateCampaignRequest $request, $campaign)
    {
         $validatedRequest = Validator::make($request->all(), [
            'title' => 'required',
            'description' => 'required',
            'target_group' => 'required',
            'status' => 'boolean'
        ]);

        if($validatedRequest->fails())
        {
            return $this->sendErrResponse($validatedRequest->messages());
        }

        $campaign = Campaign::find($campaign);
        $campaign->title = $request->input('title');
        $campaign->description = $request->input('description');
        $campaign->target_group = $request->input('target_group');
        $campaign->status = $request->input('status');

        $campaign->update();

        return $this->sendGoodResponse($campaign);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy( $campaign)
    {
        
    }
}
