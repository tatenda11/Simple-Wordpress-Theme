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

        add_action('admin_enqueue_scripts', array($this, 'scripts'));
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
        $image = ! empty( $instance['image'] ) ? $instance['image'] : esc_html__( '', 'yiyo_widget' );
        ?>
        <p>
        <label for="<?php echo esc_attr( $this->get_field_id( 'heading' ) ); ?>"><?php echo esc_html__( 'Heading:', 'yiyo_widget' ); ?></label>
            <input class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'heading' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'heading' ) ); ?>" type="text" value="<?php echo esc_attr( $heading ); ?>">
        </p>
        <p>
            <label for="<?php echo esc_attr( $this->get_field_id( 'Subtitle' ) ); ?>"><?php echo esc_html__( 'Subtitle:', 'yiyo_widget' ); ?></label>
            <textarea class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'subtitle' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'subtitle' ) ); ?>" type="text" cols="30" rows="10"><?php echo esc_attr( $subtitle ); ?></textarea>
        </p>
        <p>
            <label for="<?php echo $this->get_field_id( 'image' ); ?>"><?php _e( 'Image:' ); ?></label>
            <input class="widefat" id="<?php echo $this->get_field_id( 'image' ); ?>" name="<?php echo $this->get_field_name( 'image' ); ?>" type="text" value="<?php echo esc_url( $image ); ?>" />
            <button class="upload_image_button button button-primary">Upload Image</button>
        </p>
        <?php
 
    }

    public function update( $new_instance, $old_instance ) {
 
        $instance = array();
 
        $instance['heading'] = ( !empty( $new_instance['heading'] ) ) ? strip_tags( $new_instance['heading'] ) : '';
        $instance['subtitle'] = ( !empty( $new_instance['subtitle'] ) ) ? $new_instance['subtitle'] : '';
        $instance['image'] = ( !empty( $new_instance['image'] ) ) ? $new_instance['image'] : '';
 
        return $instance;
    }

    public function scripts() {
        wp_enqueue_script( 'media-upload' );
        wp_enqueue_media();
        wp_enqueue_script('our_admin', get_template_directory_uri() . '/assets/js/wp-media-library.js', array('jquery'));
    }
}
$my_widget = new Yiyo_Widget();
?>