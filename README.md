# Add Bot Extension

[![Build Status](https://travis-ci.org/dmzx/Add-Bot.svg?branch=master)](https://travis-ci.org/dmzx/Add-Bot)

## Install
1. Download the latest release.
2. In the `ext` directory of your phpBB board, create a new directory named `dmzx` (if it does not already exist).
3. Copy the `addbot` folder to `phpBB/ext/dmzx/` (if done correctly, you'll have the main extension class at (your forum root)/ext/dmzx/addbot/composer.json).
4. Navigate in the ACP to `Customise -> Manage extensions`.
5. Look for `Add Bot` under the Disabled Extensions list, and click its `Enable` link.

## Uninstall
1. Navigate in the ACP to `Customise -> Extension Management -> Extensions`.
2. Look for `Add Bot` under the Enabled Extensions list, and click its `Disable` link.
3. To permanently uninstall, click `Delete Data` and then delete the `/ext/dmzx/addbot` folder.

## License
[GNU General Public License v2](http://opensource.org/licenses/GPL-2.0)