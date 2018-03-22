<html>



</html>

<?php
   echo "<script type='text/javascript'>
      function c(p){
         var FullURL = window.location.search.substring(1);
         var ParametersArray = FullURL.split('&');
         for (var i = 0; i < ParametersArray.length; i++){
            var CurrentParameter = ParametersArray[i].split('=');
            if (CurrentParameter[0] === Parameter){
               return CurrentParameter[1];
            };
         };
      };
   </script>";

   echo "<script text='text/javascript'>
      if(c('username') === 'admin' && c('password') === 'admin123'){
         document.write('true');
      } else if(c('username') === 'faxxlore' && c('password') === '123'){
         document.write('true');
      } else {
         document.write('false');
      }
   </script>";
?>
