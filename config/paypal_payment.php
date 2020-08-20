<?php

return array(
	# Account credentials from developer portal
	'Account' => array(
		'ClientId' => env('AVosot9m7LO12Amk87Rot0PE4GBOTBwFBXuqofoL-39Of8SD9pWyOF8jhgScCO4kGyWQ0yd2WSxu4D9j
', ''),
		'ClientSecret' => env('EAG07tDtwNmVgL6jL_S4toNMbT9SRc8ydMCgeEfMdXhxDTR3_Q0CpE-8ce2a5mcww84eMjC7Mc6FYE5G
', ''),
	),

	# Connection Information
	'Http' => array(
		// 'ConnectionTimeOut' => 30,
		'Retry' => 1,
		//'Proxy' => 'http://[username:password]@hostname[:port][/path]',
	),

	# Service Configuration
	'Service' => array(
		# For integrating with the live endpoint,
		# change the URL to https://api.paypal.com!
		'EndPoint' => 'https://api.sandbox.paypal.com',
	),


	# Logging Information
	'Log' => array(
		//'LogEnabled' => true,

		# When using a relative path, the log file is created
		# relative to the .php file that is the entry point
		# for this request. You can also provide an absolute
		# path here
		'FileName' => '../PayPal.log',

		# Logging level can be one of FINE, INFO, WARN or ERROR
		# Logging is most verbose in the 'FINE' level and
		# decreases as you proceed towards ERROR
		//'LogLevel' => 'FINE',
	),
);
