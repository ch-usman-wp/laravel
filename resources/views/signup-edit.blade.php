<div>
    <form action="{{ route('signup.update', ['id'=>$signup]) }}" method="post">
        @csrf
        @method('PATCH')
        <input type="email" name="email" value="{{ $signup->email }}" placeholder="Enter your email">
        <input type="text" name="name" value="{{ $signup->name }}" placeholder="Full name" >
        <input type="text" name="phone" value="{{ $signup->phone }}" placeholder="Enter phone number" >
        <button type="submit">SignUp </button>
        </button>
</div>
