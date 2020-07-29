$(document).ready(function(){

 load_data();
 load_data_blog();

 function load_data(query)
 {
  $.ajax({
   url:"fetch-faq.php",
   method:"POST",
   data:{query:query},
   success:function(data)
   {
    $('#result').html(data);
   }
  });
 }
 $('#search_text').keyup(function(){
  var search = $(this).val();
  console.log("Search", search);
  if(search != '')
  {
   load_data(search);
  }
  else
  {
   load_data();
  }
 });


function load_data_blog(query)
 {
  $.ajax({
   url:"fetch-blog.php",
   method:"POST",
   data:{query:query},
   success:function(data)
   {
    $('#blog-result').html(data);
   }
  });
 }
 $('#search_blog').keyup(function(){
  var search = $(this).val();
  console.log("Search", search);
  if(search != '')
  {
   load_data_blog(search);
  }
  else
  {
   load_data_blog();
  }
 });

});