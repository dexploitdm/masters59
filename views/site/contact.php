<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model app\models\ContactForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\captcha\Captcha;

$this->title = 'Contact';
$this->params['breadcrumbs'][] = $this->title;
?>
<!--======= SUB BANNER =========-->
<section class="sub-banner" style="background:url(/masters/images/bg/sub-banner.jpg) no-repeat;">
    <div class="container">
        <div class="position-center-center">
            <h2>CONTACT</h2>
            <ul class="breadcrumb">
                <li><a href="#.">Home</a></li>
                <li>Contact</li>
            </ul>
        </div>
    </div>
</section>

<!-- Content -->
<div id="content">

    <!-- Contact  -->
    <section class="contact-us light-gray-bg">
        <div class="container-fluid">
            <div class="row">

                <!-- MAP -->
                <div class="col-md-4">
                    <div id="map"></div>
                </div>

                <!-- Contact From -->
                <div class="col-md-8">
                    <h3 class="font-alegreya margin-top-50">Get In Touch With Us</h3>
                    <div class="contact-form">

                        <!-- FORM -->
                        <form role="form" id="contact_form" class="contact-form" method="post" onSubmit="return false">
                            <ul class="row">
                                <li class="col-sm-6">
                                    <label>*NAME
                                        <input type="text" class="form-control" name="name" id="name" placeholder="">
                                    </label>
                                </li>
                                <li class="col-sm-6">
                                    <label>*EMAIL
                                        <input type="text" class="form-control" name="email" id="email" placeholder="">
                                    </label>
                                </li>
                                <li class="col-sm-6">
                                    <label>PHONE
                                        <input type="text" class="form-control" name="company" id="company" placeholder="">
                                    </label>
                                </li>
                                <li class="col-sm-6">
                                    <label>SUBJECT
                                        <input type="text" class="form-control" name="website" id="website" placeholder="">
                                    </label>
                                </li>
                                <li class="col-sm-12">
                                    <label>*MESSAGE
                                        <textarea class="form-control" name="message" id="message" rows="5" placeholder=""></textarea>
                                    </label>
                                </li>
                                <li class="col-sm-12 no-margin">
                                    <button type="submit" value="submit" class="btn" id="btn_submit" onClick="proceed();">SEND NOW</button>
                                </li>
                            </ul>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Info -->
    <section class="contact-info padding-top-80 padding-bottom-80">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <h3 class="font-alegreya margin-top-30">Contact Us</h3>
                </div>
                <div class="col-md-8">
                    <ul class="row">
                        <li class="col-sm-4"> <i class="fa fa-map-marker"></i>
                            <h4 class="font-alegreya">Visit Us</h4>
                            <p>09 Infinity Seo Solution, Design Street,Victoria, Australia.</p>
                        </li>
                        <li class="col-sm-4"> <i class="fa fa-clock-o"></i>
                            <h4 class="font-alegreya">Working Hours</h4>
                            <p>Mon - Fri : 9:00 AM - 9:00 PM</p>
                            <p>Sat : 9:00 AM - 2:00 PM</p>
                        </li>
                        <li class="col-sm-4"> <i class="fa fa-phone"></i>
                            <h4 class="font-alegreya">Working Hours</h4>
                            <p>+91 123 456 78</p>
                            <p> +91 123 456 89</p>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
</div>
