 @extends('layouts.master')


 @section('content')


     <div class="container">
         <ol class="">
             @foreach ($posts as $post)
                 <li>
                     @include('posts.article', ['type' => 'listing'])
                 </li>
             @endforeach
         </ol>
     </div>


 @endsection
