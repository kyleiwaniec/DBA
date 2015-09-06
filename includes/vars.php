<?php


// to get the short token, go to:
// https://www.facebook.com/dialog/oauth?client_id= 410673045631919&redirect_uri=http://downtownbordentown.com/&scope=email,read_stream,offline_access&response_type=token
// https://www.facebook.com/dialog/oauth?client_id= 410673045631919&redirect_uri=http://downtownbordentown.com/&scope=email,read_stream&response_type=token

// to get the long token ($access_token), go to:
// https://graph.facebook.com/oauth/access_token?grant_type=fb_exchange_token&client_id=410673045631919&client_secret=ab1843de44b70f70ee915c63fe063825&fb_exchange_token=CAAF1gUUA868BAAVZBn4lMoWInWyO3RLh3r9B2stAuIwz9uZA0nZBV7B3TM3N8JlQ4ZBidVZBVEPOuZAyOvdZAqvBiuaZCVoNQUPglZAdIFjWrSymy2r6fmtMFGAyh0ueVUpa5f4ZAZAk7HEiPEbUXQwVOC3cd9VnUWhHaEHhke2U0Y7voAnGytsyc2hmqlGEGIqjLfKsDg4TLkA8hLdsyNRZBjQcBdUOoBtRAPQZD&expires_in=4641



$access_token = "CAAF1gUUA868BANZAuEQMGlohpMQr3S6fRAvugOyVYJNeZB05y2ZAmZALFxpZB1C8vHDznUWVcnATJC6VleoZCuJUUwyImFQjJB52ZCALYH8HL7kek5pQOmBcPmLi1qRsoRodzwqyRy3txDGsNHrj8SQHMorNt5HB2hfLaOXDQsLZBDd3G6ZBDqPXHf0FUnEr3wKNkYqt0ew9l1HYpM2K0tDSx&expires=5184000";

$fb_file = file_get_contents("https://graph.facebook.com/DowntownBordentownNJ/feed?access_token=".$access_token);
$fb_connect = json_decode($fb_file);

require_once("quickmysql.php");  


