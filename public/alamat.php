<?php
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL,"https://www.lapor.go.id/");
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS,"query=jasa");  //Post Fields
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

$headers = [
  "authority: www.lapor.go.id",
  "accept: */*",
  "accept-language: en-US,en;q=0.9,id;q=0.8",
  "content-type: application/x-www-form-urlencoded; charset=UTF-8",
  "cookie: lapor=eyJpdiI6ImhvUHZnNUUxY0ZDM2JjdkVMcG5xUkE9PSIsInZhbHVlIjoiU0F0cXE5NHJXTXhGMTRBYjFCWVp2eldCZ2k5NVlOMm9Uekljakdab2phZk1hSzBzb0pEUzByak1hRitCaVZiSUVKbmRUODhUV1VhaVRcL1BLQVlxQ2pRPT0iLCJtYWMiOiJlZjIzZWJhNTQ2YjBjMzU3ZGY4ZDRlMTczYjJlNGIxNTg3ZDNhNDk5MWVhODViYTY4NmVhNmE4YjZhNzQ0NjkwIn0^%^3D",
  "origin: https://www.lapor.go.id",
  "referer: https://www.lapor.go.id/",
  "sec-ch-ua-mobile: ?0",
  "sec-fetch-dest: empty",
  "sec-fetch-mode: cors",
  "sec-fetch-site: same-origin",
  "user-agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/116.0.0.0 Safari/537.36",
  "x-october-request-flash: 1",
//   "x-october-request-handler: complaint::onSearchLocation",
  "x-october-request-handler: complaint::onSearchInstitution",
  "x-october-request-partials;",
  "x-requested-with: XMLHttpRequest",
];

curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

$server_output = curl_exec ($ch);

curl_close ($ch);

print ($server_output) ;