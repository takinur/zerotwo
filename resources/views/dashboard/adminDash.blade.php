@extends('dashboard.layout')
   

@section('content')

    @livewire('dash-admin')

@endsection

@section('scripts')
    @parent
    <script>             
        //Check cookie for pagination
        var x = getCookie('paginate');
            if (x == "true") {
              $(document).ready(function () {  
                  $('#statsCollapse').collapse('hide')           
                  $('#usersCollapse').collapse('show')             
                  $('#newsltrCollapse').collapse('hide')             
                  $('#contMailCollapse').collapse('hide')             
                  $('#errorlogCollapse').collapse('hide')             
                });               
            }
            else{
              $(document).ready(function () {  
                  $('#statsCollapse').collapse('show')                       
                });  
            }
        //GET Set cookie
        function setCookie(name,value) {
                    var expires = "";
                   
                        var date = new Date();
                        date.setTime(date.getTime() + (15*1000));
                        expires = "; expires=" + date.toUTCString();
                    
                    document.cookie = name + "=" + (value || "")  + expires + "; path=/";
                }

                function getCookie(name) {
                    var nameEQ = name + "=";
                    var ca = document.cookie.split(';');
                    for(var i=0;i < ca.length;i++) {
                        var c = ca[i];
                        while (c.charAt(0)==' ') c = c.substring(1,c.length);
                        if (c.indexOf(nameEQ) == 0) return c.substring(nameEQ.length,c.length);
                    }
                    return null;
                }
     
        //Open Sidebar
        $(document).ready(function () {
            $('#sidebarCollapse').on('click', function () {
                $('#sidebar').toggleClass('active');                
            });   
            //Hide Other Collapse execpt Stats
            $('#dashboard').on('click', function () {
              $('#usersCollapse').collapse('hide')             
              $('#newsltrCollapse').collapse('hide')             
              $('#contMailCollapse').collapse('hide')             
              $('#errorlogCollapse').collapse('hide')             
            });         
            //Hide Other Collapse execpt USERS
            $('#users').on('click', function () {
              $('#statsCollapse').collapse('hide')             
              $('#newsltrCollapse').collapse('hide')             
              $('#contMailCollapse').collapse('hide')             
              $('#errorlogCollapse').collapse('hide')                       
            });    
            //Hide others for Pagination             
            $('ul.pagination li a').on('click', function (e) {                
               setCookie('paginate','true')
            });            
            $('#userTable tbody tr td a').on('click', function (e) {                
              setCookie('paginate','true')
            });            
            
            //Hide Other Collapse execpt Newsletter
            $('#newsltr').on('click', function () {
              $('#usersCollapse').collapse('hide')             
              $('#statsCollapse').collapse('hide')             
              $('#contMailCollapse').collapse('hide')             
              $('#errorlogCollapse').collapse('hide')             
            });         
            //Hide Other Collapse execpt Emails
            $('#contMail').on('click', function () {
              $('#usersCollapse').collapse('hide')             
              $('#statsCollapse').collapse('hide')  
              $('#newsltrCollapse').collapse('hide')            
              $('#errorlogCollapse').collapse('hide')            
            });         
            //Hide Other Collapse execpt Emails
            $('#errorlog').on('click', function () {
              $('#usersCollapse').collapse('hide')             
              $('#statsCollapse').collapse('hide')  
              $('#newsltrCollapse').collapse('hide')  
              $('#contMailCollapse').collapse('hide')          
            });         
        });
      //Close Alert
      window.setTimeout(function() {
                  $("#salert").fadeTo(500, 0).slideUp(500, function(){
                      $(this).remove(); 
                  });
              }, 7000);
              //Show-Hide Modals
            window.addEventListener('hide-form', event => {
              $('#userModal').modal('hide');
              $('#userModal2').modal('hide');
              
            })    
            </script>
@endsection