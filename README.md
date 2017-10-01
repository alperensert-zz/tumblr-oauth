# Tumblr oAuth Example (PHP)
Authenticate your own Tumblr API.
# how to install?
oAuth system is already installed.
# edit config.php #
If you haven't a tumblr app, please [click here](https://www.tumblr.com/oauth/apps) and create new Tumblr App.
After that, [go here](https://www.tumblr.com/oauth/apps). copy your CONSUMER KEY and CONSUMER SECRET KEY.
Edit config.php and have fun!<br/>
<b>NOTE:</b> Please don't forget to edit CALLBACK_URL
# usage
## get
<b>TumblrOauth:</b> GET | $info = $connection->$connection->get("user/info");
## post
<b>HTTPS:</b> HTTPS://api.tumblr.com/v2/blog/peacecorps.tumblr.com/posts/text?notes_info=true<br/>
<b>TumblrOauth:</b> POST | $info = $connection->post("blog/{blog-identifier}/posts/{post-types}");<br/>
### if you need help, please send me a mail: sertalperen99@gmail.com
I respond quickly.
