<?php if ( ! defined( 'ABSPATH' ) ) { die; } // Cannot access pages directly.
// ===============================================================================================
// -----------------------------------------------------------------------------------------------
// FRAMEWORK SETTINGS
// -----------------------------------------------------------------------------------------------
// ===============================================================================================
$settings           = array(
  'menu_title'      => 'Theme Option',
  'menu_type'       => 'menu', // menu, submenu, options, theme, etc.
  'menu_slug'       => 'irina-framework',
  'ajax_save'       => false,
  'show_reset_all'  => false,
  'framework_title' => 'Irina Framework <small>by NMH47</small>',
);

// ===============================================================================================
// -----------------------------------------------------------------------------------------------
// FRAMEWORK OPTIONS
// -----------------------------------------------------------------------------------------------
// ===============================================================================================
$options        = array();

// ----------------------------------------
// a option section for options overview  -
// ----------------------------------------
$options[]      = array(
  'name'        => 'general-options',
  'title'       => 'General Option',
  'icon'        => 'fa fa-home',

  // begin: fields
  'fields'      => array(

    array(
      'id'      => 'irina_logo',
      'type'    => 'image',
      'title'   => 'Logo',
    ),
    array(
      'id'      => 'irina_fav_logo',
      'type'    => 'image',
      'title'   => 'Favicon',
    ),
    array(
      'id'      => 'irina_footer_phone',
      'type'    => 'text',
      'title'   => 'Footer Telephone No',
      'default' => '8 (812) 409-50-92',
    ),
    array(
      'id'      => 'irina_call_us_phone',
      'type'    => 'text',
      'title'   => 'Footer Call Us Phone No',
      'default' => '777-77-77',
    ),
    array(
      'id'      => 'irina_address',
      'type'    => 'textarea',
      'title'   => 'Address',
      'sanitize' => false,
    ),
    array(
      'id'      => 'irina_working_hour',
      'type'    => 'textarea',
      'title'   => 'Working Hours Details',
      'sanitize' => false,
    ),




  ), // end: fields
);

$options[]      = array(
  'name'        => 'hero_area',
  'title'       => 'Hero Area',
  'icon'        => 'fa fa-road',

  // begin: fields
  'fields'      => array(


    array(
      'id'      => 'hero_author_title',
      'type'    => 'text',
      'title'   => 'Author Title',
      'default' => 'Тренерский курс Ирины Волковой',
    ),
    array(
      'id'      => 'hero_course_title',
      'type'    => 'text',
      'title'   => 'Course Title',
      'default' => 'Микроблейдинг бровей',
      'sanitize' => false,
    ),
    array(
      'id'      => 'hero_box_title',
      'type'    => 'text',
      'title'   => 'Course Box Title',
      'default' => 'с правом преподавания',
      'sanitize' => false,
    ),
    array(
      'id'      => 'hero_course_promotion',
      'type'    => 'text',
      'title'   => 'Course Promotion (Calligraphy Text)',
      'default' => 'Твой новый уровень',
      'sanitize' => false,
    ),
    array(
      'id'      => 'hero_logo',
      'type'    => 'image',
      'title'   => 'Hero Area Logo',
    ),
    array(
      'id'      => 'hero_area_bg',
      'type'    => 'image',
      'title'   => 'Hero Area Background',
    ),


    

 



  ), // end: fields
);


$options[]      = array(
  'name'        => 'fun-facts',
  'title'       => 'Fun Facts',
  'icon'        => 'fa fa-diamond',

  // begin: fields
  'fields'      => array(


    array(
      'id'      => 'f_f_year',
      'type'    => 'text',
      'title'   => 'Year',
      'default'     => '2015',
    ),
    array(
      'id'      => 'f_f_pupil',
      'type'    => 'text',
      'title'   => 'Pupil',
      'default'     => '300',
    ),
    array(
      'id'      => 'f_f_countries',
      'type'    => 'text',
      'title'   => 'Countries',
      'default' => '12',
    ),
    array(
      'id'      => 'f_f_awards',
      'type'    => 'text',
      'title'   => 'Awards',
      'default' => '20',
    ),
    array(
      'id'      => 'f_f_profit',
      'type'    => 'text',
      'title'   => 'Average Profit From One Course',
      'default' => '100000',
    ),
    array(
      'id'      => 'f_f_profit_permonth',
      'type'    => 'text',
      'title'   => 'Average Profit From Per Month',
      'default' => '500000',
    ),
    
 



  ), // end: fields
);




