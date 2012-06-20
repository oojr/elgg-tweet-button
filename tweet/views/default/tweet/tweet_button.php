<!-- Display the Tweet button in the contents -->

<?php
   $text    = elgg_get_plugin_setting('text', 'tweet');
   $related = elgg_get_plugin_setting('related', 'tweet' );
   $count   = elgg_get_plugin_setting('count', 'tweet') ;
   $size    = elgg_get_plugin_setting('size', 'tweet');
    
   $full = elgg_extract('full_view', $vars, FALSE);


   $context =  elgg_get_context();


   /* if ($full && !elgg_in_context('gallery') && $context != 'thewire' )  {*/
   if ($full && $context != 'thewire' )  {
?>

<br/>

<div id="twitter-root"></div>

<a href="https://twitter.com/share" class="twitter-share-button" data-lang="en">Tweet</a>
<script>!function(d,s,id)
{var js,fjs=d.getElementsByTagName(s)[0];
if(!d.getElementById(id))
{js=d.createElement(s);js.id=id;
js.src="//platform.twitter.com/widgets.js";
fjs.parentNode.insertBefore(js,fjs);}}
(document,"script","twitter-wjs");</script>




<div class="twitter-share-button"  
     data-text     ="<?php echo $text ; ?>"
     data-related  ="<?php echo $related ; ?>"
     data-count    ="<?php echo $count ; ?>"  
     data-size     ="<?php echo $size; ?>" >
</div>

<?php } ?>