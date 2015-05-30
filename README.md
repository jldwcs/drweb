# drweb

## Develper Tools

- Install git, if it is not already installed on your mac
	- enter git on the command line (see instructions for getting code to know how to enter a command.)  If it shows "-bash: git: command not found" you do not have git installed and must install it.
	- you may want to install "brew" to get git, if you do not already have it.
	- visit [http://brew.sh/](http://brew.sh/)
	- enter this command to install brew: 
	- ruby -e "$(curl -fsSL https://raw.githubusercontent.com/Homebrew/install/master/install)"
- Install Yo
  - visit the [http://yeoman.io/](Yoeman website)
  - install yo using this command: npm install -g yo   
- Install Generator (optional)
  - npm install -g generator-php
- 

## Getting the code


- Open terminal 
  - Go to finder, use the Go menu and select "Utilities"
  - Find and then run "Terminal".  
  - A black (it could be other colors) window will open.
  - Usually you are in your "home" directory.  But if not change to it, by entering (entering is type and hit enter)
    - cd ~
  - from there make a new folder for your websites, by entering
    - mkdir websites
  - then go in to that folder you just made
	  - cd websites
  - then get the code
	  - git clone https://github.com/nycynik/drweb.git
  - after a few seconds you should have the code


## get started with dev

- in terminal, where the the repository is, enter
	- gulp server
	- after a few seconds, you should be able to visit http://localhost:8080/ and see your new site.

	