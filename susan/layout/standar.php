<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

$hassidepre = $PAGE->blocks->region_has_content('side-pre', $OUTPUT);
$hassidepost = $PAGE->blocks->region_has_content('side-post', $OUTPUT);

echo $OUTPUT->doctype(); ?>

<html <?php echo $OUTPUT->htmlattributes() ?>>


    <!-- CABECERA DE LA CAPA  -->
<head>
    <title><?php echo $PAGE->title ?></title>
    <?php echo $OUTPUT->standard_head_html() ?>
</head>


    <!-- CUERPO DE LA CAPA -->
<body id="<?php p($PAGE->bodyid); ?>" class="<?php p($PAGE->bodyclasses); ?>">
<?php echo $OUTPUT->standard_top_of_body_html() ?>
<div id="page">
<?php if ($PAGE->heading || (empty($PAGE->layout_options['nonavbar']) && $PAGE->has_navbar())) { ?>
    <div id="page-header">
        <?php if ($PAGE->heading) { ?>
        <h1 class="headermain"><?php echo $PAGE->heading ?></h1>
        <div class="headermenu"><?php
            echo $OUTPUT->login_info();
            if (!empty($PAGE->layout_options['langmenu'])) {
                echo $OUTPUT->lang_menu();
            }
            echo $PAGE->headingmenu
        ?></div><?php } ?>
        <?php if (empty($PAGE->layout_options['nonavbar']) && $PAGE->has_navbar()) { ?>
            <div class="navbar clearfix">
                <div class="breadcrumb"><?php echo $OUTPUT->navbar(); ?></div>
                <div class="navbutton"> <?php echo $PAGE->button; ?></div>
            </div>
        <?php } ?>
    </div>
<?php } ?>
    

    
    <div id="page-content">
        <div id="region-main-box">
            <div id="region-post-box">
                <div id="region-main-wrap">
                    <div id="region-main">
                        <div class="region-content">
                            <?php echo core_renderer::MAIN_CONTENT_TOKEN ?>
                        </div>
                    </div>
                </div>
                <?php if ($hassidepre) { ?>
                <div id="region-pre">
                    <div class="region-content">
                        <?php echo $OUTPUT->blocks_for_region('side-pre') ?>
                    </div>
                </div>
                <?php } ?>
 
                <?php if ($hassidepost) { ?>
                <div id="region-post">
                    <div class="region-content">
                        <?php echo $OUTPUT->blocks_for_region('side-post') ?>
                    </div>
                </div>
                <?php } ?>
            </div>
        </div>
    </div>
 
    <?php if (empty($PAGE->layout_options['nofooter'])) { ?>
    <div id="page-footer" class="clearfix">
        <p class="helplink"><?php echo page_doc_link(get_string('moodledocslink')) ?></p>
        <?php
        echo $OUTPUT->login_info();
        echo $OUTPUT->home_link();
        echo $OUTPUT->standard_footer_html();
        ?>
    </div>
    <?php } ?>
</div>
    
    
<?php echo $OUTPUT->standard_end_of_body_html() ?>
</body>
</html>
    
    
    
    

?>
