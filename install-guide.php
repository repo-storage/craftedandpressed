<?php
/*
Template Name: Install Guide
*/

wp_enqueue_style('screenshots', get_stylesheet_directory_uri().'/library/css/install-guide.css');
get_header();
?>
<nav id="top-nav">
    <?php wp_nav_menu(array('theme_location' => 'primary', 'fallback_cb' => 'base_default_menu')); ?>
    <div class="clear">Cleared</div>
</nav>
<!-- class content -->
<!-- Demo content taken from the normalize.css project: http://necolas.github.com/normalize.css/ -->
<header id="branding">
    <div class="container">
        <!-- container -->
        <div class="row"><!-- container -->
            <div class="eight"><!-- container -->
                <hgroup>
                    <h1 id="site-title">
                        <span>
                            <a href="<?php echo home_url('/'); ?>" title="<?php echo esc_attr(get_bloginfo('name', 'display')); ?>" rel="home"><?php bloginfo('name'); ?> Install Guide</a>
                        </span></h1>

                </hgroup>
            </div>
            <div class="four"><!-- container -->
                <section id="social-conncetions">
                    <a>RSS</a>
                    <a>TWEET</a>
                    <a>FACEBOOK</a>
                    <a>LINKEDIN</a>
                    <a>GPLUS</a>
                </section>
            </div>
        </div>
    </div>
</header>
<section id="content">
<div class="container install-help">
    <!-- class content -->
    <section id="articles">
     <div class="row">
         <div class="tweleve">
             <!-- class content -->


        <!-- class content -->

        <h1>THEME SETUP INTRODUCTION</h1>
        <div class="screenshot">
            <img src="<?php echo get_template_directory_uri() ?>/screenshot.png" />
            <!-- class content -->

        </div>

        <p>Lorem ipsum quisque ornare primis imperdiet potenti aptent egestas, morbi ut nunc aliquet taciti felis malesuada cubilia at, nulla placerat cras metus aptent posuere pretium per gravida ultrices suspendisse tempor inceptos.</p>
        <p>Interdum ut interdum condimentum turpis feugiat at curae imperdiet vehicula phasellus, porttitor nulla consequat non fringilla leo elementum eros non quis suscipit, curabitur sem arcu varius commodo id velit convallis netus.</p>
        <p>Nullam congue dolor euismod scelerisque tristique turpis, taciti lectus semper leo hac ultrices, turpis commodo lacus eu sollicitudin.</p>
        <p>Ac fames potenti lorem nulla leo felis ut ante quisque, nibh et faucibus placerat elit sed vehicula eget, ante nisi bibendum volutpat sagittis primis massa euismod.</p>

        <h1>Requirements</h1>

        <p>Lorem ipsum quisque ornare primis imperdiet potenti aptent egestas, morbi ut nunc aliquet taciti felis malesuada cubilia at, nulla placerat cras metus aptent posuere pretium per gravida ultrices suspendisse tempor inceptos.</p>
        <p>Interdum ut interdum condimentum turpis feugiat at curae imperdiet vehicula phasellus, porttitor nulla consequat non fringilla leo elementum eros non quis suscipit, curabitur sem arcu varius commodo id velit convallis netus.</p>
        <p>Nullam congue dolor euismod scelerisque tristique turpis, taciti lectus semper leo hac ultrices, turpis commodo lacus eu sollicitudin.</p>
        <p>Ac fames potenti lorem nulla leo felis ut ante quisque, nibh et faucibus placerat elit sed vehicula eget, ante nisi bibendum volutpat sagittis primis massa euismod.</p>

        <h1>Installation</h1>


         <p>Lorem ipsum quisque ornare primis imperdiet potenti aptent egestas, morbi ut nunc aliquet taciti felis malesuada cubilia at, nulla placerat cras metus aptent posuere pretium per gravida ultrices suspendisse tempor inceptos.</p>
        <p>Interdum ut interdum condimentum turpis feugiat at curae imperdiet vehicula phasellus, porttitor nulla consequat non fringilla leo elementum eros non quis suscipit, curabitur sem arcu varius commodo id velit convallis netus.</p>
        <p>Nullam congue dolor euismod scelerisque tristique turpis, taciti lectus semper leo hac ultrices, turpis commodo lacus eu sollicitudin.</p>
        <p>Ac fames potenti lorem nulla leo felis ut ante quisque, nibh et faucibus placerat elit sed vehicula eget, ante nisi bibendum volutpat sagittis primis massa euismod.</p>

        <h2>Plugins</h2>
        <ul>
            <li>Plugin</li>
            <li>Plugin</li>
            <li>Plugin</li>
            <li>Plugin</li>
            <li>Plugin</li>
        </ul>

        <h1>Setup</h1>
        <p>Lorem ipsum quisque ornare primis imperdiet potenti aptent egestas, morbi ut nunc aliquet taciti felis malesuada cubilia at, nulla placerat cras metus aptent posuere pretium per gravida ultrices suspendisse tempor inceptos.</p>
        <p>Interdum ut interdum condimentum turpis feugiat at curae imperdiet vehicula phasellus, porttitor nulla consequat non fringilla leo elementum eros non quis suscipit, curabitur sem arcu varius commodo id velit convallis netus.</p>
        <p>Nullam congue dolor euismod scelerisque tristique turpis, taciti lectus semper leo hac ultrices, turpis commodo lacus eu sollicitudin.</p>
        <p>Ac fames potenti lorem nulla leo felis ut ante quisque, nibh et faucibus placerat elit sed vehicula eget, ante nisi bibendum volutpat sagittis primis massa euismod.</p>
        <h1>Support</h1>
        <p>Lorem ipsum quisque ornare primis imperdiet potenti aptent egestas, morbi ut nunc aliquet taciti felis malesuada cubilia at, nulla placerat cras metus aptent posuere pretium per gravida ultrices suspendisse tempor inceptos.</p>
        <p>Interdum ut interdum condimentum turpis feugiat at curae imperdiet vehicula phasellus, porttitor nulla consequat non fringilla leo elementum eros non quis suscipit, curabitur sem arcu varius commodo id velit convallis netus.</p>
        <p>Nullam congue dolor euismod scelerisque tristique turpis, taciti lectus semper leo hac ultrices, turpis commodo lacus eu sollicitudin.</p>
        <p>Ac fames potenti lorem nulla leo felis ut ante quisque, nibh et faucibus placerat elit sed vehicula eget, ante nisi bibendum volutpat sagittis primis massa euismod.</p>
    </div>
         </div>
    </section>

</div>
</section>


<?php get_footer(); ?>