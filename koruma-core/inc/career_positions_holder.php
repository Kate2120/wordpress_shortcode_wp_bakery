<?php

if(!function_exists('kk_career_positions_container')){
    function kk_career_positions_container( $atts, $content = null ) {
        extract(shortcode_atts(array(
            'h3' => '',
            'title_contact' => '',
            'text_contact' => '',
            'name' => '',
            'mail' => '',
            'phone' => '',
            'image' => '',

        ), $atts));

        $h3 = esc_html($atts['h3']);
        $title_contact = esc_html($atts['title_contact']);
        $text_contact = esc_html($atts['text_contact']);
        $name = esc_html($atts['name']);
        $mail = esc_html($atts['mail']);
        $phone = esc_html($atts['phone']);
        $image = wp_get_attachment_image_url($atts['image'], $size = 'full');
        $name_contact = '';
        $mail_contact = '';
        $phone_contact = '';
        if($name !== ''){
            $name_contact = ' <div class="row_contact_vacancy">
                        <div class="kk_info_contact">
                            <svg width="410" height="460" viewBox="0 0 410 460" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M334.573 297.044C316.369 322.046 286.881 338.33 253.657 338.33H207.039C190.935 338.33 177.221 328.106 172.028 313.796C165.618 311.884 159.332 309.402 153.198 306.354C140.208 299.9 128.413 291.156 118.03 280.324C50.6804 295.12 0.273438 355.132 0.273438 426.927V436.311C0.273438 449.211 10.7314 459.669 23.6314 459.669H386.034C398.934 459.669 409.392 449.211 409.392 436.311V426.927C409.391 371.465 379.308 323.033 334.573 297.044Z" fill="#009374"/>
                                <path d="M93.2044 232.178C103.243 232.178 111.981 226.614 116.508 218.403C116.627 218.728 116.748 219.051 116.87 219.374C116.906 219.471 116.942 219.568 116.978 219.665C127.598 247.619 148.262 271.053 175.51 281.292C182.1 270.821 193.753 263.857 207.04 263.857H253.658C258.308 263.857 262.636 262.545 266.43 260.424C272.802 256.861 278.532 247.822 281.491 243.031C286.226 235.364 289.895 227.243 293.148 218.389C294.976 221.709 297.49 224.597 300.502 226.86V238.291C300.502 264.121 279.488 285.136 253.657 285.136H207.039C198.226 285.136 191.081 292.281 191.081 301.094C191.081 309.908 198.226 317.052 207.039 317.052H253.657C297.086 317.052 332.418 281.72 332.418 238.291V226.86C338.878 222.007 343.057 214.283 343.057 205.582V157.463V139.011C343.057 130.131 338.702 122.274 332.015 117.443C326.829 51.816 271.769 0 204.832 0C137.894 0 82.8354 51.816 77.6494 117.442C70.9624 122.273 66.6074 130.131 66.6074 139.01V205.58C66.6074 220.311 78.5744 232.178 93.2044 232.178ZM204.832 31.917C254.384 31.917 295.255 69.785 300.032 118.102C296.896 120.569 294.327 123.722 292.557 127.34C277.499 88.054 243.885 60.702 204.831 60.702C164.935 60.702 131.86 88.994 117.164 127.183C117.144 127.235 117.125 127.288 117.105 127.341C115.335 123.723 112.766 120.57 109.63 118.103C114.41 69.785 155.28 31.917 204.832 31.917Z" fill="#009374"/>
                            </svg>
                            <div class="item_contact_vacancy">
                                '.$name.'
                            </div>
                        </div>
                        <div class="kk_box_icon_contact" onclick="copyInfo(this)" data-info="'.$name.'">
                            <svg onclick="showPrompt(this);" enable-background="new 0 0 32 32" height="512" viewBox="0 0 32 32" width="512" xmlns="http://www.w3.org/2000/svg"><g id="Layer_1"><g><path d="m26.5718 2.1602h-16.874c-1.7964 0-3.2578 1.4658-3.2578 3.2676v1.0117h-1.0225c-1.7964 0-3.2578 1.4658-3.2578 3.2686v16.8643c0 1.8018 1.4614 3.2676 3.2578 3.2676h16.8745c1.8022 0 3.2681-1.4658 3.2681-3.2676v-1.0117h1.0117c1.8022 0 3.2686-1.4658 3.2686-3.2686v-16.8644c-.0001-1.8017-1.4664-3.2675-3.2686-3.2675zm-3.0117 24.4121c0 .6992-.5688 1.2676-1.2681 1.2676h-16.8745c-.6934 0-1.2578-.5684-1.2578-1.2676v-16.8643c0-.6992.5645-1.2686 1.2578-1.2686h2.0225 14.852c.6992 0 1.2681.5693 1.2681 1.2686v14.8525zm4.2802-4.2803c0 .6992-.5688 1.2686-1.2686 1.2686h-1.0117v-13.8526c0-1.8027-1.4658-3.2686-3.2681-3.2686h-13.852v-1.0117c0-.6992.5645-1.2676 1.2578-1.2676h16.874c.6997 0 1.2686.5684 1.2686 1.2676z" fill="rgb(0,0,0)"></path></g></g></svg>
                            <span class="prompt_copy">Copied</span>
                        </div>
                    </div>';
        }
        if($mail !== ''){
            $mail_contact = '<div class="row_contact_vacancy">
                        <div class="kk_info_contact">
                            <svg width="512" height="512" viewBox="0 0 512 512" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M507.49 101.723L352.211 256.002L507.49 410.281C510.297 404.414 512 397.928 512 391.002V121.002C512 114.075 510.297 107.59 507.49 101.723Z" fill="#009374"/>
                                <path d="M467 76H45.0002C38.0732 76 31.5882 77.703 25.7212 80.51L224.184 277.973C241.732 295.521 270.268 295.521 287.816 277.973L486.279 80.51C480.412 77.703 473.927 76 467 76Z" fill="#009374"/>
                                <path d="M4.51 101.723C1.703 107.59 0 114.075 0 121.002V391.002C0 397.929 1.703 404.415 4.51 410.281L159.789 256.002L4.51 101.723Z" fill="#009374"/>
                                <path d="M331 277.211L309.027 299.184C279.788 328.423 232.211 328.423 202.972 299.184L181 277.211L25.7212 431.49C31.5882 434.297 38.0732 436 45.0002 436H467C473.927 436 480.412 434.297 486.279 431.49L331 277.211Z" fill="#009374"/>
                            </svg>
                            <div class="item_contact_vacancy">
                                <a href="mailto:'.$mail.'">'.$mail.'</a>

                            </div>
                        </div>
                        <div class="kk_box_icon_contact" onclick="copyInfo(this)" data-info="'.$mail.'">
                            <svg onclick="showPrompt(this);" enable-background="new 0 0 32 32" height="512" viewBox="0 0 32 32" width="512" xmlns="http://www.w3.org/2000/svg"><g id="Layer_1"><g><path d="m26.5718 2.1602h-16.874c-1.7964 0-3.2578 1.4658-3.2578 3.2676v1.0117h-1.0225c-1.7964 0-3.2578 1.4658-3.2578 3.2686v16.8643c0 1.8018 1.4614 3.2676 3.2578 3.2676h16.8745c1.8022 0 3.2681-1.4658 3.2681-3.2676v-1.0117h1.0117c1.8022 0 3.2686-1.4658 3.2686-3.2686v-16.8644c-.0001-1.8017-1.4664-3.2675-3.2686-3.2675zm-3.0117 24.4121c0 .6992-.5688 1.2676-1.2681 1.2676h-16.8745c-.6934 0-1.2578-.5684-1.2578-1.2676v-16.8643c0-.6992.5645-1.2686 1.2578-1.2686h2.0225 14.852c.6992 0 1.2681.5693 1.2681 1.2686v14.8525zm4.2802-4.2803c0 .6992-.5688 1.2686-1.2686 1.2686h-1.0117v-13.8526c0-1.8027-1.4658-3.2686-3.2681-3.2686h-13.852v-1.0117c0-.6992.5645-1.2676 1.2578-1.2676h16.874c.6997 0 1.2686.5684 1.2686 1.2676z" fill="rgb(0,0,0)"></path></g></g></svg>
                            <span class="prompt_copy">Copied</span>
                        </div>
                    </div>';
        }
        if($phone !== ''){
            $linkPhone = str_replace(' ', '', $phone);
            $linkPhone = str_replace('+', '', $linkPhone);
            $linkPhone = "+" . $linkPhone;
            $phone_contact = '<div class="row_contact_vacancy">
                        <div class="kk_info_contact">
                            <svg width="512" height="512" viewBox="0 0 512 512" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M470.288 373.76C456.304 362.032 374.288 310.096 360.656 312.48C354.256 313.616 349.36 319.072 336.256 334.704C330.196 342.398 323.541 349.604 316.352 356.256C303.181 353.074 290.431 348.348 278.368 342.176C231.061 319.144 192.842 280.914 169.824 233.6C163.652 221.537 158.926 208.787 155.744 195.616C162.396 188.427 169.602 181.772 177.296 175.712C192.912 162.608 198.384 157.744 199.52 151.312C201.904 137.648 149.92 55.664 138.24 41.68C133.344 35.888 128.896 32 123.2 32C106.688 32 32 124.352 32 136.32C32 137.296 33.6 233.44 155.024 356.976C278.56 478.4 374.704 480 375.68 480C387.648 480 480 405.312 480 388.8C480 383.104 476.112 378.656 470.288 373.76Z" fill="#009374"/>
                                <path d="M368 240H400C399.962 206.064 386.464 173.529 362.468 149.532C338.471 125.536 305.936 112.038 272 112V144C297.453 144.025 321.856 154.148 339.854 172.146C357.852 190.144 367.975 214.547 368 240Z" fill="#009374"/>
                                <path d="M448 240H480C479.936 184.854 458.002 131.986 419.008 92.9919C380.014 53.9981 327.146 32.0635 272 32V64C318.661 64.055 363.396 82.6155 396.39 115.61C429.384 148.604 447.945 193.339 448 240Z" fill="#009374"/>
                            </svg>
                            <div class="item_contact_vacancy">
                                <a href="tel:'.$linkPhone.'">'.$phone.'</a>
                            </div>
                        </div>
                        <div class="kk_box_icon_contact" onclick="copyInfo(this)" data-info="'.$linkPhone.'">
                            <svg onclick="showPrompt(this);" enable-background="new 0 0 32 32" height="512" viewBox="0 0 32 32" width="512" xmlns="http://www.w3.org/2000/svg"><g id="Layer_1"><g><path d="m26.5718 2.1602h-16.874c-1.7964 0-3.2578 1.4658-3.2578 3.2676v1.0117h-1.0225c-1.7964 0-3.2578 1.4658-3.2578 3.2686v16.8643c0 1.8018 1.4614 3.2676 3.2578 3.2676h16.8745c1.8022 0 3.2681-1.4658 3.2681-3.2676v-1.0117h1.0117c1.8022 0 3.2686-1.4658 3.2686-3.2686v-16.8644c-.0001-1.8017-1.4664-3.2675-3.2686-3.2675zm-3.0117 24.4121c0 .6992-.5688 1.2676-1.2681 1.2676h-16.8745c-.6934 0-1.2578-.5684-1.2578-1.2676v-16.8643c0-.6992.5645-1.2686 1.2578-1.2686h2.0225 14.852c.6992 0 1.2681.5693 1.2681 1.2686v14.8525zm4.2802-4.2803c0 .6992-.5688 1.2686-1.2686 1.2686h-1.0117v-13.8526c0-1.8027-1.4658-3.2686-3.2681-3.2686h-13.852v-1.0117c0-.6992.5645-1.2676 1.2578-1.2676h16.874c.6997 0 1.2686.5684 1.2686 1.2676z" fill="rgb(0,0,0)"></path></g></g></svg>
                            <span class="prompt_copy">Copied</span>
                        </div>

                    </div>';
        }


        return '<div class="kk_vacancy">
    <h3>'.$h3.'</h3>
    <div class="kk_vacancy_list">'
            .do_shortcode($content).
            '</div>
    <div class="kk_contact_vacancy">
        <div class="kk_contact_vacancy_title">
            <span>'.$title_contact.'</span>
            <svg width="388" height="372" viewBox="0 0 388 372" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M340.416 278.598L288.588 242.387C281.814 237.668 273.885 235.172 265.674 235.172C252.611 235.172 240.354 241.578 232.885 252.297L220.854 269.535C200.689 256.016 178.182 237.133 156.736 215.691C135.299 194.246 116.416 171.742 102.893 151.578L120.127 139.555C128.916 133.434 134.775 124.273 136.643 113.75C138.502 103.246 136.158 92.625 130.033 83.8321L93.8301 32.0079C83.6348 17.4219 64.3535 11.0391 48.1191 17.043C43.3848 18.7969 38.9785 20.9414 34.6426 23.6563L27.4785 28.7032C25.6973 30.0938 24.041 31.6094 22.4473 33.1993C13.7129 41.9336 7.50976 52.9805 4.02538 66.043C-10.8965 121.973 26.0644 206.527 95.9863 276.445C154.705 335.164 225.244 371.645 280.088 371.648C289.471 371.648 298.33 370.555 306.4 368.402C319.447 364.914 330.494 358.719 339.229 349.984C340.822 348.395 342.346 346.734 343.971 344.625L349.01 337.426C351.494 333.453 353.643 329.039 355.385 324.309C361.486 307.828 355.338 289.031 340.416 278.598Z" fill="white"/>
                <path d="M379.252 0.34375H187.252C182.83 0.34375 179.252 3.92578 179.252 8.34375V120.344C179.252 124.762 182.83 128.344 187.252 128.344H215.65L234.736 168.996C236.057 171.805 238.877 173.598 241.979 173.598C245.08 173.598 247.9 171.805 249.221 169L268.314 128.344H379.252C383.674 128.344 387.252 124.762 387.252 120.344V8.34375C387.252 3.92578 383.674 0.34375 379.252 0.34375ZM338.752 88.3438H227.752C223.33 88.3438 219.752 84.7617 219.752 80.3438C219.752 75.9258 223.33 72.3438 227.752 72.3438H338.752C343.174 72.3438 346.752 75.9258 346.752 80.3438C346.752 84.7617 343.174 88.3438 338.752 88.3438ZM338.752 56.3438H227.752C223.33 56.3438 219.752 52.7617 219.752 48.3438C219.752 43.9258 223.33 40.3438 227.752 40.3438H338.752C343.174 40.3438 346.752 43.9258 346.752 48.3438C346.752 52.7617 343.174 56.3438 338.752 56.3438Z" fill="white"/>
            </svg>
        </div>

        <div class="kk_box_contacts">
            <div class="kk_wrapper_contacts">
                <div class="kk_contact_vacancy_text">
                    '.$text_contact.'
                </div>
                <div class="kk_box_contacts_rows">
                   '.$name_contact.'
                    '.$mail_contact.'
                    '.$phone_contact.'
                </div>
            </div>

            <img src="'.$image.'" alt="'.$h3.'">
        </div>


    </div>
    
</div>';
    }
    add_shortcode('kk_career_positions_container', 'kk_career_positions_container');
}

