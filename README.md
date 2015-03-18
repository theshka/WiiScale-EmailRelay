# WiiScale-EmailRelay

  Goal: To use a WiiFit Balance Board as 'Smart Scale' and have it automatically sync with FitBit & Apple Health. With a little patience, and some tweaking, you can turn that old Wii accessory in to a wireless smart scale that syncs with your iPhone!
  
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
- Signup with IFTTT 
- Activate the IFTTT Email Channel, and the FitBit Channel
- Activate the Wii Scale to FitBit recipe. 
- Edit your email in the script settings.
- Upload this script to a PHP webserver.
- Download and install WiiScale.
- Connect WiiFit Balance Board to your Mac.
- Point the URL in WiiScale settings to this file on your webserver.
  
## How it works?
- Setup.
- Weigh.
- WiiScale will ping the relay script.
- The script will email your weight to IFTTT using the tag #WiiScale. 
- The Wii Scale to FitBit IFTTT recipe will automatically record your weight to FitBit.
- Bonus: Use SyncSolver to automatically sync FitBit data to Apple Health. 

## F.A.Q
At some point during all of this you might ask:

- Q: "But, the WiiScale app has a spot to login with FitBit, why can't I just use that?" 
- A: Well, you could-- at one point. But it no longer works, and it appears the app is no longer being developed... this is a great alternative to continue, or start syncing with FitBit. 
