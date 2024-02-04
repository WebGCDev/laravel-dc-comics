<!DOCTYPE html>
<html lang="en">
@extends('comics.template')

@section('main')
    <h1>INDEX</h1>
    <p><a href="{{route('comics.show',1)}}">SHOW</a></p>
    <p><a href="{{route('home')}}">HOME</a></p>
    
@endsection