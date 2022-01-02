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
                        <a id="users" data-toggle="collapse" href="#usersCollapse" role="button" aria-expanded="false" aria-controls="usersCollapse"><i class="fa fa-users-cog fa-lg mr-2"></i>Invitation to Interview</a>
                    </li>                    
                    <li>
                        <a href="#pageSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"><i class="fas fa-cogs fa-lg mr-2"></i>System</a>
                        <ul class="collapse list-unstyled" id="pageSubmenu">
                            <li>
                                <a  href="/profile" role="button" >Manage Profile</a>
                            </li>
                            <li>
                                <a href="/contact">Find Support</a>
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
                        <a href="{{ route('home') }}" class="font-weight-bolder text-uppercase">Zero Two Home</a>
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
                                        <a class="nav-link" href="#"><i class="fas fa-user-graduate"></i> {{ Auth::user()->fname ." ". Auth::user()->lname}}</a>
                                    </li>                            
                                </ul>
                            </div>
                        </div>
                    </nav>
                    <!--Stats---->
                    <div class="collapse show d-flex justify-content-center" id="statsCollapse"> 
                        <div class="row p-3">
                            <div class="col mt-2"> <!--Profile Views -->
                                <div class="card radius-10 bg-success" style="max-width: 14rem; height:150px">
                                    <div class="card-body">
                                        <div class="d-flex">                            
                                            <h4 class="mb-0 text-white">Profile Views</h4>
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
                            <div class="col mt-2"> <!--Profile Progress -->
                                <div class="card radius-10 bg-success" style="max-width: 14rem; height:150px">
                                    <div class="card-body">
                                        <div class="d-flex">                            
                                            <h4 class="mb-2 text-white">Profile Complete</h4>
                                        </div>
                                        <div class="progress mt-3" style="height: 25px;">
                                            <div class="progress-bar bg-info" role="progressbar" style="width: {{ $profileComplete }}%;" aria-valuenow="{{ $profileComplete }}" aria-valuemin="0" aria-valuemax="100">{{ $profileComplete }}%</div>
                                        </div>
                                    </div>
                                </div>
                            </div>                             
                            <div class="col mt-2">
                                <div class="card radius-10 bg-success" style="max-width: 14rem;height:150px">
                                    <div class="card-body">
                                        <div class="d-flex">                            
                                            <h4 class="mb-0 text-white">Invitations</h4>
                                            <span class="fas fa-envelope-open fa-4x text-light ml-2 float-right" style="opacity: 0.6"></span>
                                        </div>
                                        <div class="progress my-3 bg-light-transparent" style="height:3px;">
                                            <div class="progress-bar bg-white" role="progressbar" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                        <div class="d-flex justify-content-center align-items-center text-white">
                                            <h5 class="mb-0 text-white">{{ $totalInv }}</h5>
                                        </div>
                                    </div>
                                </div>
                            </div>                              
                            <div class="col mt-2">
                                <div class="card radius-10 bg-success" style="max-width: 14rem; height:150px">
                                    <div class="card-body">
                                        <div class="d-flex">                            
                                            <h4 class="mb-0 text-white">User Type</h4>
                                            <span class="fas fa-user-graduate fa-4x text-light ml-2 float-right" style="opacity: 0.6"></span>
                                        </div>
                                        <div class="progress my-3 bg-light-transparent" style="height:3px;">
                                            <div class="progress-bar bg-white" role="progressbar" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                        <div class="d-flex justify-content-center align-items-center text-white">
                                            <h5 class="mb-0 text-white">{{ 'Candidate' }}</h5>
                                        </div>
                                    </div>
                                </div>
                            </div>                                                                         
                        </div>                    
                    </div>
                       <!----------------------------Invitations------------------- -->   
                    <div class="row p-4 collapse" id="usersCollapse">
                        <div class="col-lg-12 shadow bg-white border-0 rounded">
                                <div class="col">
                                    <div class="input-group mb-3 mx-3 text-center justify-content-center">
                                        <p class="font-weight-bold h4 mt-2" for="search">Invitations</p>
                                    </div>
                                </div>   
                            <div class="col-lg-12 d-flex justify-content-center mb-4">
                            @forelse ($invites as $invite)
                                <div class="card text-center m-2" style="width: 18rem;">
                                    <div class="card-header bg-success text-white" >
                                      You received New Invitation!
                                    </div>
                                    <div class="card-body text-left">
                                      <h5 class="card-title"><b>From </b> {{ $invite->employer->user->fname . ' ' . $invite->employer->user->lname }}</h5>
                                      <p class="card-text"><b>Company:</b>{{ $invite->employer->company_name }} <br>
                                        <b>Website:</b>{{ $invite->employer->company_website }}                                        
                                      </p>
                                    </div>
                                    <div class="card-footer bg-light">
                                        @if ($invite->status->id == 1)
                                            <button type="button" wire:click.prevent="accept({{ $invite->employer->id }})" class="btn btn-success">Accept</button>
                                            <button type="button" wire:click.prevent="reject({{ $invite->employer->id }})" class="btn btn-outline-danger">Reject</button>
                                        @elseif($invite->status->id == 2)
                                            <button type="button" class="btn btn-dark disabled">Interview Pending</button>
                                        @else
                                            <button type="button" class="btn btn-danger rounded-pill disabled">Interview Declined</button>
                                        @endif
                                        
                                    </div>
                                  </div>
                            @empty
                                <div class="card text-center" style="width: 18rem;">
                                    <div class="card-header bg-success text-white" >
                                      No Pending Invitations!
                                    </div>
                                    <div class="card-body text-left">
                                      <h2>  Please Check again Later! </h2>
                                  </div>
                            @endforelse
                            </div>                             
                        
                        </div>
                    </div> 
                </div>    
    </div>       
</div>
    