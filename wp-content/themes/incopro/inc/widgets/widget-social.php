<?php

/**
 * Social  Widget
 * incopro Theme
 */
class incopro_social_widget extends WP_Widget
{
	 function __construct(){

        $widget_ops = array('classname' => 'incopro-social','description' => esc_html__( "incopro Social Widget" ,'incopro') );
		    parent::__construct('incopro-social', esc_html__('[incopro] Social Widget','incopro'), $widget_ops);
    }

    function widget($args , $instance) {
    	extract($args);
        $title = isset($instance['title']) ? $instance['title'] : esc_html__('Follow us' , 'incopro');

      echo $before_widget;
      echo $before_title;
      echo $title;
      echo $after_title;

    /**
     * Widget Content
     */
    ?>

    <!-- social icons -->
    <div class="social-icons sticky-sidebar-social">


    <?php incopro_social_icons(); ?>


    </div><!-- end social icons -->


		<?php

		echo $after_widget;
    }


    function form($instance) {
      if(!isset($instance['title'])) $instance['title'] = esc_html__('Follow us' , 'incopro');
    ?>

      <p><label for="<?php echo $this->get_field_id('title'); ?>"><?php esc_html_e('Title ','incopro') ?></label>

      <input type="text" value="<?php echo esc_attr($instance['title']); ?>"
                          name="<?php echo $this->get_field_name('title'); ?>"
                          id="<?php $this->get_field_id('title'); ?>"
                          class="widefat" />
      </p>

    	<?php
    }

}

?>
