** Update: Steam for Linux is now out of beta, and also available via the software center. With over [100 titles (60 games including DLC's)][1], and [2 free-to-play][2], it's a good start, and more to be available in the future. ** 

# Steam for Linux(beta)

Steam for Linux has been released, a while back - 20 Dec. 2012[[1]][3] -, and since then, the games have been poring in. 

There are currently [42 Linux games][4], browse some of those [games][5] if you like. In this tutorial we will update/upgrade our Ubuntu distribution, install some goodies, to better the Linux performance, and fix some annoying flash issue! 

Now, first thing we will do is, make sure we have the latest updates installed. Ubuntu has been receiving [updates to better the gaming performance][6]. Press CTRL-ALT-T, and then run these commands in the gnome-terminal. It will update and upgrade your Ubuntu distribution, Silently! 

[][7]

1.  sudo apt-get -y update
2.  sudo apt-get -y upgrade
3.  sudo apt-get -y dist-upgrade

These next commands adds the [Ubuntu-x-swat ppa][8], and installs, configures your nvidia drivers. 

**Warning: It is wise to reboot, after installing the nvidia drivers!** 

  
[][7]

1.  sudo add-apt-repository -y ppa:ubuntu-x-swat/x-updates
2.  sudo apt-get -y install linux-source
3.  sudo apt-get -y install linux-headers-generic
4.  sudo apt-get update
5.  sudo apt-get -y install nvidia-current-updates

This will fix the `Graphics: Unknown` bug, in the system information window. 

[][7]

1.  sudo apt-get -y install mesa-utils
2.  glxinfo | grep render
3.  glxgears

The last command `glxgears`, will open a windows with \`gears\` in them, this is just to test the frame-rates, you can close it, if it's running smoothly. 

Now here comes the good part, downloading steam and installing it. Download `[steam.deb](http://repo.steampowered.com/steam/archive/precise/steam_latest.deb)`(32bit/64bit) save it somewhere, in you're default folders Downloads, Documents, NOTPORN... Double click it. then the Ubuntu software-center will open, and guide you through the installation. 

In the gnome-terminal type this in to install a openGL library that steam depends on.  
`sudo apt-get install libgl1-mesa-glx:i386` 

And your good to go, there should be a steam icon on the launcher, if not search \`steam\` via the dash

* * *

**steam-login** 
Steam is now installed, but there are a few things you can do, on top of running an up to date system. It is called steam login, meaning when first started, you can choose steam as a desktop interface, as you would any other interface. it will only start the needed library's for steam to function properly. 

[ ![steam-login - webupd8][10]][10]  
image from [webupd8][10] 

how do we install steam-login, well via its [ppa][11]. Copy/paste this in your gnome-terminal. 

[][7]

1.  sudo add-apt-repository ppa:thor27-gmail/steam-desktop
2.  sudo apt-get update
3.  sudo apt-get install steam-login

* * *

**Flash issues** 
Fix annoying flash issue, which renders you unable to watch game-trailers via steam.(64bit issue alone) Copy/paste the code below, and it will: download, extract, and install flash, so that steam can use it. 

[][7]

1.  cd /tmp
2.  sudo -E wget --output-document=/tmp/flashplayer.tar.gz http://fpdownload.macromedia.com/get/flashplayer/pdc/11.2.202.258/install\_flash\_player\_11\_linux.$(uname -m).tar.gz
3.  tar vzfx flashplayer.tar.gz
4.  mkdir -p ~/.local/share/Steam/ubuntu12_32/plugins
5.  cp /tmp/libflashplayer.so ~/.local/share/Steam/ubuntu12_32/plugins
6.  sudo apt-get -y install libxt6:i386

After this you can restart steam, and you can now enjoy your game trailers.

* * *

If you like the default skin of steam you can skip this step, or if you don't you can install a [skin-manager for steam][12] to choose the skin of your liking.

[ ![steam-skin-manager1][14]][14] [ ![Steam Skin Manger - features][15]][15] [ ![steam-ambiance-native-border][16]][16] [ ![radiance-native-border][17]][17] 

How do we install this you ask. Well i am glad you asked, like so:

[][7]

1.  wget http://iubuntu.cz/Steam/steam-skin-installer.deb
2.  sudo dpkg -i steam-skin-installer.deb

There are still a number of games not yet ported to Linux, here are is a list of [those games][17], gives you a nice view of how much money you will spend in the future. you can also vote on which game should come to linux via [steam greenlight][18] 

I realized that this is a lot of copy/paste, and to have a script that does this automatically, would be great, and a time saver! so i wrote a script that does all of the above, keep in mind that this is version 0.1 and my Linux batch-script knowledge is very basic, run this at your own risk! 

[click-me.zip][19]   
  
### Reference

1.  [webupd8.org: Steam For Linux Now Available To All Users][3]
2.  [webupd8.org: How To Get Flash Player To Work With Steam For Linux On 64bit][20]
3.  [webupd8.org: Better Steam For Linux Performance With \`Steam Login\`][21]
4.  [ubuntuforums.org: Graphics: Unknown Fix [Archive] - Ubuntu Forums][22]

 [1]: http://store.steampowered.com/search/?os=linux&amp;category1=998#os=linux&amp;advanced=0&amp;sort_order=ASC&amp;page=1
 [2]: http://store.steampowered.com/search/?os=linux&amp;category1=998#category1=998&amp;os=linux&amp;genre=Free%20to%20Play&amp;advanced=0&amp;sort_order=ASC&amp;page=1
 [3]: http://www.webupd8.org/2012/12/steam-for-linux-now-available-to-all.html "webupd8.org/steam-for-linux"
 [4]: http://store.steampowered.com/search/?os=linux&amp;category1=998 "store.steampowered"
 [5]: http://store.steampowered.com/browse/linux/ "store.steampowered/Linux"
 [6]: http://www.ubuntuvibes.com/2012/12/unredirect-fullscreen-windows-now.html "ubuntuvibes/unredirect-fullscreen-windows"
 [7]: /ppa/index "Help"
 [8]: https://launchpad.net/~ubuntu-x-swat/+archive/x-updates "ubuntu-x-swat ppa"
 []: ../images/steam-for-linux/steam-login.png "steam-login"
 [10]: http://www.webupd8.org/2012/12/better-steam-for-linux-performance-with.html
 [11]: https://launchpad.net/~thor27-gmail/+archive/steam-desktop "launchpad/steam-desktop"
 [12]: http://iubuntu.cz/Steam/ "iubuntu.cz/steam"
 []: http://iubuntu.cz/Steam/SteamSkinManager.png "steam skin manager"
 []: http://iubuntu.cz/Steam/SteamSkinManager-features.jpg "Steam Skin Manger - features"
 []: http://iubuntu.cz/Steam/SteamAmbianceNativeBorder.png "Steam Ambiance Native Border"
 []: http://iubuntu.cz/Steam/SteamRadianceNativeBorder.png "Steam Radiance Native Border"
 [17]: http://www.reddit.com/r/linux_gaming/comments/16lyf6/list_of_progress_with_existing_ports_and_greenlit/
 [18]: http://steamcommunity.com/greenlight/ "steamcommunity/greenlight/"
 [19]: ../download/download.php?file=click-me.zip
 [20]: http://www.webupd8.org/2013/01/how-to-get-flash-player-to-work-with.html "webupd8/flash-fix"
 [21]: http://www.webupd8.org/2012/12/better-steam-for-linux-performance-with.html "webupd8/steam-login"
 [22]: http://ubuntuforums.org/archive/index.php/t-2019009.html "ubuntuforums/Graphics-unknown-fix"