<?php 
/**
 * Child theme functions.php
 * PHP Version 7.4.12
 *
 * @category   UBC
 * @package    UBC_IAP
 * @subpackage Functions
 * @author     Tim Lu <tim.lu@meetgoat.com>
 * @license    GPL 2.0 http://www.gnu.org/licenses/old-licenses/gpl-2.0.html
 * @version    GIT: https://github.com/meetgoat/ubc-iap
 * @link       https://www.ubc.ca/
 */

require_once 'vendor/autoload.php';

use Carbon_Fields\Container as CarbonContainer;
use Carbon_Fields\Field;

define( 'IAP_THEME_VERSION', '1.5' );

/**
 * Creates a back-end field section.
 *
 * This function DRYs out some repeated sections we create for the front page.
 * 
 * @param string $label         - Label of the section.
 * @param string $handle_prefix - Unique prefix for the section handle.
 * 
 * @author Tim Lu <tim.lu@meetgoat.com>
 *
 * @since 1.0
 * 
 * @return void
 */
function crb_create_section($label, $handle_prefix)
{
    CarbonContainer::make('post_meta', $label)
        ->where('post_id', '=', get_option('page_on_front'))
        ->add_fields(
            array(
                //Field::make('image', $handle_prefix . '_background_image'),
                //Field::make('image', $handle_prefix . '_circular_image'),
                Field::make('text', $handle_prefix . '_heading'),
                Field::make('rich_text', $handle_prefix . '_content'),
            )
        );
}

/**
 * Creates a back-end field section.
 *
 * This function DRYs out some repeated sections we create for the front page.
 * 
 * @param string $label         - Label of the section.
 * @param string $handle_prefix - Unique prefix for the section handle.
 * 
 * @author Tim Lu <tim.lu@meetgoat.com>
 *
 * @since 1.0
 * 
 * @return void
 */
function crb_create_section_with_links($label, $handle_prefix)
{
    CarbonContainer::make('post_meta', $label)
        ->where('post_id', '=', get_option('page_on_front'))
        ->add_fields(
            array(
                Field::make('image', $handle_prefix . '_background_image'),
                Field::make('image', $handle_prefix . '_circular_image'),
                Field::make('text', $handle_prefix . '_heading'),
                Field::make('complex', $handle_prefix . '_links')
                    ->add_fields(
                        array(
                            Field::make('text', 'label'),
                            Field::make('text', 'link')
                        )
                    )
                )
        );
}

/**
 * Creates multiple back-end field sections.
 * 
 * @author Tim Lu <tim.lu@meetgoat.com>
 *
 * @since 1.0
 * 
 * @return void
 */
