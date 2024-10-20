<h1>Operators List</h1>
<ul>
    @foreach ($operators as $operator)
        <li>(Firstname: {{ $operator->firstname }}) (Surname: {{ $operator->surname }})</li>
    @endforeach
</ul>