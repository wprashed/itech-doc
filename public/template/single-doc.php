<?php
    get_header();
    the_post();
    $itech_doc_sections = carbon_get_the_post_meta('itech_doc_sections');
?>

    <div id="wrapper">

        <div class="container-fluid">

            <section id="top" class="section docs-heading">

                <div class="row">
                    <div class="col-md-12">
                        <div class="big-title text-center">
                            <h1><?php the_title(); ?></h1>
                            <p class="lead"><?php _e('Version: ', 'itech-doc')?><?php echo esc_html(carbon_get_the_post_meta('itech_doc_version')); ?></p>
                        </div>
                        <!-- end title -->
                    </div>
                    <!-- end 12 -->
                </div>
                <!-- end row -->

            </section>
            <!-- end section -->

            <div class="row">

                <div class="col-md-3" id="docs-sidebar">
                    <nav class="docs-sidebar" data-spy="affix" data-offset-top="300" data-offset-bottom="200" role="navigation">
                        <ul class="nav">
                            <li>
                                <?php
                                    $itech_doc_logo_source = wp_get_attachment_image_src(carbon_get_the_post_meta('itech_doc_logo'), 'full');
                                    echo "<img src='".esc_url($itech_doc_logo_source[0])."'' class='logo'>";
                                ?>
                            </li>
                            <?php
                              $g='a';
                              foreach ($itech_doc_sections as $itech_doc_section):
                            ?>                          
                            <li><a href="#<?php echo esc_html($g++); ?>"><?php echo esc_html($itech_doc_section['itech_doc_title']); ?></a>
                                <ul class="nav">
                                    <?php
                                      $i='b';
                                      foreach ($itech_doc_section['itech_doc_sub_sections'] as $itech_doc_sub_section):
                                    ?>
                                    <li><a href="#<?php echo esc_html($g++); ?><?php echo esc_html($i++); ?>"><?php echo esc_html($itech_doc_sub_section['itech_doc_sub_title']); ?></a></li>
                                    <?php endforeach ?>
                                </ul>
                            </li>
                            <?php endforeach ?>
                        </ul>
                    </nav >
                </div>
                <div class="col-md-9 main-content">
                    <section class="welcome">

                        <div class="row">
                            <div class="col-md-12 left-align">
                                
                                <?php the_content(); ?>
                                
                            </div>
                        </div>
                    </section>

                    <?php
                      $g='a';
                      foreach ($itech_doc_sections as $itech_doc_section):
                    ?>

                    <section id="<?php echo esc_html($g++); ?>" class="section">

                        <div class="row">
                            <div class="col-md-12 left-align">
                                <h2 class="dark-text"><?php echo esc_html($itech_doc_section['itech_doc_title']); ?><hr></h2>
                            </div>
                            <!-- end col -->
                        </div>
                        <!-- end row -->

                        <div class="row">
                            <div class="col-md-12">
                              <?php echo esc_html($itech_doc_section['itech_doc_description']); ?>
                            </div>
                            <!-- end col -->
                        </div>
                        <!-- end row -->

                    </section>
                    <?php
                      $i='b';
                      foreach ($itech_doc_section['itech_doc_sub_sections'] as $itech_doc_sub_section):
                    ?>
                    <section id="<?php echo esc_html($g++); ?><?php echo esc_html($i++); ?>" class="section">

                        <div class="row">
                            <div class="col-md-12 left-align">
                                <h2 class="dark-text"><?php echo esc_html($itech_doc_sub_section['itech_doc_sub_title']); ?><hr></h2>
                            </div>
                            <!-- end col -->
                        </div>
                        <!-- end row -->

                        <div class="row">
                            <div class="col-md-12">
                              <?php echo esc_html($itech_doc_sub_section['itech_doc_sub_description']); ?>
                            </div>
                            <!-- end col -->
                        </div>
                        <!-- end row -->

                    </section>

                    <?php endforeach ?>
                    <?php endforeach ?>

                    <section id="line11" class="section">

                        <div class="row">
                            <div class="col-md-12 left-align">
                                <h5><?php echo esc_html(carbon_get_the_post_meta('copy_right')); ?> <a href="#top"><?php _e('Back to Top', 'itech-doc')?></a></h5>
                            </div>
                            <!-- end col -->
                        </div>
                        <!-- end row -->

                    </section>
                    <!-- end section -->
                </div>
                <!-- // end .col -->

            </div>
            <!-- // end .row -->

        </div>
        <!-- // end container -->

    </div>
    <!-- end wrapper -->

    <?php get_footer(); ?>
