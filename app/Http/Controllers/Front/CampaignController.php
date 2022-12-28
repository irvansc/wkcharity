<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Campaign;
use App\Models\Category;
use Illuminate\Http\Request;

class CampaignController extends Controller
{
    public function index()
    {
        return redirect('/campaign/create');
    }

    public function create()
    {
        $category = Category::orderBy('name')->get()->pluck('name', 'id');

        return view('front.campaign.index', compact('category'));
    }
    public function edit($id)
    {
        $category = Category::orderBy('name')->get()->pluck('name', 'id');
        $campaign = Campaign::findorfail($id);
        return view('front.campaign.index', compact('category', 'campaign'));
    }
}
