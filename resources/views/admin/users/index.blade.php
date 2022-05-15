@extends('layouts.admin.app')

@section('content')
{{ Breadcrumbs::render('user') }}
<user-component :user-list='@json($users)' />
@endsection
