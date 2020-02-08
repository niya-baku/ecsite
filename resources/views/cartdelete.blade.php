@extends('layouts.app');

@section('content')
<div class="container-fluid">
   <div class="">
       <div class="mx-auto" style="max-width:1200px">
           <div class="">
            <p class="text-center">{{ $message ?? "" }}</p><br>
               <a href="/mycart">カートの中身へ戻る</a>
           </div>
       </div>
   </div>
</div>
@endsection