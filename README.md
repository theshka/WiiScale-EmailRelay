# WiiScale-EmailRelay

  Goal: Use a WiiFit Balance Board as 'Smart Scale' and have it automatically sync with Apple Health.
  
## Required: 
- WiiFit Balance Board 
- WiiScale for Mac (http://snosrap.com/wiiscale/)
- PHP webhost/webspace (this one is free: http://000webhost.com)
- Email Relay script (this file)
- IFTTT account & recipe (https://ifttt.com/recipes/270261-wiiscale-to-fitbit)
- FitBit account (https://www.fitbit.com)
- SyncSolver (https://itunes.apple.com/us/app/sync-solver-for-fitbit/id935306292?mt=8&uo=4)
- iPhone with Apple Health

## Setup:
- Signup with FitBit. 
- Signup with IFTTT (activate the Email Channel, and the FitBit Channel)
- Activate the WiiScale to FitBit recipe. 
- Edit the "you@IFTTTEmailChannel.com" from email in this script to that used in with IFTTT Email Channel.
- Upload this script to a PHP webserver. 
- Download and install WiiScale
- Connect WiiFit Balance Board to your Mac
- Point the URL in WiiScale settings to this file on your webserver.
  
## How it works?
- Setup.
- Weigh.
- WiiScale will ping the listener script.
- The listener script will email your weight to IFTTT. 
- IFTTT recipe will automatically record your weight to FitBit.
- Use SyncSolver to automatically sync FitBit data to Apple Health. 

## F.A.Q
At some point during all of this you might ask:

- Q: "But, the WiiScale app has a spot to login with FitBit, why can't I just use that?" 
- A: Well, you could-- at one point. But it no longer works... this is a great alternative to continue syncing with FitBit. 