$options[]      = array(
  'name'        => 'documentation',
  'title'       => 'Documentations/Certification',
  'icon'        => 'fa fa-certificate',

  // begin: fields
  'fields'      => array(


    array(
      'id'      => 'documentations_img',
      'type'    => 'gallery',
      'title'   => 'Add Certification/Documentation images',
      'help'     => 'Add Certification/Documentation Images',
    ),
 



  ), // end: fields
);

$options[]      = array(
  'name'        => 'full_width_gallery',
  'title'       => 'Image Carousel Gallery',
  'icon'        => 'fa fa-film',

  // begin: fields
  'fields'      => array(


    array(
      'id'      => 'gallery_img',
      'type'    => 'gallery',
      'title'   => 'Add Gallery Images',
      'help'     => 'Full width image gallery. Add more than 6 images',
    ),
 



  ), // end: fields
);

$options[]      = array(
  'name'        => 'course_details',
  'title'       => 'Course Details',
  'icon'        => 'fa fa-book',

  // begin: fields
  'fields'      => array(


    array(
      'id'      => 'course_promotion_top',
      'type'    => 'text',
      'title'   => 'Course Promotion Top',
      'default' => 'Приобретите курс',
    ),
    array(
      'id'      => 'course_promotion_bottom',
      'type'    => 'text',
      'title'   => 'Course Promotion Bottom',
      'default' => 'В БЕСПРОЦЕНТНУЮ РАССРОЧКУ',
    ),
    array(
      'id'      => 'course_title',
      'type'    => 'text',
      'title'   => 'Course Title',
      'sanitize' => false,
      // 'default' => 'Школа перманентного макияжа «MICROBLADING&BROW»',
    ),
    array(
      'id'      => 'course_sub_title',
      'type'    => 'text',
      'title'   => 'Course Sub-Title',
      'default' => 'представляет уникальную возможность стать преподавателем и обучать самому',
    ),
    array(
      'id'      => 'course_background_img',
      'type'    => 'image',
      'title'   => 'Background Image',
    ),
    array(
      'id'      => 'course_feature_lists',
      'type'    => 'group',
      'title'   => 'Add (Must Know List) Informations',
      'button_title'   => 'Add New',
      'accordion_title'   => 'Add New Info',
      'fields'  => array(
        array(
          'id'    => 'must_know_data',
          'type'  => 'text',
          'title' => 'Content',
        ),
       
      ),
    ),
 



  ), // end: fields
);





$options[]      = array(
  'name'        => 'author_awards',
  'title'       => 'Awards',
  'icon'        => 'fa fa-trophy',

  // begin: fields
  'fields'      => array(



    array(
      'id'      => 'award_img',
      'type'    => 'image',
      'title'   => 'Update Award Image',
    ),
    array(
      'id'      => 'main_awards',
      'type'    => 'group',
      'title'   => 'Add (Main 3) Awards',
      'button_title'   => 'Add Award',
      'accordion_title'   => 'Add Main Award',
      'fields'  => array(
        array(
          'id'    => 'top_award_info',
          'type'  => 'text',
          'title' => 'Award Details',
        ),
       
      ),
    ),
    array(
      'id'      => 'list_awards',
      'type'    => 'group',
      'title'   => 'Add (List View) Awards',
      'button_title'   => 'Add Award',
      'accordion_title'   => 'Add New Award (List)',
      'fields'  => array(
        
        array(
          'id'    => 'list_award_info',
          'type'  => 'text',
          'title' => 'Award Details',
        ),
        array(
          'id'    => 'list_award_icon',
          'type'  => 'image',
          'title' => 'Icon',
        ),
        
       
      ),
    ),
 



  ), // end: fields
);


