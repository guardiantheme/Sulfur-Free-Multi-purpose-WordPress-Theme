<?php
    /**
     * ReduxFramework Sample Config File
     * For full documentation, please visit: http://docs.reduxframework.com/
     */

    if ( ! class_exists( 'Redux' ) ) {
        return;
    }


    // This is your option name where all the Redux data is stored.
    $opt_name = "tb_sulfur";

    // This line is only for altering the demo. Can be easily removed.
    $opt_name = apply_filters( 'tb_sulfur/opt_name', $opt_name );

    /*
     *
     * --> Used within different fields. Simply examples. Search for ACTUAL DECLARATION for field examples
     *
     */

    $sampleHTML = '';
    if ( file_exists( dirname( __FILE__ ) . '/info-html.html' ) ) {
        Redux_Functions::initWpFilesystem();

        global $wp_filesystem;

        $sampleHTML = $wp_filesystem->get_contents( dirname( __FILE__ ) . '/info-html.html' );
    }

    // Background Patterns Reader
    $sample_patterns_path = ReduxFramework::$_dir . '../sample/patterns/';
    $sample_patterns_url  = ReduxFramework::$_url . '../sample/patterns/';
    $sample_patterns      = array();

    if ( is_dir( $sample_patterns_path ) ) {

        if ( $sample_patterns_dir = opendir( $sample_patterns_path ) ) {
            $sample_patterns = array();

            while ( ( $sample_patterns_file = readdir( $sample_patterns_dir ) ) !== false ) {

                if ( stristr( $sample_patterns_file, '.png' ) !== false || stristr( $sample_patterns_file, '.jpg' ) !== false ) {
                    $name              = explode( '.', $sample_patterns_file );
                    $name              = str_replace( '.' . end( $name ), '', $sample_patterns_file );
                    $sample_patterns[] = array(
                        'alt' => $name,
                        'img' => $sample_patterns_url . $sample_patterns_file
                    );
                }
            }
        }
    }

    /**
     * ---> SET ARGUMENTS
     * All the possible arguments for Redux.
     * For full documentation on arguments, please refer to: https://github.com/ReduxFramework/ReduxFramework/wiki/Arguments
     * */

    $theme = wp_get_theme(); // For use with some settings. Not necessary.

    $args = array(
        // TYPICAL -> Change these values as you need/desire
        'opt_name'             => $opt_name,
        // This is where your data is stored in the database and also becomes your global variable name.
        'display_name'         => $theme->get( 'Name' ),
        // Name that appears at the top of your panel
        'display_version'      => $theme->get( 'Version' ),
        // Version that appears at the top of your panel
        'menu_type'            => 'menu',
        //Specify if the admin menu should appear or not. Options: menu or submenu (Under appearance only)
        'allow_sub_menu'       => true,
        // Show the sections below the admin menu item or not
        'menu_title'           => __( 'Sulfur Options', 'redux-framework-demo' ),
        'page_title'           => __( 'Sulfur Options', 'redux-framework-demo' ),
        // You will need to generate a Google API key to use this feature.
        // Please visit: https://developers.google.com/fonts/docs/developer_api#Auth
        'google_api_key'       => '',
        // Set it you want google fonts to update weekly. A google_api_key value is required.
        'google_update_weekly' => false,
        // Must be defined to add google fonts to the typography module
        'async_typography'     => true,
        // Use a asynchronous font on the front end or font string
        //'disable_google_fonts_link' => true,                    // Disable this in case you want to create your own google fonts loader
        'admin_bar'            => true,
        // Show the panel pages on the admin bar
        'admin_bar_icon'       => 'dashicons-portfolio',
        // Choose an icon for the admin bar menu
        'admin_bar_priority'   => 50,
        // Choose an priority for the admin bar menu
        'global_variable'      => '',
        // Set a different name for your global variable other than the opt_name
        'dev_mode'             => false,
        // Show the time the page took to load, etc
        'update_notice'        => false,
        // If dev_mode is enabled, will notify developer of updated versions available in the GitHub Repo
        'customizer'           => true,
        // Enable basic customizer support
        //'open_expanded'     => true,                    // Allow you to start the panel in an expanded way initially.
        //'disable_save_warn' => true,                    // Disable the save warning when a user changes a field

        // OPTIONAL -> Give you extra features
        'page_priority'        => 57,
        // Order where the menu appears in the admin area. If there is any conflict, something will not show. Warning.
        'page_parent'          => 'themes.php',
        // For a full list of options, visit: http://codex.wordpress.org/Function_Reference/add_submenu_page#Parameters
        'page_permissions'     => 'manage_options',
        // Permissions needed to access the options panel.
        'menu_icon'            => '',
        // Specify a custom URL to an icon
        'last_tab'             => '',
        // Force your panel to always open to a specific tab (by id)
        'page_icon'            => 'icon-themes',
        // Icon displayed in the admin panel next to your menu_title
        'page_slug'            => '',
        // Page slug used to denote the panel, will be based off page title then menu title then opt_name if not provided
        'save_defaults'        => true,
        // On load save the defaults to DB before user clicks save or not
        'default_show'         => false,
        // If true, shows the default value next to each field that is not the default value.
        'default_mark'         => '',
        // What to print by the field's title if the value shown is default. Suggested: *
        'show_import_export'   => true,
        // Shows the Import/Export panel when not used as a field.

        // CAREFUL -> These options are for advanced use only
        'transient_time'       => 60 * MINUTE_IN_SECONDS,
        'output'               => true,
        // Global shut-off for dynamic CSS output by the framework. Will also disable google fonts output
        'output_tag'           => true,
        // Allows dynamic CSS to be generated for customizer and google fonts, but stops the dynamic CSS from going to the head
        // 'footer_credit'     => '',                   // Disable the footer credit of Redux. Please leave if you can help it.

        // FUTURE -> Not in use yet, but reserved or partially implemented. Use at your own risk.
        'database'             => '',
        // possible: options, theme_mods, theme_mods_expanded, transient. Not fully functional, warning!
        'use_cdn'              => true,
        // If you prefer not to use the CDN for Select2, Ace Editor, and others, you may download the Redux Vendor Support plugin yourself and run locally or embed it in your code.

        // HINTS
        'hints'                => array(
            'icon'          => 'el el-question-sign',
            'icon_position' => 'right',
            'icon_color'    => 'lightgray',
            'icon_size'     => 'normal',
            'tip_style'     => array(
                'color'   => 'red',
                'shadow'  => true,
                'rounded' => false,
                'style'   => '',
            ),
            'tip_position'  => array(
                'my' => 'top left',
                'at' => 'bottom right',
            ),
            'tip_effect'    => array(
                'show' => array(
                    'effect'   => 'slide',
                    'duration' => '500',
                    'event'    => 'mouseover',
                ),
                'hide' => array(
                    'effect'   => 'slide',
                    'duration' => '500',
                    'event'    => 'click mouseleave',
                ),
            ),
        )
    );

    // ADMIN BAR LINKS -> Setup custom links in the admin bar menu as external items.
    $args['admin_bar_links'][] = array(
        'id'    => 'redux-docs',
        'href'  => 'http://docs.reduxframework.com/',
        'title' => __( 'Documentation', 'redux-framework-demo' ),
    );

    $args['admin_bar_links'][] = array(
        //'id'    => 'redux-support',
        'href'  => 'https://github.com/ReduxFramework/redux-framework/issues',
        'title' => __( 'Support', 'redux-framework-demo' ),
    );

    $args['admin_bar_links'][] = array(
        'id'    => 'redux-extensions',
        'href'  => 'reduxframework.com/extensions',
        'title' => __( 'Extensions', 'redux-framework-demo' ),
    );

    // SOCIAL ICONS -> Setup custom links in the footer for quick links in your panel footer icons.
    $args['share_icons'][] = array(
        'url'   => 'https://github.com/ReduxFramework/ReduxFramework',
        'title' => 'Visit us on GitHub',
        'icon'  => 'el el-github'
        //'img'   => '', // You can use icon OR img. IMG needs to be a full URL.
    );
    $args['share_icons'][] = array(
        'url'   => 'https://www.facebook.com/pages/Redux-Framework/243141545850368',
        'title' => 'Like us on Facebook',
        'icon'  => 'el el-facebook'
    );
    $args['share_icons'][] = array(
        'url'   => 'http://twitter.com/reduxframework',
        'title' => 'Follow us on Twitter',
        'icon'  => 'el el-twitter'
    );
    $args['share_icons'][] = array(
        'url'   => 'http://www.linkedin.com/company/redux-framework',
        'title' => 'Find us on LinkedIn',
        'icon'  => 'el el-linkedin'
    );

    // Panel Intro text -> before the form
    if ( ! isset( $args['global_variable'] ) || $args['global_variable'] !== false ) {
        if ( ! empty( $args['global_variable'] ) ) {
            $v = $args['global_variable'];
        } else {
            $v = str_replace( '-', '_', $args['opt_name'] );
        }
        $args['intro_text'] = sprintf( __( '', 'redux-framework-demo' ), $v );
    } else {
        $args['intro_text'] = __( '', 'redux-framework-demo' );
    }

    // Add content after the form.
    $args['footer_text'] = __( '', 'redux-framework-demo' );

    Redux::setArgs( $opt_name, $args );

    /*
     * ---> END ARGUMENTS
     */


    /*
     * ---> START HELP TABS
     */

    $tabs = array(
        array(
            'id'      => 'redux-help-tab-1',
            'title'   => __( 'Theme Information 1', 'redux-framework-demo' ),
            'content' => __( '<p>This is the tab content, HTML is allowed.</p>', 'redux-framework-demo' )
        ),
        array(
            'id'      => 'redux-help-tab-2',
            'title'   => __( 'Theme Information 2', 'redux-framework-demo' ),
            'content' => __( '<p>This is the tab content, HTML is allowed.</p>', 'redux-framework-demo' )
        )
    );
    Redux::setHelpTab( $opt_name, $tabs );

    // Set the help sidebar
    $content = __( '<p>This is the sidebar content, HTML is allowed.</p>', 'redux-framework-demo' );
    Redux::setHelpSidebar( $opt_name, $content );


    /*
     * <--- END HELP TABS
     */


    /*
     *
     * ---> START SECTIONS
     *
     */

    /*

        As of Redux 3.5+, there is an extensive API. This API can be used in a mix/match mode allowing for


     */

    // -> START Basic Fields
    
