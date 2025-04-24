@extends('layouts.app')

@section('content')
<h2>Contact</h2>
<form action="/submit-form" method="POST">
    @csrf
    <input type="text" name="name" placeholder="Name" required>
    <input type="email" name="email" placeholder="Email" required>
    <textarea name="message" placeholder="Your Message" required></textarea>
    <button type="submit">Send</button>
</form>
@endsection