function crb_attach_theme_options()
{
    // Global
    CarbonContainer::make( 'theme_options', 'Child Options' )
        ->add_fields(
            array(
                Field::make( 'textarea', 'crb_pre_footer_text' ),
            )
        );

    // Homepage
    CarbonContainer::make('post_meta', 'Landing')
        ->where('post_id', '=', get_option('page_on_front'))
        ->add_fields(
            array(
                Field::make('image', 'crb_landing_background_image'),
                Field::make('text', 'crb_landing_heading'),
                Field::make('rich_text', 'crb_landing_content'),
                Field::make('text', 'crb_landing_label')->set_width(50),
                Field::make('textarea', 'crb_landing_embed')->set_width(50),
            )
        );

    crb_create_section('Section 1', 'crb_section_1');
    //crb_create_section('Section 2', 'crb_section_2');
    //crb_create_section_with_links('Section 3', 'crb_section_3');
    //crb_create_section('Section 4', 'crb_section_4');
    //crb_create_section_with_links('Section 5', 'crb_section_5');
    //crb_create_section('Section 6', 'crb_section_6');


    // Foundations
    CarbonContainer::make('post_meta', 'Header')
        ->where('post_template', '=', 'template-foundations.php')
        ->add_fields(
            array(
                Field::make('image', 'crb_header_background_image'),
                Field::make('text', 'crb_header_heading'),
            )
        );

    CarbonContainer::make('post_meta', 'Section 1')
        ->where('post_template', '=', 'template-foundations.php')
        ->add_fields(
            array(
                Field::make('image', 'crb_bubble_background_image'),
                Field::make('rich_text', 'crb_section_1_content_1'),
                Field::make('text', 'crb_section_1_bubble_1_heading')->set_width(50),
                Field::make('text', 'crb_section_1_bubble_1_content')->set_width(50),
                Field::make('text', 'crb_section_1_bubble_2_heading')->set_width(50),
                Field::make('text', 'crb_section_1_bubble_2_content')->set_width(50),
                Field::make('text', 'crb_section_1_heading'),
                Field::make('rich_text', 'crb_section_1_content_2'),
                Field::make('rich_text', 'crb_section_1_content_3'),
            )
        );

    // Guiding Network
    CarbonContainer::make('post_meta', 'Header')
        ->where('post_template', '=', 'template-guiding-network.php')
        ->add_fields(
            array(
                Field::make('image', 'crb_header_background_image'),
                Field::make('text', 'crb_header_heading'),
            )
        );

    CarbonContainer::make('post_meta', 'Section 1')
        ->where('post_template', '=', 'template-guiding-network.php')
        ->add_fields(
            array(
                Field::make('text', 'crb_vertical_text_1'),
                Field::make('text', 'crb_main_bubble_heading'),
                Field::make('rich_text', 'crb_main_bubble_side_content'),
                Field::make('image', 'crb_sub_bubble_image'),
                Field::make('text', 'crb_sub_bubble_heading')->set_width(50),
                Field::make('rich_text', 'crb_sub_bubble_content')->set_width(50),
                Field::make( 'complex', 'crb_bubble_1_rows')
                    ->add_fields(
                        array(
                            Field::make('image', 'bubble_image'),
                            Field::make('text', 'bubble_heading')->set_width(50),
                            Field::make('rich_text', 'bubble_text')->set_width(50),
                            Field::make('rich_text', 'bubble_side_content')
                        )
                    )
            )
        );

    CarbonContainer::make('post_meta', 'Section 2')
        ->where('post_template', '=', 'template-guiding-network.php')
        ->add_fields(
            array(
                Field::make('text', 'crb_vertical_text_2'),
                Field::make('complex', 'crb_bubble_2_rows' )
                    ->add_fields(
                        array(
                            Field::make('image', 'bubble_image'),
                            Field::make('text', 'bubble_heading')->set_width(50),
                            Field::make('rich_text', 'bubble_text')->set_width(50),
                            Field::make('rich_text', 'bubble_side_content')
                        )
                    )
            )
        );

    CarbonContainer::make('post_meta', 'Section 3')
        ->where('post_template', '=', 'template-guiding-network.php')
        ->add_fields(
            array(
                Field::make('text', 'crb_vertical_text_3'),
                Field::make('complex', 'crb_bubble_3_rows' )
                    ->add_fields(
                        array(
                            Field::make('image', 'bubble_image'),
                            Field::make('text', 'bubble_heading')->set_width(50),
                            Field::make('rich_text', 'bubble_text')->set_width(50),
                            Field::make('rich_text', 'bubble_side_content')
                        )
                    )
            )
        );

    CarbonContainer::make('post_meta', 'Section 4')
        ->where('post_template', '=', 'template-guiding-network.php')
        ->add_fields(
            array(
                Field::make('text', 'crb_vertical_text_4'),
                Field::make('image', 'crb_large_bubble_image'),
                Field::make('text', 'crb_large_bubble_heading'),
                Field::make('rich_text', 'crb_large_bubble_side_content'),
                Field::make('rich_text', 'crb_ending_text')
            )
        );

    // President's Message
    CarbonContainer::make('post_meta', 'Circular Image')
        ->where('post_template', '=', 'template-presidents-message.php')
        ->add_fields(
            array(
                Field::make('image', 'crb_circular_image'),
            )
        );

    // Engagement Process
    CarbonContainer::make('post_meta', 'Header')
        ->where('post_template', '=', 'template-the-engagement-process.php')
        ->add_fields(
            array(
                Field::make('image', 'crb_header_background_image'),
                Field::make('text', 'crb_header_heading'),
            )
        );

    CarbonContainer::make('post_meta', 'Bubble Section 1')
        ->where('post_template', '=', 'template-the-engagement-process.php')
        ->add_fields(
            array(
                Field::make('image', 'crb_bubble_background_image'),
                Field::make('text', 'crb_main_bubble_1_heading'),
                Field::make('image', 'crb_sub_bubble_1_image'),
                Field::make('text', 'crb_sub_bubble_1_heading')->set_width(50),
                Field::make('text', 'crb_sub_bubble_1_text')->set_width(50),
                Field::make('image', 'crb_sub_bubble_2_image'),
                Field::make('text', 'crb_sub_bubble_2_heading')->set_width(50),
                Field::make('text', 'crb_sub_bubble_2_text')->set_width(50),
                Field::make('image', 'crb_sub_bubble_3_image'),
                Field::make('text', 'crb_sub_bubble_3_heading')->set_width(50),
                Field::make('text', 'crb_sub_bubble_3_text')->set_width(50),
                Field::make('image', 'crb_sub_bubble_4_image'),
                Field::make('text', 'crb_sub_bubble_4_heading')->set_width(50),
                Field::make('text', 'crb_sub_bubble_4_text')->set_width(50),
                Field::make('image', 'crb_mini_bubble_1_image'),
                Field::make('text', 'crb_mini_bubble_1_text'),
            )
        );

    CarbonContainer::make('post_meta', 'Bubble Section 2')
        ->where('post_template', '=', 'template-the-engagement-process.php')
        ->add_fields(
            array(
                Field::make('image', 'crb_sub_bubble_5_image'),
                Field::make('text', 'crb_sub_bubble_5_heading')->set_width(50),
                Field::make('text', 'crb_sub_bubble_5_text')->set_width(50),
                Field::make('image', 'crb_mini_bubble_2_image'),
                Field::make('text', 'crb_mini_bubble_2_text'),
                Field::make('image', 'crb_mini_bubble_3_image'),
                Field::make('text', 'crb_mini_bubble_3_text'),
                Field::make('image', 'crb_mini_bubble_4_image'),
                Field::make('text', 'crb_mini_bubble_4_text'),
                Field::make('image', 'crb_mini_bubble_5_image'),
                Field::make('text', 'crb_mini_bubble_5_text'),
                Field::make('image', 'crb_mini_bubble_6_image')->set_width(50),
                Field::make('image', 'crb_mini_bubble_7_image')->set_width(50),
                Field::make('text', 'crb_mini_bubble_6_and_7_text'),
            )
        );

    CarbonContainer::make('post_meta', 'Section 1')
        ->where('post_template', '=', 'template-the-engagement-process.php')
        ->add_fields(
            array(
                Field::make('rich_text', 'crb_section_1_content'),
            )
        );

    // Totem
    CarbonContainer::make('post_meta', 'Totem Text')
        ->where('post_template', '=', 'template-totem.php')
        ->add_fields(
            array(
                Field::make('text', 'crb_totem_heading'),
                Field::make('rich_text', 'crb_totem_content'),
                Field::make('text', 'crb_totem_description_1'),
                Field::make('text', 'crb_totem_description_2'),
                Field::make('text', 'crb_totem_description_3'),
                Field::make('text', 'crb_totem_description_4'),
                Field::make('text', 'crb_totem_description_5'),
                Field::make('text', 'crb_totem_description_6'),
                Field::make('text', 'crb_totem_description_7'),
                Field::make('text', 'crb_totem_description_8'),
                Field::make('text', 'crb_totem_description_9'),
                Field::make('text', 'crb_totem_description_10'),
                Field::make('rich_text', 'crb_totem_sub_content'),
            )
        );
}

