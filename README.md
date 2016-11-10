# deploy-from-bitbucket

How to setup automatic deployment from bitbucket into VM.

1. Login by SSH to you VM, with git installed.
2. Go to bitbucket.org and copy your repository link in HTTPS format, for ex.
https://username@bitbucket.org/yourrepository.git
3. Add password into that link after username in followinf format:
https://username:password@bitbucket.org/yourrepository.git
If you afffraid to put your account password into the link, create new user with read-only permissions and use it's details in that link.
4. Clocne git repository into your website folder wwith following command:
git clone https://username:password@bitbucket.org/yourrepository.git directory
where 'directory' is your website direcory.
5. in deploy.php add your own PRIVATE_KEY here:
define('PRIVATE_KEY', 'BLvzt7HRiLrI4xUny1');
6. Add deploy.php into git repository main folder and do "git pull" to have that file in the main folder of your website.
7. Setup correct persmissions for website directory. In my case mostly work:
sudo chown -R www-data:www-data ...
sudo chmod -R ug+rwx ...
8. Inside bitbucket go to your repository Settings -> Webhooks and "Add webhook"
http://screencast.com/t/LLDAJPi2
9. Give it a title for ex. "Deployment hook" and as a URL provide url to your deplyment script with private key:
http://yourwebsite.com/deploy.php?key=PRIVATE_KEY
10. In triggers choose "Repository push" and Save. It's ready to go.
