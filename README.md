# Acymailing Fabrik form plugin
This plugin allows users filling a Fabrik form to subscribe to your Acymailing lists, with compliance to the GDPR directive.

## What it does

The plugin adds a checkbox at the bottom of the form. If checked, the user is subscribed to the list(s) set up in the plugin parameters.
Several options are allowed:
* You can automatically subscribe the user to the lists, without showing the checkbox. This is NOT the way to go to meet GDPR compliance. You may get along with this in an intranet where you need to subscribe employees to a company bulletin.
* You can choose a double opt-in feature, so the user will have to confirm his subscription by answering an email. You should also consider this route to meet compliance.
* You can customise the text above the checkbox, so that you can explain that the subscribers will be able to unsubscribe easily at any time.
* You can customize the label next to the checkbox
* You can include the checkbos into its own fieldset, for accessibility compliance.

The plugin will record the consent of the subscriber in a table in the database (#__fabrik_privacy). This records includes:
* The date and time of the subscription
* The list, form and row ID
* The consent message (label of the checkbox)
* The list(s) the user has subscribed to
* The subscriber ID (in Acymailing)
* The IP address at the time of the consent (optional)

##Installation
* Download a .zip file of the plugin and install it as any Joomla! extension.
* Once installed, go to the plugin manager, filter out on fabrik form plugins and enable the plugin
* In your Fabrik form settings, add the plugin and configure it as appropriate

You can see this plugin in action on [this page](https://www.betterweb.fr/services/migration) of our website.

Need help to comply to GDPR, please contact us : [https://www.betterweb.fr/services/applications-pour-joomla](https://www.betterweb.fr/services/applications-pour-joomla).