/**
 * Loads carbon fields and sets up additional theme options.
 * 
 * @author Tim Lu <tim.lu@meetgoat.com>
 *
 * @since 1.0
 * 
 * @return void
 */
function ubc_iap_load()
{
    // Temporary, will remove if I find the setting.
    \UBC_Collab_CLF::$full_width = true;
    \Carbon_Fields\Carbon_Fields::boot();

    // Image Sizes
    add_image_size( 'landing',      1440,   900, array('center', 'center'));
    add_image_size( 'header',       1920,   600, array('center', 'center'));
    add_image_size( 'circle',       600,    600, array('center', 'center'));
    add_image_size( 'circle-small', 450,    450, array('center', 'center'));
}

add_action('carbon_fields_register_fields', 'crb_attach_theme_options');
add_action('after_setup_theme', 'ubc_iap_load');

add_action(
    'wp_enqueue_scripts', 
    function () {
        wp_enqueue_style('sage/main.css', get_stylesheet_directory_uri().('/dist/styles/main.css'), false, IAP_THEME_VERSION);
        wp_enqueue_script('sage/main.js', get_stylesheet_directory_uri().('/dist/scripts/main.js'), ['jquery'], IAP_THEME_VERSION, true);
    }, 
    100
);

/**
 * Change excerpt length (the_excerpt filter doesn't seem to apply)
 * 
 * @author Tim Lu <tim.lu@meetgoat.com>
 *
 * @since 1.0
 * 
 * @return void
 */

function excerpt($limit) {
  $excerpt = explode(' ', get_the_excerpt(), $limit);
  if (count($excerpt)>=$limit) {
    array_pop($excerpt);
    $excerpt = implode(" ",$excerpt).'...';
  } else {
    $excerpt = implode(" ",$excerpt);
  } 
  $excerpt = preg_replace('`\[[^\]]*\]`','',$excerpt);
  return $excerpt;
}

/**
 * Patches an issue with child themes of wp-hybrid-clf not inheriting flexslider 
 * assets properly. Can be removed if the original theme changes it's function from
 * get_stylesheet_directory_uri() to get_template_directory_uri().
 * 
 * @author Tim Lu <tim.lu@meetgoat.com>
 *
 * @since 1.0
 * 
 * @return void
 */
function reregister_spotlight_scripts() 
{
    if (!is_admin()) {
        wp_dequeue_script('ubc-collab-spotlight');
        wp_deregister_script('ubc-collab-spotlight');
    }
}

/**
 * Patches an issue with child themes of wp-hybrid-clf not inheriting flexslider 
 * assets properly. Can be removed if the original theme changes it's function from
 * get_stylesheet_directory_uri() to get_template_directory_uri().
 * 
 * @author Tim Lu <tim.lu@meetgoat.com>
 *
 * @since 1.0
 * 
 * @return void
 */
function reregister_spotlight_styles() 
{
    if (!is_admin()) {
        wp_dequeue_style('ubc-collab-spotlight');
        wp_deregister_style('ubc-collab-spotlight');
    }
}

add_action('wp_print_scripts', 'reregister_spotlight_scripts');
add_action('wp_print_styles', 'reregister_spotlight_styles');