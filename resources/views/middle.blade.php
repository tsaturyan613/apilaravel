<form action="{{ asset('add/middle') }}" method="post">
    @csrf
    <input type="text" name="name">
    <select name="age">
        @for($i=1;$i<=100;$i++)
        <option>{{ $i }}</option>
        @endfor
    </select>
    <button>Redirect Form Page</button>
</form>
