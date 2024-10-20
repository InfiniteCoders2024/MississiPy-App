<h1>Books List</h1>
{{ 'Ola' }}
<ul>
    @foreach ($books as $book)
        <li>{{ $book->title }} (ISBN: {{ $book->isbn13 }})</li>
    @endforeach
</ul>