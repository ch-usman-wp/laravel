<div>
    <div class="m-4">
        <form action="{{ route('league.update',['id'=>$league]) }}" method="post">
@csrf
@method('PATCH')
            <div class="row mb-3">
                    <label for="inputEmail" class="col-sm-2 col-form-label">Full NAme</label>
                    <div class="col-sm-10">
                        <input name="name" type="text" value="{{ $league->name }}" class="form-control" id="inputEmail" placeholder="Name">
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="inputEmail" class="col-sm-2 col-form-label">Phne Number</label>
                    <div class="col-sm-10">
                        <input name="phone" type="text" value="{{ $league->phone }}" class="form-control" id="inputEmail" placeholder="Phone" required>
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="inputEmail" class="col-sm-2 col-form-label">Email</label>
                    <div class="col-sm-10">
                        <input name="email" type="email" value="{{ $league->email }}" class="form-control" id="inputEmail" placeholder="Email" required>
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
