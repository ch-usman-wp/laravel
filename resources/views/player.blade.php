<div>
   <div class="m-4">
    <form action="{{ route('player-info') }}" method="post">
    @csrf
        <div class="row mb-3">
                <label for="inputEmail" class="col-sm-2 col-form-label">Full NAme</label>
                <div class="col-sm-10">
                    <input name="name" type="text" class="form-control" id="inputEmail" placeholder="Name">
                    @error('name')
                  {{ $message }}
                    @enderror
                </div>
            </div>
            <div class="row mb-3">
                <label for="inputEmail" class="col-sm-2 col-form-label">Phne Number</label>
                <div class="col-sm-10">
                    <input name="phone" type="text" class="form-control" id="inputEmail" placeholder="Phone">
                </div>
            </div>
            <div class="row mb-3">
                <label for="inputEmail" class="col-sm-2 col-form-label">Email</label>
                <div class="col-sm-10">
                    <input name="email" type="text" class="form-control" id="inputEmail" placeholder="Email">
                    @error('email')
                    {{ $message }}
                      @enderror
                </div>
            </div>
            <div class="row mb-3">
                <label for="inputPassword" class="col-sm-2 col-form-label">Password</label>
                <div class="col-sm-10">
                    <input name="password" type="password" class="form-control" id="inputPassword" placeholder="Password" required>
                </div>
            </div>

            <div class="row mb-3">
                <div class="col-sm-10 offset-sm-2">
                    <div class="form-check">
                            <input name="remeber" value="true" class="form-check-input" type="checkbox" id="checkRemember">
                            <label class="form-check-label" for="checkRemember">Remember me</label>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-10 offset-sm-2">
                    <button type="submit" class="btn btn-primary">Sign in</button>
                </div>
            </div>

            <div class="player-data">
                @foreach ($players as $player)
                    <li><a href="{{ route('player.edit', ['id'=>$player->id]) }}">{{ $player->name }}</a></li>
                @endforeach
            </div>
    </form>
</div>

</div>
