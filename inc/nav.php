<?php
add_action('init', function () {
    register_nav_menus([
        'header_menu' => __('Header Menu', 'flynt')
    ]);
});

function header_desktop_root_nav() {
    wp_nav_menu(array(
        'container' => false,
        'theme_location' => 'header_menu',
        'items_wrap' => '%3$s',
        'walker' => new Header_Desktop_Root_Nav_Walker()
    ));
}

if ( !class_exists('Header_Desktop_Root_Nav_Walker') ) {
    class Header_Desktop_Root_Nav_Walker extends Walker_Nav_Menu  {
	    
        public function start_lvl( &$output, $depth = 0, $args = null ) {
        }

        public function end_lvl( &$output, $depth = 0, $args = null ) {
        }

        public function start_el( &$output, $data_object, $depth = 0, $args = null, $current_object_id = 0 ) {
            if( $depth == 0 ){
                $menu_item = $data_object;

                $classes   = empty( $menu_item->classes ) ? array() : (array) $menu_item->classes;
                $classes[] = 'menu-item-' . $menu_item->ID;

                $args = apply_filters( 'nav_menu_item_args', $args, $menu_item, $depth );

                $class_names = implode( ' ', apply_filters( 'nav_menu_css_class', array_filter( $classes ), $menu_item, $args, $depth ) );
                $class_names = $class_names ? ' class="eachLink ' . esc_attr( $class_names ) . '"' : '';

                $id = apply_filters( 'nav_menu_item_id', 'menu-item-' . $menu_item->ID, $menu_item, $args, $depth );
                $id = $id ? ' id="' . esc_attr( $id ) . '"' : '';

                $output .= '<p' . $id . $class_names . '>';

                $atts           = array();
                $atts['title']  = ! empty( $menu_item->attr_title ) ? $menu_item->attr_title : '';
                $atts['target'] = ! empty( $menu_item->target ) ? $menu_item->target : '';
                if ( '_blank' === $menu_item->target && empty( $menu_item->xfn ) ) {
                    $atts['rel'] = 'noopener';
                } else {
                    $atts['rel'] = $menu_item->xfn;
                }
                $atts['href']         = ! empty( $menu_item->url ) ? $menu_item->url : '';
                $atts['class'] = $menu_item->current ? 'atPage' : '';

                $atts = apply_filters( 'nav_menu_link_attributes', $atts, $menu_item, $args, $depth );

                $attributes = '';
                foreach ( $atts as $attr => $value ) {
                    if ( is_scalar( $value ) && '' !== $value && false !== $value ) {
                        $value       = ( 'href' === $attr ) ? esc_url( $value ) : esc_attr( $value );
                        $attributes .= ' ' . $attr . '="' . $value . '"';
                    }
                }

                $title = apply_filters( 'the_title', $menu_item->title, $menu_item->ID );

                $title = apply_filters( 'nav_menu_item_title', $title, $menu_item, $args, $depth );

                $item_output  = $args->before;
                $item_output .= '<a' . $attributes . ( $args->walker->has_children ? 'data-subnav="' . $title . '"' : ''). '>';
                $item_output .= $args->link_before . $title . $args->link_after;
                $item_output .= '</a>';
                $item_output .= $args->after;

                $output .= apply_filters( 'walker_nav_menu_start_el', $item_output, $menu_item, $depth, $args );
            }
        }

        public function end_el( &$output, $data_object, $depth = 0, $args = null ) {
            if( $depth == 0 ){
                $output .= "</p>";
            }
        }
    }
}