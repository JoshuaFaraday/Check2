<form method="post"
      action="{{$action}}"> {{--premenna zavisi ci budeme vytvarat noveho uzivatela alebo editovat existujuceho--}}
    @csrf {{--ochrana formulara--}}
    @method($method)
    <div class="form-group">
        <label for="name">Full name</label>
        <input type="text" class="form-control" id="name" name="name" placeholder="Full name"
               value="{{old('name', @$model->name)  }}">
        {{--    old vrati to čo mam už napr rozpísane napr pri editacii rozpisane meno a netrafim heslo tak rozpisane meno zostane nezmenene--}}
        <div class="form-group text-danger">
            {{$errors->first('name')}}
        </div>
    </div>
    <div class="form-group">
        <label for="email">Email address</label>
        <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp"
               placeholder="Enter Email" value="{{old('email',  @$model->email)  }}">
        <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
        <div class="form-group text-danger">
            {{$errors->first('email')}}
        </div>
    </div>

    <div class="form-group">
        <label for="password">Password</label>
        <input type="password" class="form-control" id="password" name="password" placeholder="Password">
        <div class="form-group text-danger">
            {{$errors->first('password')}}
        </div>
    </div>

    <div class="form-group">
        <label for="password">Password again</label>
        <input type="password" class="form-control" id="password" name="password_confirmation"
               placeholder="Password again">
        <div class="form-group text-danger">
            {{$errors->first('password_confirmation')}}
        </div>
    </div>

    <div class="form-group">
        <input type="submit" class="btn btn-primary form-control">
    </div>
</form>

