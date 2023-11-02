<div>
   <form action="{{ ('signup-store') }}" method="post">
    @csrf
    <input type="text" class="{{ $errors->has('email') ? 'is-invalid' : '' }}" name="email" value="" placeholder="Enter your email"><br>
    @error('email')
            {{ $message }}
    @enderror


    <input type="text" name="name" value="" placeholder="Full name" ><br>
    @error('name')
    {{ $message }}
@enderror

    <input type="password" name="password" value="" placeholder="Password" ><br>
    <input type="checkbox" name="remember_token" value="" ><label for="">save password</label><br>
    <button type="submit">SignUp </button>

        @foreach ($signup as $signup)
        <li><a href="{{ route('signup.edit', ['id'=>$signup->id]) }}">{{ $signup->name }}</a></li>
        @endforeach

    </button>
   </form>
</div>
