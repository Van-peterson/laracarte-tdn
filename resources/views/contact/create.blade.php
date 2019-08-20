@extends('layouts.default', ['title' => 'Contact'])

@section('content')
    <div class="container mt-5">
        <div class="d-flex justify-content-center p-2 bd-highlight">
            <div class="p-2 bd-highlight">
                <h2>Get in touch</h2>
                <p><span class="text-muted">If you having trouble with this service, please <a href="mailto:{{ config('laracarte.admin_support_email') }}" data-helpful="laracarte" data-helpful-modal="on">ask for help</a>.</span></p>

                <form method="POST" action="{{ route('contact_path') }}">
                    {{ csrf_field() }}
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input name="name" type="text" class="form-control {{ $errors->has('name') ? 'is-invalid' : '' }}" id="name" aria-describedby="nameHelp" placeholder="Enter name" value="{{ old('name') }}" required="required">
                        {{-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> --}}
                        {!! $errors->first('name', "<span class='help-block'>:message</span>") !!}
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input name="email" type="email" value="{{ old('email') }}" class="form-control {{ $errors->has('email') ? 'is-invalid' : '' }}" id="email" placeholder="Email">
                        {!! $errors->first('email', "<span class='help-block'>:message</span>") !!}
                    </div>
                    <div class="form-group">
                        <label for="message" class="sr-only">Message</label>
                        <textarea name="message" class="form-control {{ $errors->has('message') ? 'is-invalid' : '' }}" id="message" rows="3">{{ old('message') }}</textarea>
                        {!! $errors->first('message', "<span class='help-block'>:message</span>") !!}
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
