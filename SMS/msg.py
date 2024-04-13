import requests 
import csv

mylist = []
with open('voters.csv')as file:
    data = csv.reader(file)
    for lines in data:
            mylist.append(lines)

i = 1
while i<=3:
      fname = mylist[i][3]
      lname = mylist[i][4]
      PhNo = mylist[i][6]
      ID = mylist[i][1]
      Pass = mylist[i][2]
      i+=1
      
      apisecret = "140da42586096d72b846539338f5fd3fad9c4fa2"
      deviceId = "00000000-0000-0000-41d6-57eaeb9c9045"
      phone = PhNo
      message = f"""Hello {fname} {lname}, this is a confidential message from voting committe, Please dont share this message with anyone else. 
      ID :{ID} 
      Pass: {Pass}
      Use the above credentials to login & vote."""

      message = {
        "secret": apisecret,
        "mode": "devices",
        "device": deviceId,
        "sim": 1,
        "priority": 1,
        "phone": phone,
        "message": message
    }
      r = requests.post(url = "https://www.cloud.smschef.com/api/send/sms",params = message)
print("All message are  sent.")