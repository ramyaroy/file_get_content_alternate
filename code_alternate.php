$url = base_url('canadian-provinces.json');
$ch = curl_init($url);
      curl_setopt($ch, CURLOPT_USERAGENT, $_SERVER['HTTP_USER_AGENT']);
      curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$countries_list = curl_exec($ch);
$countries_list = json_decode($countries_list);
