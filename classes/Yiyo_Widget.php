<?php
class Yiyo_Widget extends WP_Widget {

    public $args = array(
        'before_title'  => '<h4 class="widgettitle">',
        'after_title'   => '</h4>',
        'before_widget' => '<div class="widget-wrap">',
        'after_widget'  => '</div></div>'
    );

    function __construct() {
        parent::__construct(
            'yiyo_widget',  // Base ID
            'Yiyo two column widget dynamic heading'   // Name
        );
        add_action( 'widgets_init', function() {
            register_widget( 'yiyo_widget' );
        });
    }

    public function widget( $args, $instance ) {
 
        echo $args['before_widget'];
 
        if ( ! empty( $instance['title'] ) ) {
            echo $args['before_title'] . apply_filters( 'widget_title', $instance['title'] ) . $args['after_title'];
        }
 
        echo '<div class="textwidget">';
 
        echo esc_html__( $instance['text'], 'yiyo_widget' );
 
        echo '</div>';
 
        echo $args['after_widget'];
 
    }

    public function form( $instance ) {
 
        $heading = ! empty( $instance['heading'] ) ? $instance['heading'] : esc_html__( '', 'yiyo_widget' );
        $subtitle = ! empty( $instance['subtitle'] ) ? $instance['subtitle'] : esc_html__( '', 'yiyo_widget' );
        ?>
        <p>
        <label for="<?php echo esc_attr( $this->get_field_id( 'heading' ) ); ?>"><?php echo esc_html__( 'Heading:', 'yiyo_widget' ); ?></label>
            <input class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'heading' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'heading' ) ); ?>" type="text" value="<?php echo esc_attr( $heading ); ?>">
        </p>
        <p>
            <label for="<?php echo esc_attr( $this->get_field_id( 'Subtitle' ) ); ?>"><?php echo esc_html__( 'Subtitle:', 'yiyo_widget' ); ?></label>
            <textarea class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'subtitle' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'subtitle' ) ); ?>" type="text" cols="30" rows="10"><?php echo esc_attr( $subtitle ); ?></textarea>
        </p>
        <?php
 
    }

    public function update( $new_instance, $old_instance ) {
 
        $instance = array();
 
        $instance['heading'] = ( !empty( $new_instance['heading'] ) ) ? strip_tags( $new_instance['heading'] ) : '';
        $instance['subtitle'] = ( !empty( $new_instance['subtitle'] ) ) ? $new_instance['subtitle'] : '';
 
        return $instance;
    }
}
$my_widget = new Yiyo_Widget();
?>