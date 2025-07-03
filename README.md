## Configuration Instructions

Install and configure mail hog for testing emails.
Install Mail Hog as a docker image. Use the following command to run docker in the background:

sudo docker run -d -p 1025:1025 -p 8025:8025 mailhog/mailhog

Open Mail Hog in the browser using the URL: http://localhost:8025/

Add the following to .env

MAIL_MAILER=log
MAIL_SCHEME=null
MAIL_HOST=localhost
MAIL_PORT=8025
MAIL_USERNAME=null
MAIL_PASSWORD=null
MAIL_FROM_ADDRESS="no-reply@test-email.com"
MAIL_FROM_NAME="${APP_NAME}"

https://kinsta.com/blog/mailhog/
