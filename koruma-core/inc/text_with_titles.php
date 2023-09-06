<?php
class WPBakeryShortCode_Text_With_Titles
{
	function __construct()
	{
		add_action('init', array($this, 'create_shortcode'), 1000);
		add_shortcode('text_with_titles', array($this, 'render_shortcode'));
	}
	public function create_shortcode()
	{
		if (!defined('WPB_VC_VERSION')) {
			return;
		}
		vc_map(
			array(
				'name' => 'KK Text with titles',
				'base' => 'text_with_titles',
				'description' => 'Text with titles across the entire width',
				'category' => 'KK blocks',
				'params' => array(

					array(
						'type' => 'textfield',
						'heading' => 'Title',
						'param_name' => 'text_1',
						'value' => '',
						'description' => 'Insert title'
					),
					array(
						'type' => 'textfield',
						'heading' => 'Title 2',
						'param_name' => 'text_2',
						'value' => '',
						'description' => 'Insert title'
					),
					array(
						'type' => 'textfield',
						'heading' => 'Short description',
						'param_name' => 'short_descr',
						'value' => '',
						'description' => 'Insert short description'
					),
					array(
						'type' => 'textarea_html',
						'heading' => 'Text',
						'param_name' => 'content',
						'value' => '',
						'description' => 'Paste text'
					),
                    array(
                        'type' => 'dropdown',
                        'heading' => __( 'Tag name', "tag" ),
                        'param_name' => 'tag_name',
                        'value' => array(
                            __( 'h2', "my-text-domain" ) => 'h2',
                            __( 'h3', "my-text-domain" ) => 'h3',
                            __( 'h4', "my-text-domain" ) => 'h4',
                            __( 'h5', "my-text-domain" ) => 'h5',
                            __( 'h6', "my-text-domain" ) => 'h6'),
                        'description' => 'Enter description'
                    )
				)

			)
		);
	}
	public function render_shortcode($atts, $content, $tag)
	{
		$atts = (
			shortcode_atts(
				array(
					'text_1' => '',
					'text_2' => '',
					'short_descr' => '',
                    'tag_name' => ''


				),
				$atts
			)
		);

		$title = esc_html($atts['text_1']);
		$title_2 = esc_html($atts['text_2']);
		$short_descr = esc_html($atts['short_descr']);
		$content = wpb_js_remove_wpautop($content, true);
        $description = "";
        if($content !== ""){
            $description = "<div class='text_box sdg_text'>$content</div>";
        }
        $span = "";
            if($title_2 !== ""){
                $span = "<span class='for_h2'>$title_2</span>";
            }
        $htag = "<h2 class='eu_sdg_h2'>$title</h2>";
        switch (esc_html($atts['tag_name'])) {
            case "h3":
                $htag = "<h3>$title</h3>";
                break;
            case "h4":
                $htag = "<h4>$title</h4>";
                break;
            case "h5":
                $htag = "<h5>$title</h5>";
                break;
            case "h6":
                $htag = "<h6>$title</h6>";
                break;
        };


		return "
		<div class='container_text'>
<div class='row_title'>
	$htag
	$span
	<div class='description_min'>$short_descr</div>
</div>
$description
</div>";


	}

}
new WPBakeryShortCode_Text_With_Titles();






?>