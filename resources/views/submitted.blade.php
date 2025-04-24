@extends('layouts.app')

@section('content')
<h2>Form Submitted</h2>
<p><strong>Name:</strong> {{ $name }}</p>
<p><strong>Email:</strong> {{ $email }}</p>
<p><strong>Message:</strong> {{ $message }}</p>
@endsection
