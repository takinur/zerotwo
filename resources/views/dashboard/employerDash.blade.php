@extends('dashboard.layout')
   

@section('content')
    @livewire('dash-employer')
@endsection

@section('scripts')
    @parent
    <script>             
        //Open Sidebar
        $(document).ready(function () {
            $('#sidebarCollapse').on('click', function () {
                $('#sidebar').toggleClass('active');                
            });     
            
        });

    </script>
@endsection