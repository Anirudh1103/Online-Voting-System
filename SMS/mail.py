import smtplib
import csv

mylist = []
with open('voters.csv')as file:
    data = csv.reader(file)
    for lines in data:
            mylist.append(lines)

i = 1
while i<=4:
      fname = mylist[i][3]
      lname = mylist[i][4]
      ID = mylist[i][1]
      Pass = mylist[i][2]
      mail = mylist[i][5]
      i+=1
      message = f"""Hello {fname} {lname}, this is a confidential message from voting committe, Please dont share this message with anyone else. 
      ID :{ID} 
      Pass: {Pass}
      Use the above credentials to login & vote."""
      #simple mail transfer protocol
      server = smtplib.SMTP('smtp.gmail.com',587)
      server.starttls()

      server.login('votingcommitte@gmail.com', 'iuqk rhtn ngou dlyb')

      server.sendmail('votingcommitte@gmail.com',mail,message)
print("Mail Sent")
