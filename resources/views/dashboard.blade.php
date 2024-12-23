@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Umami Dashboard</h1>
    <div class="row">
        <div class="col-md-4">
            <h2>Stats</h2>
            <pre>{{ json_encode($stats, JSON_PRETTY_PRINT) }}</pre>
        </div>
        <div class="col-md-4">
            <h2>Pageviews</h2>
            <pre>{{ json_encode($pageviews, JSON_PRETTY_PRINT) }}</pre>
        </div>
        <div class="col-md-4">
            <h2>Events</h2>
            <pre>{{ json_encode($events, JSON_PRETTY_PRINT) }}</pre>
        </div>
    </div>
</div>
@endsection
