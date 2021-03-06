<?php

$page_title = "Articles &mdash; OAuth";
$page_section = "articles";
$page_secondary = "";
$page_meta_description = "";

require('../includes/_header.php');
?>

  <div class="container">
    <div>
      <h2>Articles</h2>
      <?php require('../includes/_carbon.php'); ?>

			<p>The OAuth community is dedicated to helping provide information on the proper use of the OAuth protocols through a series of articles on different topics.</p>

      <h3>End User Authentication with OAuth 2.0</h3>

  	  <p>While OAuth is not an authentication protocol on its own, there are a number of high-profile authentication protocols built with OAuth 2.0. This article seeks to expose common pitfalls and demonstrate <a href="/articles/authentication">how to do end user authentication using OAuth 2.0</a> in a secure and reliable manner.</p>
	  
      <h3>OAuth 2 Simplified</h3>

      <p><i><a href="https://aaronparecki.com/oauth-2-simplified/">OAuth 2 Simplified</a></i> by <a href="https://aaronparecki.com">Aaron Parecki</a> describes OAuth 2.0 in a simplified format to help developers and service providers implement the protocol. An expanded version of this article is also available <a href="https://oauth2simplified.com/">as a book</a>.</p>
      
    </div>
  </div>

<?php require('../includes/_footer.php'); ?>
