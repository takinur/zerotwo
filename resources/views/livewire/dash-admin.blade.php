<div>

<div class="adwrapper">
      <!-- Sidebar  -->
        <nav id="sidebar">
            <div class="sidebar-header">
                <a href="{{ route('home') }}" class="logo mr-auto"><img src="{{'storage/images/logo_wh.png' }}" alt="" class="img-fluid"></a>
            </div>

            <ul class="list-unstyled components">
                <li class="">
                   
                    <a data-toggle="collapse" id="dashboard" href="#statsCollapse" role="button" aria-expanded="false" aria-controls="statsCollapse"> <i class="fas fa-chart-line fa-lg mr-3"></i>Dashboard</a>
                </li>
                <li class="">
                    <a href="#homeSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"><i class="fa fa-users-cog fa-lg mr-2"></i>User Management</a>
                    <ul class="collapse list-unstyled" id="homeSubmenu">
                        <li>
                            <a href="#" data-toggle="modal" data-target="#userModal2">Add New User</a>
                        </li>
                        <li>
                            <a id="users" data-toggle="collapse" href="#usersCollapse" role="button" aria-expanded="false" aria-controls="usersCollapse">Manage Existing</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a data-toggle="collapse" id="contMail" href="#contMailCollapse" role="button" aria-expanded="false" aria-controls="contMailCollapse"><i class="fas fa-inbox fa-lg mr-2"></i>Contact Messages</a>
                </li>           
                <li>
                    <a data-toggle="collapse" id="newsltr" href="#newsltrCollapse" role="button" aria-expanded="false" aria-controls="newsltrCollapse"><i class="fas fa-mail-bulk fa-lg mr-2"></i>Newsletter Subscribers</a>
                </li>           
                <li>
                    <a href="#pageSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"><i class="fas fa-cogs fa-lg mr-2"></i>System</a>
                    <ul class="collapse list-unstyled" id="pageSubmenu">
                        <li>
                            <a data-toggle="collapse" id="errorlog" href="#errorlogCollapse" role="button" aria-expanded="false" aria-controls="errorlogCollapse">Error Logs</a>
                        </li>
                    </ul>
                </li>
              
                <li>                    
                    <a href="{{ route('logout') }}"
                            class=""
                            onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();"><i class="fas fa-sign-out-alt fa-lg mr-2"></i>{{ __('Logout') }}</a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="hidden">
                            {{ csrf_field() }}
                        </form>
                </li>
            </ul>

            <ul class="list-unstyled CTAs">
                <li>
                    <a href="{{ route('home') }}" class="download text-uppercase">View Website Home</a>
                </li>
            </ul>
        </nav>   
          <!-- Dashboard Content  -->
            <div class="content container-fulid">               
                <nav class="navbar navbar-expand-lg navbar-dark shadow" style="background-color: #7386D5">
                    <div class="container-fluid">
                        <button type="button" id="sidebarCollapse" class="btn btn-success">
                            <i class="fas fa-align-left"></i>
                            <span>Navigation</span>
                        </button>
                        <button class="btn btn-dark d-inline-block d-lg-none ml-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                            <i class="fas fa-align-justify"></i>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="nav navbar-nav ml-auto">
                                <li class="nav-item active">
                                    <a class="nav-link" href="#"><i class="fas fa-user-shield"></i> {{ Auth::user()->fname ." ". Auth::user()->lname}}</a>
                                </li>                            
                            </ul>
                        </div>
                    </div>
                </nav>
                <!-- Messages-->
                @if (session()->has('message'))
                    <div class="alert bg-dark text-white alert-dismissible fade show text-center" id="slert" role="alert">
                        <strong> {{ session('message') }} </strong>
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>      
                 @endif   
                <!--Stats---->
                <div class="collapse show" id="statsCollapse"> 
                    <div class="row p-3">
                        <div class="col mt-2"> <!--Visitors -->
                            <div class="card radius-10 bg-success" style="max-width: 14rem;">
                                <div class="card-body">
                                    <div class="d-flex">                            
                                        <h4 class="mb-0 text-white">People Online</h4>
                                        <span class="far fa-eye fa-4x text-light ml-5 float-right" style="opacity: 0.6"></span>
                                    </div>
                                    <div class="progress my-3 bg-light-transparent" style="height:3px;">
                                        <div class="progress-bar bg-white" role="progressbar" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                    <div class="d-flex justify-content-center align-items-center text-white">
                                        <h5 class="mb-0 text-white">{{ $visitor }}</h5>
                                    </div>
                                </div>
                            </div>
                        </div>   
                        <div class="col mt-2"> <!--USRES -->
                            <div class="card radius-10 bg-success" style="max-width: 14rem;">
                                <div class="card-body">
                                    <div class="d-flex">                            
                                        <h4 class="mb-0 text-white">Total Users</h4>
                                        <span class="fas fa-users fa-4x text-light ml-5 float-right" style="opacity: 0.6"></span>
                                    </div>
                                    <div class="progress my-3 bg-light-transparent" style="height:3px;">
                                        <div class="progress-bar bg-white" role="progressbar" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                    <div class="d-flex justify-content-center align-items-center text-white">
                                        <h5 class="mb-0 text-white">{{ $totalUsers }}</h5>
                                    </div>
                                </div>
                            </div>
                        </div>   
                        <div class="col mt-2">
                            <div class="card radius-10 bg-success" style="max-width: 14rem;">
                                <div class="card-body">
                                    <div class="d-flex">                            
                                        <h4 class="mb-0 text-white">Newsletter Subscribers</h4>
                                        <span class="fas fa-mail-bulk fa-4x text-light ml-1 float-right" style="opacity: 0.6"></span>
                                    </div>
                                    <div class="progress my-3 bg-light-transparent" style="height:3px;">
                                        <div class="progress-bar bg-white" role="progressbar" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                    <div class="d-flex justify-content-center align-items-center text-white">
                                        <h5 class="mb-0 text-white">{{ count($newsLetter) }}</h5>
                                    </div>
                                </div>
                            </div>
                        </div>   
                        <div class="col mt-2">
                            <div class="card radius-10 bg-success" style="max-width: 14rem;">
                                <div class="card-body">
                                    <div class="d-flex">                            
                                        <h4 class="mb-0 text-white">Error Reports</h4>
                                        <span class="fas fa-bug fa-4x text-light ml-5 float-right" style="opacity: 0.6"></span>
                                    </div>
                                    <div class="progress my-3 bg-light-transparent" style="height:3px;">
                                        <div class="progress-bar bg-white" role="progressbar" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                    <div class="d-flex justify-content-center align-items-center text-white">
                                        <h5 class="mb-0 text-white">{{ '16' }}</h5>
                                    </div>
                                </div>
                            </div>
                        </div>   
                        <div class="col mt-2">
                            <div class="card radius-10 bg-success" style="max-width: 14rem;">
                                <div class="card-body">
                                    <div class="d-flex">                            
                                        <h4 class="mb-0 text-white">Messages</h4>
                                        <span class="fas fa-envelope-open-text fa-4x text-light ml-3 float-right" style="opacity: 0.6"></span>
                                    </div>
                                    <div class="progress my-3 bg-light-transparent" style="height:3px;">
                                        <div class="progress-bar bg-white" role="progressbar" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                    <div class="d-flex justify-content-center align-items-center text-white">
                                        <h5 class="mb-0 text-white">{{ count($conMessage) }}</h5>
                                    </div>
                                </div>
                            </div>
                        </div>                                                                        
                    </div>                    
                </div>
                   <!----------------------------Manage Users------------------- -->   
                <div class="row p-4 collapse" id="usersCollapse">
                    <div class="col-lg-12 shadow bg-white border-0 rounded">
                            <div class="col">
                                <div class="input-group mb-3 mx-3 text-center justify-content-center">
                                    <p class="font-weight-bold h4 mt-2" for="search">Current Users</p>
                                </div>
                            </div>                    
                            <table class="table table-bordered table-hover" id="userTable">
                                <thead>
                                  <tr>
                                    <th scope="col">First Name</th>
                                    <th scope="col">Last Name</th>
                                    <th scope="col">Email</th>
                                    <th scope="col">Role</th>
                                    <th scope="col">Edit</th>
                                    <th scope="col">Delete</th>
                                  </tr>
                                </thead>
                                <tbody>
                                    @forelse ($users as $user)
                                        <tr>
                                            <td>{{ $user->fname }}</td>
                                            <td>{{ $user->lname }}</td>
                                            <td>{{ $user->email }}</td>
                                            <td>{{ $user->roles->first()->name }}</td>
                                            <td> <a class="text-info" data-toggle="modal" wire:click="editUser({{ $user->id }})" data-target="#userModal" href="#"> <i class="far fa-edit"></i> Edit</a></td>
                                            <td ><a class="text-danger" href="#"  wire:click="deleteUser({{ $user->id }})"> <i class="fas fa-trash-alt"></i> Delete</a></td>
                                        </tr>
                                    @empty
                                        <tr>
                                            <th scope="row">-</th>
                                            <td>-</td>
                                            <td>-</td>
                                            <td>-</td>
                                            <td>-</td>
                                        </tr>
                                    @endforelse                                    
                                </tbody>                                
                            </table>
                            <div class="col mt-3  d-flex justify-content-end text-end">
                                {{ $users->links('vendor.pagination.bootstrap-4') }}
                            </div>
                    </div>
                </div>

                <!-------- NEWSLETTERS -->
                <div class="row p-4 collapse" id="newsltrCollapse">
                    <div class="col-lg-12 shadow bg-white border-0 rounded">
                        <div class="col">
                            <div class="input-group mb-3 mx-3 text-center justify-content-center">
                                <p class="font-weight-bold h4 mt-2" for="search">Newsletter Subscribers</p>
                            </div>
                        </div>                    
                        <table class="table table-bordered table-hover" id="userTable">
                            <thead>
                              <tr>
                                <th scope="col">ID</th>
                                <th scope="col">Email</th>
                              </tr>
                            </thead>
                            <tbody>
                                @forelse ($newsLetter as $nws)
                                    <tr>
                                        <th scope="row">{{ $nws->id }}</th>
                                        <td>{{ $nws->email }}</td>
                                    </tr>
                                @empty
                                    <tr>
                                        <th scope="row">-</th>
                                        <td>-</td>    
                                    </tr>
                                @endforelse                                    
                            </tbody>                                
                        </table>   
                    </div>                  
                </div>  
                <!----- Contact Messages -->
                <div class="row p-4 collapse" id="contMailCollapse">
                    <div class="col-lg-12 shadow bg-white border-0 rounded">
                        <div class="col">
                            <div class="input-group mb-3 mx-3 text-center justify-content-center">
                                <p class="font-weight-bold h4 mt-2" for="search">Contact Messages</p>
                            </div>
                        </div>
                        <div class="row row-cols-1 row-cols-md-2">
                            @foreach($conMessage as $msg)                              
                            <div class="card radius-10 bg-white m-3 shadow-lg p-3 bg-white rounded" style="max-width: 22rem;">
                                <div class="card-body">
                                    <h5 class="card-title">Message From <strong>{{ $msg->name }}</strong></h5>
                                    <hr />
                                    <b> Email: </b> {{ $msg->email }} <br>
                                    <b> Subject: </b> {{ $msg->subject }} 
                                    <hr />
                                    <p class="card-text">{{ $msg->message }}</p>
                                    <p class="card-text ml-5 mt-3"><small class="text-muted">Sent at {{ $msg->created_at }}</small></p>
                                  </div>
                            </div>
                            @endforeach
                        </div>                   
                    </div>                  
                </div>  
                <!-- Error Logs -->
                <div class="row p-4 collapse" id="errorlogCollapse">
                    <div class="col-lg-12 shadow bg-white border-0 rounded">
                        <div class="col">
                            <div class="input-group mb-3 mx-3 text-center justify-content-center">
                                <p class="font-weight-bold h4 mt-2" for="search">Error Logs</p>
                            </div>
                        </div>                    
                        <table class="table table-bordered table-hover" id="userTable">
                            <thead>
                              <tr>
                                <th scope="col">ID</th>
                                <th scope="col">Error</th>
                                <th scope="col">Time</th>
                                <th scope="col">Link</th>
                              </tr>
                            </thead>
                            <tbody>
                               
                                    <tr>
                                        <th scope="row">-</th>
                                        <td>-</td>
                                        <td>-</td>
                                        <td>-</td>
                                    </tr>
                                                                 
                            </tbody>                                
                        </table>
               
                    </div>                  
                </div>  
            </div>
 

