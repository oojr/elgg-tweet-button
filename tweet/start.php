<?php

/* ***********************************************************************
 * @author : Olajide Ogundipe Jr
 * @link http://zapslide.com/
 * Under this agreement, No one has rights to sell this script further.
 * ***********************************************************************/
 
    function tweet_init()
    {
	// Extend the below views to have the FB Like button.
         elgg_extend_view('object/elements/summary', 'tweet/tweet_button');
    }
 
    register_elgg_event_handler('init','system','tweet_init');
 
?>