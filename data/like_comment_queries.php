<?php
error_reporting(E_ALL);

// all like and comment queries

function memo_exists($article_id, $conn) // check if there is a post with the same id
{
    $article_id = (int)$article_id; 
    $result = mysqli_query($conn, "select id from all_memories where id = $article_id");
    if (mysqli_num_rows($result) > 0) return true;
    else return false;
}

function previously_liked($article_id, $conn) // check if post is previously liked
{
    $article_id = (int)$article_id;
    $result = mysqli_query($conn, "select 'like_id' from memories_likes where user_id = " . $_SESSION['user_id']. " and memo_id = $article_id");
    if (mysqli_num_rows($result) > 0) return true;
    else return false;
}


function like_count($article_id, $conn) // number of likes in the table
{
    $article_id = (int)$article_id;
    $result = mysqli_query($conn, "select likes from all_memories where id = $article_id");
    $string = mysqli_fetch_assoc($result);

    if ($string == NULL) {
        $string = 0;
    }

    return implode("", $string);
}

function add_like($article_id, $conn) // adding 1 like if don't exist
{
    $article_id = (int)$article_id;
    $result = mysqli_query($conn, "select likes from all_memories  where id = $article_id");

    $result = $result->fetch_assoc()['likes'];

    if ($result == NULL) {
        $result = 0;
    }

    $article_id = (int)$article_id;
    mysqli_query($conn, "update all_memories set likes = ($result + 1) where id = $article_id");
    mysqli_query($conn, "insert into memories_likes (user_id, memo_id) values(" . $_SESSION['user_id']. ", $article_id)");

}

function remove_like($article_id, $conn) // removing 1 like if exists
{
    $article_id = (int)$article_id;
    mysqli_query($conn, "update all_memories set likes = likes - 1 where id = $article_id");
    mysqli_query($conn, "delete from memories_likes where user_id =" . $_SESSION['user_id']. " and memo_id = $article_id");
}

function previously_disliked($article_id, $conn) // check if post is previously disliked
{
    $article_id = (int)$article_id;
    $result = mysqli_query($conn, "select 'dislike_id' from memories_dislikes where user_id = " . $_SESSION['user_id']. " and memo_id = $article_id");
    if (mysqli_num_rows($result) > 0) return true;
    else return false;
}


function dislike_count($article_id, $conn) // number of dislikes in the table
{
    $article_id = (int)$article_id;
    $result = mysqli_query($conn, "select dislikes from all_memories where id = $article_id");
    $string = mysqli_fetch_assoc($result);

    if ($string == NULL) {
        $string = 0;
    }
    return implode("", $string);
}

function add_dislike($article_id, $conn) // adding 1 dislike if don't exist
{
    $article_id = (int)$article_id;
    $result = mysqli_query($conn, "select dislikes from all_memories  where id = $article_id");

    $result = $result->fetch_assoc()['dislikes'];

    if ($result == NULL) {
        $result = 0;
    }

    mysqli_query($conn, "update all_memories set dislikes = ($result + 1) where id = $article_id");
    mysqli_query($conn, "insert into memories_dislikes (user_id, memo_id) values(" . $_SESSION['user_id']. ", $article_id)");

}

function remove_dislike($article_id, $conn) // removing 1 dislike if exist
{
    $article_id = (int)$article_id;
    mysqli_query($conn, "update all_memories set dislikes = dislikes - 1 where id = $article_id");
    mysqli_query($conn, "delete from memories_dislikes where user_id =" . $_SESSION['user_id']. " and memo_id = $article_id");
}

function comment_count($article_id, $conn) //number of comments in the table
{
    $article_id = (int)$article_id;

    $result = mysqli_query($conn, "SELECT comments FROM all_memories WHERE id = $article_id");
    return $result;

}

function previouslySubmitted($conn) //checking of comment is previously submitted from the same user
{

    $result = mysqli_query($conn, "select content from all_memories where user_id = " . $_SESSION['user_id']);
    if (mysqli_num_rows($result) > 0) {
        return true;
    } else {
        return false;
    }

}