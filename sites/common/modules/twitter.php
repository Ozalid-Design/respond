<?php if($username != ''){ ?>

	<a class="twitter-timeline" href="https://twitter.com/<?php print $username;?>" data-widget-id="377598452605009920">Tweets by @<?php print $username;?></a>
	<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>


<?php } ?>