Redux::setSection($opt_name, array(
        'title'     => __('Top Header', 'redux-framework-demo'),
        'icon'      => 'el el-home',
        'fields'    =>array(

            array(
                'id'       => 'sulfur-header-mobile',
                'type'     => 'text',
                'title'    => __( 'Header Mobile No', 'redux-framework-demo' ),
                'subtitle' => __( 'Subtitle', 'redux-framework-demo' ),
                'desc'     => __( 'Field Description', 'redux-framework-demo' ),
                'default'  => '+12 345 678 000',
            ),            
            array(
                'id'        => 'sulfur-support-email',
                'type'      => 'text',
                'title'     => __( 'Support Email', 'redux-framework-demo' ),                
                'desc'      => __( 'Support Email Address', 'redux-framework-demo' ),
                'default'   => 'support@charity.com',
                
            ),
            array(
                'id'          => 'suflur-top-skype-link',
                'type'        => 'text',
                'title'       => __( 'Skype Link', 'redux-framework-demo' ),
                'subtitle'    => __( 'Subtitle', 'redux-framework-demo' ),
                'desc'        => __( 'Skype Link Address', 'redux-framework-demo' ),
                'placeholder' => 'Placeholder Text',
                'default'     => '#'
            ),
            array(
                'id'          => 'suflur-top-vimeo-link',
                'type'        => 'text',
                'title'       => __( 'Vimeo Link', 'redux-framework-demo' ),
                'subtitle'    => __( 'Subtitle', 'redux-framework-demo' ),
                'desc'        => __( 'Skype Link Address', 'redux-framework-demo' ),
                'placeholder' => 'Placeholder Text',
                'default'     => '#'
            ),array(
                'id'          => 'suflur-top-flickr-link',
                'type'        => 'text',
                'title'       => __( 'Flickr Link', 'redux-framework-demo' ),
                'subtitle'    => __( 'Subtitle', 'redux-framework-demo' ),
                'desc'        => __( 'Flickr Link Address', 'redux-framework-demo' ),
                'placeholder' => 'Placeholder Text',
                'default'     => '#'
            ),
            array(
                'id'          => 'suflur-top-linkedin-link',
                'type'        => 'text',
                'title'       => __( 'LinkedIn Link', 'redux-framework-demo' ),
                'subtitle'    => __( 'Subtitle', 'redux-framework-demo' ),
                'desc'        => __( 'LinkedIn Link Address', 'redux-framework-demo' ),
                'placeholder' => 'Placeholder Text',
                'default'     => '#'
            ),
            array(
                'id'          => 'suflur-top-youtube-link',
                'type'        => 'text',
                'title'       => __( 'YouTUbe Link', 'redux-framework-demo' ),
                'subtitle'    => __( 'Subtitle', 'redux-framework-demo' ),
                'desc'        => __( 'YouTUbe Link Address', 'redux-framework-demo' ),
                'placeholder' => 'Placeholder Text',
                'default'     => '#'
            ),
            array(
                'id'          => 'suflur-top-google-plus-link',
                'type'        => 'text',
                'title'       => __( 'Google Plus Link', 'redux-framework-demo' ),
                'subtitle'    => __( 'Subtitle', 'redux-framework-demo' ),
                'desc'        => __( 'Google Plus Link Address', 'redux-framework-demo' ),
                'placeholder' => 'Placeholder Text',
                'default'     => '#'
            ),
            array(
                'id'          => 'suflur-top-twitter-link',
                'type'        => 'text',
                'title'       => __( 'Twitter Link', 'redux-framework-demo' ),
                'subtitle'    => __( 'Subtitle', 'redux-framework-demo' ),
                'desc'        => __( 'Twitter Link Address', 'redux-framework-demo' ),
                'placeholder' => 'Placeholder Text',
                'default'     => '#'
            ),
            array(
                'id'          => 'suflur-top-fb-link',
                'type'        => 'text',
                'title'       => __( 'Facebook Link', 'redux-framework-demo' ),
                'subtitle'    => __( 'Subtitle', 'redux-framework-demo' ),
                'desc'        => __( 'Facebook Link Address', 'redux-framework-demo' ),
                'placeholder' => 'Placeholder Text',
                'default'     => '#'
            ),
            array(
                'id'          => 'suflur-top-rss-link',
                'type'        => 'text',
                'title'       => __( 'Rss Link', 'redux-framework-demo' ),
                'subtitle'    => __( 'Subtitle', 'redux-framework-demo' ),
                'desc'        => __( 'Rss Link Address', 'redux-framework-demo' ),
                'placeholder' => 'Placeholder Text',
                'default'     => '#'
            )      


        ),
    ));




