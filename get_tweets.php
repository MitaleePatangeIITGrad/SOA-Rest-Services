<?php
require_once('twitter_proxy.php');
// Twitter OAuth Config options
$oauth_access_token = '4858862483-SNBiUFe42Qlss1WU6IGmDs7d9ml6nlg8KVHpIrn';
$oauth_access_token_secret = 'YrSeNQ7VKrDWYXvVToy8T2gckN8rYAG0EPlzoBaUBMIVo';
$consumer_key = 'pqzNFcJ2upQ4EBFsg3BXwN7Ze';
$consumer_secret = 'BzFtjUNm4uingbdYj7xumvh3dSZmMAQvG5Tx1Gxnix7i2Hg3nw';
$user_id = 'HoseaHLee';
$screen_name = 'HoseaHLee';
$count = 10;
$twitter_url = 'statuses/user_timeline.json';
$twitter_url .= '?user_id=' . $user_id;
$twitter_url .= '&screen_name=' . $screen_name;
$twitter_url .= '&count=' . $count;
// Create a Twitter Proxy object from our twitter_proxy.php class
$twitter_proxy = new TwitterProxy(
	$oauth_access_token,			// 'Access token' on https://apps.twitter.com
	$oauth_access_token_secret,		// 'Access token secret' on https://apps.twitter.com
	$consumer_key,					// 'API key' on https://apps.twitter.com
	$consumer_secret,				// 'API secret' on https://apps.twitter.com
	$user_id,						// User id (http://gettwitterid.com/)
	$screen_name,					// Twitter handle
	$count							// The number of tweets to pull out
);
// Invoke the get method to retrieve results via a cURL request
$tweets = $twitter_proxy->get($twitter_url);
echo $tweets;
?>
