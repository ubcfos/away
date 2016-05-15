# DrupalVM

DrupalVM provides a full environment for developing a drupal site such as the
away project. It uses vagrant and virtualbox to create a fully functioning web
server as a virtual machine so that you can start working as soon as possible.

## Getting Started

### OS X
You will need vagrant and virtualbox installed. On OS X, this can be done with
homebrew. If you already have homebrew+cask you can skip the first two steps

  1. $ /usr/bin/ruby -e "$(curl -fsSL https://raw.githubusercontent.com/Homebrew/install/master/install)"
  2. $ brew tap caskroom/cask
  3. $ brew cask install virtualbox
  4. $ brew cask install vagrant

Now we need to get a copy of the away repository. You should make a fork of the
project on github.com and then clone *your* fork locally. On OS X, a good place
to do this is in ~/Sites

  1. On Github, visit https://github.com/ubcfos/away and click the "Fork" button
  2. On your new fork, copy the clone URL and clone it to your laptop. We will
     also add the ubcfos repository as an upstream so that we can gather
     changes from it later.
   
    $ cd ~/Sites
    $ git clone https://github.com/<YOUR USERNAME>/away
    $ git remote add upstream https://github.com/ubcfos/away

  3. Grab a copy of the drupal-vm project. A good place to do this would be into
     ~/drupal-vm

    $ cd ~/
    $ git clone https://github.com/geerlingguy/drupal-vm.git

  4. Copy our local configuration into drupal-vm
   
    $ cd ~/drupal-vm
    $ cp ~/Sites/config.yml .
    $ cp ~/Sites/drupal.make.yml .

  5. If you used a different location in step 2. make sure you update the
     local_path value in config.yml. This directory will be NFS mounted inside
     your drupal-vm. Please note there are some default usernames and passwords
     defined in the config.yml file. These should all be local to your laptop
     and so should not present a security risk, but you can update them if you
     wish.

  6. Create and provision the VM.

    $ vagrant up

At this point you should see a lot of output which is the machine being created
and all of the packages installed. Drupal will also be installed at this time.
Look for "failed=0" on the final line, this indicates things were successful.
Now we need to set up some hosts entries. You can get a summary of them by
visiting http://192.168.88.88 in your browser and copying the address table in
the top right of the page

  7. Add the new entries to the end of /etc/hosts, e.g.

    $ vi /etc/hosts
    192.168.88.88 drupalvm.dev
    192.168.88.88 adminer.drupalvm.dev
    192.168.88.88 xhprof.drupalvm.dev
    192.168.88.88 pimpmylog.drupalvm.dev
    192.168.88.88 dashboard.drupalvm.dev


  8. Visit http://drupalvm.dev and log into your site (the username and password
     are set by drupal_account_name/drupal_account_password in config.yml

### Gotchas
  * NFS mounts on OS X won't work if you are have the Cisco Anyconnect VPN
  running.
  * If vagrant barfs with a message about "Too many open files", you can adjust
  the ulimit setting for open files, by running "ulimit -n 1024" then re-running
  the vagrant command. You can make this change permanent in .bash_profile if
  needed.
  * xhprof doesn't work yet

