@extends("layouts.global")
@section("title") Create Users @endsection

@section ("content")
<section class="form user create">
  <div class="row">
  <div class="card w-100 ml-2">
    <div class="col-lg-8 col-md-12 col-sm-12">
      <div class="card-body">
        <h5 class="card-title">Tambah User</h5>
          <form action="{{route('users.store')}}" method="post" enctype="multipart/form-data">
            @csrf

            <div class="form-group">
                <label for="nim">Nama User</label>
                <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" id="name" placeholder="Nama User" value="{{old ('name')}}">
                @error('name')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-group">
                <label for="username">Usename</label>
                <input type="text" class="form-control @error('username') is-invalid @enderror" name="username" id="username" placeholder="Username" value="{{old ('username')}}">
                @error('username')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-group ml-3">
              <div class="form-check form-check-inline">
                  <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
                  <label class="form-check-label" for="inlineCheckbox1">ADMIN</label>
              </div>
              <div class="form-check form-check-inline ml-5">
                  <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
                  <label class="form-check-label" for="inlineCheckbox2">STAFF</label>
                </div>
              <div class="form-check form-check-inline ml-5">
                <input class="form-check-input" type="checkbox" id="inlineCheckbox3" value="option3">
                <label class="form-check-label" for="inlineCheckbox3">CUSTOMER</label>
              </div>
              @error('roles')
                    <div class="text-danger mr-5">{{ $message }}</div>
              @enderror
            </div>

             <div class="form-group">
                <label for="phone">Phone Number</label>
                <input type="text" class="form-control @error('phone') is-invalid @enderror" name="phone" id="phone" placeholder="Phone" value="{{old ('phone')}}">
                @error('phone')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-group">
                <label for="address">Address</label>
                <input type="text" class="form-control @error('address') is-invalid @enderror" name="address" id="address" placeholder="Address" value="{{old ('address')}}">
                @error('address')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-group">
                <label for="avatar">Avatar</label>
                <input type="file" class="form-control @error('avatar') is-invalid @enderror" name="avatar" id="avatar" placeholder="avatar" value="{{old ('avatar')}}">
                @error('avatar')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" id="email" placeholder="user@example.com" value="{{old ('email')}}">
                @error('email')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" class="form-control @error('password') is-invalid @enderror" name="password" id="password" placeholder="Password" value="">
                @error('password')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

             <div class="form-group">
                <label for="password_confirmation">Confirm Password</label>
                <input type="password" class="form-control @error('password_confirmation') is-invalid @enderror" name="password_confirmation" id="password_confirmation" placeholder="Confirm Password" value="">
                @error('password_confirmation')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div></hr>

             <div class="form-group">
              <button class="btn btn-primary" type="sumbit" id="store">SAVE USER</button>
             </div>
          </form>
        </div>
      </div>
    </div>    
  </div>
</section>
@endsection

