=== Frontend As Any User | Avoid any issue with Cloudflare full page cache ===
Contributors: giuse
Donate link:
Tags: logged out, incognito mode, full page cache hassles
Requires at least: 4.6
Tested up to: 6.5
Stable tag: 0.0.4
Requires PHP: 5.6
Donate link: buymeacoffee.com/josem
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

After activation even if you are logged in, you will see the website as any unlogged users. No settings for this plugin.


== Description ==

This plugin is useful to avoid problems with full page cache systems that don't distinguish between logged and non-logged users, as for example the full page cache provided by CDNs like Cloudflare.
If your full-page caching system doesn't distinguish between logged and non-logged users, the cached page may include editing links and the admin top bar if it is active.
Usually, to avoid this problem you visit the page in incognito window, but you may forget to do it.

This plugin will help you to prevent this kind of problems.

It has no settings, if the plugin is active you will always see the forntend as any user who is not logged in. You need to deactivate the plugin if you want to see the pages as a logged-in user.


== You may also be interested in ==
* <a href="https://wordpress.org/plugins/all-pages-in-customize/" target="_blank">All Pages In Customize</a>
* <a href="https://wordpress.org/plugins/asset-preloader/" target="_blank">Asset Preloader</a>
* <a href="https://wordpress.org/plugins/basic-security/" target="_blank">Basic Security</a>
* <a href="https://wordpress.org/plugins/blog-page-editor-for-elementor/" target="_blank">Blog Page Editor For Elementor</a>
* <a href="https://wordpress.org/plugins/body-class-by-url-parameter/" target="_blank">Body Class By Url Parameter</a>
* <a href="https://wordpress.org/plugins/change-class-in-viewport/" target="_blank">Change Class In Viewport</a>
* <a href="https://wordpress.org/plugins/change-debug-log-location/" target="_blank">Change Debug Log Location</a>
* <a href="https://wordpress.org/plugins/collect-browser-info/" target="_blank">Collect Browser Info</a>
* <a href="https://wordpress.org/plugins/content-no-cache/" target="_blank">Content No Cache</a>
* <a href="https://wordpress.org/plugins/css-selectors/" target="_blank">Css Selectors</a>
* <a href="https://wordpress.org/plugins/custom-spinner-for-woocommerce/" target="_blank">Custom Spinner For Woocommerce</a>
* <a href="https://wordpress.org/plugins/defer-transictional-emails-for-woocommerce/" target="_blank">Defer Transictional Emails For Woocommerce</a>
* <a href="https://wordpress.org/plugins/direct-password-reset-link/" target="_blank">Direct Password Reset Link</a>
* <a href="https://wordpress.org/plugins/disable-fatal-error-handler/" target="_blank">Disable Fatal Error Handler</a>
* <a href="https://wordpress.org/plugins/disable-global-style/" target="_blank">Disable Global Style</a>
* <a href="https://wordpress.org/plugins/editor-cleanup-for-avada/" target="_blank">Editor Cleanup For Avada</a>
* <a href="https://wordpress.org/plugins/editor-cleanup-for-divi-builder/" target="_blank">Editor Cleanup For Divi Builder</a>
* <a href="https://wordpress.org/plugins/editor-cleanup-for-elementor/" target="_blank">Editor Cleanup For Elementor</a>
* <a href="https://wordpress.org/plugins/editor-cleanup-for-flatsome/" target="_blank">Editor Cleanup For Flatsome</a>
* <a href="https://wordpress.org/plugins/editor-cleanup-for-oxygen/" target="_blank">Editor Cleanup For Oxygen</a>
* <a href="https://wordpress.org/plugins/editor-cleanup-for-wpbakery/" target="_blank">Editor Cleanup For Wpbakery</a>
* <a href="https://wordpress.org/plugins/email-no-bot/" target="_blank">Email No Bot</a>
* <a href="https://wordpress.org/plugins/essential-form/" target="_blank">Essential Form</a>
* <a href="https://wordpress.org/plugins/export-without-shortcodes/" target="_blank">Export Without Shortcodes</a>
* <a href="https://wordpress.org/plugins/freesoul-deactivate-plugins/" target="_blank">Freesoul Deactivate Plugins</a>
* <a href="https://wordpress.org/plugins/freesoul-responsive-check/" target="_blank">Freesoul Responsive Check</a>
* <a href="https://wordpress.org/plugins/freesoul-switch-theme/" target="_blank">Freesoul Switch Theme</a>
* <a href="https://wordpress.org/plugins/freeze/" target="_blank">Freeze</a>
* <a href="https://wordpress.org/plugins/frontype/" target="_blank">Frontype</a>
* <a href="https://wordpress.org/plugins/hide-link/" target="_blank">Hide Link</a>
* <a href="https://wordpress.org/plugins/inline-image-base64/" target="_blank">Inline Image Base64</a>
* <a href="https://wordpress.org/plugins/lazy-load-control-for-elementor/" target="_blank">Lazy Load Control For Elementor</a>
* <a href="https://wordpress.org/plugins/load-video-on-click/" target="_blank">Load Video On Click</a>
* <a href="https://wordpress.org/plugins/mu-manager/" target="_blank">Mu Manager</a>
* <a href="https://wordpress.org/plugins/no-spam-in-backend/" target="_blank">No Spam In Backend</a>
* <a href="https://wordpress.org/plugins/oracle-cards/" target="_blank">Oracle Cards</a>
* <a href="https://wordpress.org/plugins/page-detector/" target="_blank">Page Detector</a>
* <a href="https://wordpress.org/plugins/passe-partout/" target="_blank">Passe Partout</a>
* <a href="https://wordpress.org/plugins/plugversions/" target="_blank">Plugversions</a>
* <a href="https://wordpress.org/plugins/progress-bar-correction-for-lifterlms/" target="_blank">Progress Bar Correction For Lifterlms</a>
* <a href="https://wordpress.org/plugins/rename-plugins-folder/" target="_blank">Rename Plugins Folder</a>
* <a href="https://wordpress.org/plugins/resource-not-found-placeholder/" target="_blank">Resource Not Found Placeholder</a>
* <a href="https://wordpress.org/plugins/restore-paypal-standard-for-woocommerce/" target="_blank">Restore Paypal Standard For Woocommerce</a>
* <a href="https://wordpress.org/plugins/save-single-file/" target="_blank">Save Single File</a>
* <a href="https://wordpress.org/plugins/specific-content-for-mobile/" target="_blank">Specific Content For Mobile</a>
* <a href="https://wordpress.org/plugins/top-bar-links/" target="_blank">Top Bar Links</a>
* <a href="https://wordpress.org/plugins/update-page-cache/" target="_blank">Update Page Cache</a>
* <a href="https://wordpress.org/plugins/website-information/" target="_blank">Website Information</a>


== Changelog ==

= 0.0.4 =
* Fix: conflict with Elementor editor loading

= 0.0.3 =
* Removed: no more switch. You need to deactivate the plugin instead of turning off the switch

= 0.0.2 =
* Fix: conflict with Elementor templates

= 0.0.1 =
* First release


== Screenshots ==

1. Incognito mode enabled
2. Incognito mode disabled
