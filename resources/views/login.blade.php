<div>
    <form action="{{ route('loginattempt') }}" method="post">
        @csrf

        <input type="text" name="email">
        <input type="password" name="password">
        <button>sign in</button>
    </form>

</div>
