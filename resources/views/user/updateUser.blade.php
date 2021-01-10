@extends("layout.master")
@section("title","Home")
@section("content")
    <div class="container col-md-6">
        <form method="post" class="p-5 border m-5" action="{{url("/user/edit/$user->id")}}">
            <h2 class="text-warning text-center">User Edit</h2>
            {{csrf_field()}}
            @foreach($errors->all() as $error)
                <p class="alert-danger p-3">{{$error}}</p>
            @endforeach
            <div class="form-group">
                <label for="name">User Name</label>
                <input type="text" class="form-control" id="name" name="name" value="{{$user->name}}">
            </div>
            <div class="form-group">
                <label for="role">User Role</label>
                <select class="form-control" name="role[]" multiple>
                    <option>Admin</option>
                    <option>Manager</option>
                    <option>Post creator</option>
                </select>
            </div>
            <div class="row justify-content-end no-gutters">
                <button type="submit" class="btn btn-primary ">Cancel</button>
                <button type="submit" class="btn btn-warning ml-3">Update</button>
            </div>
        </form>
    </div>
@endsection






