<?php
session_start();
require_once('config.php');

if (empty($_SESSION['access_token']) || empty($_SESSION['access_token']['oauth_token']) || empty($_SESSION['access_token']['oauth_token_secret'])) {
    header('Location: ./logout.php');
}
/* Get user access tokens out of the session. */
$access_token = $_SESSION['access_token'];

/* Create a TumblrOauth object with consumer/user tokens. */
$connection = new TumblrOAuth(CONSUMER_KEY, CONSUMER_SECRET, $access_token['oauth_token'], $access_token['oauth_token_secret']);

echo "<b>HERE YOU ARE NOW!</b><br/>I already believed in you, good job. Now, go and open \"index.php\".<hr/>";

/* After that, you may need some help https://www.tumblr.com/docs/en/api/v2 
 * 
 * I leave a few examples for you here
 * Good luck ♥
 *
 * "$connection" is your home key.
 */
$user_info = $connection->post("user/info");
echo "<p>For your blog info, we need this => <a class=\"red\ href=\"https://www.tumblr.com/docs/en/api/v2#m-up-info\">/user/info</a><br/>";
echo "Your tumblr blogname: <b><span class=\"blue\">" . $user_info->response->user->name . "</span> (\$user_info->response->user->name)</b><br/>";
echo "You following <b><span class=\"blue\">" . $user_info->response->user->following . "</span> (\$user_info->response->user->following)</b> tumblr user.<br/>";
echo '</p><button onclick="myFunction()">Show response</button><pre><div id="shower">';
print_r($user_info);
echo '</div></pre>';
 