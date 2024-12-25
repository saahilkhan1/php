<?php
// Enqueue the parent theme's stylesheet
function blocksy_child_enqueue_styles() {
    wp_enqueue_style('blocksy-style', get_template_directory_uri() . '/style.css'); // Parent theme style
    wp_enqueue_style('blocksy-child-style', get_stylesheet_uri(), array('blocksy-style')); // Child theme style
}
add_action('wp_enqueue_scripts', 'blocksy_child_enqueue_styles');

// Function to display product categories with their names and images
function custom_product_categories_with_images() {
    // Get all product categories
    $args = array(
        'taxonomy'   => 'product_cat', // Specify the product category taxonomy
        'orderby'    => 'name',        // Order by name
        'order'      => 'ASC',         // Ascending order
        'hide_empty' => false,         // Show empty categories
    );
    
    // Get the categories
    $categories = get_terms($args);
    
    // Check if there are any categories
    if (!empty($categories) && !is_wp_error($categories)) {
        $output = '<div class="product-categories-wrapper">';
        
        // Loop through the categories
        foreach ($categories as $category) {
            // Get the image for the category
            $thumbnail_id = get_term_meta($category->term_id, 'thumbnail_id', true);
            $image_url = wp_get_attachment_url($thumbnail_id);
            
            // Output each category with image and name
            $output .= '<div class="product-category-item">';
            if ($image_url) {
                $output .= '<div class="category-image"><img src="' . esc_url($image_url) . '" alt="' . esc_attr($category->name) . '"></div>';
            }
            $output .= '<div class="category-name"><a href="' . esc_url(get_term_link($category)) . '">' . esc_html($category->name) . '</a></div>';
            $output .= '</div>';
        }
        
        $output .= '</div>';
        return $output;
    } else {
        return 'No product categories found.';
    }
}

// Register the shortcode
add_shortcode('product_categories_with_images', 'custom_product_categories_with_images');
?>
