@extends('Frontend.layouts.app')

@section('content')
    
    <!-- Start Landing Page --->
    <div class="allPage contact">
        <div class="container">
            <h1 class="special-heading">Contact Page</h1>

            

            <div class="contact-box">
                <div class="">
                    <form id="myForm" action="{{ route('contact.save') }}" method="POST">
                        @csrf

                        @include('Admin.includes._messages')

                        <div class="form-group">
                            <label>Name</label>
                            <input type="text" name="name" value="{{ old('name') }}" class="form-control" required>
                            
                        </div>

                        <div class="form-group">
                            <label>Email</label>
                            <input type="email" name="email" value="{{ old('email') }}" class="form-control" required>
                        </div>

                        <div class="form-group">
                            <label>Phone</label>
                            <input type="number" name="phone" value="{{ old('phone') }}" class="form-control">
                        </div>

                        <div class="form-group">
                            <label>Subject</label>
                            <input type="text" name="subject" value="{{ old('subject') }}" class="form-control" required>
                        </div>

                        <div class="form-group">
                            <label>Message</label>
                            <textarea name="message" id="message" rows="6" class="form-control">{{ old('message') }}</textarea>
                        </div>

                        <div class="form-group">
                            <div class="main-button">
                                <button type="submit" class="btn btn-block">Send Message</button>
                            </div>
                        </div>

                    </form>
                </div>
            </div>



        </div>
    </div>
    <!-- End Landing Page --->

@endsection


@push('scripts')
<!-- validation -->

<script>
$(document).ready(function(){

});
</script>
@endpush