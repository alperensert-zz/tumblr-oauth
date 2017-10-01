<?php
session_start();
require_once("config.php");
if (CONSUMER_KEY === '' || CONSUMER_SECRET === '') {
  echo 'You need some consumer and consumer secret key. I think u can buy for free in <a href="https://tumblr.com/oauth/apps">https://tumblr.com/oauth/apps</a>';
  exit;
}

$connection = new TumblrOAuth(CONSUMER_KEY, CONSUMER_SECRET);
 
$request_token = $connection->getRequestToken(OAUTH_CALLBACK);

$_SESSION['oauth_token'] = $token = $request_token['oauth_token'];
$_SESSION['oauth_token_secret'] = $request_token['oauth_token_secret'];

$url = $connection->getAuthorizeURL($token);
$content = '<a href="' . $url . '">Connect with Tumblr</a>';
 
/* Include HTML to display on the page. */
echo $content;
