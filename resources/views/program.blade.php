@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Halaman Daftar Program</h2>
    <ul class="list-group">
        @foreach ($program as $item)
            <li class="list-group-item">
                <a href="/program">{{$item}}</a>
            </li>
        @endforeach
    </ul>
</div>
@endsection