if(!function_exists('kk_single_item_career_position')) {
    function kk_single_item_career_position( $atts, $content = null) {
        extract(shortcode_atts(array(
            'title_position' => '',
            'amount_position' => '',
            'link_position' => '',
            'name_link_position' => '',


        ), $atts));

        $title_position = esc_html($atts['title_position']);
        $amount_position = esc_html($atts['amount_position']);
        $link_position = esc_html($atts['link_position']);
        $name_link_position = esc_html($atts['name_link_position']);
        $link_position_block = '';
        if($link_position !== ''){
            $link_position_block = '<a href="'.$link_position.'" target="_blank">'.$name_link_position.'</a>';
        }

        return ' <div class="kk_item_vacancy">
            <div class="kk_name_vacancy">'.$title_position.'</div>
            <div class="kk_amount_positions">
                <div class="kk_box_amount">
                    <svg width="512" height="512" viewBox="0 0 512 512" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <g clip-path="url(#clip0_501_2)">
                            <path d="M438.09 273.32H398.494C402.53 284.37 404.735 296.295 404.735 308.724V458.374C404.735 463.556 403.833 468.53 402.192 473.156H467.653C492.106 473.156 511.999 453.262 511.999 428.81V347.229C512 306.476 478.844 273.32 438.09 273.32Z" fill="#009374"/>
                            <path d="M107.265 308.724C107.265 296.294 109.47 284.37 113.506 273.32H73.91C33.156 273.32 0 306.476 0 347.23V428.811C0 453.263 19.893 473.157 44.346 473.157H109.808C108.167 468.529 107.265 463.556 107.265 458.374V308.724Z" fill="#009374"/>
                            <path d="M301.26 234.812H210.738C169.984 234.812 136.828 267.969 136.828 308.723V458.372C136.828 466.535 143.446 473.155 151.61 473.155H360.388C368.552 473.155 375.17 466.536 375.17 458.372V308.723C375.17 267.969 342.014 234.812 301.26 234.812Z" fill="#009374"/>
                            <path d="M255.999 38.8438C206.987 38.8438 167.113 78.7177 167.113 127.731C167.113 160.976 185.462 190.011 212.56 205.255C225.413 212.485 240.231 216.617 255.999 216.617C271.767 216.617 286.585 212.485 299.438 205.255C326.537 190.011 344.885 160.975 344.885 127.731C344.885 78.7187 305.011 38.8438 255.999 38.8438Z" fill="#009374"/>
                            <path d="M99.9184 121.688C63.2634 121.688 33.4434 151.507 33.4434 188.162C33.4434 224.817 63.2634 254.638 99.9184 254.638C109.216 254.638 118.07 252.712 126.113 249.25C140.019 243.263 151.485 232.665 158.58 219.39C163.56 210.073 166.393 199.443 166.393 188.162C166.393 151.508 136.573 121.688 99.9184 121.688Z" fill="#009374"/>
                            <path d="M412.082 121.688C375.427 121.688 345.607 151.507 345.607 188.162C345.607 199.444 348.44 210.074 353.42 219.39C360.515 232.666 371.981 243.264 385.887 249.25C393.93 252.712 402.784 254.638 412.082 254.638C448.737 254.638 478.557 224.817 478.557 188.162C478.557 151.507 448.737 121.688 412.082 121.688Z" fill="#009374"/>
                        </g>
                        <defs>
                            <clipPath id="clip0_501_2">
                                <rect width="511.999" height="511.999" fill="white"/>
                            </clipPath>
                        </defs>
                    </svg>
                    <div class="kk_number">
                        x <span>'.$amount_position.'</span>
                    </div>
                </div>
                '.$link_position_block.'
            </div>
        </div>';
    }
    add_shortcode('kk_single_item_career_position', 'kk_single_item_career_position');
}


