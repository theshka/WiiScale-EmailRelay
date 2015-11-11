WiiScale-EmailRelay
======

[![GitHub License](https://img.shields.io/github/license/mashape/apistatus.svg)](https://github.com/theshka/WiiScale-EmailRelay/blob/master/LICENSE)
[![Software Version](https://img.shields.io/badge/version-0.1.0-red.svg)](https://github.com/theshka/WiiScale-EmailRelay/releases/latest)
[![Github Downloads](https://img.shields.io/github/downloads/theshka/WiiScale-EmailRelay/latest/total.svg)](https://github.com/theshka/WiiScale-EmailRelay/releases)

---

**WiiScale-EmailRelay** Goal: To use a WiiFit Balance Board as 'Smart Scale' and have it automatically sync with FitBit & Apple Health. With a little patience, and some tweaking, you can turn that old Wii accessory in to a wireless smart scale that syncs with your iPhone!

## Download
* [Dev-Master](https://github.com/theshka/WiiScale-EmailRelay/archive/master.zip)
* [Version 0.1.0](https://github.com/theshka/WiiScale-EmailRelay/archive/v.0.1.0.zip)

### Old Versions
* [Version 0.0.1](https://github.com/theshka/WiiScale-EmailRelay/archive/0.01.zip)

## Required:
- WiiFit Balance Board
- WiiScale for Mac (http://snosrap.com/wiiscale/)
- PHP webhost/webspace (this one is free: http://000webhost.com)
- Email Relay script (this file)
- IFTTT account & recipe (https://ifttt.com/recipes/270261-wiiscale-to-fitbit)
- FitBit account (https://www.fitbit.com)

## Optional:
- SyncSolver (https://itunes.apple.com/us/app/sync-solver-for-fitbit/id935306292?mt=8&uo=4)
- iPhone with Apple Health

## Setup:
- Signup with FitBit.
- Signup with IFTTT
- Activate the IFTTT Email Channel, and the FitBit Channel
- Activate the Wii Scale to FitBit recipe.
- Edit your email in the script settings.
- Upload this script to a PHP web-server.
- Download and install WiiScale.
- Connect WiiFit Balance Board to your Mac.
- Point the URL in WiiScale settings to this file on your web-server.

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

## Contact
* Homepage: http://heshka.com
* E-mail: tyler@heshka.com
* KeyBase: https://keybase.io/theshka
