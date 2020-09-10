   @extends("layouts.global")
   @section("title") Data User @endsection

   @section("content")
    <div class="row">
        <div class="col-12 mb-2">
            <!-- Breadcumb -->
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="/home">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Data User</li>
                </ol>
            </nav>
            <!-- Breadcumb -->
            <!-- Table -->
            <div class="card bg-white border-0 shadow-sm">
                <div class="card-header bg-white border-light">
                    <div class="d-flex justify-content-between">
                        <h6 class="text-indigo m-0"><span class="oi oi-person"></span> Data User</h6>
                        <a href="users/create" class="btn btn-sm btn-success mr-4"><span class="oi oi-plus"></span> Tambah </a>
                    </div>
                </div>
                <div class="card-body">

                    <!-- Alert  -->
                    @if(session('status'))
                        <div class="alert alert-success">
                            {{session('status')}}
                        </div>
                    @endif
                    <!-- Alert  -->
                    
                    <table id="data_users_reguler" class="table table-hover">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th scope="col">Nama</th>
                                <th scope="col">Username</th>
                                <th scope="col">Email</th>
                                <th scope="col">Status</th>
                                <th class="text-center">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($users as $user)
                            <tr>
                                <td>{{$loop->iteration}}</td>
                                <td><a href="#">{{$user->name}}</a></td>
                                <td>{{$user->username}}</td>
                                <td>{{$user->email}}</td>
                                <!-- <td><img src="{{asset('storage/uploads/'.$user->avatar)}}" class="w-25 rounded" alt="no found"></td> -->
                                 <td>{{$user->status}}</td>
                                <td class="text-center">
                                    <button class="btn btn-sm btn-success"><span class="oi oi-eye"></span></button>
                                    <button class="btn btn-sm btn-primary"><span class="oi oi-pencil"></span></button>
                                    <button class="btn btn-sm btn-danger"><span class="oi oi-trash"></span></button>
                                </td>
                            </tr>
                            @empty
                                <p>Tidak ada data...</p>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
            <!-- Table -->
        </div>
    </div>
    @endsection