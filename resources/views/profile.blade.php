@extends('adminlte::page')

@section('title', 'Profile')

@section('content_header')
<h1>Profile</h1>
@stop

@section('content')
<p>{{$nim}}</p>
<p>AZIS ILHAM KURNIAWAN</p>
<P>TI - 2E</P>
@stop

@section('css')
<link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
<script>
    console.log('Hi!');
</script>
@stop

@section('footer')
<p class="text-center">Azis ilham kurniawan</p>
@stop