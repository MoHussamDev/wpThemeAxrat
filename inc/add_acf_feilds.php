<?php
require get_stylesheet_directory() . '/page-builder/config.php';


if( function_exists('acf_add_local_field_group') ):
    $spacing = array(
        'key' => 'group_1',
        'label' => 'spacing',
        'name' => 'spacing',
        'type' => 'group',
        'instructions' => '',
        'required' => 0,
        'conditional_logic' => 0,
        'wrapper' => array(
            'width' => '',
            'class' => '',
            'id' => '',
        ),
        'layout' => 'block',
        'sub_fields' => array(
            array(
                'key' => 'feild_1',
                'label' => 'Margin Top',
                'name' => 'margin_top',
                'type' => 'select',
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array(
                    'width' => '50',
                    'class' => '',
                    'id' => '',
                ),
                'choices' => array(
                   'none' => 'Default [ No Margin]',
                    'full' => 'Full',
                    'half' => 'Half',
                   'quarter' => 'Quarter',
                
                ),
                'default_value' => array(
                    'none' => 'Default [ No Margin]',
                ),
                'allow_null' => 0,
                'multiple' => 0,
                'ui' => 0,
                'return_format' => 'value',
                'ajax' => 0,
                'placeholder' => '',
            ),
            array(
                'key' => 'feild_2',
                'label' => 'Margin Bottom',
                'name' => 'margin_bottom',
                'type' => 'select',
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array(
                    'width' => '50',
                    'class' => '',
                    'id' => '',
                ),
                'choices' => array(
                    'none' => 'Default [ No Margin]',
                     'full' => 'Full',
                     'half' => 'Half',
                    'quarter' => 'Quarter',
                 
                 ),
                 'default_value' => array(
                     'none' => 'Default [ No Margin]',
                 ),
                'allow_null' => 0,
                'multiple' => 0,
                'ui' => 0,
                'return_format' => 'value',
                'ajax' => 0,
                'placeholder' => '',
            ),
            array(
                'key' => 'feild_3',
                'label' => 'Padding Top',
                'name' => 'padding_top',
                'type' => 'select',
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array(
                    'width' => '50',
                    'class' => '',
                    'id' => '',
                ),
                'choices' => array(
                    'none' => 'Default [ No Padding]',
                     'full' => 'Full',
                     'half' => 'Half',
                    'quarter' => 'Quarter',
                 
                 ),
                 'default_value' => array(
                     'none' => 'Default [ No Padding]',
                 ),
                'allow_null' => 0,
                'multiple' => 0,
                'ui' => 0,
                'return_format' => 'value',
                'ajax' => 0,
                'placeholder' => '',
            ),
            array(
                'key' => 'feild_4',
                'label' => 'Padding Bottom',
                'name' => 'padding_bottom',
                'type' => 'select',
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array(
                    'width' => '50',
                    'class' => '',
                    'id' => '',
                ),
                'choices' => array(
                    'none' => 'Default [ No Padding]',
                     'full' => 'Full',
                     'half' => 'Half',
                    'quarter' => 'Quarter',
                 
                 ),
                 'default_value' => array(
                     'none' => 'Default [ No Padding]',
                 ),
                'allow_null' => 0,
                'multiple' => 0,
                'ui' => 0,
                'return_format' => 'value',
                'ajax' => 0,
                'placeholder' => '',
            ),
        ),
    );

    $layout = array(
        'layout_5e59527f34f7e' => array(
            'key' => 'layout_5e59527f34f7e',
            'name' => 'slider',
            'label' => 'slider',
            'display' => 'row',
            'sub_fields' => array(
                array(
                    'key' => 'field_5ebfe366e0eee',
                    'label' => 'custom class',
                    'name' => 'custom_class',
                    'type' => 'select',
                    'instructions' => '',
                    'required' => 0,
                    'conditional_logic' => 0,
                    'wrapper' => array(
                        'width' => '',
                        'class' => '',
                        'id' => '',
                    ),
                    'choices' => array(),
                    'default_value' => array(
                    ),
                    'allow_null' => 0,
                    'multiple' => 1,
                    'ui' => 1,
                    'ajax' => 0,
                    'return_format' => 'value',
                    'placeholder' => '',
                ),
                array(
                    'key' => 'field_5e595287d8139',
                    'label' => 'Slider',
                    'name' => 'slider',
                    'type' => 'repeater',
                    'instructions' => '',
                    'required' => 0,
                    'conditional_logic' => 0,
                    'wrapper' => array(
                        'width' => '',
                        'class' => '',
                        'id' => '',
                    ),
                    'collapsed' => '',
                    'min' => 1,
                    'max' => 4,
                    'layout' => 'row',
                    'button_label' => 'Add Slide',
                    'sub_fields' => array(
                        array(
                            'key' => 'field_5e5952c6d813a',
                            'label' => 'image',
                            'name' => 'image',
                            'type' => 'image',
                            'instructions' => '',
                            'required' => 0,
                            'conditional_logic' => 0,
                            'wrapper' => array(
                                'width' => '',
                                'class' => '',
                                'id' => '',
                            ),
                            'return_format' => 'url',
                            'preview_size' => 'medium',
                            'library' => 'all',
                            'min_width' => '',
                            'min_height' => '',
                            'min_size' => '',
                            'max_width' => '',
                            'max_height' => '',
                            'max_size' => '',
                            'mime_types' => '',
                        ),
                        array(
                            'key' => 'field_5e5954187ce11',
                            'label' => 'Head Line',
                            'name' => 'head_line',
                            'type' => 'text',
                            'instructions' => '',
                            'required' => 1,
                            'conditional_logic' => 0,
                            'wrapper' => array(
                                'width' => '',
                                'class' => '',
                                'id' => '',
                            ),
                            'default_value' => '',
                            'placeholder' => '',
                            'prepend' => '',
                            'append' => '',
                            'maxlength' => '',
                        ),
                        array(
                            'key' => 'field_5e5954f344403',
                            'label' => 'paragraph',
                            'name' => 'paragraph',
                            'type' => 'wysiwyg',
                            'instructions' => '',
                            'required' => 0,
                            'conditional_logic' => 0,
                            'wrapper' => array(
                                'width' => '',
                                'class' => '',
                                'id' => '',
                            ),
                            'default_value' => '',
                            'tabs' => 'all',
                            'toolbar' => 'full',
                            'media_upload' => 1,
                            'delay' => 0,
                        ),
                    ),
                ),
            
            ),
            'min' => '',
            'max' => '',
        ),
        'layout_5e5a682a04502' => array(
            'key' => 'layout_5e5a682a04502',
            'name' => 'primary_content',
            'label' => 'Primary Content',
            'display' => 'block',
            'sub_fields' => array(
                array(
                    'key' => 'field_5ebfe2b8377ea',
                    'label' => 'custom class',
                    'name' => 'custom_class',
                    'type' => 'select',
                    'instructions' => '',
                    'required' => 0,
                    'conditional_logic' => 0,
                    'wrapper' => array(
                        'width' => '',
                        'class' => '',
                        'id' => '',
                    ),
                    'choices' => array(),
                    'default_value' => array(
                    ),
                    'allow_null' => 0,
                    'multiple' => 1,
                    'ui' => 1,
                    'ajax' => 0,
                    'return_format' => 'value',
                    'placeholder' => '',
                ),
                array(
                    'key' => 'field_5e5a684704503',
                    'label' => 'columns',
                    'name' => 'columns',
                    'type' => 'repeater',
                    'instructions' => '',
                    'required' => 1,
                    'conditional_logic' => 0,
                    'wrapper' => array(
                        'width' => '',
                        'class' => '',
                        'id' => '',
                    ),
                    'collapsed' => '',
                    'min' => 1,
                    'max' => 0,
                    'layout' => 'block',
                    'button_label' => 'Add Column',
                    'sub_fields' => array(
                        array(
                            'key' => 'field_5e5a695a6a407',
                            'label' => 'content type',
                            'name' => 'content_type',
                            'type' => 'select',
                            'instructions' => '',
                            'required' => 1,
                            'conditional_logic' => 0,
                            'wrapper' => array(
                                'width' => '33.3',
                                'class' => '',
                                'id' => '',
                            ),
                            'choices' => array(
                                'wysiwyg' => 'Mixed Content (Editor)',
                                'image' => 'Image',
                            ),
                            'default_value' => array(
                                0 => 'wysiwyg',
                            ),
                            'allow_null' => 0,
                            'multiple' => 0,
                            'ui' => 1,
                            'ajax' => 0,
                            'return_format' => 'value',
                            'placeholder' => '',
                        ),
                        array(
                            'key' => 'field_5e5a6fb78ea53',
                            'label' => 'Width',
                            'name' => 'width',
                            'type' => 'select',
                            'instructions' => '',
                            'required' => 1,
                            'conditional_logic' => 0,
                            'wrapper' => array(
                                'width' => '33.3',
                                'class' => '',
                                'id' => '',
                            ),
                            'choices' => array(
                                'auto' => 'automatic',
                                1 => '1/12',
                                2 => '2/12',
                                3 => '3/12',
                                4 => '4/12',
                                5 => '5/12',
                                6 => '6/12',
                                7 => '7/12',
                                8 => '8/12',
                                9 => '9/12',
                                10 => '10/12',
                                11 => '11/12',
                                12 => '12/12',
                            ),
                            'default_value' => array(
                                0 => 'auto',
                            ),
                            'allow_null' => 0,
                            'multiple' => 0,
                            'ui' => 1,
                            'ajax' => 0,
                            'return_format' => 'value',
                            'placeholder' => '',
                        ),
                        array(
                            'key' => 'field_5e5a70f748549',
                            'label' => 'Custom class',
                            'name' => 'custom_class',
                            'type' => 'text',
                            'instructions' => '',
                            'required' => 0,
                            'conditional_logic' => 0,
                            'wrapper' => array(
                                'width' => '33.3',
                                'class' => '',
                                'id' => '',
                            ),
                            'default_value' => '',
                            'placeholder' => '',
                            'prepend' => '',
                            'append' => '',
                            'maxlength' => '',
                        ),
                        array(
                            'key' => 'field_5e5a71a2c8595',
                            'label' => 'column content',
                            'name' => 'wysiwyg',
                            'type' => 'wysiwyg',
                            'instructions' => '',
                            'required' => 1,
                            'conditional_logic' => array(
                                array(
                                    array(
                                        'field' => 'field_5e5a695a6a407',
                                        'operator' => '==',
                                        'value' => 'wysiwyg',
                                    ),
                                ),
                            ),
                            'wrapper' => array(
                                'width' => '',
                                'class' => '',
                                'id' => '',
                            ),
                            'default_value' => '',
                            'tabs' => 'all',
                            'toolbar' => 'full',
                            'media_upload' => 1,
                            'delay' => 0,
                        ),
                        array(
                            'key' => 'field_5e5a724d9289f',
                            'label' => 'Image',
                            'name' => 'image',
                            'type' => 'image',
                            'instructions' => '',
                            'required' => 1,
                            'conditional_logic' => array(
                                array(
                                    array(
                                        'field' => 'field_5e5a695a6a407',
                                        'operator' => '==',
                                        'value' => 'image',
                                    ),
                                ),
                            ),
                            'wrapper' => array(
                                'width' => '',
                                'class' => '',
                                'id' => '',
                            ),
                            'return_format' => 'array',
                            'preview_size' => 'thumbnail',
                            'library' => 'all',
                            'min_width' => '',
                            'min_height' => '',
                            'min_size' => '',
                            'max_width' => '',
                            'max_height' => '',
                            'max_size' => '',
                            'mime_types' => 'png,jpg,jpeg,gif,svg',
                        ),
                    ),
                ),
             
            ),
            'min' => '',
            'max' => '',
        ),
        'layout_5ebf33c0488e6' => array(
            'key' => 'layout_5ebf33c0488e6',
            'name' => 'cards',
            'label' => 'Cards',
            'display' => 'row',
            'sub_fields' => array(
                array(
                    'key' => 'field_5ebfe2b9377ea',
                    'label' => 'custom class',
                    'name' => 'custom_class',
                    'type' => 'select',
                    'instructions' => '',
                    'required' => 0,
                    'conditional_logic' => 0,
                    'wrapper' => array(
                        'width' => '',
                        'class' => '',
                        'id' => '',
                    ),
                    'choices' => array(),
                    'default_value' => array(
                    ),
                    'allow_null' => 0,
                    'multiple' => 1,
                    'ui' => 1,
                    'ajax' => 0,
                    'return_format' => 'value',
                    'placeholder' => '',
                ),
                array(
                    'key' => 'field_5ebf47bf36520',
                    'label' => 'columns',
                    'name' => 'columns',
                    'type' => 'radio',
                    'instructions' => '',
                    'required' => 0,
                    'conditional_logic' => 0,
                    'wrapper' => array(
                        'width' => '',
                        'class' => '',
                        'id' => '',
                    ),
                    'choices' => array(
                        4 => '1/3',
                        3 => '1/4',
                        6 => '1/2',
                    ),
                    'allow_null' => 0,
                    'other_choice' => 0,
                    'default_value' => '',
                    'layout' => 'horizontal',
                    'return_format' => 'array',
                    'save_other_choice' => 0,
                ),
                array(
                    'key' => 'field_5ebf33c0488e7',
                    'label' => 'card',
                    'name' => 'card',
                    'type' => 'repeater',
                    'instructions' => '',
                    'required' => 1,
                    'conditional_logic' => 0,
                    'wrapper' => array(
                        'width' => '',
                        'class' => '',
                        'id' => '',
                    ),
                    'collapsed' => '',
                    'min' => 1,
                    'max' => 0,
                    'layout' => 'block',
                    'button_label' => 'Add Column',
                    'sub_fields' => array(
                        array(
                            'key' => 'field_5ebf33c0488ec',
                            'label' => 'image',
                            'name' => 'image',
                            'type' => 'image',
                            'instructions' => '',
                            'required' => 1,
                            'conditional_logic' => array(
                                array(
                                    array(
                                        'field' => 'field_5e595272d8138',
                                        'operator' => '!=empty',
                                    ),
                                ),
                            ),
                            'wrapper' => array(
                                'width' => '',
                                'class' => '',
                                'id' => '',
                            ),
                            'return_format' => 'array',
                            'preview_size' => 'thumbnail',
                            'library' => 'all',
                            'min_width' => '',
                            'min_height' => '',
                            'min_size' => '',
                            'max_width' => '',
                            'max_height' => '',
                            'max_size' => '',
                            'mime_types' => 'png,jpg,jpeg,gif,svg',
                        ),
                        array(
                            'key' => 'field_5ebf3400488ee',
                            'label' => 'title',
                            'name' => 'title',
                            'type' => 'text',
                            'instructions' => '',
                            'required' => 0,
                            'conditional_logic' => 0,
                            'wrapper' => array(
                                'width' => '',
                                'class' => '',
                                'id' => '',
                            ),
                            'default_value' => '',
                            'placeholder' => '',
                            'prepend' => '',
                            'append' => '',
                            'maxlength' => '',
                        ),
                    ),
                ),
              
            ),
            'min' => '',
            'max' => '',
        ),
        'layout_5ebf4fe270e95' => array(
            'key' => 'layout_5ebf4fe270e95',
            'name' => 'services',
            'label' => 'Services',
            'display' => 'row',
            'sub_fields' => array(
                array(
                    'key' => 'field_5ebfe2b2377ea',
                    'label' => 'custom class',
                    'name' => 'custom_class',
                    'type' => 'select',
                    'instructions' => '',
                    'required' => 0,
                    'conditional_logic' => 0,
                    'wrapper' => array(
                        'width' => '',
                        'class' => '',
                        'id' => '',
                    ),
                    'choices' => array(
                        'cs1' => 'cs1',
                    ),
                    'default_value' => array(
                    ),
                    'allow_null' => 0,
                    'multiple' => 1,
                    'ui' => 1,
                    'ajax' => 0,
                    'return_format' => 'value',
                    'placeholder' => '',
                ),
                array(
                    'key' => 'field_5ebf4fe270e96',
                    'label' => 'columns',
                    'name' => 'columns',
                    'type' => 'radio',
                    'instructions' => '',
                    'required' => 0,
                    'conditional_logic' => 0,
                    'wrapper' => array(
                        'width' => '',
                        'class' => '',
                        'id' => '',
                    ),
                    'choices' => array(
                        4 => '1/3',
                        3 => '1/4',
                        6 => '1/2',
                    ),
                    'allow_null' => 0,
                    'other_choice' => 0,
                    'save_other_choice' => 0,
                    'default_value' => '',
                    'layout' => 'horizontal',
                    'return_format' => 'array',
                ),
                array(
                    'key' => 'field_5ebf4fe270e97',
                    'label' => 'card',
                    'name' => 'card',
                    'type' => 'repeater',
                    'instructions' => '',
                    'required' => 1,
                    'conditional_logic' => 0,
                    'wrapper' => array(
                        'width' => '',
                        'class' => '',
                        'id' => '',
                    ),
                    'collapsed' => '',
                    'min' => 1,
                    'max' => 0,
                    'layout' => 'block',
                    'button_label' => 'Add Column',
                    'sub_fields' => array(
                        array(
                            'key' => 'field_5ebf4fe270e98',
                            'label' => 'image',
                            'name' => 'image',
                            'type' => 'image',
                            'instructions' => '',
                            'required' => 1,
                            'conditional_logic' => array(
                                array(
                                    array(
                                        'field' => 'field_5e595272d8138',
                                        'operator' => '!=empty',
                                        'value' => '',
                                    ),
                                ),
                            ),
                            'wrapper' => array(
                                'width' => '',
                                'class' => '',
                                'id' => '',
                            ),
                            'return_format' => 'array',
                            'preview_size' => 'thumbnail',
                            'library' => 'all',
                            'min_width' => '',
                            'min_height' => '',
                            'min_size' => '',
                            'max_width' => '',
                            'max_height' => '',
                            'max_size' => '',
                            'mime_types' => 'png,jpg,jpeg,gif,svg',
                        ),
                        array(
                            'key' => 'field_5ebf4fe270e99',
                            'label' => 'title',
                            'name' => 'title',
                            'type' => 'text',
                            'instructions' => '',
                            'required' => 0,
                            'conditional_logic' => 0,
                            'wrapper' => array(
                                'width' => '',
                                'class' => '',
                                'id' => '',
                            ),
                            'default_value' => '',
                            'placeholder' => '',
                            'prepend' => '',
                            'append' => '',
                            'maxlength' => '',
                        ),
                        array(
                            'key' => 'field_5ebf4ff270e9a',
                            'label' => 'paragraph',
                            'name' => 'paragraph',
                            'type' => 'textarea',
                            'instructions' => '',
                            'required' => 0,
                            'conditional_logic' => 0,
                            'wrapper' => array(
                                'width' => '',
                                'class' => '',
                                'id' => '',
                            ),
                            'default_value' => '',
                            'placeholder' => '',
                            'maxlength' => '',
                            'rows' => '',
                            'new_lines' => '',
                        ),
                    ),
                ),
            ),
            'min' => '',
            'max' => '',
        ),
        'layout_5ebfdb94ff9c4' => array(
            'key' => 'layout_5ebfdb94ff9c4',
            'name' => 'headline',
            'label' => 'Headline',
            'display' => 'row',
            'sub_fields' => array(
                array(
                    'key' => 'field_5ebfe2b5377ea',
                    'label' => 'custom class',
                    'name' => 'custom_class',
                    'type' => 'select',
                    'instructions' => '',
                    'required' => 0,
                    'conditional_logic' => 0,
                    'wrapper' => array(
                        'width' => '',
                        'class' => '',
                        'id' => '',
                    ),
                    'choices' => array(
                        'cs1' => 'cs1',
                    ),
                    'default_value' => array(
                    ),
                    'allow_null' => 0,
                    'multiple' => 1,
                    'ui' => 1,
                    'ajax' => 0,
                    'return_format' => 'value',
                    'placeholder' => '',
                ),
                array(
                    'key' => 'field_5ebfdb9dff9c5',
                    'label' => 'tittle',
                    'name' => 'tittle',
                    'type' => 'text',
                    'instructions' => '',
                    'required' => 1,
                    'conditional_logic' => 0,
                    'wrapper' => array(
                        'width' => '',
                        'class' => '',
                        'id' => '',
                    ),
                    'default_value' => '',
                    'placeholder' => '',
                    'prepend' => '',
                    'append' => '',
                    'maxlength' => '',
                ),
                array(
                    'key' => 'field_5ebfdbe4ff9c7',
                    'label' => 'tittle type',
                    'name' => 'tittle_type',
                    'type' => 'radio',
                    'instructions' => '',
                    'required' => 1,
                    'conditional_logic' => 0,
                    'wrapper' => array(
                        'width' => '',
                        'class' => '',
                        'id' => '',
                    ),
                    'choices' => array(
                        'h2' => 'h2',
                        'h3' => 'h3',
                    ),
                    'allow_null' => 0,
                    'other_choice' => 0,
                    'default_value' => '',
                    'layout' => 'horizontal',
                    'return_format' => 'value',
                    'save_other_choice' => 0,
                ),
                array(
                    'key' => 'field_5ebfdbb4ff9c6',
                    'label' => 'sub tittle',
                    'name' => 'sub_tittle',
                    'type' => 'text',
                    'instructions' => '',
                    'required' => 0,
                    'conditional_logic' => 0,
                    'wrapper' => array(
                        'width' => '',
                        'class' => '',
                        'id' => '',
                    ),
                    'default_value' => '',
                    'placeholder' => '',
                    'prepend' => '',
                    'append' => '',
                    'maxlength' => '',
                ),
            ),
            'min' => '',
            'max' => '',
        ),
        'layout_5ebfdb74ff9c4' => array(
            'key' => 'layout_5ebfdb554ff9c4',
            'name' => 'hero',
            'label' => 'Hero',
            'display' => 'row',
            'sub_fields' => array(
                array(
                    'key' => 'field_5ebfe2a5377ea',
                    'label' => 'custom class',
                    'name' => 'custom_class',
                    'type' => 'select',
                    'instructions' => '',
                    'required' => 0,
                    'conditional_logic' => 0,
                    'wrapper' => array(
                        'width' => '',
                        'class' => '',
                        'id' => '',
                    ),
                    'choices' => array(),
                    'default_value' => array(
                    ),
                    'allow_null' => 0,
                    'multiple' => 1,
                    'ui' => 1,
                    'ajax' => 0,
                    'return_format' => 'value',
                    'placeholder' => '',
                ),
				array(
					'key' => 'field_5ec042209a69d',
					'label' => 'image',
					'name' => 'image',
					'type' => 'image',
					'instructions' => '',
					'required' => 1,
					'conditional_logic' => 0,
					'wrapper' => array(
						'width' => '',
						'class' => '',
						'id' => '',
					),
					'return_format' => 'url',
					'preview_size' => 'thumbnail',
					'library' => 'all',
					'min_width' => '',
					'min_height' => '',
					'min_size' => '',
					'max_width' => '',
					'max_height' => '',
					'max_size' => '',
					'mime_types' => '',
				),
				array(
					'key' => 'field_5ec042854977b',
					'label' => 'title',
					'name' => 'title',
					'type' => 'text',
					'instructions' => '',
					'required' => 0,
					'conditional_logic' => 0,
					'wrapper' => array(
						'width' => '',
						'class' => '',
						'id' => '',
					),
					'default_value' => '',
					'placeholder' => '',
					'prepend' => '',
					'append' => '',
					'maxlength' => '',
				),
				array(
					'key' => 'field_5ec0429b4977c',
					'label' => 'paragraph',
					'name' => 'paragraph',
					'type' => 'wysiwyg',
					'instructions' => '',
					'required' => 0,
					'conditional_logic' => 0,
					'wrapper' => array(
						'width' => '',
						'class' => '',
						'id' => '',
					),
					'default_value' => '',
					'tabs' => 'all',
					'toolbar' => 'full',
					'media_upload' => 1,
					'delay' => 0,
				),
            ),
            'min' => '',
            'max' => '',
        ),
    );



