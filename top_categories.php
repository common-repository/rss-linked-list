<?php
/*
Plugin Name: Top Categories
Plugin URI: http://www.squible.com/2005/07/09/tag-happy-popular-tags-plugin/
Description: Display your top x categories by post where x is the number of categories you want to display.  Can be seen in use at: <a href="http://rawlinson.us/blog/archives/">Top Categories</a>.
Version: 1.0
Author: Bill Rawlinson
Author URI: http://blog.rawlinson.us/
*/
function top_categories($displaynum=10)
{
        $cats = list_cats(1, 'all', 'name', 'asc', '', 0, 0, 1, 1, 0, 1, 1, 0, 1, '', '', '', 0);
        $myurl = get_bloginfo('url');
        $category_base = get_settings('category_base');

		$cats = explode("\n", $cats);
        foreach ($cats as $cat)
        {
                eregi("a href=\"(.+)\" ", $cat, $regs);
                $catlink = $regs[1];
                $cat = trim(strip_tags($cat));
                eregi("(.*) \(([0-9]+)\)$", $cat, $regs);
                $catname = $regs[1]; $count = $regs[2];
                $counts{$catname} = $count;
                $catlinks{$catname} = $catlink;
        }

		// order from lowest to highest
		natsort($counts);


		// get the last ten,which have the highest counts ..
		$counts = array_slice($counts,-$displaynum,$displaynum);

		// reverse the order so we go from highest to lowest
		$counts = array_reverse($counts);

		print "<ul>";
        foreach ($counts as $catname => $count)
        {
                $catlink = $catlinks{$catname};
                if (strstr($catlink, "http:") == FALSE) {
                        print "<li><a href=\"$myurl$category_base/$catlink\" rel=\"tag\" title=\"$count entries\">$catname</a></li>";
                } else {
                        print "<li><a href=\"$catlink\" rel=\"tag\" title=\"$count entries\">$catname</a></li>";
                }
        }
		print "</ul>";
}
?>
