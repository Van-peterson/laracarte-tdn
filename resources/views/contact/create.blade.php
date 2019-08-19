@extends('layouts.default', ['title' => 'Contact'])

@section('content')
    <div class="container mt-5">
        <div class="d-flex justify-content-center p-2 bd-highlight">
            <div class="p-2 bd-highlight">
                <h2>Get in touch</h2>
                <p><span class="text-muted">If you having trouble with this service, please <a href="mailto:petersonkpoti@gmail.com" data-helpful="laracarte" data-helpful-modal="on">ask for help</a>.</span></p>

                <form>
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input name="name" type="email" class="form-control" id="name" aria-describedby="nameHelp" placeholder="Enter name" required="required">
                        {{-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> --}}
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input name="email" type="password" class="form-control" id="email" placeholder="Email">
                    </div>
                    <div class="form-group">
                        <label for="message" class="sr-only">Message</label>
                        <textarea name="message" class="form-control" id="message" rows="3"></textarea>
                    </div>
                    <div class="form-group form-check">
                        <input type="checkbox" class="form-check-input" id="exampleCheck1">
                        <label class="form-check-label" for="exampleCheck1">Check me out</label>
                    </div>
                    <button type="submit" class="btn btn-primary btn-block">Submit Enquiry &raquo;</button>
                </form>
            </div>
        </div>
    </div>
@stop