$newkeyLayout = 2000;
$newkeyFeild = 3000;
foreach( $layout as $key => $value){
    $spacing['key'] = 'field_'.$newkeyLayout;
     foreach( $spacing['sub_fields'] as $feil => $vals ){
        $spacing['sub_fields'][$feil]['key'] = 'field_'.$newkeyFeild;
        $newkeyFeild++;
    }
    $layout[$key]['sub_fields'][count($layout[$key]['sub_fields'])] = $spacing;
    $newkeyLayout++;
}
foreach($customClasses as $key => $value){
    foreach($value['modules'] as $module){
        foreach( $layout as $keylay => $lay){
            if($module === $lay['name']){
               $lay['sub_fields'][0]['choices'][$key] = $value['name'];
               $layout[$keylay]['sub_fields'][0]['choices'][$key] =$value['name'];
              
            }
        }
    }
}




$a = array(
	'key' => 'group_5e5952706cc66',
	'title' => 'content',
	'fields' => array(
    array(
        'key' => 'field_5e595272d8138',
        'label' => 'Easy Build ',
        'name' => 'flexible_content',
        'type' => 'flexible_content',
        'instructions' => 'Easy Build Your Page',
        'required' => 0,
        'conditional_logic' => 0,
        'wrapper' => array(
            'width' => '',
            'class' => '',
            'id' => '',
        ),
        'layouts' => array(),
        'button_label' => 'Builder',
        'min' => '',
        'max' => '',
    ),
	),
	'location' => array(
		array(
			array(
				'param' => 'page_template',
				'operator' => '==',
				'value' => 'default',
			),
		),
	),
	'menu_order' => 0,
	'position' => 'normal',
	'style' => 'default',
	'label_placement' => 'top',
	'instruction_placement' => 'label',
	'hide_on_screen' => '',
	'active' => true,
	'description' => '',
);    

$a['fields'][0]['layouts'] = $layout ;

acf_add_local_field_group($a);

endif;