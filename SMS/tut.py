import requests
resp = requests.post('https://textbelt.com/text', {
'phone': '8792367697',
'message' : 'Hello world',
'key' : 'textbelt',
})
print(resp.json())