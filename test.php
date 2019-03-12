<?php
	test
	$endpoint = 'https://api.hubapi.com/contacts/v1/lists/41/contacts/all?hapikey=test';
	$ch = @curl_init();
	curl_setopt($ch, CURLOPT_URL, $endpoint);
	curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json'));
	curl_setopt($ch, CURLOPT_HEADER, 0);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

	$response = @curl_exec($ch);
    $status_code = @curl_getinfo($ch, CURLINFO_HTTP_CODE);
    $curl_errors = curl_error($ch);
    @curl_close($ch);
    echo "curl Errors: " . $curl_errors;
    echo "\nStatus code: " . $status_code;
    echo "\nResponse: " . $response;



	
?>