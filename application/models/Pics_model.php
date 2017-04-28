<?php
class Pics_model extends CI_Model {

    public function get_pics($tags = "kittens")
{
    $api_key = $this->config->item('flickr_api');
    $perPage = 26;
    $url = 'https://api.flickr.com/services/rest/?method=flickr.photos.search';
    $url.= '&api_key=' . $api_key;
    $url.= '&tags=' . $tags;
    $url.= '&per_page=' . $perPage;
    $url.= '&format=json';
    $url.= '&nojsoncallback=1';

    $response = json_decode(file_get_contents($url));
    return $response;
}
}