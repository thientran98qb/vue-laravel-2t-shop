@extends('layouts.admin.app')

@section('breadscrumbs')
    {{ Breadcrumbs::render('user') }}
@endsection
@section('content')
    <create-user-component />
@endsection
