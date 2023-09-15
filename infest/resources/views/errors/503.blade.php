@extends('errors::minimal')

@section('title', __('Service Unavailable'))
@section('code', '503')
@section('message', __('The server is currently unable to handle the request due to maintenance or overload.'))