Redux::setSection( $opt_name, array(
        'title'             => __( 'Header Section', 'redux-framework-demo' ),
        'icon'              => 'el el-photo',
        'fields'            => array(
            array(
                'title'            => __('Header Logo', 'redux-framework-demo'),
                'subtitle'         => __('Create an Header logo Section', 'redux-framework-demo'),                
                'id'        => 'tb-sulfur-logo-image',
                'type'      =>  'media',
                'compiler'  => true,
                'default'   => array(
                    'url'   => get_template_directory_uri() .'/assets/images/logo.png'
                    )
                ),
            array(
                'title'            => __('Header Background', 'redux-framework-demo'),
                'subtitle'         => __('Create an Header Background Section', 'redux-framework-demo'),
                'desc'             => __('This is the description field, again good for additional info.', 'redux-framework-demo'),
                'id'        => 'header-bg-image',
                'type'      =>  'media',
                'compiler'  => true,
                'default'   => array(
                    'url'   => get_template_directory_uri() .'/assets/images/banner.jpg'
                    )
                ),

             array(
                'title'     => __('Header Title', 'redux-framework-demo'),                
                'id'        => 'header-title',
                'type'      =>  'text',
                'default'   => 'WELCOME TO THE GREAT SULFUR'
                ),

              array(
                'title'     => __('Header Subtitle', 'redux-framework-demo'),                
                'id'        => 'header-subtitle',
                'type'      =>  'textarea',
                'default'   => 'Generate a flood of new business with the power of a digital media platform',
                'args'      => array(
                'teeny'            => true,
                'textarea_rows'    => 10
                    )                
                ),
              array(
                'title'     => __('Header Readmore', 'redux-framework-demo'),                
                'id'        => 'header-readmore',
                'type'      =>  'text',
                'default'   => 'Readmore'
                ),
              array(
                'title'     => __('Readmore Link', 'redux-framework-demo'),                
                'id'        => 'readmore-link',
                'type'      =>  'text'         
                )

            ),
    ) );

