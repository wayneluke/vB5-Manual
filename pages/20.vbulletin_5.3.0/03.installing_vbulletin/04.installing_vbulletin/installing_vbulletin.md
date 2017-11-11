The installation wizard provides as seamless an experience as possible
with as little intervention from the operator as is possible.

Once all the vBulletin files have been successfully uploaded to your web
server, you will need to run the vBulletin Installation Script in order
to populate your database.

The Installer runs as a PHP script using your web browser. To start the
installation process, open your browser and type the HTTP address of
your forums directory, followed by [i]/core/install/install.php[/i],
then hit the \<Enter\> key or press the [Go] button to open the script.
For example, if you will have your forums in the root of your domain,
the URL will be:

[i]http://www.your-domain.com/core/install/install.php[/i]

If you will be running vBulletin in a sub-directory, for example
‘forums’, the path to the installation script will be:

[i]http://www.your-domain.com/forums/core/install/install.php[/i]

The first thing you will see from the install script is a login prompt,
asking you to enter your Customer Number. This is done to prevent other
users from accidentally stumbling across your install script and running
it. Only you should know your Customer Number.

[note]Your Customer Number is the string of numbers and letters used as
the login user name for the vBulletin Members' Area and is supplied via
email following your purchase. If you have deleted this email and need
to recover your Customer Number, please visit this link:

https://members.vbulletin.com/lostpw.php?do=lostcustomerid

You should type your customer number carefully to avoid errors. Note
that your customer number is *not* the same as your vBulletin license
number.[/note]

**\*\*\*SCREENSHOT OF LOGIN PROMPT HERE\*\*\***

When you have entered your Customer Number, hit the [Enter Install
System] button and you should be taken to the first step of the install
script. If after hitting the [Enter Install System] button you are
brought back to the Customer Number entry dialog, there was an error
verifying your Customer Number. The only reasons the customer number
won't work are:

[list]

[\*]You are not using the correct number (don't use the license
number.)[/\*]

[\*]You are not using the correct files for the license under that
account.[/\*]

[\*]You are blocking cookies.[/\*]

[/list]

After entering the correct Customer Number, the install wizard will
begin. Press [Begin Install] to begin.

**\*\*\*SCREENSHOT OF POST LOGIN SCREEN HERE\*\*\***

The installer from this point is mostly automatic. You will see the
progress bar progress as it goes through the steps.

**\*\*\*SCREENSHOT OF PROGRESS BAR HERE\*\*\***

During the install process, the install script will require some user
input. When this information is required, the installer will pause and
present you with a dialog box for you to input the required information.
It will ask for information up to four times. The first dialog box looks
like the image below:

**\*\*\*SCREENSHOT OF GENERAL SETTINGS PROMPT HERE\*\*\***

The first dialog box will ask you information about your forums. This
includes the name of the forums, the name of your homepage and the URLs
that you would like to use. It will also ask for the webmaster email
address. The system will try to pre-fill some of this information for
you based on the location of the script and the domain name it is
accessed from.

The second dialog box will ask for your cookie path and cookie domain.
These are advanced installation parameters. If you do not know what to
enter here, leave them as the default suggestions and continue.

The third dialog box will ask for your administrator username, password,
and email address. It’s important that you pick information that you
will:

- easily remember but

- not be guessable by others

Administrator access in the wrong hands can have serious consequences
for your forums so it’s vital that you pick a good, strong password that
only you will know and remember.

During the installation process, you may opt to have a more detailed
output view. You can view each step as it processes by clicking the
"Show Details" button while the install wizard is running. It will
present you with a view like this:

**\*\*\*SCREENSHOT OF DETAILED PROGRESS BAR HERE\*\*\***

Once the installation process is complete, and you will be presented
with a link to your Admin Control Panel. Before clicking this link, you
should open up your FTP client application again and browse to the
[i]/core/install/[/i] folder inside your forums directory.

**\*\*\*SCREENSHOT OF FTP VIEW OF INSTALL FOLDER HERE\*\*\***

You should delete the [b]install.php[/b] file now as a security
precaution. It is safe to leave the other install directory files intact
since they may prove useful in the future. Once you have deleted these
files you can return to the installer script and click the link to enter
the Administrator Control Panel of your freshly installed vBulletin!
