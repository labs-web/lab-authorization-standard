@extends('layouts.layout')
@extends('layouts.nav')
@section('content')
<div class="container"> 
    <table class="table"> 
       <thead> 
           <tr class='text-center'> 
               <th scope="col">Nom</th> 
               <th scope="col">Description</th> 
               
    @can('edit-TasksController')
               <th scope="col">Action</th>
    @endcan
           </tr> 
       </thead> 
       <tbody id="search-result" class='text-center'>
              @include('search')
       </tbody>
       <input type="hidden" id='page' value="1">
 </table>
</div>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<script>
  $(document).ready(function (){
     function fetchData(page , searchValue){
      $.ajax({
        url : 'main/?page=' + page + '&searchValue=' + searchValue,
        success: function(data){
          $('tbody').html('');
          $('tbody').html(data);
        }
      });
     }

     $('body').on('click', '.pagination a', function(param){

      param.preventDefault();

      var page = $(this).attr('href').split('page=')[1];
      var searchValue = $('#search-input').val();
      console.log($(this).attr('href').split('page=')[1]);
      console.log($(this).attr('href').split('page='));

      fetchData(page, searchValue);

     });

     $('body').on('keyup' , '#search-input' ,  function (){
      var page = $('#page').val();
      var searchValue = $('#search-input').val();
      fetchData(page , searchValue);
     });
  });
</script>
@endsection
   