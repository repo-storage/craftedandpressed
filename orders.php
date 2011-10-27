<?php
/**
 * @package WordPress
 * @subpackage Core-WP
 * @author shawnsandy
 */
/*
  Template Name: Loubon Orders
 */



require_once(CWP_PATH . '/includes/recaptchalib.php');
$o_validate = null;
$publickey = "6LcO8ccSAAAAAMCAW1sLco-sU7v8oGFrwFnEvsJE"; // you got this from the signup page
$o_cpatcha = cwp::recaptcha($publickey);
$privatekey = "6LcO8ccSAAAAAPphVbpBLOnL_kRlHhLXzoyx0mf5";
$o_validate = cwp::recaptcha_valid($privatekey);

//if (isset($_POST["recaptcha_challenge_field"]) AND isset($_POST["recaptcha_response_field"])):
//    $resp = recaptcha_check_answer($privatekey, $_SERVER["REMOTE_ADDR"], $_POST["recaptcha_challenge_field"], $_POST["recaptcha_response_field"]);
//    if (!$resp->is_valid) {
//        // What happens when the CAPTCHA was entered incorrectly
//        die("The reCAPTCHA wasn't entered correctly. Go back and try it again." .
//                "(reCAPTCHA said: " . $resp->error . ")");
//    } else {
//
//       return $o_validate = true;
//    }
//endif;


add_action('wp_footer', 'lo_header');

function lo_header() {
    ?>
    //load and implement all unsupported features
    <script type="text/javascript">
        window.onload = function() {
            /*
                                Accepts HTMLFormElement, HTMLCollection of HTMLFormElements, or Array of HTMLFormElements.
                                Optional object of options: validClass, invalidClass, requiredClass

                                e.g.

                                H5F.setup([d.getElementById("signup"),d.getElementById("anotherform")], {
                                        validClass: "valid",
                                        invalidClass: "invalid",
                                        requiredClass: "required"
                                });
             */

            H5F.setup(document.getElementById("orders"), {
                //                        validClass: "valid",
                //                        invalidClass: "invalid",
                //                        requiredClass: "required",
                //                        placeholderClass: "placeholder"
            });
        }
    </script>

    <?php
}
?>
                    <!-- class content -->
                    <h1><?php the_title(); ?></h1>
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

                            <?php the_content(); ?>
                            <div class="orders">
                            <?php
                            if ($o_validate) {
                                //collect and sanitze data here
                                $client_name = $_POST['name'];
                                $client_tel = $_POST['tel'];
                                $client_message = $_POST['message'];
                                $client_items = $_POST['item'];
                                $client_email = $_POST['email'];
                                $or_message = "You have an order request from name: {$client_name} email: {$client_email}
                                    for : {$item} " . " \r\n " . "Message: {$client_message}";

                                // Create post object
                                $or_post = array(
                                    'post_title' => "Order from {$client_name}, item - {$client_items} ",
                                    'post_content' => "{$or_message}",
                                    'post_status' => 'private',
                                    'post_author' => 1,
                                    'post_type' => 'cwp_orders'
                                     //'post_category' => array(8, 39)
                                );

                                // Insert the post into the database
                                if ($o_id = wp_insert_post($or_post)) {
                                    //$orinfo = get_post($o_id);
                                    // update_post_meta($orinfo->ID, 'customer_email', $client_email);
                                    echo "successful";
                                }
                            } else {



                                $c_form = new cwp_form(get_permalink());

                                $c_email = array(
                                    'desc' => 'Your Email',
                                    'field' => $c_form->email_input('email', '', 'youremail@domain.com', "required")
                                );


                                $f_1 = array(
                                    'desc' => 'Enter your full name (required)',
//                                        //'field' => $c_form->setText(
//                                                array('name'=>'full_name','desc'=>"your Full Name","required"=>"required","min"=>"3",
//                                                    'placeholder'=>'Your Full name'))
                                    'field' => $c_form->text_input('full_name', '', 'Your Full Name', "required")
                                );
                                $f_3 = array(
                                    'desc' => 'Enter a Contact number (required)',
                                    'field' => $c_form->tel_input('tel', '', '868-000-0000', null)
                                );
                                $f_2 = array(
                                    'desc' => 'Messages or comments theis is optional',
                                    'field' => $c_form->textarea('message', '', null, 'Add a Message')
                                );
                                $f_4 = array(
                                    'desc' => '',
                                    'field' => $c_form->hidden_input('item', $order_item)
                                );
                                $f_text['Full Name'] = $f_1;
                                $f_text['Telephone'] = $f_3;
                                $f_text['Email'] = $c_email;
                                $f_text['Sample Textarea'] = $f_2;
                                $f_text[''] = $f_4;
                                $c_form->setCaptacha($o_cpatcha);
                                $c_form->render($f_text, 'orders');
                            }
                            ?>
                                <!-- class content -->

                            </div>

                            <div class="comment-form">
                                <!-- class content -->
                                <?php //comments_template('orders.php');    ?>

                            </div>


    <?php endwhile; else: ?>
                        <p><?php _e('Sorry, no posts matched your criteria.','toolbox'); ?></p>
<?php endif; ?>

