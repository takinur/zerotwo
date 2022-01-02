<div>
<div class="container" style=" border-top: 2px solid #fff">
        <div class="main-body" >    
          @if (session()->has('message'))
            <div class="alert bg-success text-white alert-dismissible fade show text-center" id="slert" role="alert">
                <strong> {{ session('message') }} </strong>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>      
           @endif    
   
              <div class="row gutters-sm mt-2">
                <div class="col-md-4 mb-3">
                  <div class="card">
                    <div class="card-body">
                      <div class="d-flex flex-column align-items-center text-center">
                         <a href="" data-toggle="modal" data-target="#avatarModal"> <img id="avatar" src="{{ asset('storage/'.$profile->image_path) }}"  class="">
                          <span class="badge badge-light rounded-circle" id="editIndicator"> <i class="fas fa-pencil-alt"> </i></span>
                        </a>
                        <div class="mt-3">
                          <h4>{{ $profile->user->fname .' '. substr($profile->user->lname, 0, 1) .'.' }}</h4>
                          <p class="text-secondary mb-1">{{ $profile->profession }}</p>
                          <p class="text-muted font-size-sm"><i class="fas fa-at"></i> {{ $profile->username }}</p>
                          <a href="{{ route('dashboard') }}" class="btn btn-outline-success rounded-pill">DASHBOARD</a>
                        </div>
                      </div>
                    </div>
                  </div>    
                  <!-- Language --->              
                  <div class="card mt-3">
                    <ul class="list-group list-group-flush">
                      <li class="list-group-item bg-info">
                        <h5 class=" font-weight-bold text-white">Language Proficiency
                          <a class="btn btn-primary rounded-circle float-right text-white" data-toggle="modal" data-target="#langModal"><i class="fas fa-plus"></i></a>
                        </h5>
                      </li>
                      @forelse ($lan as $lang)
                        <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                            <strong>{{ $lang->name }}</strong> <span> {{ $lang->pro }}<a class="btn btn-link text-dark fas fa-pencil-alt" data-toggle="modal" wire:click="editLang({{ $lang->id }})" data-target="#langModal"></a> </span>
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
                  <div class="card mt-3">
                    <ul class="list-group list-group-flush">
                      <li class="list-group-item flex-wrap bg-info">
                        <h5 class="font-weight-bold text-white">Social Media 
                          <a class="btn btn-primary rounded-circle float-right text-white" data-toggle="modal" data-target="#socialModal"><i class="fas fa-plus"></i></a>                        
                        </h5>
                        </li>
                      @forelse ($profile->socials as $slink)
                        <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                          <h6 class="mb-0">{{ $slink->name }}</h6>
                          <span class="text-secondary">{{ $slink->link }}  <a class="btn btn-link text-dark fas fa-trash-alt" wire:click="deleteSocial({{ $slink->id }})" ></a></span>
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
                <div class="col-md-8">
                  <div class="card mb-3">
                    <div class="card-body">
                      <div class="row">
                        <div class="col-sm-3 ">
                          <h6 class="mb-0">Full Name</h6>
                        </div>
                        <div class="col-sm-9 text-secondary">
                            {{ $profile->user->fname .' '. $profile->user->lname }}
                            <a class="badge badge-light rounded-circle float-right" href="#" data-toggle="modal" wire:click="editUser({{ $profile->user_id }})" data-target="#userModal"><i class="fas fa-pencil-alt fa-lg"></i></a>
                        </div>
                      </div>
                      <hr>
                      <div class="row">
                        <div class="col-sm-3">
                          <h6 class="mb-0">Email</h6>
                        </div>
                        <div class="col-sm-9 text-secondary">
            
                             {{ $profile->user->email }}
                           
                        </div>
                      </div>
                      <hr>
                      <div class="row">
                        <div class="col-sm-3">
                          <h6 class="mb-0">Phone</h6>
                        </div>
                        <div class="col-sm-9 text-secondary">
                          
                             {{ $profile->phone }}
                       
                        </div>
                      </div>
                      <hr>
                      <div class="row">
                        <div class="col-sm-3">
                          <h6 class="mb-0">Address</h6>
                        </div>
                        <div class="col-sm-9 text-secondary">
                          {{ $profile->address }}
                        </div>
                      </div>
                      <hr>
                      <div class="row">
                        <div class="col-sm-3">
                          <h6 class="mb-0">Country</h6>
                        </div>
                        <div class="col-sm-9 text-secondary text-capitilize">
                          {{ $country->name  }}
                        </div>
                      </div>                      
                    </div>
                  </div>
                    <!---- Description -->
                <div class="col-mx-auto">
                  <div class="card mb-4">
                    <div class="card-header bg-transparent">
                      <div class="font-weight-bold text-dark">Description <a class="btn btn-outline-dark rounded-circle float-right" data-toggle="modal" wire:click="editDes({{ $profile->id }})" data-target="#desModal"><i class="fas fa-pencil-alt"></i></a> </div>                   
                    </div>
                    <div class="card-body">
                       {!! nl2br($profile->description) !!}
                    </div>
                  </div>
                  <div class="row gutters-sm">
                    <div class="col-sm-6 mb-3">
                      <div class="card h-100">
                        <div class="card-body">
                          <div class="mb-3 font-weight-bold text-dark">Skills  <a class="badge badge-light rounded-circle float-right" data-toggle="modal" href="#" data-target="#skillModal"><i class="fas fa-plus fa-lg"></i></a> </div>
                          <hr> 
                            <!--Skills-->
                          @forelse ($profile->skills as $skill)
                            <span>{{ $skill->name }}</span> <small class="float-right">{{ $skill->level }}% <a class="btn btn-link text-dark fas fa-trash-alt" wire:click="deleteSkill({{ $skill->id }})" ></a></small> 
                            <div class="progress mb-3" style="height: 5px">
                              <div class="progress-bar bg-primary" role="progressbar" style="width: {{ $skill->level }}%" aria-valuenow="{{ $skill->level }}" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            
                          @empty
                              <small> - </small> <small class="float-right"> - </small> <br>
                              <span class="font-weight-bold"> Add Some Skills </span> <div class="float-right h5"> <a class="badge badge-light rounded-circle" data-toggle="modal" href="#" data-target="#skillModal" href="#"><i class="fas fa-plus"></i></a> </div>
                              
                          @endforelse
                        </div>
                      </div>
                    </div>
                                   <!--educations -->
                    <div class="col-sm-6 mb-3">
                      <div class="card h-100">
                        <div class="card-body">
                          <div class="mb-3 font-weight-bold text-dark">Educations<a class="badge badge-light rounded-circle float-right" data-toggle="modal" href="#" data-target="#eduModal"><i class="fas fa-plus fa-lg"></i></a> </div>
                          <hr>
                          @forelse ($profile->Edu as $edu )
                            <span class="font-weight-bold mt-2"> {{ $edu->institution }} </span><a class="btn btn-link text-dark fas fa-trash-alt float-right " wire:click="deleteEdu({{ $edu->id }})" ></a><br>
                            <span> {{ $edu->degree }} </span> <br>
                            <span> {{ $edu->study_area }} </span> <br>
                            <span> {{ substr($edu->attend_date, 0, 4)  .'-'. substr($edu->complete_date, 0,4) }} </span> <br>
                          @empty
                            <span class="font-weight-bold mt-2"> - </span> <br>
                            <span> - </span> <br>
                            <span> - </span> <br>
                            <span class="font-weight-bold"> Add Educations </span> <div class="float-right h5"> <a class="badge badge-light rounded-circle" data-toggle="modal"  data-target="#eduModal"><i class="fas fa-plus"></i></a> </div>
                          @endforelse                           
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                                                <!--Experiences -->
                <div class="col-lg-1-12">
                  <div class="card mb-4">
                    <div class="card-header bg-transparent">                    
                      <div class="mb-3 font-weight-bold text-dark">Employment History  <a class="btn btn-outline-dark rounded-circle float-right" data-toggle="modal"  data-target="#expModal"><i class="fas fa-plus"></i></a> </div>                   
                    </div>
                    <div class="card-body">
                      <div class="row">
                        <div class="col-lg-12">                                                 
                          @forelse ($profile->Experience->sortByDesc('start_date') as $exp )
                            <div class="mt-3 text-secondary font-weight-bold"> {{ $exp->job_title . ' | '. $exp->company_name }} 
                              <i class="text-success fas {{ $exp->is_current_job ? 'fa-check-circle' : ''  }}"></i>  <a class="btn btn-link text-dark fas fa-trash-alt float-right " wire:click="deleteExp({{ $exp->id }})" ></a><br> 
                            <small> {{ substr($exp->start_date, 0, 7)  .' TO '. substr($exp->end_date, 0,7) }} </small> </div>
                          @empty
                            <p class="mb-2 text-dark ml-2"> - <a class="btn btn-link" data-toggle="modal"  data-target="#expModal">Add</a></p>                              
                          @endforelse                         
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
        </div>
        @include('livewire.update-user')
</div>
@section('scripts')
    @parent
    <script>     
      //Close Alert
      window.setTimeout(function() {
          $("#salert").fadeTo(500, 0).slideUp(500, function(){
            $("#salert").slideUp(500); 
          });
      }, 3000); 
    //Range Slider
            let rangeSlider = function(){
            let slider = $('.range-slider'),
            range = $('.range-slider__range'),
            value = $('.range-slider__value');
            
        slider.each(function(){

            value.each(function(){
            let value = $(this).prev().attr('value');
            $(this).html(value);
            });

            range.on('input', function(){
            $(this).next(value).html(this.value);
            });
        });
        };
        rangeSlider();

        //Show-Hide Modals
            window.addEventListener('hide-form', event => {
              $('#userModal').modal('hide');
              $('#desModal').modal('hide');
              $('#langModal').modal('hide');
              $('#socialModal').modal('hide');
              $('#expModal').modal('hide');
              $('#eduModal').modal('hide');
              $('#skillModal').modal('hide');
              $('#avatarModal').modal('hide');
              
            })       
    </script>
@endsection
</div>
