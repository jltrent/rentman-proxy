<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <meta http-equiv="Content-Style-Type" content="text/css">
  <title></title>
  <meta name="Generator" content="Cocoa HTML Writer">
  <meta name="CocoaVersion" content="2487.7">
  <style type="text/css">
    p.p1 {margin: 0.0px 0.0px 0.0px 0.0px; font: 14.0px 'Helvetica Neue'; color: #2d2f30; -webkit-text-stroke: #2d2f30; background-color: #f2f5f7}
    p.p2 {margin: 0.0px 0.0px 0.0px 0.0px; font: 14.0px 'Helvetica Neue'; color: #2d2f30; -webkit-text-stroke: #2d2f30; background-color: #f2f5f7; min-height: 16.0px}
    span.s1 {font-kerning: none}
  </style>
</head>
<body>
<p class="p1"><span class="s1">&lt;?php</span></p>
<p class="p1"><span class="s1">error_reporting(0);</span></p>
<p class="p1"><span class="s1">ini_set('display_errors', 0);</span></p>
<p class="p1"><span class="s1">header("Access-Control-Allow-Origin: *");</span></p>
<p class="p1"><span class="s1">header("Content-Type: application/json");</span></p>
<p class="p2"><span class="s1"></span><br></p>
<p class="p1"><span class="s1">$apiKey = 'eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJtZWRld2Vya2VyIjoyNDIsImFjY291bnQiOiJqbHRyZW50IiwiY2xpZW50X3R5cGUiOiJvcGVuYXBpIiwiY2xpZW50Lm5hbWUiOiJvcGVuYXBpIiwiZXhwIjoxODg1MjE2MDEyLCJpc3MiOiJ7XCJuYW1lXCI6XCJiYWNrZW5kXCIsXCJ2ZXJzaW9uXCI6XCI0LjY4Ni4wLjJcIn0iLCJpYXQiOjE3Mjc0NDk2MTJ9.GzhCow2xxlVpLvWQRzrWxnIxyICy6S93yRkQeNBxYVw';</span></p>
<p class="p1"><span class="s1">$subdomein = ‘jltrent’;</span></p>
<p class="p2"><span class="s1"></span><br></p>
<p class="p1"><span class="s1">$url = "https://$subdomein.rentmanapp.com/api/equipment?limit=20";</span></p>
<p class="p2"><span class="s1"></span><br></p>
<p class="p1"><span class="s1">$ch = curl_init();</span></p>
<p class="p1"><span class="s1">curl_setopt($ch, CURLOPT_URL, $url);</span></p>
<p class="p1"><span class="s1">curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);</span></p>
<p class="p1"><span class="s1">curl_setopt($ch, CURLOPT_HTTPHEADER, [</span></p>
<p class="p1"><span class="s1"><span class="Apple-converted-space">  </span>"Authorization: Bearer $apiKey",</span></p>
<p class="p1"><span class="s1"><span class="Apple-converted-space">  </span>"Accept: application/json"</span></p>
<p class="p1"><span class="s1">]);</span></p>
<p class="p2"><span class="s1"></span><br></p>
<p class="p1"><span class="s1">$result = curl_exec($ch);</span></p>
<p class="p2"><span class="s1"></span><br></p>
<p class="p1"><span class="s1">if ($result === false) {</span></p>
<p class="p1"><span class="s1"><span class="Apple-converted-space">  </span>echo json_encode(["error" =&gt; "Kan geen verbinding maken met Rentman API."]);</span></p>
<p class="p1"><span class="s1">} else {</span></p>
<p class="p1"><span class="s1"><span class="Apple-converted-space">  </span>echo $result;</span></p>
<p class="p1"><span class="s1">}</span></p>
<p class="p2"><span class="s1"></span><br></p>
<p class="p1"><span class="s1">curl_close($ch);</span></p>
<p class="p1"><span class="s1">?&gt;</span></p>
</body>
</html>
