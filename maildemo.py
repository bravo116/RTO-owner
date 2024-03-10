from email.message import EmailMessage
import ssl
import smtplib
import math, random





def generateOTP() :
	digits = "0123456789"
	OTP = ""


	for i in range(4) :
		OTP += digits[math.floor(random.random() * 10)]

	return OTP

if __name__ == "__main__" :
	
	print("OTP of 4 digits:", generateOTP())






email_sender = 'vishnuyadav116.new@gmail.com'
email_password = 'evxljesdyvlehoxs'

email_receiver = 'vishnuyadavn04@gmail.com'

subject = "Reset Your Password"
body = """ From RTO, 
Here is the OTP to Reset Your Password: """+generateOTP()

em=EmailMessage()
em['From'] = email_sender
em['To']= email_receiver
em['subject']= subject
em.set_content(body)

context= ssl.create_default_context()
with smtplib.SMTP_SSL('smtp.gmail.com',465,context=context) as smtp:
    smtp.login(email_sender,email_password)
    smtp.sendmail(email_sender,email_receiver,em.as_string())