</div>
      <!-- Modal for USER ADD-->

    <div wire:ignore.self class="modal fade animate" id="userModal2" tabindex="-1" role="dialog" aria-labelledby="userModal2" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="userModalLabel2">Add New User</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>        
                <div class="modal-body">   
                    <form autocomplete="off">      
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="Fname" class="font-weight-bold">First Name</label>
                                <input type="text" wire:model.defer="state.fname" class="form-control @error('fname') is-invalid @enderror" id="fname">                    
                                @error('fname') <div class="invalid-feedback"> {{ $message }}</div> @enderror
                            </div>
                            <div class="form-group col-md-6">
                                <label for="lname" class="font-weight-bold">Last Name</label>
                                <input type="text" wire:model.defer="state.lname" class="form-control @error('lname') is-invalid @enderror" >
                                @error('lname') <div class="invalid-feedback"> {{ $message }}</div> @enderror
                            </div>
                            <div class="form-group col-lg-12">
                                <label for="email" class="font-weight-bold">Email</label>
                                <input type="text" wire:model.defer="state.email" class="form-control @error('email') is-invalid @enderror">
                                @error('email') <div class="invalid-feedback"> {{ $message }}</div> @enderror
                            </div>    
                            <div class="mx-auto justify-content-center align-items-center text-center"> 
                                <h4 class="text-center"> USER ROLE: </h4>
                                <div class="btn-group btn-group-toggle" data-toggle="buttons">
                                  <label class="btn btn-secondary">
                                    <input type="radio" name="role_id" wire:model.defer="state.role" value="employer" id="option1"> Employer
                                  </label>
                                  <label class="btn btn-secondary">
                                    <input type="radio" name="role_id" wire:model.defer="state.role" value="candidate" id="option2" class=""> &nbsp; &nbsp;&nbsp;Candidate &nbsp;&nbsp;&nbsp;&nbsp;
                                  </label>                      
                                  <label class="btn btn-secondary">
                                    <input type="radio" name="role_id" wire:model.defer="state.role" value="admin" id="option3" class=""> &nbsp; &nbsp;&nbsp;Administrator &nbsp;&nbsp;&nbsp;&nbsp;
                                  </label>                      
                                </div>
                                 @error('role')<div class="text-danger"> {{ $message }}</div> @enderror                                   
                                 
                              </div>               
                                
                        </div>   
                    </form>         
                </div>
                <div class="modal-footer border border-0">
                    <button type="button" wire:click="cancel()" class="btn btn-link text-success" data-dismiss="modal">Cancel</button>
                    <button type="button"  wire:click.prevent="storeUser()" class="btn btn-success rounded-pill">Save</button>
                </div>        
            </div>
        </div>
    </div>
      <!-- Modal for USER Edit-->

    <div wire:ignore.self class="modal fade animate" data-backdrop="static" id="userModal" tabindex="-1" role="dialog" aria-labelledby="userModal" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="userModalLabel">Update User</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>        
                <div class="modal-body">   
                    <form autocomplete="off">      
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="Fname" class="font-weight-bold">First Name</label>
                                <input type="text" wire:model.defer="state.fname" class="form-control @error('fname') is-invalid @enderror" id="fname">                    
                                @error('fname') <div class="invalid-feedback"> {{ $message }}</div> @enderror
                            </div>
                            <div class="form-group col-md-6">
                                <label for="lname" class="font-weight-bold">Last Name</label>
                                <input type="text" wire:model.defer="state.lname" class="form-control @error('lname') is-invalid @enderror" >
                                @error('lname') <div class="invalid-feedback"> {{ $message }}</div> @enderror
                            </div>
                            <div class="form-group col-lg-12">
                                <label for="email" class="font-weight-bold">Email</label>
                                <input type="text" wire:model.defer="state.email" class="form-control @error('email') is-invalid @enderror">
                                @error('email') <div class="invalid-feedback"> {{ $message }}</div> @enderror
                            </div>              
                                
                        </div>   
                    </form>         
                </div>
                <div class="modal-footer border border-0">
                    <button type="button" wire:click="cancel()" class="btn btn-link text-success" data-dismiss="modal">Cancel</button>
                    <button type="button"  wire:click.prevent="updateUser()" class="btn btn-success rounded-pill">Save</button>
                </div>        
            </div>
        </div>
    </div>
</div>
