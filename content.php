<!------------------------------------------------------------------------->
	<!------------------------ Content Area Starts here ----------------------->
	<!------------------------------------------------------------------------->
	<main>
		<?php
			function get_content($info){
				$info = $_GET['info'];
			if($info == 'html'){
				echo "<p>HTML is the standard markup language for creating Web pages.</p>
				<ul>
					<li>HTML stands for Hyper Text Markup Language</li>
					<li>HTML describes the structure of Web pages using markup</li>
					<li>HTML elements are the building blocks of HTML pages</li>
					<li>HTML elements are represented by tags</li>
					<li>HTML tags label pieces of content such as 'heading', 'paragraph', 'table', and so on</li>
					<li>Browsers do not display the HTML tags, but use them to render the content of the page</li>
				</ul>";
			} elseif ($info == 'php') {
				echo "<p>PHP is what you're learning this week!</p>
				<ul>
					<li>PHP is an acronym for 'PHP: Hypertext Preprocessor'</li>
					<li>PHP is a widely-used, open source scripting language</li>
					<li>PHP scripts are executed on the server</li>
					<li>PHP is free to download and use</li>
				</ul>";
			} else {
				echo "<p>The information you requested could not be found.</p>";
			}
		}
		get_content($info);
		?>		
	</main>
	<!------------------------------------------------------------------------->
	<!------------------------- Content Area Ends here ------------------------>
	<!------------------------------------------------------------------------->
	