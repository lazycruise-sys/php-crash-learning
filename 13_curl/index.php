<?php

$url = 'https://jsonplaceholder.typicode.com/users';
// Sample example to get data.
$resource = curl_init($url);

curl_setopt($resource, CURLOPT_RETURNTRANSFER, true);
$result = curl_exec($resource);
$info = curl_getinfo($resource);
$code = curl_getinfo($resource, CURLINFO_HTTP_CODE);

echo $result.'<br>';
echo "<pre>";
print_r($info);
echo "</pre>";

// Get response status code
echo "<pre>";
print_r($code);
echo "</pre>";

curl_close($resource);

// set_opt_array
$user = [
    'name' => 'John Doe',
    'username' => 'john',
    'email' => 'john@example.com'
];

$resource = curl_init();
curl_setopt_array($resource, [
    CURLOPT_URL => $url,
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_POST => true,
    CURLOPT_HTTPHEADER => ['content-type: application/json'],
    CURLOPT_POSTFIELDS => json_encode($user),
]);

$result = curl_exec($resource); // creates and returns result
curl_close($resource);
echo $result;
// Post request
