<nav>
    <a href="/">Home</a>
    <a href="/books">Books</a>
    <a href="/about-us">About us</a>
    <a href="/faq">FAQ</a>
    <a href="/books/create">Add book</a>
    <a href="/authors">Authors</a>
    <a href="/authors/create">Add author</a>
    <a href="/categories">Categories</a>
    <a href="/publishers">Publishers</a>
</nav>

<form action="{{ route('logout') }}" method="post">
    @csrf
    <button>Logout</button>
</form>