$options[]      = array(
  'name'        => 'trust_info',
  'title'       => 'Trust',
  'icon'        => 'fa fa-bolt',

  // begin: fields
  'fields'      => array(



    array(
      'id'      => 'trust_title',
      'type'    => 'text',
      'title'   => 'Trust Title',
      'default'   => 'ПОЧЕМУ МАСТЕРА ДОВЕРЯЮТ',
    ),
    array(
      'id'      => 'trust_sub_title',
      'type'    => 'text',
      'title'   => 'Trust Sub-Title',
      'default'   => 'свое обучение Ирине Волковой',
    ),
    array(
      'id'      => 'author_intro',
      'type'    => 'textarea',
      'title'   => 'Author Intro',
    ),
    array(
      'id'      => 'trust_img',
      'type'    => 'image',
      'title'   => 'Update Trust Image',
    ),
    array(
      'id'      => 'trust_list',
      'type'    => 'group',
      'title'   => 'Important Infos (List View)',
      'button_title'   => 'Add Info',
      'accordion_title'   => 'Important Info',
      'fields'  => array(
        array(
          'id'    => 'trust_infox',
          'type'  => 'text',
          'title' => 'Info Details',
        ),

        array(
          'id'    => 'trust_info_iconx',
          'type'  => 'image',
          'title' => 'Icon',
        ),
       
      ),
    ),
    
 



  ), // end: fields
);



$options[]      = array(
  'name'        => 'course_feature_info',
  'title'       => 'Course Features',
  'icon'        => 'fa fa-star',

  // begin: fields
  'fields'      => array(



    array(
      'id'      => 'c_f_title',
      'type'    => 'text',
      'title'   => 'Title',
      'default'   => 'По окончании курса',
    ),
    array(
      'id'      => 'c_f_sub_title',
      'type'    => 'text',
      'title'   => 'Sub-Title',
      'default'   => 'вас ждет',
    ),

    array(
      'id'      => 'c_f_img_1',
      'type'    => 'image',
      'title'   => 'Update Background Image',
    ),
    array(
      'id'      => 'c_f_img_2',
      'type'    => 'image',
      'title'   => 'Update Feature Center Image',
    ),

    array(
      'id'      => 'c_f_i_1_t',
      'type'    => 'text',
      'title'   => 'Feature-1 Title',
    ),
    array(
      'id'      => 'c_f_i_1_i',
      'type'    => 'image',
      'title'   => 'Feature-1 Image',
    ),
    array(
      'id'      => 'c_f_i_1_d',
      'type'    => 'textarea',
      'title'   => 'Feature-1 Description',
    ),

    array(
      'id'      => 'c_f_i_2_t',
      'type'    => 'text',
      'title'   => 'Feature-2 Title',
    ),
    array(
      'id'      => 'c_f_i_2_i',
      'type'    => 'image',
      'title'   => 'Feature-2 Image',
    ),
    array(
      'id'      => 'c_f_i_2_d',
      'type'    => 'textarea',
      'title'   => 'Feature-2 Description',
    ),

    array(
      'id'      => 'c_f_i_3_t',
      'type'    => 'text',
      'title'   => 'Feature-3 Title',
    ),
    array(
      'id'      => 'c_f_i_3_i',
      'type'    => 'image',
      'title'   => 'Feature-3 Image',
    ),
    array(
      'id'      => 'c_f_i_3_d',
      'type'    => 'textarea',
      'title'   => 'Feature-3 Description',
    ),
    array(
      'id'      => 'c_f_i_4_t',
      'type'    => 'text',
      'title'   => 'Feature-4 Title',
    ),
    array(
      'id'      => 'c_f_i_4_i',
      'type'    => 'image',
      'title'   => 'Feature-4 Image',
    ),
    array(
      'id'      => 'c_f_i_4_d',
      'type'    => 'textarea',
      'title'   => 'Feature-4 Description',
    ),
    array(
      'id'      => 'c_f_i_5_t',
      'type'    => 'text',
      'title'   => 'Feature-5 Title',
    ),
    array(
      'id'      => 'c_f_i_5_i',
      'type'    => 'image',
      'title'   => 'Feature-5 Image',
    ),
    array(
      'id'      => 'c_f_i_5_d',
      'type'    => 'textarea',
      'title'   => 'Feature-5 Description',
    ),

    array(
      'id'      => 'c_f_i_6_t',
      'type'    => 'text',
      'title'   => 'Feature-6 Title',
    ),
    array(
      'id'      => 'c_f_i_6_i',
      'type'    => 'image',
      'title'   => 'Feature-6 Image',
    ),
    array(
      'id'      => 'c_f_i_6_d',
      'type'    => 'textarea',
      'title'   => 'Feature-6 Description',
    ),


    
 



  ), // end: fields
);