// Mapping
vc_map( array(
    "name" => __("KK Career positions", "KK blocks"),
    "base" => "kk_career_positions_container",
    "as_parent" => array('only' => 'kk_single_item_career_position'),
    "content_element" => true,
    "show_settings_on_create" => false,
    "is_container" => true,
    "category" =>array('KK blocks'),
    "params" => array (
        array(
            'type' => 'textfield',
            'heading' => 'h2',
            'param_name' => 'h2',
            'value' => '',
            'description' => 'Paste h2'
        ),
        array(
            'type' => 'textfield',
            'heading' => 'h3',
            'param_name' => 'h3',
            'value' => '',
            'description' => 'Paste h3'
        ),
        array(
            'type' => 'textfield',
            'heading' => 'Title contact',
            'param_name' => 'title_contact',
            'value' => '',
            'description' => 'Paste title contact'
        ),
        array(
            'type' => 'textfield',
            'heading' => 'Text contact',
            'param_name' => 'text_contact',
            'value' => '',
            'description' => 'Paste text contact'
        ),
        array(
            'type' => 'textfield',
            'heading' => 'Name',
            'param_name' => 'name',
            'value' => '',
            'description' => 'Paste name contact'
        ),
        array(
            'type' => 'textfield',
            'heading' => 'Mail',
            'param_name' => 'mail',
            'value' => '',
            'description' => 'Paste mail contact'
        ),
        array(
            'type' => 'textfield',
            'heading' => 'Phone',
            'param_name' => 'phone',
            'value' => '',
            'description' => 'Paste phone contact'
        ),
        array(
            'type' => 'attach_image',
            'heading' => 'Image',
            'param_name' => 'image',
            'value' => '',
            'description' => 'Insert image'
        ),
    ),
    "js_view" => 'VcColumnView'


) );

