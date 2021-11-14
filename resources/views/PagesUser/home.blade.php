@extends('layouts.user_pages')

@section('content')
<!-- MAIN CONTENT -->
<div class="flex justify-center h-screen">
    <!-- LEFT MENU -->
    @include('Component.left-menu')
    <!-- END LEFT MENU -->
    <!-- MID CONTENT -->
    @include('Component.mid-content')
    <!-- END MID CONTENT-->
    <!-- RIGHT MENU -->
    @include('Component.right-menu')
    <!-- END RIGHT MENU -->
</div>
<!--  END MAIN CONTENT -->
<script >
    $('#home').removeClass('rounded-xl')
    $('#home').addClass('border-b-4')
</script>
@endsection