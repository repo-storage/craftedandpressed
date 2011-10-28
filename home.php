<?php
/*
  Template Name: Home
 */
?>


<!-- class content -->
<div class="row">
    <div class="eight columns">

        <?php
        $theme_query = new WP_Query('post_type=cwp_theme&showposts=1');
        if ($theme_query->have_posts()):
            while ($theme_query->have_posts()):
                ?>
                <h3 class="recently-crafted"><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h3>
                <?php if (has_post_thumbnail()) : the_post_thumbnail();


                else: ?>
                    <div class="theme-preview">
                        <!-- class content -->
                        theme preview

                    </div>
                <?php endif; ?>
                    <?php the_excerpt(); ?>
            <?php endwhile; ?>
        <?php else : ?>
            <h3 class="recently-crafted"><a href="">Recently Crafted</a></h3>
            <div class="theme-preview">
                <!-- class content -->
                theme preview

            </div>


            <p>
                Quickly extend functional ROI for e-business testing procedures. Competently benchmark compelling experiences without interactive ROI. Phosfluorescently e-enable high-quality partnerships via vertical e-tailers. Holisticly procrastinate extensive.
            </p>

        <?php endif; ?>
        <a href="<?php bloginfo('wpurl') ?>/theme"><button class="nice button radius white large">Browse Our Themes</button></a>

        <!-- ###end-row### -->
    </div>
    <div class="four columns">
        <h3><a href="<?php bloginfo('siteurl') ?>/about">Our Craft</a></h3>
        <div class="about-us">
            <!-- class content -->
            <p>We create, craft, sell and customize, stunning, one-of-a-kind WordPress applications and themes. That are feature rich, functional and easy to use. We can even add the unique style, feel and finish to really set it a part!</p>

            <p>
                We build all our themes with a very rich feature set PRESSED-IN, keep it simple and smart (our KISS theory).
                Then package them with everything you need to get then up and running quickly.
            </p>

        </div>
        <h3><a href="<?php bloginfo('siteurl') ?>/features">Pressed In</a></h3>
        <p><strong>Key Features</strong></p>
        <ul>
            <li>WordPress 3.2 Support</li>
            <li>Theme Specific Custom Post-types</li>
            <li>Optional Theme Customizations</li>
            <li>Quick and Easy Setup</li>
            <li>Smart Options UI</li>
            <li>Multiple Page Templates</li>
            <li>HTML5 & CSS3</li>
            <li>Responsive</li>
            <!--                <li>Child Theme Support</li>
                            <li>Full Plugin Integration</li>
                            <li>Smart Widget Integration</li>
                            <li>Graphic Support / Resources</li>
                            <li>HTML5 & CSS3</li>
                            <li>Mobile Support</li>-->
        </ul>
        <button class="nice button white">See Full Features</button>

        <!-- class content -->

    </div>
    <!-- ####column-end#### -->
</div>


<!-- ###### -->

