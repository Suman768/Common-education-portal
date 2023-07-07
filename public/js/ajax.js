//AJAX for User Register
$(document).on("submit","#RegisterUserFormAJAX", function(e){
   
    e.preventDefault();

    $.post("/public/query/registerUserQuery.php", $(this).serialize(), function(data){
       if(data.response == "invalid")
       {
         Swal.fire({
            title: 'Invalid',
            text: 'Am Error Occured',
            icon: 'error',
            showClass: {
               popup: 'animate__animated animate__jackInTheBox'
             },
             hideClass: {
               popup: 'animate__animated animate__jackInTheBox'
             }
         })
       }
       else if(data.response == "success")
       {
        Swal.fire({
            title: 'Success',
            text: 'Registered Successfully',
            icon: 'success',
            showClass: {
               popup: 'animate__animated animate__swing'
             },
             hideClass: {
               popup: 'animate__animated animate__fadeOutUp'
             }
         })
       }
       else if(data.response == "email_exist")
       {
        Swal.fire({
            title: 'Failed',
            text: 'Email Already Registered with Us',
            icon: 'error',
            showClass: {
               popup: 'animate__animated animate__fadeInDown'
             },
             hideClass: {
               popup: 'animate__animated animate__fadeOutUp'
             }
         })
       }
    },'json');
 
 });

 //AJAX for College Register
$(document).on("submit","#RegisterCollegeFormAJAX", function(e){

    e.preventDefault();

    $.post("/public/query/registerCollegeQuery.php", $(this).serialize(), function(data){
       if(data.response == "invalid")
       {
         Swal.fire({
            title: 'Invalid',
            text: 'Am Error Occured',
            icon: 'error',
         })
       }
       else if(data.response == "success")
       {
        Swal.fire({
            title: 'Success',
            text: 'Registered Successfully',
            icon: 'success',
            showClass: {
               popup: 'animate__animated animate__swing'
             },
             hideClass: {
               popup: 'animate__animated animate__fadeOutUp'
             }
         })
       }
       else if(data.response == "user_not_exist")
       {
        Swal.fire({
            title: 'Try Again',
            text: 'Username or Password not match',
            icon: 'error',
            timer: 2000,
            showClass: {
               popup: 'animate__animated animate__jackInTheBox'
             },
         })
       }
       
    },'json');
 
 });

 //AJAX for College Register
$(document).on("submit","#LoginUserFormAJAX", function(e){

  e.preventDefault();
  
  $.post("/public/query/loginUserQuery.php", $(this).serialize(), function(data){
     if(data.response == "success")
      {
        Swal.fire({
          title: 'Login Success',
          text: 'Redirecting to Profile',
          icon: 'success',
          timer: 2000,
          showClass: {
             popup: 'animate__animated animate__swing'
           },
           hideClass: {
             popup: 'animate__animated animate__fadeOutUp'
           }
       })
       setTimeout(function(){ 
        $('#body').fadeOut();
        window.location.href='/home';
        }, 2000);
      }
     else if(data.response == "user_not_exist")
     {
      Swal.fire({
          title: 'Try Again',
          text: 'Username or Password not match',
          icon: 'error',
          timer: 2000,
          showClass: {
             popup: 'animate__animated animate__jackInTheBox'
           },
       })
     }
     
  },'json');

});


//AJAX for Delete College
$(document).on("click", "#CollegeDeleteBtnAJAX", function(e){

  e.preventDefault();
  
  var college_id = $(this).data("college-id");

  // alert(college_id);

   $.ajax({
    type : "post",
    url : "/public/query/deleteCollegeQuery.php",
    dataType : "json",  
    data : {id:college_id},
    cache : false,
    success : function(data){
      if(data.response == "success")
      {
        Swal.fire({
          title: 'Delete Successful',
          text: 'Selected College Deleted Successfully',
          icon: 'success',
          timer: 1000,
          showClass: {
             popup: 'animate__animated animate__swing'
           },
        })

        $('#main').load('#main');
        
      }
      else if(data.response == "Failed")
     {
      Swal.fire({
          title: 'Failed to Delete College',
          text: 'An Error Occured',
          icon: 'error',
          timer: 2000,
          showClass: {
             popup: 'animate__animated animate__jackInTheBox'
           },
       })
     }
    },
  });
});


