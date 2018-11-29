<?php

echo
"   <div class='row clearfix' id='header'>
    <div class='background-ribbon wide'></div>
    <div class='col-xs-12'>
    <div class='logo-small'><img src='../assets/images/logo.png' alt=''></div>
      <h1 class='heading header-heading'><a href='../pages/memories_list.php'><img src=\"../assets/images/title.png\" alt=\"\"></a></h1>
     </div>
     
       </div>
        <div class='row clearfix menu'>
   <div class='background-ribbon narrow'></div>
        <div class='col-xs-6  float-left'>
           
            <form id='filter_option' action='../pages/filter_results.php' method='POST'>
           
                 <button type='submit'  name='najnovije'><span>NAJNOVIJE</span></button>           
                  <button type='submit'  name='najpopularnije'><span>NAJPOPULARNIJE</span></button>  
                 <button type='submit'  name='najneomiljenije'><span>NAJNEOMILJENIJE</span></button>
         
            </form> 
           </div>
           
             <div class='col-xs-6 float-right nav'>
                        
                        <div class='icons write'>
                    <div class='btn-effect'></div>
                     <p><i class=\"fas fa-pencil-alt\"></i></p>
                         <div></div>
                 </div>
                 
                   
              <div class='icons minus plus'>
                     <p><i class=\"fas fa-minus\"></i></p>
                 </div>
                 
             
                    <div class='icons search' id='width'>
                <p id='search'><i class=\"fas fa-search\"></i></p>
                   
                    <form id='search_form' action='../pages/search_results.php'  method='POST'>
                    <input id='search_bar' type='text' name='search_input'>
                    <button class='go' name='go'><p><i class=\"fas fa-search\"></i></p></button>
                    </form> 
            </div>
        </div>
</div> ";
