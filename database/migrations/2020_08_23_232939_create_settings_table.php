<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSettingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('settings', function (Blueprint $table) {
            $table->id();
            $table->string('name')->default('Ashooo');
            $table->string('logo')->default('logo.png');
            $table->string('logo_login')->default('logo-login.png');
            $table->string('logo_login_white')->default('logo-login-white.png');
            $table->string('logo_header')->default('logo-header.png');
            $table->string('logo_header_white')->default('logo-header-white.png');
            $table->string('search')->default('search.png');
            $table->string('fav')->default('default.png');
            $table->string('motto')->default('service marketplace');

            $table->string('sms_username')->nullable()->comment('SMS API User name | alpha.net.bd/SMS');
            $table->string('sms_key')->nullable()->comment('SMS API User hash | alpha.net.bd/SMS');

            $table->integer('reset_sms_count')->nullable()->default(3)->comment('Per day available reset message');
            $table->string('reset_sms_template')->nullable()->default('আপনার নতুন পাসওয়ার্ডঃ ')->comment('Password sms template');
            $table->string('welcome_sms_template')->nullable()->default('স্বাগতম')->comment('Welcome sms template');

            $table->double('worker_activation_price')->default('50');
            $table->double('per_user_referral_price')->default('50');
            $table->double('admin_percent_on_worker_job')->default('10');

            $table->text('en_about')->default('About description ....');
            $table->text('bn_about')->default('এবাউট বিবরণ ....');
            $table->text('en_terms_and_condition')->default('Terms and conditions description ....');
            $table->text('bn_terms_and_condition')->default('টারমস অ্যান্ড কন্ডিটিওন বিবরণ ....');
            $table->text('en_privacy_policy')->default('Privacy and policy description ....');
            $table->text('bn_privacy_policy')->default('প্রাইভেসি এন্ড পলিসি বিবরণ ....');
            $table->text('en_faq')->default('FAQ description ....');
            $table->text('bn_faq')->default('এফ এ কিউ বিবরণ ....');
            $table->text('en_offer')->default('Offer description .....');
            $table->text('bn_offer')->default('অফারের বিবরণ .....');
            $table->text('en_referral_income_system')->default('Referral income description ....');
            $table->text('bn_referral_income_system')->default('রেফারেল ইনকাম বিবরণ ....');
            $table->string('customer_video_training_url')->default('Customer video training url ....');
            $table->string('worker_video_training_url')->default('Worker video training url ....');
            $table->string('membership_video_training_url')->default('Membership video training url ....');
            $table->text('en_help_line')->default('Help line description .....');
            $table->text('bn_help_line')->default('হেল্প লাইন বিবরণ .....');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('settings');
    }
}
