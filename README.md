# playerio-php
PlayerIOClient implemented in PHP

# Example
```
$client = PlayerIO::quickConnect()->simpleConnect(gameId, email, pass);
echo $client->connectUserId;
```