Redux::setSection( $opt_name, array(
        'title'          => __( 'About Us', 'redux-framework-demo' ),
        'icon'           => 'el el-address-book',
        'fields'         => array(
            array(
                'title'     => __('About Us Title', 'redux-framework-demo'),                
                'id'        => 'about-hd-title',
                'type'      =>  'text',
                'default'   => 'About Us'
                ),            
            array(
                 'title'           => __('About Us', 'redux-framework-demo'),
                'subtitle'         => __('Create an About Us Section', 'redux-framework-demo'),
                'desc'             => __('This is the description field, again good for additional info.', 'redux-framework-demo'),
                'id'        => 'about-us-image',
                'type'      =>  'media',
                'compiler'  => true,
                'default'   => array(
                    'url'   => get_template_directory_uri() .'/assets/images/corporate1.jpg'
                    )
                ),

             array(
                'title'     => __('Image Text', 'redux-framework-demo'),                
                'id'        => 'about-image-text',
                'type'      =>  'textarea',
                'default'   => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec iaculis metus vitae ligula elementum ut luctus lorem facilisis.'
                ),

              array(
                'title'     => __('About Us Text', 'redux-framework-demo'),                
                'id'        => 'about-text',
                'type'      =>  'editor',
                'args'      => array(
                'teeny'            => true,
                'textarea_rows'    => 10
                    )                
                ),
               array(
                'title'     => __('SOME IMPORTANT FEATURE', 'redux-framework-demo'),                
                'id'        => 'about-important-feature',
                'type'      =>  'multi_text',
                'default'   => 'Lorem ipsum dolor sit amet,'
                ),
               array(
                'title'     => __('SOME MORE FEATURE', 'redux-framework-demo'),                
                'id'        => 'about-more-feature',
                'type'      =>  'multi_text',
                'default'   => 'Lorem ipsum dolor sit amet,'
                ),
              array(
                'title'          => __('Webdesign Skills', 'redux-framework-demo'),
                'description'    => __('About us Progressbar Webdesign Skills % ', 'redux-framework-demo'),                
                'id'             => 'webdesign-skill',
                'type'           =>  'text',
                'args'             => array(
                'teeny'            => true,
                'textarea_rows'    => 10
                    )                
                ),
              array(
                'title'         => __('HTML & CSS Skills', 'redux-framework-demo'),
                'description'   => __('About us Progressbar HTML & CSS Skills % ', 'redux-framework-demo'),                
                'id'            => 'html-css-skill',
                'type'          =>  'text',
                'args'             => array(
                'teeny'            => true,
                'textarea_rows'    => 10
                    )                
                ),
              array(
                'title'          => __('WordPress Skills', 'redux-framework-demo'),
                'description'    => __('About us Progressbar WordPress Skills % ', 'redux-framework-demo'),                
                'id'             => 'wordpress-skill',
                'type'           =>  'text',
                'args'             => array(
                'teeny'            => true,
                'textarea_rows'    => 10
                    )                
                ),
              array(
                'title'         => __('joomla Skills', 'redux-framework-demo'),
                'description'   => __('About us Progressbar joomla Skills % ', 'redux-framework-demo'),                
                'id'            => 'joomla-skill',
                'type'          =>  'text',
                'args'             => array(
                'teeny'            => true,
                'textarea_rows'    => 10
                    )                
                ),
              array(
                'title'         => __('Extensions Skills', 'redux-framework-demo'),
                'description'   => __('About us Progressbar Extensions Skills % ', 'redux-framework-demo'),                
                'id'            => 'extensions-skill',
                'type'          =>  'text',
                'args'             => array(
                'teeny'            => true,
                'textarea_rows'    => 10
                )                
              ),
              array(
                'title'         => __('Accordion 1st Header', 'redux-framework-demo'),                            
                'id'            => 'acc-hd-txt1',
                'type'          =>  'text',
                'default'       => ' Who We are'
                                    
                ),
              array(
                'title'         => __('Accordion 1st Content', 'redux-framework-demo'),                            
                'id'            => 'acc-content-txt1',
                'type'          =>  'textarea',
                'default'       => 'Accordion 1'
                                    
                ),
              array(
                'title'         => __('Accordion 2nd Header', 'redux-framework-demo'),                            
                'id'            => 'acc-hd-txt2',
                'type'          =>  'text',
                'default'       => 'What we do'
                                    
                ),
              array(
                'title'         => __('Accordion 2nd Content', 'redux-framework-demo'),                            
                'id'            => 'acc-content-txt2',
                'type'          =>  'textarea',
                'default'       => 'Accordion 2'
                                    
                ),
              array(
                'title'         => __('Accordion 3rd Header', 'redux-framework-demo'),                            
                'id'            => 'acc-hd-txt3',
                'type'          =>  'text',
                'default'       => 'Why Choose Us ?'
                                    
                ),
              array(
                'title'         => __('Accordion 3rd Content', 'redux-framework-demo'),                            
                'id'            => 'acc-content-txt3',
                'type'          =>  'textarea',
                'default'       => 'Accordion 3'
                                    
                ),
              array(
                'title'         => __('Accordion 4th Header', 'redux-framework-demo'),                            
                'id'            => 'acc-hd-txt4',
                'type'          =>  'text',
                'default'       => ' Who We are'
                                    
                ),
              array(
                'title'         => __('Accordion 4th Content', 'redux-framework-demo'),                            
                'id'            => 'acc-content-txt4',
                'type'          =>  'textarea',
                'default'       => 'Accordion 4'
                                    
                ),
              array(
                'title'         => __('Accordion 5th Header', 'redux-framework-demo'),                            
                'id'            => 'acc-hd-txt5',
                'type'          =>  'text',
                'default'       => 'Our Great Support'
                                    
                ),
              array(
                'title'         => __('Accordion 5th Content', 'redux-framework-demo'),                            
                'id'            => 'acc-content-txt5',
                'type'          =>  'textarea',
                'default'       => 'Accordion 5'
                                    
                )

            ),
    ) );


