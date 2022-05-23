@extends('layouts.admin.app')

@section('breadscrumbs')
    {{ Breadcrumbs::render('user') }}
@endsection
@section('content')
    <user-component :user-list='@json($users)' />
@endsection
