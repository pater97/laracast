@extends('layouts.app')
@section('page-title','homapage Laracast')

@section('content')
<section class="recently d-flex flex-column align-items-center m-5">
    <h1>
        Recently Updated
    </h1>
    <h5>
        Curious what's new at Laracasts? The following series have been recently updated.
    </h5>
</section>

@foreach($squares as $square)
<section class=" container square_one my-4 p-5">
    
    <h6>
        {{strtoupper($square['button'])}}
    </h6>
    <h4>
        {{$square['title']}}
    </h4>
    <p class="text-muted">
        {{$square['parag']}}
    </p>
    <div class="d-flex more_info">
        <span>
            {{$square['difficult']}}
        </span>
        <span>
            {{$square['lessons']}}
        </span>
        <span>
            {{$square['timing']}}
        </span>
    </div>
</section>
@endforeach
@endsection