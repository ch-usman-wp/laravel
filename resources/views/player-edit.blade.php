<div>
    <div class="m-4">
        <form action="{{ route('player.update', ['id'=>$player]) }}" method="post">
        @csrf
        @method('PATCH')
            <div class="row mb-3">
                    <label for="inputEmail" class="col-sm-2 col-form-label">Full NAme</label>
                    <div class="col-sm-10">
                        <input name="name" type="text" value="{{ $player->name}}" class="form-control" id="inputEmail" placeholder="Name">
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="inputEmail" class="col-sm-2 col-form-label">Phne Number</label>
                    <div class="col-sm-10">
                        <input name="phone" value="{{ $player->phone}}" type="text" class="form-control" id="inputEmail" placeholder="Phone" required>
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="inputEmail" class="col-sm-2 col-form-label">Email</label>
                    <div class="col-sm-10">
                        <input name="email" type="email" value="{{ $player->email }}" class="form-control" id="inputEmail" placeholder="Email" required>
                    </div>
                </div>

                <div class="row mb-3">
                    <div class="col-sm-10 offset-sm-2">
                        <div class="form-check">
                                <input name="remeber" value="true" class="form-check-input" type="checkbox" id="checkRemember"
                                @if($player->remeber)
                                checked
                                @endif
                                >
                                <label class="form-check-label" for="checkRemember">Remember me</label>
                        </div>
                    </div>
                </div>


                <div class="row">
                    <div class="col-sm-10 offset-sm-2">
                        <button type="submit" class="btn btn-primary">Sign in</button>
                    </div>
                </div>

        </form>
    </div>

</div>
