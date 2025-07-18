<?php

return array(

    'title'         => esc_html__( 'Heading Settings', 'governlia' ),
    'id'            => 'heading_setting',
    'desc'          => '',
    'subsection'    => true,
    'fields'        => array(

        array(

            'id' => 'use_custom_heading_style_h1',

            'type' => 'switch',

            'title' => esc_html__('Use H1 Custom Font', 'governlia'),

            'desc' => esc_html__('Enable to customize the theme heading h1 tag font', 'governlia'),

            ),

        array(

            'id' => 'h1_typography',

            'type' => 'typography',

            'title' => esc_html__('H1 Font Typography', 'governlia'),

            'google' => true,

            'font-backup' => true,

            'output' => array('h1', '.price-table h1 ', '.experts-box .main-title h1 ', '.soom-info > h1 ', '.m-content > h1', '.main-title > h1' ),

            'units' => 'px',

            'subtitle' => esc_html__('Apply options to customize the h1 heading font for the theme', 'governlia'),

            'default' => array(

                'color' => '',

                'font-style' => '',

                'font-family' => '',

                'google' => true,

                'font-size' => '',

                'line-height' => ''

                ),

                'required' => array('use_custom_heading_style_h1', '=', true),

            ),

        array(

            'id' => 'use_custom_heading_style_h2',

            'type' => 'switch',

            'title' => esc_html__('Use H2 Custom Font', 'governlia'),

            'desc' => esc_html__('Enable to customize the theme heading h2 tag font', 'governlia'),

            ),

        array(

            'id' => 'h2_typography',

            'type' => 'typography',

            'title' => esc_html__('H2 Font Typography', 'governlia'),

            'google' => true,

            'font-backup' => true,

            'output' => array('h2', '.rep-meta > h2', '.service-meta > h2', '.counter-meta > h2 ', '.price-table h2', '.service-box > h2', '.whyus-meta > h2', '.touch-form > h2', '.category-box > h2', '.hover-meta > h2', '.exprt-meta > h2', '.top-meta > h2', '.blog-detail-meta > h2', '.banner-meta > h2 ', '.banner-info > h2', '.tutorial-meta > h2', '.complete-contact > h2', '.governlia .blog-detail-meta > h2', '.our-process > h2', '.video-meta .tutorial-meta > h2', '.rep-meta > h2 ', '.service-meta > h2' ),

            'units' => 'px',

            'subtitle' => esc_html__('Apply options to customize the h2 heading font for the theme', 'governlia'),

            'default' => array(

                'color' => '',

                'font-style' => '',

                'font-family' => '',

                'google' => true,

                'font-size' => '',

                'line-height' => ''

                ),


            'required' => array('use_custom_heading_style_h2', '=', true),

            ),

        array(

            'id' => 'use_custom_heading_style_h3',

            'type' => 'switch',

            'title' => esc_html__('Use H3 Custom Font', 'governlia'),

            'desc' => esc_html__('Enable to customize the theme heading h3 tag font', 'governlia'),

            ),

        array(

            'id' => 'h3_typography',

            'type' => 'typography',

            'title' => esc_html__('H3 Font Typography', 'governlia'),

            'google' => true,

            'font-backup' => true,

            'output' => array('h3', '.author-post > h3', '.related-videos > h3', '.m-content > h3', '.s-not-found h3' ),

            'units' => 'px',

            'subtitle' => esc_html__('Apply options to customize the h3 heading  for the theme', 'governlia'),

            'default' => array(

                'color' => '',

                'font-style' => '',

                'font-family' => '',

                'google' => true,

                'font-size' => '',

                'line-height' => ''

                ),


            'required' => array('use_custom_heading_style_h3', '=', true),

            ),

        array(

            'id' => 'use_custom_heading_style_h4',

            'type' => 'switch',

            'title' => esc_html__('Use H4 Custom Font', 'governlia'),

            'desc' => esc_html__('Enable to customize the theme heading h4 tag font', 'governlia'),

            ),

        array(

            'id' => 'h4_typography',

            'type' => 'typography',

            'title' => esc_html__('H4 Font Typography', 'governlia'),

            'google' => true,

            'font-backup' => true,

            'output' => array( 'h4', '.blog-meta > h4', '.sidebar .widget-title > h4 ', '.banner-info > h4', '.result-errors h4' ),

            'units' => 'px',

            'subtitle' => esc_html__('Apply options to customize the h4 heading font for the theme', 'governlia'),

            'default' => array(

                'color' => '',

                'font-style' => '',

                'font-family' => '',

                'google' => true,

                'font-size' => '',

                'line-height' => ''

                ),


            'required' => array('use_custom_heading_style_h4', '=', true),

        ),

        array(

            'id' => 'use_custom_heading_style_h5',

            'type' => 'switch',

            'title' => esc_html__('Use H5 Custom Font', 'governlia'),

            'desc' => esc_html__('Enable to customize the theme heading h5 tag font', 'governlia'),

            ),

        array(

            'id' => 'h5_typography',

            'type' => 'typography',

            'title' => esc_html__('H5 Font Typography', 'governlia'),

            'google' => true,

            'font-backup' => true,

            'output' => array( 'h5', '.widget-title > h5', '.baner-data > h5', '.m-content > h5' ),

            'units' => 'px',

            'subtitle' => esc_html__('Apply options to customize the h5 heading font for the theme', 'governlia'),

            'default' => array(

                'color' => '',

                'font-style' => '',

                'font-family' => '',

                'google' => true,

                'font-size' => '',

                'line-height' => ''

                ),


            'required' => array('use_custom_heading_style_h5', '=', true),

            ),

        array(

            'id' => 'use_custom_heading_style_h6',

            'type' => 'switch',

            'title' => esc_html__('Use H6 Custom Font', 'governlia'),

            'desc' => esc_html__('Enable to customize the theme heading h6 tag font', 'governlia'),

            ),

        array(

            'id' => 'h6_typography',

            'type' => 'typography',

            'title' => esc_html__('H6 Font Typography', 'governlia'),

            'google' => true,

            'font-backup' => true,

            'output' => array( 'h6', '.comment-titles h6' ),

            'units' => 'px',

            'subtitle' => esc_html__('Apply options to customize the h6 heading font for the theme', 'governlia'),

            'default' => array(

                'color' => '',

                'font-style' => '',

                'font-family' => '',

                'google' => true,

                'font-size' => '',

                'line-height' => ''

                ),


            'required' => array('use_custom_heading_style_h6', '=', true),

            )
    )
);