Redux::setSection( $opt_name, array(
        'title'         => __( 'CallToAction', 'redux-framework-demo' ),
        'icon'          => 'el el-inbox',
        'fields'        => array(
            
            array(
                'title'     => __('CallToAction'),
                'subtitle'  => __('Create an CallToAction Section', 'redux-framework-demo'),
                'desc'      => __('This is the description field, again good for additional info.', 'redux-framework-demo'),
                'id'        => 'calltoaction-image',
                'type'      =>  'media',
                'compiler'  => true,
                'default'       => array(
                    'url'       => get_template_directory_uri() .'/assets/images/parallax/call-to.jpg'
                    )
                ),

            array(
                'title'    => __('CallToAction Text', 'redux-framework-demo'),                
                'id'       => 'calltoaction-text',
                'type'     => 'textarea',
                'default'  => 'veritatis et quasi architecto beatae vitae dicta sunt explicabo. Seiste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam,quae ab illo inventore veritatis et quasi Sed ut perspiciatis unde omnis iste natus error sd ut perspiciatis unde omnis it volu'            
                ),
            ),
    ) );


Redux::setSection( $opt_name, array(
        'title'            => __( 'Team Section', 'redux-framework-demo' ),
        'icon'             => 'el el-group',
        'fields'    => array(
            array(
                'title'     => __('Team Title', 'redux-framework-demo'),                
                'id'        => 'about-team-title',
                'type'      =>  'text',
                'default'   => 'Out Team'
                ),
            array(
                'title'     => __('Team Description', 'redux-framework-demo'),                
                'id'        => 'about-team-description',
                'type'      =>  'text',
                'default'   => 'Duis aute irure dolor in reprehenderit in voluptate'
                ), 
            array(
                'title'     => 'Team',
                'id'        => 'tb-team',
                'type'      => 'slides',
                'compiler'  => true,
                'default'       => array(
                    'url'       => get_template_directory_uri() .'/assets/images/team/team-1.jpg'                    
                )
            )
        ),
    ) );