vc_map( array(
    "name" => __("KK Single position", "KK blocks"),
    "base" => "kk_single_item_career_position",
    "show_settings_on_create" => true,
    "as_child" => array('only' => 'kk_career_positions_container'),
    "params" => array(

        array(
            'type' => 'textfield',
            'heading' => 'Title position',
            'param_name' => 'title_position',
            'value' => '',
            'description' => 'Paste title position'
        ),
        array(
            'type' => 'textfield',
            'heading' => 'Amount position',
            'param_name' => 'amount_position',
            'value' => '',
            'description' => 'Paste amount position'
        ),
        array(
            'type' => 'textfield',
            'heading' => 'Link position',
            'param_name' => 'link_position',
            'value' => '',
            'description' => 'Insert a link to the position, if any'
        ),
        array(
            'type' => 'textfield',
            'heading' => 'Name link position',
            'param_name' => 'name_link_position',
            'value' => '',
            'description' => 'Insert the name of the link to the position, if any'
        ),


    ),
) );


if ( class_exists( 'WPBakeryShortCodesContainer' ) ) {
    class WPBakeryShortCode_Kk_Career_Positions_Container extends WPBakeryShortCodesContainer {}
}
if ( class_exists( 'WPBakeryShortCode' ) ) {
    class WPBakeryShortCode_Kk_single_Item_Career_Position extends WPBakeryShortCode {}
}
