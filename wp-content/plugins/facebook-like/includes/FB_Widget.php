<?php
class FB_Widget extends WP_Widget {

	/**
	 * Register widget with WordPress.
	 */
	function __construct() {
		parent::__construct(
			'fb_widget', // Base ID
			esc_html__( 'Facebook Like Buttom', 'fbl_domain' ), // Name
			array( 'description' => esc_html__( 'Add a facebook like and share button to your site', 'fbl_domain' ), ) // Args
		);
	}

	/**
	 * Front-end display of widget.
	 *
	 * @see WP_Widget::widget()
	 *
	 * @param array $args     Widget arguments.
	 * @param array $instance Saved values from database.
	 */
	public function widget( $args, $instance ) {
        echo $args['before_widget'];
        
		if ( ! empty( $instance['title'] ) ) {
			echo $args['before_title'] . apply_filters( 'widget_title', $instance['title'] ) . $args['after_title'];
        }
        
        echo '<div class="fb-like" data-href="'.$instance['url'].'" data-width="100" data-layout="'.$instance['layout'].'" data-action="'.$instance['action'].'" data-size="'.$instance['btn_size'].'" data-show-faces="'.$instance['show_face'].'" data-share="'.$instance['share_btn'].'"></div>';
        
		echo $args['after_widget'];
	}

