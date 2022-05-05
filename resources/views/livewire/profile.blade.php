<div>
    <form wire:submit.prevent="updateProfile">
        <div class="form-group">
            <label for="exampleInputEmail1">email</label>
            <input wire:model="email" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" name="email">
            @error('email')
            <div class="alert alert-danger">
                {{ $message }}
            </div>
            @enderror
        </div>

        <div class="form-group">
            <label for="exampleInputEmail1">name</label>
            <input wire:model="name" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter name" name="name">
            @error('name')
            <div class="alert alert-danger">
                {{ $message }}
            </div>
            @enderror
        </div>

{{--        <div class="form-group">--}}
{{--            <label for="exampleInputPassword1">Password</label>--}}
{{--            <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">--}}
{{--        </div>--}}
{{--        <div class="form-check">--}}
{{--            <input type="checkbox" class="form-check-input" id="exampleCheck1">--}}
{{--            <label class="form-check-label" for="exampleCheck1">Check me out</label>--}}
{{--        </div>--}}
        <button type="submit" class="btn btn-primary">Submit</button>

        @if($success && $errors->count() < 1)
            <div class="alert alert-success mt-2">{{$success}}</div>
        @endif
    </form>
</div>
