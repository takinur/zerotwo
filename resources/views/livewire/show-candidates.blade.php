<div>
<div class="container pt-4">
     <!-- Preloader --
  <div id="preloader"></div> -->
    <!--Search-->
    <div class="row">
        <div class="input-group mb-3 mx-3">
            <label class="font-weight-bold mr-3 mt-1 h4" for="search">Find Candidates:</label>
            <input wire:model="keyword" id="search" type="text" class="form-control" placeholder="Search Skill or Profession" aria-label="Search" aria-describedby="button-addon2">
            <div class="input-group-append">
              <button class="btn btn-success" type="button" id="button-addon2"><i class="fas fa-search"></i></button>
            </div>
        </div>
    </div>
    <!-- Profiles -->
        <div class="row">
            @forelse ($data as $row )
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 mt-4">       
                    <div class="card" style="height: 25rem;">
                        <div class="bg-white rounded d-flex justify-content-center py-3 ">
                            <img src="{{ asset($row->image_path ? 'storage/'.$row->image_path : 'storage/images/avatar.png') }}" width="100" onerror="this.onerror=null;this.src='{{ asset('storage/images/avatar.png') }}';" class="img-fluid rounded-circle mb-4 img-thumbnail shadow-sm"> 
                        </div>
                    
                            <h5 class="card-title text-center font-weight-bold">{{ $row->user->fname .' '. substr($row->user->lname, 0, 1) .'.' }}</h5>
                            <h5 class="card-title text-center ">{{ $row->profession}}</h5>
                        
                        <div class="card-body">                        
                            <div class="card-text">
                                <span class="font-weight-bold">Skills: </span>
                                @forelse ($row->skills as $skill )
                                    <span class="badge badge-secondary badge-pill"> {{ $skill->name }} </span>
                                @empty
                                    <span class="badge badge-secondary badge-pill"> No skill added </span>
                                @endforelse                           
                            </div>
                        </div>
                        <div class="card-footer bg-transparent border-0 text-center"> 
                            @if (Auth::check() && Auth::user()->hasRole('employer') || Auth::check() && Auth::user()->hasRole('admin') )
                                <a class="btn btn-success rounded-pill" href="/candidates/{{ $row->username }}">See more</a> 
                            @else
                                <a class="btn btn-success rounded-pill" data-toggle="modal" data-target="#loginModal" href="">See more</a> 
                            @endif
                            
                        </div>
                    </div>
                </div>	
            @empty
             <!-- No Candidate -->
                    <div class="col-lg-12 text-center  justify-content-md-center">
                        <p class="display-3 font-weight-bold"> No Candidate Found! </p>
                        <p class="text-muted"> Try diffrent Skill or Profession! </p>
                    </div>

            @endforelse	           
        </div>
        <div class="col mt-3  d-flex justify-content-end text-end">
            {{ $data->links('vendor.pagination.bootstrap-4') }}
        </div>		 
</div>

   
</div>
   
   
   
