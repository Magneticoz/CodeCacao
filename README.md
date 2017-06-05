# CodeCacao
 Wordpress Theme
 
 Steps to make the theme work:
 1. Download latest Wordpress
 2. Create Database
 3. Edit wp-config.php with data corresponding your DB
 4. Install Wordpress
 5. Download the CodeCacao theme the the \wp-content\themes folder
 6. Login to the WP with admin account and change theme in Dashboard -> Appearance -> Themes
 7. Change permalink settings to "Post name". Go to Dasboard -> Settings -> Permalinks and select "Post name".
 8. Add in logo in Dasboard -> Appearance -> Customize, in Site Identity tab
 9. Install Custom field suite plugin ( https://wordpress.org/plugins/custom-field-suite/ )
 10. Install CFS Options Screens plugin ( https://wordpress.org/plugins/cfs-options-screens/ )
 10. Go to Dashboard -> Field Groups -> Tools, open "Import" tab and paste in following code to add in default fields
	-	[{"post_title":"Homepage","post_name":"homepage","cfs_fields":[{"id":"1","name":"homepage_news_title","label":"News title","type":"text","notes":"","parent_id":0,"weight":0,"options":{"default_value":"","required":"0"}},{"id":"2","name":"homepage_news","label":"News","type":"loop","notes":"Add new news to the Homepage. You can pick between two previews ( Simple and Detailed ) by checking a checkbox and filling correct details.","parent_id":0,"weight":1,"options":{"row_display":"0","row_label":"News Row","button_label":"Add News","limit_min":"","limit_max":""}},{"id":"13","name":"homepage_simple_box","label":"Simple box","type":"true_false","notes":"if this is checked, then you don't have to add content for \"Detailed box\", and if it's not checked then you don't have to add content for \"Simple box\"","parent_id":2,"weight":2,"options":{"message":"Check if the box should be simple.","required":"0"}},{"id":"4","name":"homepage_simple_box_header","label":"Simple box header","type":"text","notes":"","parent_id":2,"weight":3,"options":{"default_value":"","required":"0"}},{"id":"5","name":"homepage_simple_box_big","label":"Simple box big content","type":"text","notes":"","parent_id":2,"weight":4,"options":{"default_value":"","required":"0"}},{"id":"6","name":"homepage_simple_box_small","label":"Simple box small content","type":"text","notes":"","parent_id":2,"weight":5,"options":{"default_value":"","required":"0"}},{"id":"10","name":"homepage_detailed_box_content","label":"Detailed box content","type":"textarea","notes":"This box supports HTML.","parent_id":2,"weight":6,"options":{"default_value":"","formatting":"auto_br","required":"0"}},{"id":"12","name":"homepage_box_color","label":"News box text color","type":"color","notes":"default is yellow (#eeb71d )","parent_id":2,"weight":7,"options":{"default_value":""}},{"id":"8","name":"simple_box_footer","label":"News box footer","type":"text","notes":"This box supports HTML.","parent_id":2,"weight":8,"options":{"default_value":"","required":"0"}}],"cfs_rules":[],"cfs_extras":{"order":"0","context":"normal","hide_editor":"0"}}]
 11. Create Projects ( Dashboard -> Projects -> Add new ); Add title, content, excerpt and featured image ( Title, excerpt and featured image will be pulled to homepage ).
	-	to limit number of projects displayed on index page go to Dasboard -> Settings -> Reading and change "Blog pages show at most" number to corresponding one.
 12. To add Homepage news sections go to Dashboard -> Homepage options
	-	you can add news title and news sections here.
	-	both title and at least one news box needs to be added to display this section on homepage
	-	you can add new boxes with "Add news". When adding new news, you can choose to display it on one of two predefined ways ( simple or detailed ) by filling in correct data ( all text fields supports HTML for adding links ).
	-	Two fields are same for both displays: - News box text color and News box footer.
	-	If text color for box is not set, default ( yellow ) will be used.
	-	you can drag&drop added news to sort them differently.
 13. Adding Social menu
	- Go to Dashboard -> Appearance -> Menus
	- Add in menu name ( like "Social menu" ), and click on "Add menu".
	- Add in custom links with url to social media and Link text "&nbsp;".
	- Add in classes for social link with prefix "head_". So you have "head_facebook", "head_twitter", "head_linkedin", "head_email". If you can't add in class when you expand added item, then navigate to the top of the WP page, find "Screen options", expand it and be sure "CSS Classes" has it's checkbox ticked.
	- under Display location, check Social Links Menu.