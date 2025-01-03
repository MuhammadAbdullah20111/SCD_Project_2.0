@extends('layouts.master')
@section('content')
    <h2>Contact Us</h2>
    <form>
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" class="form-control" id="name" placeholder="Enter your name" required>
        </div>
        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" class="form-control" id="email" placeholder="Enter your email" required>
        </div>
        <div class="form-group">
            <label for="message">Message</label>
            <textarea class="form-control" id="message" rows="4" placeholder="Your message" required></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Send Message</button>
    </form>
@endsection
