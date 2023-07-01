<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Chuckle Project Planning</title>
</head>
<body>
	<h1 align="center">Chuckle Project Planning</h1>
	<p>This is a list of features or functionalities that I want to build.</p>
	<p>Last updated on <?php echo date('d-m-y'); ?></p>
	<ol>
		<li>Phase 1 (Proof of concept)
			<ol>
				<li>Generate unique identity tokens to identify unique users</li>
				<li>Create chuckle api</li>
				<li>Create chuckle (frontend)</li>
				<li>Get recent 100 chuckles api</li>
				<li>Display to recent 100 chuckles (frontend)</li>
				<li>API to generate internal token used to authenticate internal api (this can be used in the future to reset the api key)</li>
				<li>Authentication middleware to authenticate API</li>
				<li>Schedule chuckle</li>
				<li>Cron job to post scheduled chuckle</li>
				<li>Cron to create new chuckles at regular intervals</li>
			</ol>
		</li>
		<li>Phase 2
			<ol>
				<li>Write test cases for the Laravel backend</li>
				<li>Dockerise both apps in production</li>
				<li>Move both the apps to dedicated server</li>
				<li>Use kubernetes to deploy and manage the production containers</li>
				<li>Setup Github actions for CI/CD pipeline</li>
				<li>Implement Grafana to monitor the servers (make the dashboard public)</li>
			</ol>
		</li>
		<li>Phase 3
			<ol>
				<li>Integration with OpenAi to generate random chuckles (tweets)</li>
				<li>Use memcached to cache data that does not repeat</li>
				<li>Lazy load if users want to see more chuckles (beyond 100 chuckles)</li>
				<li>Option to like a chuckle</li>
			</ol>
		</li>
		<li>Phase 4
			<ol>
				<li>Build frontend with React</li>
			</ol>
		<li>Phase 5
			<ol>
				<li>Push any new chuckle into the frontend</li>
				<li>Option to reply to a chuckle</li>
			</ol>
		</li>
		<li>Phase 6
			<ol>
				<li>Login with Twitter (if users want to create account)</li>
				<li>Make public APIs for 3rd party integration</li>
			</ol>
		</li>
		<li>Phase 7
			<ol>
				<li>Create sdk for api integration (Php, Python, Javascript)</li>
			</ol>
		</li>
	</ol>
</body>
</html>