<?php

//body component/main content of the website

if (!isset($memory['likes'], $memory['comments'], $memory['dislikes'])) {
    $memory['likes'] = 0;
    $memory['comments'] = 0;
    $memory['dislikes'] = 0;
}

if (!isset($memory['name'], $memory['age'])) {
    $memory['name'] = '';
    $memory['age'] = '';

}

if (isset($memory['date']
    , $memory['content'])) {

echo "

<section class='memory-section'>
    <div class='row'>
        <div class='col-xs-6'><p class='name'>", $memory['name'], ",", $memory['age'], "</p></div>
        <div class='col-xs-6 '><p class='date'>", $memory['date'], "</p></div>
        <div class='col-md-12 memory-block'><a href='../pages/memo_detail.php?id=", $memory['id'], "'>", $memory['content'], "</a></div>
    </div>

    <div class='row clearfix'>
        <div class='col-xs buttons'>
            <small>
                <span id='memory_", $memory['id'], "_likes'>
                ", $memory['likes'], "
                </span>
            </small>
            <span class='like_btn' data-like='", $memory['id'], "'><i class=\"fas fa-thumbs-up\"></i></span>
       <div class='vl'></div>
        </div>
 

        <div class='col-xs buttons'>
            <small><span id='memory_", $memory['id'], "_dislikes'>
                ", $memory['dislikes'], "
                </span></small>
            <span class='dislike_btn' data-dislike='", $memory['id'], "' ><i class=\"fas fa-thumbs-down\"></i></span>
  <div class='vl'></div>
        </div>
      

        <div class='col-xs buttons' data-href='http://yourworstmemory.tk/pages/memo_detail.php?id=". $memory['id'] ."' data-layout='button_count' data-size='small' data-mobile-iframe='true'>
            <small></small>
            
            <a class='btnShare' target='_blank' href='https://www.facebook.com/sharer/sharer.php?u=http%3A%2F%2Fyourworstmemory.tk%2Fpages%2Fmemo_detail.php%3Fid%3D" . $memory['id'] . "&amp;src=sdkpreparse'>
            <i class=\"fas fa-share-alt\"></i> </a>
              <div class='vl'></div>
         
        </div>
       
        
        <div class='col-xs buttons'>
            <small><span id='memory_", $memory['id'], "_comments'>
                ", $memory['comments'], "</span>
            </small>
            <span class='comment' data-add='", $memory['id'], "'><i class=\"fas fa-comment-alt\"></i></span>
        </div>
    </div>
</section>";
}

