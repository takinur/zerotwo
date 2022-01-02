
<div>
  <!-- Modal for USER -->
<div wire:ignore.self class="modal fade animate" id="userModal" tabindex="-1" role="dialog" aria-labelledby="userModal" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="userModalLabel">Update Profile</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>        
        <div class="modal-body">   
            <form autocomplete="off">      
                <div class="form-row">
                  <div class="form-group col-md-6">
                    <label for="Fname" class="font-weight-bold">First Name</label>
                    <input type="text" wire:model.defer="state.fname" class="form-control @error('fname') is-invalid @enderror" id="fname" >                    
                     @error('fname') <div class="invalid-feedback"> {{ $message }}</div> @enderror
                  </div>
                  <div class="form-group col-md-6">
                    <label for="lname" class="font-weight-bold">Last Name</label>
                    <input type="text" wire:model.defer="state.lname" class="form-control @error('lname') is-invalid @enderror" id="lname" >
                     @error('lname') <div class="invalid-feedback"> {{ $message }}</div> @enderror
                  </div>
                  <div class="form-group col-lg-12">
                    <label for="address" class="font-weight-bold">Address</label>
                    <input type="text" wire:model.defer="state.address" class="form-control @error('address') is-invalid @enderror" id="address" >
                     @error('address') <div class="invalid-feedback"> {{ $message }}</div> @enderror
                  </div>
                  <div class="form-group col-md-6">
                    <label for="phone" class="font-weight-bold">Phone</label>
                    <input type="text" wire:model.defer="state.phone" class="form-control @error('phone') is-invalid @enderror" id="phone" >                    
                     @error('phone') <div class="invalid-feedback"> {{ $message }}</div> @enderror
                  </div>
                  <div class="form-group col-md-6">
                    <label for="username" class="font-weight-bold">Username</label>
                    <input type="text" wire:model.defer="state.username" class="form-control @error('username') is-invalid @enderror" id="username" >
                     @error('username') <div class="invalid-feedback"> {{ $message }}</div> @enderror
                  </div>
                  <div class="form-group col-lg-12">
                    <label for="profession" class="font-weight-bold">Profession</label>
                    <input type="text" wire:model.defer="state.profession" class="form-control @error('profession') is-invalid @enderror" id="profession" >
                     @error('profession') <div class="invalid-feedback"> {{ $message }}</div> @enderror
                  </div>
                </div>   
            </form>         
        </div>
        <div class="modal-footer border border-0">
          <button type="button" wire:click.prevent="cancel()" class="btn btn-link text-success" data-dismiss="modal">Cancel</button>
          <button type="button"  wire:click.prevent="updateUser()" class="btn btn-success rounded-pill">Save</button>
        </div>
    
      </div>
    </div>
  </div>
  <!--Description-->
  <div wire:ignore.self class="modal fade animate" id="desModal" tabindex="-1" role="dialog" aria-labelledby="desModal" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="desModalLabel">Overview</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>        
        <div class="modal-body">   
            <div class="mb-4">
              <strong class="mb-2"> Use this space to show employers you have the skills and experience they're looking for.</strong>

              <li>Describe your strengths and skills</li>
              <li>Highlight projects, accomplishments and education</li>
              <li>Keep it short and make sure it's error-free</li>
            </div>
            <form autocomplete="off">      
                <div class="mb-3">
                  <textarea class="form-control overflow-auto @error('description') is-invalid @enderror"  wire:model.defer="state.description"  placeholder="Example: I am Python Developer with Bechalor degree of Science" rows="6" style="resize: none;" ></textarea>
                  @error('description') <div class="invalid-feedback"> {{ $message }}</div> @enderror
                </div>
            </form>         
        </div>
        <div class="modal-footer border border-0">
          <button type="button" wire:click.prevent="cancel()" class="btn btn-link text-success" data-dismiss="modal">Cancel</button>
          <button type="button"  wire:click.prevent="updateDes()" class="btn btn-success rounded-pill">Save</button>
        </div>    
      </div>
    </div>
  </div>
  <!--Socials-->
  <div wire:ignore.self class="modal fade animate" id="socialModal" tabindex="-1" role="dialog" aria-labelledby="socialModal" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="socialModalLabel">Social Media</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>        
        <div class="modal-body">   
          <form autocomplete="off">  
              <div class="form-row">
                <div class="form-group col-lg-12">
                  <label for="sname" class="font-weight-bold">Name</label>
                  <input type="text" wire:model.defer="state.sname" placeholder="FACEBOOK" class="form-control @error('sname') is-invalid @enderror" id="sname" >                    
                   @error('sname') <div class="invalid-feedback"> {{ $message }}</div> @enderror
                </div>
                <div class="form-group col-lg-12">
                  <label for="slink" class="font-weight-bold">Link</label>
                  <input type="text" wire:model.defer="state.slink" placeholder="fb.com/John" class="form-control @error('slink') is-invalid @enderror" id="slink" >
                   @error('slink') <div class="invalid-feedback"> {{ $message }}</div> @enderror
                </div>
              </div>
          </form>
        </div>
        <div class="modal-footer border border-0">
          <button type="button" wire:click.prevent="cancel()" class="btn btn-link text-success" data-dismiss="modal">Cancel</button>
          <button type="button"  wire:click.prevent="storeSocial()" class="btn btn-success rounded-pill">Save</button>
        </div>    
      </div>
    </div>
  </div>
  <!--Image/Avatar-->
  <div wire:ignore.self class="modal fade animate" id="avatarModal" tabindex="-1" role="dialog" aria-labelledby="avatarModal" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="avatarModalLabel">Profile Picture</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>        
        <div class="modal-body">   
          <form autocomplete="off">  
            <div class="avatar-container">
              <div id="avatar">
                @if ($avatar)
                   <img src="{{ $avatar->temporaryUrl() }}" width="150px">
                @endif                  
              </div>                
            </div>
          <div class="input-group mt-3">
            <div class="input-group-prepend">
              <span class="input-group-text" id="inputGroupFileAddon01">Avatar</span>
            </div>
            <div class="custom-file">
              <input type="file" class="custom-file-input @error('avatar') is-invalid @enderror" wire:model.defer="avatar" aria-describedby="avatar">
              <label class="custom-file-label" for="avatar">Select File</label>                          
            </div>                
          </div>
          <div wire:loading wire:target="avatar" class="spinner-border text-secondary" role="status"><span class="sr-only">Uploading...</span></div>
          @error('avatar') <div class="text-danger">{{ $message }}</div> @enderror 
          </form>
        </div>
        <div class="modal-footer border border-0">
          <button type="button" wire:click.prevent="cancel()" class="btn btn-link text-success" data-dismiss="modal">Cancel</button>
          <button type="button"  wire:click.prevent="addAvatar()" class="btn btn-success rounded-pill">Save</button>
        </div>    
      </div>
    </div>
  </div>
  <!--exps-->
