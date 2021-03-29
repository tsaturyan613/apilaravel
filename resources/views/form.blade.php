{{--<form action="{{ asset('send/email') }}" method="post">--}}
{{--    @if($errors->any())--}}
{{--        <ul>--}}
{{--            @foreach($errors->all() as $error)--}}

{{--                <li>{{ $error }}</li>--}}

{{--            @endforeach--}}

{{--        </ul>--}}

{{--    @endif--}}

{{--    @csrf--}}
{{--    <input type="text" name="name">--}}
{{--    <input type="text" placeholder="email" name="email">--}}
{{--    <input type="text" name="subject">--}}
{{--    <textarea name="message"></textarea>--}}
{{--    <button>send email</button>--}}
{{--</form>--}}
{!! NoCaptcha::renderJs() !!}

@if ($errors->has('g-recaptcha-response'))
    <span class="help-block">
        <strong>{{ $errors->first('g-recaptcha-response') }}</strong>
    </span>
@endif


<form action="{{ asset('send/email') }}" method="post">
    <p>Name: <input type="text" name="name" /></p>
    <p>Email: <input type="email" name="email" /></p>
    <p>Subjecct: <input type="text" name="subject" /></p>
    <p>Message: <input type="text" name="message"></p>
    {!! NoCaptcha::display() !!}
    {{ csrf_field() }}
    <p><input type="submit" name="submit" value="Submit" /></p>
</form>
