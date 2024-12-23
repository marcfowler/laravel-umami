<?php

namespace Umami\Http\Controllers;

use Illuminate\Http\Request;
use Umami\Umami;

class UmamiController
{
    public function dashboard(Request $request)
    {
        $websiteId = config('umami.website_id');
        $stats = Umami::query($websiteId);
        $pageviews = Umami::query($websiteId, 'pageviews');
        $events = Umami::events($websiteId);

        return view('umami::dashboard', compact('stats', 'pageviews', 'events'));
    }
}
