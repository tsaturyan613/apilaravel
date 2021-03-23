<form action="{{ asset('send/email') }}" method="post">
    @csrf
    <input type="text" name="name">
    <input type="text" name="email">
    <input type="text" name="subject">
    <textarea name="message"></textarea>
    <button>send email</button>
</form>