<div wire:ignore.self class="modal fade animate" id="expModal" tabindex="-1" role="dialog" aria-labelledby="expModal" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="expModalLabel">Add Employement</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>        
      <div class="modal-body">   
        <form autocomplete="off"> 
            <div class="form-row">
              <div class="form-group col-lg-12">
                <label for="comname" class="font-weight-bold">Company Name</label>
                <input type="text" wire:model.defer="state.comname" class="form-control @error('comname') is-invalid @enderror" id="comname" >                    
                 @error('comname') <div class="invalid-feedback"> {{ $message }}</div> @enderror
              </div>
              <div class="form-group col-lg-12">
                <label for="jtitle" class="font-weight-bold">Title</label>
                <input type="text" wire:model.defer="state.jtitle"  class="form-control @error('jtitle') is-invalid @enderror" id="jtitle" >
                 @error('jtitle') <div class="invalid-feedback"> {{ $message }}</div> @enderror
              </div>
            </div>
            <div class="form-row">
              <div class="form-group col-md-6">
                <label for="sdate" class="font-weight-bold">Start Date</label>
                <input type="text" wire:model.defer="state.sdate" class="form-control @error('sdate') is-invalid @enderror" id="sdate" > 
                <small id="helpId" class="form-text text-muted">Example: 15-12-2017</small>                   
                 @error('sdate') <div class="invalid-feedback"> {{ $message }}</div> @enderror
              </div>
              <div class="form-group col-md-6">
                <label for="edate" class="font-weight-bold">End Date</label>
                <input type="text" wire:model.defer="state.edate"  class="form-control @error('edate') is-invalid @enderror" id="edate" >
                <small id="helpId" class="form-text text-muted">Example: 20-07-2019</small>
                 @error('edate') <div class="invalid-feedback"> {{ $message }}</div> @enderror
              </div>
            </div>          
          <div class="form-row ml-1">
            <div class="custom-control custom-checkbox">
              <input type="checkbox" value=""  wire:model.defer="state.cjob" class="custom-control-input" id="customCheck1">
              <label class="custom-control-label" for="customCheck1">I currently work here!</label>
            </div>
          </div>
        </form>
      </div>
      <div class="modal-footer border border-0">
        <button type="button" wire:click.prevent="cancel()" class="btn btn-link text-success" data-dismiss="modal">Cancel</button>
        <button type="button"  wire:click.prevent="storeExp()" class="btn btn-success rounded-pill">Save</button>
      </div>    
    </div>
  </div>
