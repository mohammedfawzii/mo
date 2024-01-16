@extends('layouts.web')
@section('title','MO')
@section('content')
<div class="container">
    @include('sections.web.navbar')
    @include('sections.web.header')
    @include('sections.web.sectionone')
    @include('sections.web.skills')
    @include('sections.web.projects')

</div>
@include('sections.web.content')
@endsection
