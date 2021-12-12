@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            @auth
                @if(Auth::user()->hasRole('administrator'))
                    <div>Esti administrator</div>
                @endif
            @endauth
        </div>
    </div>
</div>
@endsection
