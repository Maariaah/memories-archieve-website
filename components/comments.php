<?php
if (isset($comment)){
echo "
<div class='panel panel-default'>
    <div class='panel-heading clearfix'>
        <p class='col-sm-6 text-left'>" .$comment['user_name'] . "</p>
        <p class='col-sm-6 text-right'> " . $comment['time'] . " </p>
    </div>
    <div class='panel-body '>
        <p>
            " . $comment['content'] . "
        </p>
      
     </div>
    </div>

";
}