$options[]      = array(
  'name'        => 'cta_info',
  'title'       => 'Call To Action',
  'icon'        => 'fa fa-asterisk',

  // begin: fields
  'fields'      => array(



    array(
      'id'      => 'cta_top_title',
      'type'    => 'text',
      'title'   => 'Top Title',
      'default'   => 'Наши выпускники окупают',
      'sanitize' => false,
    ),

    array(
      'id'      => 'cta_middle_title',
      'type'    => 'text',
      'title'   => 'Middle Title(Colored)',
      'default'   => 'стоимость курса 149 500 руб.',
      'sanitize' => false,
    ),

    array(
      'id'      => 'cta_bottom_title',
      'type'    => 'text',
      'title'   => 'Bottom Title',
      'default'   => 'в течение нескольких недель',
      'sanitize' => false,
    ),



  ), // end: fields
);




$options[]      = array(
  'name'        => 'what_get',
  'title'       => 'What You Will Get',
  'icon'        => 'fa fa-bullhorn',

  // begin: fields
  'fields'      => array(



    array(
      'id'      => 'cp_title',
      'type'    => 'text',
      'title'   => 'Title',
      'default'   => 'Что вы получите, Пройдя',
      'sanitize' => false,
    ),

    array(
      'id'      => 'cp_sub_title',
      'type'    => 'text',
      'title'   => 'Sub Title',
      'default'   => 'тренерский курс',
      'sanitize' => false,
    ),

    array(
      'id'      => 'cp_phn_title',
      'type'    => 'text',
      'title'   => 'Call Us Title',
      'default'   => 'Есть вопрос? Звоните!',
      'sanitize' => false,
    ),

    array(
      'id'      => 'cp_phn_no',
      'type'    => 'text',
      'title'   => 'Call Us (Phone No)',
      'default'   => '(812) 409-50-92',
      'sanitize' => false,
    ),

    array(
      'id'      => 'cp_list_datas',
      'type'    => 'group',
      'title'   => 'Course Promotion Left Infos (List View)',
      'button_title'   => 'Add Info',
      'accordion_title'   => 'Important Info',
      'fields'  => array(
        array(
          'id'    => 'cp_left_info',
          'type'  => 'text',
          'title' => 'Info Details',
          'sanitize' => false,
        ),
       
      ),
    ),

    array(
      'id'      => 'cp_center_img_1',
      'type'    => 'image',
      'title'   => 'Image(Big One)',
    ),
    array(
      'id'      => 'cp_center_img_2',
      'type'    => 'image',
      'title'   => 'Image(Small One)',
    ),


    array(
      'id'      => 'cp_list_datas_right',
      'type'    => 'group',
      'title'   => 'Course Promotion Right Infos (List View)',
      'button_title'   => 'Add Info',
      'accordion_title'   => 'Important Info',
      'fields'  => array(
        array(
          'id'    => 'cp_right_info',
          'type'  => 'text',
          'title' => 'Info Details',
          'sanitize' => false,
        ),
       
      ),
    ),

    array(
      'id'      => 'cp_center_btn',
      'type'    => 'text',
      'title'   => 'Button Text',
      'default' => 'Подробнее о курсе',
    ),

    // array(
    //   'id'      => 'cp_center_btn_link',
    //   'type'    => 'text',
    //   'title'   => 'Button Link',
    //   'default' => '#',
    // ),

    




   



  ), // end: fields
);


$options[]      = array(
  'name'        => 'countdown_info',
  'title'       => 'Course Count-Down',
  'icon'        => 'fa fa-clock-o',

  // begin: fields
  'fields'      => array(



    array(
      'id'      => 'contdown_course_title',
      'type'    => 'text',
      'title'   => 'Course Title',
      'default' => 'Микроблейдинг бровей',
      'sanitize' => false,
    ),

    array(
      'id'      => 'contdown_course_last_date',
      'type'    => 'text',
      'title'   => 'Start Date',
      'default'   => '2018/2/21',
      'desc'   => 'Date Format Should Be Like This YYY/MM/DD (For Example: 2018/2/21)',
      'sanitize' => false,
    ),

   



  ), // end: fields
);

$options[]      = array(
  'name'        => 'contact_page_info',
  'title'       => 'Contact Page',
  'icon'        => 'fa fa-envelope',

  // begin: fields
  'fields'      => array(



    array(
      'id'      => 'contact_page_address_infos',
      'type'    => 'textarea',
      'title'   => 'Address',
      'sanitize' => false,
    ),


   



  ), // end: fields
);







CSFramework::instance( $settings, $options );