	/**
	 * Back-end widget form.
	 *
	 * @see WP_Widget::form()
	 *
	 * @param array $instance Previously saved values from database.
	 */
	public function form( $instance ) {
        $title = ! empty( $instance['title'] ) ? $instance['title'] : esc_html__( 'Like us on Facebook', 'fbl_domain' );
        $url = ! empty( $instance['url'] ) ? $instance['url'] : esc_html__( 'https://www.facebook.com/AtifAslamOfficialFanPage/', 'fbl_domain' );
        $layout = ! empty( $instance['layout'] ) ? $instance['layout'] : esc_html__( 'standard', 'fbl_domain' );
        $action = ! empty( $instance['action'] ) ? $instance['action'] : esc_html__( 'like', 'fbl_domain' );
        $btn_size = ! empty( $instance['btn_size'] ) ? $instance['btn_size'] : esc_html__( 'small', 'fbl_domain' );
        $show_face = !empty( $instance['show_face'] ) ? $instance['show_face'] : esc_html__( 'false', 'fbl_domain' );
        $share_btn = !empty( $instance['share_btn'] ) ? $instance['share_btn'] : esc_html__( 'false', 'fbl_domain' );

		?>

		<p>
		    <label for="<?php echo esc_attr( $this->get_field_id( 'title' ) ); ?>">
                <?php esc_attr_e( 'Title:', 'fbl_domain' ); ?>
            </label> 
		    <input 
            class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'title' ) ); ?>" 
            name="<?php echo esc_attr( $this->get_field_name( 'title' ) ); ?>" 
            type="text" 
            value="<?php echo esc_attr( $title ); ?>">
		</p>

        <p>
		    <label for="<?php echo esc_attr( $this->get_field_id( 'url' ) ); ?>">
                <?php esc_attr_e( 'URL to Like:', 'fbl_domain' ); ?>
            </label> 
		    <input 
            class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'url' ) ); ?>" 
            name="<?php echo esc_attr( $this->get_field_name( 'url' ) ); ?>" 
            type="text" 
            value="<?php echo esc_attr( $url ); ?>">
		</p>

        <p>
		    <label for="<?php echo esc_attr( $this->get_field_id( 'layout' ) ); ?>">
                <?php esc_attr_e( 'Layout:', 'fbl_domain' ); ?>
            </label> 
		    <select 
            class="widefat" 
            id="<?php echo esc_attr( $this->get_field_id( 'layout' ) ); ?>" 
            name="<?php echo esc_attr( $this->get_field_name( 'layout' ) ); ?>" 
            type="text">
                <option 
                value="standard"
                <?php echo ($layout == 'standard') ? 'selected' : '' ?>>
                    <?php esc_attr_e( 'Standard', 'fbl_domain' ); ?>
                </option>

                <option 
                value="box_count"
                <?php echo ($layout == 'box_count') ? 'selected' : '' ?>>
                    <?php esc_attr_e( 'Box Count', 'fbl_domain' ); ?>
                </option>

                <option 
                value="button_count"
                <?php echo ($layout == 'button_count') ? 'selected' : '' ?>>
                    <?php esc_attr_e( 'Button Count', 'fbl_domain' ); ?>
                </option>

                <option 
                value="button"
                <?php echo ($layout == 'button') ? 'selected' : '' ?>>
                    <?php esc_attr_e( 'Button', 'fbl_domain' ); ?>
                </option>
            </select>
		</p>

        <p>
		    <label for="<?php echo esc_attr( $this->get_field_id( 'action' ) ); ?>">
                <?php esc_attr_e( 'Action Type:', 'fbl_domain' ); ?>
            </label> 
		    <select 
            class="widefat" 
            id="<?php echo esc_attr( $this->get_field_id( 'action' ) ); ?>" 
            name="<?php echo esc_attr( $this->get_field_name( 'action' ) ); ?>" 
            type="text">
                <option 
                value="like"
                <?php echo ($action == 'like') ? 'selected' : '' ?>>
                    <?php esc_attr_e( 'Like', 'fbl_domain' ); ?>
                </option>

                <option 
                value="recommend"
                <?php echo ($action == 'recommend') ? 'selected' : '' ?>>
                    <?php esc_attr_e( 'Recommend', 'fbl_domain' ); ?>
                </option>
            </select>
		</p>

        <p>
		    <label for="<?php echo esc_attr( $this->get_field_id( 'btn_size' ) ); ?>">
                <?php esc_attr_e( 'Button Size:', 'fbl_domain' ); ?>
            </label> 
		    <select 
            class="widefat" 
            id="<?php echo esc_attr( $this->get_field_id( 'btn_size' ) ); ?>" 
            name="<?php echo esc_attr( $this->get_field_name( 'btn_size' ) ); ?>" 
            type="text">
                <option 
                value="small"
                <?php echo ($btn_size == 'small') ? 'selected' : '' ?>>
                    <?php esc_attr_e( 'Small', 'fbl_domain' ); ?>
                </option>

                <option 
                value="large"
                <?php echo ($btn_size == 'large') ? 'selected' : '' ?>>
                    <?php esc_attr_e( 'Large', 'fbl_domain' ); ?>
                </option>
            </select>
		</p>

        <p>
            <input 
            class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'show_face' ) ); ?>" 
            name="<?php echo esc_attr( $this->get_field_name( 'show_face' ) ); ?>" 
            type="checkbox" 
            value="true"
            <?php echo ($show_face == 'true') ? 'checked' : '' ?>>
		    <label for="<?php echo esc_attr( $this->get_field_id( 'show_face' ) ); ?>">
                <?php esc_attr_e( 'Show Friends\' Faces [?]', 'fbl_domain' ); ?>
            </label>
		</p>

        <p>
            <input 
            class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'share_btn' ) ); ?>" 
            name="<?php echo esc_attr( $this->get_field_name( 'share_btn' ) ); ?>" 
            type="checkbox" 
            value="true"
            <?php echo ($share_btn == 'true') ? 'checked' : '' ?>>
		    <label for="<?php echo esc_attr( $this->get_field_id( 'share_btn' ) ); ?>">
                <?php esc_attr_e( 'Include Share Button [?]', 'fbl_domain' ); ?>
            </label>
		</p>
		<?php 
	}

	/**
	 * Sanitize widget form values as they are saved.
	 *
	 * @see WP_Widget::update()
	 *
	 * @param array $new_instance Values just sent to be saved.
	 * @param array $old_instance Previously saved values from database.
	 *
	 * @return array Updated safe values to be saved.
	 */
	public function update( $new_instance, $old_instance ) {
        $instance = array();
        
        $instance['title'] = ( ! empty( $new_instance['title'] ) ) ? sanitize_text_field( $new_instance['title'] ) : '';
        $instance['url'] = ( ! empty( $new_instance['url'] ) ) ? sanitize_text_field( $new_instance['url'] ) : '';
        $instance['layout'] = ( ! empty( $new_instance['layout'] ) ) ? sanitize_text_field( $new_instance['layout'] ) : '';
        $instance['action'] = ( ! empty( $new_instance['action'] ) ) ? sanitize_text_field( $new_instance['action'] ) : '';
        $instance['btn_size'] = ( ! empty( $new_instance['btn_size'] ) ) ? sanitize_text_field( $new_instance['btn_size'] ) : '';
        $instance['show_face'] = ( ! empty( $new_instance['show_face'] ) ) ? sanitize_text_field( $new_instance['show_face'] ) : 'false';
        $instance['share_btn'] = ( ! empty( $new_instance['share_btn'] ) ) ? sanitize_text_field( $new_instance['share_btn'] ) : 'false';

		return $instance;
	}

} // class Foo_Widget