@extends('layouts.admin')
@section('content')
    <x-admin.user-tabs :user="$user" />
@endsection
