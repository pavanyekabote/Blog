$(document).ready(()=>{

    
   $(window).on('scroll',()=>{
      
       if($('#jumbo').outerHeight() <= $(window).scrollTop()){
           $('#mNav').addClass('navbar-fixed-top');
           $('#mNav').css('background-color','#222');
           $('#mNav').css('box-shadow','0px 2px 15px rgba(0,0,0,0.5)');
           $('#mNav').css('color','white');
           $('#mNav').css('border-bottom','1px solid #eee');
           $('a.navbar-brand.brand-title').css('color','#fff');
           $('.navbar-collapse .navbar-nav > li > a').css('color','#Fff');
            $('.nav-btn > span').css('background-color','#fff');
           $('.nav-btn').css('border','2px solid #fff');
           console.log($('#mNav'));
           
       }
       else{
           $('#mNav').removeClass('navbar-fixed-top');
           $('#mNav').css('background-color','transparent');
           $('#mNav').css('color','black');
              $('#mNav').css('border-bottom','0px solid orange');
           $('a.navbar-brand.brand-title').css('color','#000');
           $('#mNav').css('box-shadow','0px 0px 0px rgba(0,0,0,0.0)');
           $('a.navbar-brand.brand-title').css('color','#000');
           $('.navbar-collapse .navbar-nav > li > a').css('color','#000');
           
       }
   });
    
    $("#loginBtn").click((e)=>{
        
        $("#myForm").attr('action','index.php');
        $('#myForm').attr('method','post');
        $('#myForm').submit();
    });
});