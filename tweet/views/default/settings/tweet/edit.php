<?php
        
	
	$text            = $vars['entity']->text;
	$related         = $vars['entity']->related;
        $count           = $vars['entity']->count;
        $size            = $vars['entity']->size;




?>

</br>

<table border="0">
    

<tr> 
    <td height=40
        <b><?php echo elgg_echo('tweet-button:lblCount'); ?></b><br/>
    </td>
    
    <td>:</td>
    
    
    <td height=40>
         <?php echo elgg_view('input/dropdown', array(
	                      'name' => 'params[count]',
	                      'options_values' => array(
		                                  'none'     => elgg_echo('tweet-button:lblStandard'),
		                                  'horizontal' => elgg_echo('tweet-button:lblHorizontal'),
		                                  'vertical'    => elgg_echo('tweet-button:lblVertical')),
	                      'value' => $vars['entity']->count,)); 
         ?>
    </td>
</tr>

    
<tr>
    <td height=40> 
        <b><?php echo elgg_echo('tweet-button:lblRelated'); ?></b><br/>
     </td>

     <td>:</td>

     <td height=40>
         <?php echo elgg_view('input/text', array(
	                      'name' => 'params[related]',
	                      'value' => $vars['entity']->related,)); 
         ?>
     </td>
</tr>

    
<tr>
    <td height=40> 
        <b><?php echo elgg_echo('tweet-button:lblText'); ?></b><br/>
     </td>

     <td>:</td>

     <td height=40>
         <?php echo elgg_view('input/plaintext', array(
	                      'name' => 'params[text]',
	                      'value' => $vars['entity']->text,)); 
         ?>
     </td>
</tr>


<tr>
    <td height=40> 
        <b><?php echo elgg_echo('tweet-button:lblSize'); ?></b><br/>
     </td>

     <td>:</td>

     <td height=40>
         <?php echo elgg_view('input/dropdown', array(
	                      'name' => 'params[size]',
	                      'options_values' => array(
		                                  'medium' => elgg_echo('tweet-button:lblMedium'),
		                                  'large' => elgg_echo('tweet-button:lblLarge')),
	                      'value' => $vars['entity']->size,)); 
         ?>
     </td>
</tr>