</div>
  <!--Educatians-->
<div wire:ignore.self class="modal fade animate" id="eduModal" tabindex="-1" role="dialog" aria-labelledby="eduModal" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="eduModalLabel">Add Education</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>        
      <div class="modal-body">   
        <form autocomplete="off">      
            <div class="form-row">
              <div class="form-group col-lg-12">
                <label for="schoolname" class="font-weight-bold">School</label>
                <input type="text" placeholder="Ex: Daffodil University" wire:model.defer="state.schoolname" class="form-control @error('schoolname') is-invalid @enderror" id="schoolname" >                    
                 @error('schoolname') <div class="invalid-feedback"> {{ $message }}</div> @enderror
              </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                  <label for="attndate" class="font-weight-bold">Date Attended</label>
                  <input type="text" wire:model.defer="state.attndate" class="form-control @error('attndate') is-invalid @enderror" id="attndate" > 
                  <small id="helpId" class="form-text text-muted">Example: 15-12-2017</small>                   
                  @error('attndate') <div class="invalid-feedback"> {{ $message }}</div> @enderror
                </div>
                <div class="form-group col-md-6">
                  <label for="expdate" class="font-weight-bold">To Date (or expected)</label>
                  <input type="text" wire:model.defer="state.expdate"  class="form-control @error('expdate') is-invalid @enderror" id="expdate" >
                  <small id="helpId" class="form-text text-muted">Example: 20-07-2019</small>
                  @error('expdate') <div class="invalid-feedback"> {{ $message }}</div> @enderror
                </div>
            </div>
            <div class="form-row">
                  <div class="form-group col-lg-12">
                    <label for="degree" class="font-weight-bold">Degree</label>
                    <input type="text" placeholder="Ex: Bechalors" wire:model.defer="state.degree" class="form-control @error('degree') is-invalid @enderror" id="schoolname" >                    
                     @error('degree') <div class="invalid-feedback"> {{ $message }}</div> @enderror
                  </div>
                  <div class="form-group col-lg-12">
                    <label for="astudy" class="font-weight-bold">Area of study</label>
                    <input type="text" placeholder="Ex: Computer Science" wire:model.defer="state.astudy"  class="form-control @error('astudy') is-invalid @enderror" id="jtitle" >
                     @error('astudy') <div class="invalid-feedback"> {{ $message }}</div> @enderror
                  </div>
            </div>                 
        </form>
      </div>
      <div class="modal-footer border border-0">
        <button type="button" wire:click.prevent="cancel()" class="btn btn-link text-success" data-dismiss="modal">Cancel</button>
        <button type="button"  wire:click.prevent="storeEdu()" class="btn btn-success rounded-pill">Save</button>
      </div>    
    </div>
  </div>