Redux::setSection( $opt_name, array(
        'title'            => __( 'Portfolio Section', 'redux-framework-demo' ),
        'icon'             => 'el el-th-list',
        'fields'    => array(
            array(
                'title'     => __('Portfolio Title', 'redux-framework-demo'),                
                'id'        => 'about-portfolio-title',
                'type'      =>  'text',
                'default'   => 'Out Portfolio'
                ),
            array(
                'title'     => __('Portfolio Description', 'redux-framework-demo'),                
                'id'        => 'about-portfolio-description',
                'type'      =>  'text',
                'default'   => 'Duis aute irure dolor in reprehenderit in voluptate'
                ),
            array(
                'title' => 'Portfolio',
                'id'    => 'tb-portfolio',
                'type'  =>  'slides',
                'compiler' => true,
                'default' => get_template_directory_uri(). '/assets/images/portfolio/img1.jpg'
                )
            ),
    ) );

 Redux::setSection( $opt_name, array(
        'title'            => __( 'Testimonial', 'redux-framework-demo' ),
        'icon'             => 'el el-universal-access',
        'fields'    => array(
            array(
                'title' => 'Testimonial',
                'id'    => 'tb-testimonial',
                'type'  =>  'slides',
                'compiler' => true,
                'default' => get_template_directory_uri(). '/assets/images/team/team-1.jpg'
                )
            ),
    ) );

  Redux::setSection( $opt_name, array(
        'title'         => __( 'Service Section', 'redux-framework-demo' ),
        'icon'          => 'el el-align-justify',
        'fields'        => array(

            array(
                'title'     => __('Services Title', 'redux-framework-demo'),                
                'id'        => 'about-services-title',
                'type'      =>  'text',
                'default'   => 'Out Services'
                ),
            array(
                'title'     => __('Services Description', 'redux-framework-demo'),                
                'id'        => 'about-services-description',
                'type'      =>  'text',
                'default'   => 'Duis aute irure dolor in reprehenderit in voluptate'
                ),
            
            array(
                'title'    => __('Home Service Section'),
                'id'       => 'tb-service',
                'type'     =>  'slides',
                'default'  => 'Donec odio. Quisque volutpat mattis eros. Nullam malesuada'
               
                ),
            array(
                'title'     => __('Counter Section'),
                'subtitle'  => __('Counter Section', 'redux-framework-demo'),
                'desc'      => __('This is the description field, again good for additional info.', 'redux-framework-demo'),
                'id'        => 'tb-service-counter',
                'type'      =>  'slides',
                'compiler'  => true
               
                ),

            array(
                'title'     => __('Services Pricing Title', 'redux-framework-demo'),                
                'id'        => 'about-services-pricing-title',
                'type'      =>  'text',
                'default'   => 'Services Pricing'
                ),
            array(
                'title'         => 'Pricing Table Section',
                'subtitle'      => __('Pricing table Section', 'redux-framework-demo'),
                'desc'          => __('This is the description field, again good for additional info.', 'redux-framework-demo'),
                'id'            => 'tb-service-pricing',
                'type'          =>  'slides',
                'compiler'      => true
               
                )


            ),
    ) );

 

 Redux::setSection( $opt_name, array(
        'title'            => __( 'Client Section ', 'redux-framework-demo' ),
        'icon'      => 'el el-group-alt',
        'fields'           => array(
           array(
                'id'               => 'tb_sulfur_clients',
                'type'             => 'gallery',
                'title'            => __('Add/Edit Client', 'redux-framework-demo'),
                'subtitle'         => __('Create a new Client by selecting existing or uploading new images using the WordPress native uploader', 'redux-framework-demo'),
                'desc'             => __('This is the description field, again good for additional info.', 'redux-framework-demo'),
                'compiler'         => true,
                'default'          => array(
                'url'              => get_template_directory_uri().'/assets/images/corporate1.jpg'),
            ),

            array(       
            'title' => 'Client Link',
            'type' =>  'multi_text',
            'id'   =>  'tb_sulfur_client'
            )

        ),
        
    ) );

