@extends('errors::minimal')

@section('title', __('Too Many Requests'))
@section('code', '429')
@section('message', __('Sorry, you have reached the maximum number of requests. Please try again later.'))
