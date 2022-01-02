<div>
    <div class="container mb-3" style="border-top: 2px solid #fff">
        <div class="main-body">        
              <div class="row gutters-sm mt-2">
                <div class="col-md-4 mb-3">
                  <div class="card">
                    <div class="card-body shadow p-3 bg-ligt border-0 rounded">
                      <div class="d-flex flex-column align-items-center text-center">
                        <img src="{{ asset($data->image_path ? 'storage/'.$data->image_path : 'storage/images/avatar.png') }}" onerror="this.onerror=null;this.src='{{ asset('storage/images/avatar.png') }}';" class="rounded-circle" width="150">
                        <div class="mt-3">
                          <h4>{{ $data->user->fname .' '. substr($data->user->lname, 0, 1) .'.' }}</h4>
                          <p class="text-secondary mb-1">{{ $data->profession }}</p>
                          <p class="text-muted font-size-sm text-uppercase"><i class="fas fa-map-marker-alt"></i> {{ $country->short_code }}</p>
                          @if ($invStatus == 1)
                            <button class="btn btn-success disabled rounded-pill">Already Invited</button>
                          @elseif($invStatus == 2)
                            <button class="btn btn-dark disabled rounded-pill">Pending Interview</button>
                          @elseif ($invStatus == 3)
                            <button class="btn btn-dark disabled rounded-pill">Rejected</button>
                          @else
                            <button class="btn btn-outline-success rounded-pill" wire:click.prevent="invite({{ $data->id }})">Invite for Interview</button>
                          @endif
                          
                        </div>
                      </div>
                    </div>
                  </div>    
                  <!-- Language --->              
                  <div class="card mt-3 shadow bg-ligt border-0 rounded">
                    <ul class="list-group list-group-flush">
                      <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap bg-info">
                        <h5 class="d-flex align-items-center font-weight-bold text-white">Language Proficiency</h5>
                      </li>
                      @forelse ($langs as $lang)
                        <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                            <strong>{{ $lang->name }}</strong> <span> {{ $lang->pro }} </span>
                        </li>
                      @empty
                        <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                          <strong> - </strong> <span> - </span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                          <strong> - </strong> <span> - </span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                          <strong> - </strong> <span> - </span>
                        </li>
                      @endforelse
                    </ul>
                  </div>
                  <!-- Social Links -->
                  <div class="card mt-3 shadow bg-ligt border-0 rounded">
                    <ul class="list-group list-group-flush">
                      <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap bg-info">
                        <h5 class="d-flex align-items-center font-weight-bold text-white">Social Media</h5>                        
                      </li>
                      @forelse ($data->socials as $slink)
                        <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                          <h6 class="mb-0">{{ $slink->name }}</h6>
                          <span class="text-secondary">{{ $slink->link }}</span>
                        </li>
                      @empty
                        <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                          <h6 class="mb-0"> - </h6>
                          <span class="text-secondary"> - </span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                          <h6 class="mb-0"> - </h6>
                          <span class="text-secondary"> - </span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                          <h6 class="mb-0"> - </h6>
                          <span class="text-secondary"> - </span>
                        </li>
                      @endforelse
                    </ul>
                  </div>
                </div>
                <!--Informations -->
                <div class="col-md-8 shadow bg-white border-0 rounded">
                  <div class="card border-0" >
                    <div class="card-body">
                      <div class="row">
                        <div class="col-sm-3">
                          <h6 class="mb-0">Full Name</h6>
                        </div>
                        <div class="col-sm-9 text-secondary">
                            {{ $data->user->fname .' '. $data->user->lname }}
                        </div>
                      </div>
                      <hr>
                      <div class="row">
                        <div class="col-sm-3">
                          <h6 class="mb-0">Email</h6>
                        </div>
                        <div class="col-sm-9 text-secondary">
            
                             {{ $data->user->email }}
                           
                        </div>
                      </div>
                      <hr>
                      <div class="row">
                        <div class="col-sm-3">
                          <h6 class="mb-0">Phone</h6>
                        </div>
                        <div class="col-sm-9 text-secondary">
                          
                             {{ $data->phone }}
                       
                        </div>
                      </div>
                      <hr>
                      <div class="row">
                        <div class="col-sm-3">
                          <h6 class="mb-0">Address</h6>
                        </div>
                        <div class="col-sm-9 text-secondary">
                          {{ $data->address }}
                        </div>
                      </div>
                      <hr>
                      <div class="row">
                        <div class="col-sm-3">
                          <h6 class="mb-0">Country</h6>
                        </div>
                        <div class="col-sm-9 text-secondary">
                          {{ $country->name }}
                        </div>
                      </div>                      
                    </div>
                  </div>
                  <hr>
                    <!---- Description -->
                <div class="col-mx-auto" >
                  <div class="card mb-4 border-0">
                    <div class="card-body" >
                        {{ $data->description }}
                    </div>
                  </div>
                  <hr>
                  <div class="row gutters-sm ">
                    <div class="col-sm-6">
                      <div class="card h-100 border-0">
                        <div class="card-body border-0 ">
                          <h5 class="d-flex align-items-center mb-3 font-weight-bold text-dark">Skills</h5>
                          <hr> <!--Skills-->
                          @forelse ($data->skills as $skill)
                            <small>{{ $skill->name }}</small> <small class="float-right">{{ $skill->level }}%</small>
                            <div class="progress mb-3" style="height: 5px">
                              <div class="progress-bar bg-primary" role="progressbar" style="width: {{ $skill->level }}%" aria-valuenow="{{ $skill->level }}" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                          @empty
                              <small> - </small> <small class="float-right"> - </small> <br>
                              <small> - </small> <small class="float-right"> - </small> <br>
                              <small> - </small> <small class="float-right"> - </small> <br>
                              <small> - </small> <small class="float-right"> - </small>
                          @endforelse
                        </div>
                      </div>
                    </div>
                                   <!--educations -->
                    <div class="col-sm-6 ">
                      <div class="card h-100 border-0">
                        <div class="card-body">
                          <h5 class="d-flex align-items-center mb-3 font-weight-bold text-dark">Educations</h5>
                          <hr>
                          @forelse ($data->Edu as $edu )
                            <span class="font-weight-bold mt-2"> {{ $edu->institution }} </span><br>
                            <span> {{ $edu->degree }} </span> <br>
                            <span> {{ $edu->study_area }} </span> <br>
                            <span> {{ substr($edu->attend_date, 0, 4)  .'-'. substr($edu->complete_date, 0,4) }} </span> <br>
                          @empty
                            <span class="font-weight-bold mt-2"> - </span> <br>
                            <span> - </span> <br>
                            <span> - </span> <br>
                            <span> - - </span> <br>
                          @endforelse                           
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <hr>
                                                <!--Experiences -->
                <div class="col-lg-1-12 border-0">
                  <div class="card mb-4 border-0">
                    <div class="card-header bg-transparent border-0">
                      <h5 class="d-flex align-items-center mb-3 font-weight-bold text-dark">Employment history</h5>                      
                    </div>
                    <span class="border-bottom col-sm-3 ml-3"> </span>
                    <div class="card-body">
                      <div class="row">
                        <div class="col-md-auto">                                                 
                          @forelse ($data->Experience as $exp )
                            <div class="mt-3 text-secondary font-weight-bold"> {{ $exp->job_title . ' | '. $exp->company_name }} 
                              <i class="text-success fas {{ $exp->is_current_job ? 'fa-check-circle' : ''  }}"></i> <br> 
                            <small> {{ substr($exp->start_date, 0, 7)  .' TO '. substr($exp->end_date, 0,7) }} </small> </div>
                          @empty
                            <p class="mb-3 text-dark "> -</p>   
                          @endforelse                         
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
        </div>
           
</div>
