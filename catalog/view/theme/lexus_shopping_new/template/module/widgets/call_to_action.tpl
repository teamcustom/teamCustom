<div class="<?php echo $style; ?> <?php echo $addition_cls; ?>">
    <div class="call-to-action-inner">
    	<?php if(isset($widget_heading)&&!empty($widget_heading)) {?>
		<div class="heading-title <?php if($style == 'call-to-action-v2'){ echo "heading-v9"; }elseif($style == 'call-to-action-v4 light-style'){ echo "heading-v3 heading-light";}elseif($style == ''){ echo "heading-v3";} ?>">
			<?php if($style == 'light-style'){?>
				<?php if(isset($iconurl) && $iconfile){?>
					<img class="fa" src="<?php echo $iconurl;?>" alt="<?php echo $widget_heading;?>">
				<?php }elseif($iconclass){?>
					<i class="fa <?php echo $iconclass;?>"></i>
				<?php } ?>
			<?php } ?>
            <?php if( $show_title ) { ?><?php echo $widget_heading;?><?php } ?>
        </div>
		<?php }?>
        <div class="content"><?php echo html_entity_decode($htmlcontent, ENT_QUOTES, 'UTF-8'); ?></div>
    </div>
    <?php if($text_link_1 || $text_link_2){?>
    <div class="action-button">
    	<?php if($text_link_1){?>
        	<a class="btn btn-lg btn-outline btn-primary border-2" href="<?php echo $link_1;?>"><?php echo $text_link_1;?></a>
        <?php }?>
        <?php if($text_link_2) {?>
        	<a class="btn btn-lg btn-inverse btn-default border-2" href="<?php echo $link_2;?>"><?php echo $text_link_2;?></a>
        <?php }?>
    </div>
    <?php }?>
</div>