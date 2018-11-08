CS-QuickTunnel V.0.7.0 - Reverse Tunnels
https://github.com/infosecwriter/CS-QuickTunnel

The CS-QuickTunnel is a reverse tunneling too that allows you to run a local service on localhost/127.0.0.1 to bypass NAT and firewalls by making outbound connections from a third party server on the Internet. 

You can run the script and host a proxy that forwards traffic to another server, thus making your system a pivot.  Currently works with SSH reverse tunneling, Ngrok reverse tunnel, and Tor.  This script helps set up your .onion address as well.

Reverse tunnel example:
  > localhost: run a PHP server on port 8000

  > ngrok.io: listens on port ????? and forwards the traffic to your PHP server

Reverse Tor tunnel proxy example:
  > system 1: torsocks telnet ku734zo63jwmaaaa.onion 12345

  > localhost: listening on port 12345 and forwarding to towel.blinkenlights.nl on port 23

  > towel.blinkenlights.nl:23

To serve or host Meterpreter or other call back apps, place them into the ./site/installs folder.  Then run either the SSH, Ngrok, or Tor PHP server to generate a link.  Once at that link, type in /installs.php. 

For example: 
- In Tor, go to ???????.onion/installs.php. 
- If on the Internet and using Tor, go to ???????.onion.to/installs.php
- If Ngrok.io, go to ?????.ngrok.io/installs.php

 - SSH Reverse Tunneling
 - NGROK Reverse Tunneling
 - TOR Reverse Tunneling
 - SOCAT Reverse Tunneling Proxy
 - Check Dependencies
 - Shellphish @thelinuxchoice

-----
 -  SSH Tunneling
 - -  Reverse tunnel
 - -  Run a NetCat listener reverse tunnel
 - - Run a NetCat listener reverse connect - reverse tunnel
 - - Run a NoMachine listener reverse tunnel 
 - - Run a VNC listener reverse tunnel 
 - - Run PHP Server Through a Serveo.net reverse tunnel
 - - Meterpreter reverse tunnels


 -  Ngrok.io
 - -  Reverse tunnel
 - -  Run a NetCat listener reverse tunnel
 - -  Run a NetCat listener reverse connect - reverse tunnel
 - -  Run a NoMachine listener reverse tunnel 
 - -  Run a VNC listener reverse tunnel 
 - -  Run PHP Server Through a Serveo.net reverse tunnel
 - -  Meterpreter reverse tunnels

 -  Tor
 - -  Tor Hidden Service - Reverse Tunnel
 - -  Run a NetCat listener  reverse tunnels
 - -  Run a NetCat listener reverse conect -  reverse tunnels
 - -  Run a NoMachine listener reverse tunnel
 - -  Run a VNC listener reverse tunnel


 -  Socat proxy
 - -  SSH Reverse Tunnel Proxy
 - -  NGROK Reverse Tunnel Proxy
 - -  Tor Reverse Tunnel Proxy


---
To install and run it:

> git clone https://github.com/infosecwriter/CS-QuickTunnel.git
> cd CS-QuickTunnel

Then either make it executable:

> chmod +x CS-QuickTunnel.sh 
> ./CS-QuickTunnel.sh

or just run it using bash: 

> bash CS-QuickTunnel.sh

Have fun!

