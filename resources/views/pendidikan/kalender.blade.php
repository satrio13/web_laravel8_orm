@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb bg-white">
                <li class="breadcrumb-item"><a href="{{ route('/') }}">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Pendidikan</li>
                <li class="breadcrumb-item active" aria-current="page">{{ $title }}</li>
            </ol>
        </nav>
    </div>
    <div class="row">
            <div class="col-md-12"><h3><b>KALENDER AKADEMIK</b></h3><hr></div>
        </div>
        <div class="row">
            <div class="col-md-12 embed-responsive embed-responsive-16by9">
                @if($data->kalender != '' AND file_exists("img/kalender/$data->kalender"))
                    <embed src="/img/kalender/{{ $data->kalender }}" class="embed-responsive-item col-md-12" allowfullscreen></embed>   
                @endif
            </div> 
        </div>
    </div>
</section>
<br><br>
@endsection