Redux::setSection( $opt_name, array(
        'title'            => __( 'Map Section', 'redux-framework-demo' ),
        'icon'      => 'el el-map-marker-alt',
        'fields'    => array(
            array(
                'title' => 'latitude',
                'id'    => 'sulfur-latitude',
                'type'  =>  'text',
                'default'=> '48.856614'
                ),
            
            array(
                'title' => 'longitude',
                'id'    => 'sulfur-longitude',
                'type'  =>  'text',
                'default'=> '2.352222'
                )
            ),

    ) );


     Redux::setSection( $opt_name, array(
        'title'            => __( 'Footer Section', 'redux-framework-demo' ),
        'icon'      => 'el el-info-circle',
        'fields'    => array(
            array(
                'title' => 'Address',
                'id'    => 'sulfur-footer-address',
                'type'  =>  'text',
                'default'=> '123, Second Street name, Addresss'
                ),
            
            array(
                'title' => 'Email',
                'id'    => 'sulfur-footer-email',
                'type'  =>  'text',
                'default'=> 'info@domain.com'
                ),
            
            array(
                'title' => 'Phone No',
                'id'    => 'sulfur-footer-phone',
                'type'  =>  'text',
                'default'=> '+1 (123) 456-7890'
                ),
            
            array(
                'title' => 'Web Address',
                'id'    => 'sulfur-footer-web',
                'type'  =>  'text',
                'default'=> 'www.domain.com'                
            ),            
        array(
                'title' => 'Flickr Script',
                'id'    => 'tb-sulfur-flickr',
                'type'  =>  'text',
                'default'=> 'http://www.flickr.com/badge_code_v2.gne?count=8&amp;display=random&amp;size=s&amp;layout=x&amp;source=user&amp;user=34178660@N03'
                )
            )


    ) );



    /*
     * <--- END SECTIONS
     */


    /*
     *
     * YOU MUST PREFIX THE FUNCTIONS BELOW AND ACTION FUNCTION CALLS OR ANY OTHER CONFIG MAY OVERRIDE YOUR CODE.
     *
     */

    /*
    *
    * --> Action hook examples
    *
    */

    // If Redux is running as a plugin, this will remove the demo notice and links
    //add_action( 'redux/loaded', 'remove_demo' );

    // Function to test the compiler hook and demo CSS output.
    // Above 10 is a priority, but 2 in necessary to include the dynamically generated CSS to be sent to the function.
    //add_filter('redux/options/' . $opt_name . '/compiler', 'compiler_action', 10, 3);

    // Change the arguments after they've been declared, but before the panel is created
    //add_filter('redux/options/' . $opt_name . '/args', 'change_arguments' );

    // Change the default value of a field after it's been set, but before it's been useds
    //add_filter('redux/options/' . $opt_name . '/defaults', 'change_defaults' );

    // Dynamically add a section. Can be also used to modify sections/fields
    //add_filter('redux/options/' . $opt_name . '/sections', 'dynamic_section');

    /**
     * This is a test function that will let you see when the compiler hook occurs.
     * It only runs if a field    set with compiler=>true is changed.
     * */
    if ( ! function_exists( 'compiler_action' ) ) {
        function compiler_action( $options, $css, $changed_values ) {
            echo '<h1>The compiler hook has run!</h1>';
            echo "<pre>";
            print_r( $changed_values ); // Values that have changed since the last save
            echo "</pre>";
            //print_r($options); //Option values
            //print_r($css); // Compiler selector CSS values  compiler => array( CSS SELECTORS )
        }
    }

    /**
     * Custom function for the callback validation referenced above
     * */
    if ( ! function_exists( 'redux_validate_callback_function' ) ) {
        function redux_validate_callback_function( $field, $value, $existing_value ) {
            $error   = false;
            $warning = false;

            //do your validation
            if ( $value == 1 ) {
                $error = true;
                $value = $existing_value;
            } elseif ( $value == 2 ) {
                $warning = true;
                $value   = $existing_value;
            }

            $return['value'] = $value;

            if ( $error == true ) {
                $return['error'] = $field;
                $field['msg']    = 'your custom error message';
            }

            if ( $warning == true ) {
                $return['warning'] = $field;
                $field['msg']      = 'your custom warning message';
            }

            return $return;
        }
    }

    /**
     * Custom function for the callback referenced above
     */
    if ( ! function_exists( 'redux_my_custom_field' ) ) {
        function redux_my_custom_field( $field, $value ) {
            print_r( $field );
            echo '<br/>';
            print_r( $value );
        }
    }

    /**
     * Custom function for filtering the sections array. Good for child themes to override or add to the sections.
     * Simply include this function in the child themes functions.php file.
     * NOTE: the defined constants for URLs, and directories will NOT be available at this point in a child theme,
     * so you must use get_template_directory_uri() if you want to use any of the built in icons
     * */
    if ( ! function_exists( 'dynamic_section' ) ) {
        function dynamic_section( $sections ) {
            //$sections = array();
            $sections[] = array(
                'title'  => __( 'Section via hook', 'redux-framework-demo' ),
                'desc'   => __( '<p class="description">This is a section created by adding a filter to the sections array. Can be used by child themes to add/remove sections from the options.</p>', 'redux-framework-demo' ),
                'icon'   => 'el el-paper-clip',
                // Leave this as a blank section, no options just some intro text set above.
                'fields' => array()
            );

            return $sections;
        }
    }

    /**
     * Filter hook for filtering the args. Good for child themes to override or add to the args array. Can also be used in other functions.
     * */
    if ( ! function_exists( 'change_arguments' ) ) {
        function change_arguments( $args ) {
            //$args['dev_mode'] = true;

            return $args;
        }
    }

    /**
     * Filter hook for filtering the default value of any given field. Very useful in development mode.
     * */
    if ( ! function_exists( 'change_defaults' ) ) {
        function change_defaults( $defaults ) {
            $defaults['str_replace'] = 'Testing filter hook!';

            return $defaults;
        }
    }

    /**
     * Removes the demo link and the notice of integrated demo from the redux-framework plugin
     */
    if ( ! function_exists( 'remove_demo' ) ) {
        function remove_demo() {
            // Used to hide the demo mode link from the plugin page. Only used when Redux is a plugin.
            if ( class_exists( 'ReduxFrameworkPlugin' ) ) {
                remove_filter( 'plugin_row_meta', array(
                    ReduxFrameworkPlugin::instance(),
                    'plugin_metalinks'
                ), null, 2 );

                // Used to hide the activation notice informing users of the demo panel. Only used when Redux is a plugin.
                remove_action( 'admin_notices', array( ReduxFrameworkPlugin::instance(), 'admin_notices' ) );
            }
        }
    }

