# PHP-Mailer-SMTP-

- PHPMailer is a code library to send emails safely and easily via PHP code from a web server.
- Sending emails directly by PHP code requires a high-level familiarity to SMTP protocol standards and related issues and vulnerabilities about email injection for spamming.
- PHP's built-in mail() function is one of the simplest ways to send emails directly from the web server itself. It just takes three mandatory parameters: the email address, 
  email subject and message body—and sends it to the recipient.
- The Simple Mail Transfer Protocol (SMTP) is an application used by mail servers to send, receive, and relay outgoing email between senders and receivers.
- SMTP is a widely-used protocol for sending emails over the internet. Unlike the PHP mail() function, which sends emails directly from your web server, SMTP requires an 
  external SMTP server to handle the email delivery process. This can be either a dedicated email service provider (ESP) or your web host's SMTP server.

# Advantages of SMTP
- If necessary, the users can have a dedicated server.
- It allows for bulk mailing.
- Low cost and wide coverage area.
- Offer choices for email tracking.
- Reliable and prompt email delivery.

# PHPMailer Script to Send Email Using SMTP Authentication:

1 From: the sender's email address.
2 FromName: the sender's name.
3 AddAddress: the recipient's email address and name.
4 AddReplyTo: the reply-to email address and name.
5 Username: your SMTP username.
6 Password: your SMTP password.