</div>
  <!--Skills-->
<div wire:ignore.self class="modal fade animate" id="skillModal" tabindex="-1" role="dialog" aria-labelledby="skillModal" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="skillModalLabel">Skills</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>        
      <div class="modal-body">   
        <form autocomplete="off">   
            <div class="form-group">
              <label for="skillName" class="font-weight-bold">Skill Name:</label>
                <input type="text" placeholder="Ex: PHP" wire:model.defer="state.skillName" class="form-control @error('skillName') is-invalid @enderror" id="skillName" >                    
                 @error('skillName') <div class="invalid-feedback"> {{ $message }}</div> @enderror
            </div> 

            <div class="form-group">  
              <div class="range-slider">
                <label for="skillLevel" class="font-weight-bold">Skill Level:</label>
                <input class="custom-range range-slider__range" type="range" wire:model="state.slevel" step="10" min="0" max="100" id="skillLevel">
                <span class="range-slider__value">0</span>              
              </div>            
            </div>
        </form>
      </div>
      <div class="modal-footer border border-0">
        <button type="button" wire:click.prevent="cancel()" class="btn btn-link text-success" data-dismiss="modal">Cancel</button>
        <button type="button"  wire:click.prevent="storeSkill()" class="btn btn-success rounded-pill">Save</button>
      </div>    
    </div>
  </div>
</div>

  <!--Language-->
  <div wire:ignore.self class="modal fade animate" id="langModal" tabindex="-1" role="dialog" aria-labelledby="langModal" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" >Language</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>        
        <div class="modal-body">   
            <form autocomplete="off">
              @csrf 
              @if ($updateMode == true)
                    @foreach ($lstate as $lng)
                      <label for="lang" class="font-weight-bold"> {{ $lng->name }}</label>                            
                        <div class="input-group mb-3">                      
                          <select class="custom-select" id="lang" wire:model="selectedFluency">                    
                            @foreach ($fluency as $fl)
                            <option class="font-weight-bold" value="{{ $fl->id }}">{{ $fl->pro }}</option>
                            @endforeach                    
                          </select>
                          <div class="input-group-append">
                            <a class="btn btn-outline-secondary" wire:click="deleteLang({{ $lng->id }})" type="button">Delete</a>
                          </div>
                        </div>
                      </form>
                    </div>
                    <div class="modal-footer border border-0">
                      <button type="button" wire:click.prevent="cancel()" class="btn btn-link text-success" data-dismiss="modal">Cancel</button>
                      <button type="button"  wire:click.prevent="updateLang()" class="btn btn-success rounded-pill">Save</button>
                    </div>    
                   @endforeach
              @else
                    <h4 class="text-center text-success font-weight-bold">Add new Language </h4> 
                    <div class="form-group col-lg-12">
                      <label for="langname" class="font-weight-bold">Language</label>
                        <input type="text" wire:model.defer="lstate.langname" class="form-control @error('langname') is-invalid @enderror" id="langname" >                    
                      @error('langname') <div class="invalid-feedback"> {{ $message }}</div> @enderror
                    </div>
                    <label for="lang" class="font-weight-bold ml-3"> Proficiency</label>                            
                    <div class="input-group col-lg-12">                      
                      <select class="custom-select" id="lang" wire:model="selectedFluency" required>    
                        <option selected> --Select-- </option>                
                        @foreach ($fluency as $fl)
                        <option class="font-weight-bold" value="{{ $fl->id }}">{{ $fl->pro }}</option>
                        @endforeach                    
                      </select>                      
                    </div>
                  </form>
                </div>
                  <div class="modal-footer border border-0">
                    <button type="button" wire:click.prevent="cancel()" class="btn btn-link text-success" data-dismiss="modal">Cancel</button>
                    <button type="button"  wire:click.prevent="storeLang()" class="btn btn-success rounded-pill">Save</button>
                  </div>    
              @endif                                      
      </div>
    </div>
  </div>
</div>








