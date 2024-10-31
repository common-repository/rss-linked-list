=== Top Categories ===
Contributors: finalcut
Donate Link: https://www.paypal.com/cgi-bin/webscr?cmd=_donations&business=bill%40doxie%2eorg&item_name=TopCategoriesPlugin&no_shipping=0&no_note=1&tax=0&currency_code=USD&lc=US&bn=PP%2dDonationsBF&charset=UTF%2d8
Tags: favorite, categories, popular, related, category
Requires at least: 1.5
Tested up to: 2.5
Stable tag: 1.0

Display your top x categories by post where x is the number of categories you want to display

== Description ==
Can be seen in use at: <a href="http://rawlinson.us/blog/archives/">Top Categories</a>

== Installation ==
1. put the top_categories.php file in your plugins directory
2. activate the plugin

3. modify your template to include the following PHP:
					<?php top_categories(); ?>				

4. You can pass in an optional numeric value like:
					<?php top_categories(5); ?>				
to change the number of categories displayed.  By default it shows the top 10 categories (by number of posts).


