<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Package;

class PackageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	\DB::table('packages')->delete();
    	
    	//Jobs
        $package = new Package;
        $package->module = 'Job';
		$package->package_for = 'Other';
		$package->type_of_package = 'packages_free';
		$package->slug = 'packages_free';
		$package->job_ads = '1';
		$package->publications_day = '14';
		$package->duration = '365';
		$package->cvs_view = '1';
		$package->employees_per_job_ad = '1';
		$package->no_of_boost = '0';
		$package->boost_no_of_days = '0';
		$package->price = '0';
		$package->start_up_fee = '0';
		$package->is_published = 1;
		$package->published_at = date('Y-m-d');
		$package->save();

		$package = new Package;
        $package->module = 'Job';
		$package->package_for = 'Other';
		$package->type_of_package = 'packages_basic';
		$package->slug = 'packages_basic';
		$package->job_ads = '3';
		$package->publications_day = '21';
		$package->duration = '60';
		$package->cvs_view = '5';
		$package->employees_per_job_ad = '1';
		$package->no_of_boost = '5';
		$package->boost_no_of_days = '3';
		$package->price = '1900';
		$package->start_up_fee = '0';
		$package->is_published = 1;
		$package->published_at = date('Y-m-d');
		$package->save();

		$package = new Package;
        $package->module = 'Job';
		$package->package_for = 'Other';
		$package->type_of_package = 'packages_standard';
		$package->slug = 'packages_standard';
		$package->job_ads = '5';
		$package->publications_day = '21';
		$package->duration = '60';
		$package->cvs_view = '7';
		$package->employees_per_job_ad = '2';
		$package->no_of_boost = '5';
		$package->boost_no_of_days = '5';
		$package->price = '2900';
		$package->start_up_fee = '0';
		$package->is_published = 1;
		$package->published_at = date('Y-m-d');
		$package->save();

		$package = new Package;
        $package->module = 'Job';
		$package->package_for = 'Other';
		$package->type_of_package = 'packages_premium';
		$package->slug = 'packages_premium';
		$package->job_ads = '10';
		$package->publications_day = '21';
		$package->duration = '90';
		$package->cvs_view = '10';
		$package->employees_per_job_ad = '5';
		$package->no_of_boost = '5';
		$package->boost_no_of_days = '5';
		$package->price = '6900';
		$package->start_up_fee = '0';
		$package->is_published = 1;
		$package->published_at = date('Y-m-d');
		$package->save();



		//Product
		$package = new Package;
        $package->module = 'Product';
		$package->package_for = 'Other';
		$package->type_of_package = 'packages_free';
		$package->slug = 'packages_free';
		$package->duration = '365';
		$package->subscription = '0';
		$package->commission_per_sale = '14.9';
		$package->number_of_service = '-1';
		$package->number_of_product = '-1';
		$package->number_of_book = '-1';
		$package->no_of_boost = '0';
		$package->boost_no_of_days = '0';
		$package->most_popular = '0';
		$package->most_popular_no_of_days = '0';
		$package->top_selling = '0';
		$package->top_selling_no_of_days = '0';
		$package->start_up_fee = '799';
		$package->notice_month = '0';
		$package->is_published = 1;
		$package->published_at = date('Y-m-d');
		$package->save();

		$package = new Package;
        $package->module = 'Product';
		$package->package_for = 'Other';
		$package->type_of_package = 'packages_basic';
		$package->slug = 'packages_basic';
		$package->duration = '60';
		$package->subscription = '459';
		$package->commission_per_sale = '12.9';
		$package->number_of_service = '-1';
		$package->number_of_product = '-1';
		$package->number_of_book = '-1';
		$package->no_of_boost = '0';
		$package->boost_no_of_days = '0';
		$package->most_popular = '0';
		$package->most_popular_no_of_days = '0';
		$package->top_selling = '0';
		$package->top_selling_no_of_days = '0';
		$package->start_up_fee = '799';
		$package->notice_month = '1';
		$package->is_published = 1;
		$package->published_at = date('Y-m-d');
		$package->save();

		$package = new Package;
        $package->module = 'Product';
		$package->package_for = 'Other';
		$package->type_of_package = 'packages_standard';
		$package->slug = 'packages_standard';
		$package->duration = '60';
		$package->subscription = '589';
		$package->commission_per_sale = '9.9';
		$package->number_of_service = '-1';
		$package->number_of_product = '-1';
		$package->number_of_book = '-1';
		$package->no_of_boost = '5';
		$package->boost_no_of_days = '3';
		$package->most_popular = '3';
		$package->most_popular_no_of_days = '3';
		$package->top_selling = '3';
		$package->top_selling_no_of_days = '3';
		$package->start_up_fee = '799';
		$package->notice_month = '1';
		$package->is_published = 1;
		$package->published_at = date('Y-m-d');
		$package->save();

		$package = new Package;
        $package->module = 'Product';
		$package->package_for = 'Other';
		$package->type_of_package = 'packages_premium';
		$package->slug = 'packages_premium';
		$package->duration = '90';
		$package->subscription = '699';
		$package->commission_per_sale = '5.9';
		$package->number_of_service = '-1';
		$package->number_of_product = '-1';
		$package->number_of_book = '-1';
		$package->no_of_boost = '10';
		$package->boost_no_of_days = '10';
		$package->most_popular = '10';
		$package->most_popular_no_of_days = '10';
		$package->top_selling = '10';
		$package->top_selling_no_of_days = '10';
		$package->start_up_fee = '0';
		$package->notice_month = '1';
		$package->is_published = 1;
		$package->published_at = date('Y-m-d');
		$package->save();

		//Service
		$package = new Package;
        $package->module = 'Service';
		$package->package_for = 'Other';
		$package->type_of_package = 'packages_free';
		$package->slug = 'packages_free';
		$package->duration = '365';
		$package->subscription = '0';
		$package->commission_per_sale = '14.9';
		$package->number_of_service = '-1';
		$package->number_of_product = '-1';
		$package->number_of_book = '-1';
		$package->no_of_boost = '0';
		$package->boost_no_of_days = '0';
		$package->most_popular = '0';
		$package->most_popular_no_of_days = '0';
		$package->top_selling = '0';
		$package->top_selling_no_of_days = '0';
		$package->start_up_fee = '799';
		$package->notice_month = '0';
		$package->is_published = 1;
		$package->published_at = date('Y-m-d');
		$package->save();

		$package = new Package;
        $package->module = 'Service';
		$package->package_for = 'Other';
		$package->type_of_package = 'packages_basic';
		$package->slug = 'packages_basic';
		$package->duration = '60';
		$package->subscription = '459';
		$package->commission_per_sale = '12.9';
		$package->number_of_service = '-1';
		$package->number_of_product = '-1';
		$package->number_of_book = '-1';
		$package->no_of_boost = '0';
		$package->boost_no_of_days = '0';
		$package->most_popular = '0';
		$package->most_popular_no_of_days = '0';
		$package->top_selling = '0';
		$package->top_selling_no_of_days = '0';
		$package->start_up_fee = '799';
		$package->notice_month = '1';
		$package->is_published = 1;
		$package->published_at = date('Y-m-d');
		$package->save();

		$package = new Package;
        $package->module = 'Service';
		$package->package_for = 'Other';
		$package->type_of_package = 'packages_standard';
		$package->slug = 'packages_standard';
		$package->duration = '60';
		$package->subscription = '589';
		$package->commission_per_sale = '9.9';
		$package->number_of_service = '-1';
		$package->number_of_product = '-1';
		$package->number_of_book = '-1';
		$package->no_of_boost = '5';
		$package->boost_no_of_days = '3';
		$package->most_popular = '3';
		$package->most_popular_no_of_days = '3';
		$package->top_selling = '3';
		$package->top_selling_no_of_days = '3';
		$package->start_up_fee = '799';
		$package->notice_month = '1';
		$package->is_published = 1;
		$package->published_at = date('Y-m-d');
		$package->save();

		$package = new Package;
        $package->module = 'Service';
		$package->package_for = 'Other';
		$package->type_of_package = 'packages_premium';
		$package->slug = 'packages_premium';
		$package->duration = '90';
		$package->subscription = '699';
		$package->commission_per_sale = '5.9';
		$package->number_of_service = '-1';
		$package->number_of_product = '-1';
		$package->number_of_book = '-1';
		$package->no_of_boost = '10';
		$package->boost_no_of_days = '10';
		$package->most_popular = '10';
		$package->most_popular_no_of_days = '10';
		$package->top_selling = '10';
		$package->top_selling_no_of_days = '10';
		$package->start_up_fee = '0';
		$package->notice_month = '1';
		$package->is_published = 1;
		$package->published_at = date('Y-m-d');
		$package->save();

		//Book
		$package = new Package;
        $package->module = 'Book';
		$package->package_for = 'Other';
		$package->type_of_package = 'packages_free';
		$package->slug = 'packages_free';
		$package->duration = '365';
		$package->subscription = '0';
		$package->commission_per_sale = '14.9';
		$package->number_of_service = '-1';
		$package->number_of_product = '-1';
		$package->number_of_book = '-1';
		$package->no_of_boost = '0';
		$package->boost_no_of_days = '0';
		$package->most_popular = '0';
		$package->most_popular_no_of_days = '0';
		$package->top_selling = '0';
		$package->top_selling_no_of_days = '0';
		$package->start_up_fee = '799';
		$package->notice_month = '0';
		$package->is_published = 1;
		$package->published_at = date('Y-m-d');
		$package->save();

		$package = new Package;
        $package->module = 'Book';
		$package->package_for = 'Other';
		$package->type_of_package = 'packages_basic';
		$package->slug = 'packages_basic';
		$package->duration = '60';
		$package->subscription = '459';
		$package->commission_per_sale = '12.9';
		$package->number_of_service = '-1';
		$package->number_of_product = '-1';
		$package->number_of_book = '-1';
		$package->no_of_boost = '0';
		$package->boost_no_of_days = '0';
		$package->most_popular = '0';
		$package->most_popular_no_of_days = '0';
		$package->top_selling = '0';
		$package->top_selling_no_of_days = '0';
		$package->start_up_fee = '799';
		$package->notice_month = '1';
		$package->is_published = 1;
		$package->published_at = date('Y-m-d');
		$package->save();

		$package = new Package;
        $package->module = 'Book';
		$package->package_for = 'Other';
		$package->type_of_package = 'packages_standard';
		$package->slug = 'packages_standard';
		$package->duration = '60';
		$package->subscription = '589';
		$package->commission_per_sale = '9.9';
		$package->number_of_service = '-1';
		$package->number_of_product = '-1';
		$package->number_of_book = '-1';
		$package->no_of_boost = '5';
		$package->boost_no_of_days = '3';
		$package->most_popular = '3';
		$package->most_popular_no_of_days = '3';
		$package->top_selling = '3';
		$package->top_selling_no_of_days = '3';
		$package->start_up_fee = '799';
		$package->notice_month = '1';
		$package->is_published = 1;
		$package->published_at = date('Y-m-d');
		$package->save();

		$package = new Package;
        $package->module = 'Book';
		$package->package_for = 'Other';
		$package->type_of_package = 'packages_premium';
		$package->slug = 'packages_premium';
		$package->duration = '90';
		$package->subscription = '699';
		$package->commission_per_sale = '5.9';
		$package->number_of_service = '-1';
		$package->number_of_product = '-1';
		$package->number_of_book = '-1';
		$package->no_of_boost = '10';
		$package->boost_no_of_days = '10';
		$package->most_popular = '10';
		$package->most_popular_no_of_days = '10';
		$package->top_selling = '10';
		$package->top_selling_no_of_days = '10';
		$package->start_up_fee = '0';
		$package->notice_month = '1';
		$package->is_published = 1;
		$package->published_at = date('Y-m-d');
		$package->save();

		//Contest
		$package = new Package;
        $package->module = 'Contest';
		$package->package_for = 'Other';
		$package->type_of_package = 'packages_free';
		$package->slug = 'packages_free';
		$package->duration = '365';
		$package->price = '0';
		$package->number_of_contest = '0';
		$package->number_of_event = '0';
		$package->commission_per_sale = '9.9';
		$package->locations = '1';
		$package->range_of_age = null;
		$package->organization = '0';
		$package->attendees = '100';
		$package->cost_for_each_attendee = 0;
		$package->top_up_fee = '0';
		$package->is_published = 1;
		$package->published_at = date('Y-m-d');
		$package->save();

		$package = new Package;
        $package->module = 'Contest';
		$package->package_for = 'Other';
		$package->type_of_package = 'packages_basic';
		$package->slug = 'packages_basic';
		$package->duration = '60';
		$package->price = '5900';
		$package->number_of_contest = '2';
		$package->number_of_event = '2';
		$package->commission_per_sale = '0';
		$package->locations = '1';
		$package->range_of_age = 1;
		$package->organization = '1';
		$package->attendees = '220';
		$package->cost_for_each_attendee = 1;
		$package->top_up_fee = '0';
		$package->is_published = 1;
		$package->published_at = date('Y-m-d');
		$package->save();

		$package = new Package;
        $package->module = 'Contest';
		$package->package_for = 'Other';
		$package->type_of_package = 'packages_standard';
		$package->slug = 'packages_standard';
		$package->duration = '60';
		$package->price = '9900';
		$package->number_of_contest = '5';
		$package->number_of_event = '5';
		$package->commission_per_sale = '0';
		$package->locations = '2';
		$package->range_of_age = 1;
		$package->organization = '2';
		$package->attendees = '450';
		$package->cost_for_each_attendee = 1;
		$package->top_up_fee = '0';
		$package->is_published = 1;
		$package->published_at = date('Y-m-d');
		$package->save();

		$package = new Package;
        $package->module = 'Contest';
		$package->package_for = 'Other';
		$package->type_of_package = 'packages_premium';
		$package->slug = 'packages_premium';
		$package->duration = '90';
		$package->price = '15000';
		$package->number_of_contest = '10';
		$package->number_of_event = '10';
		$package->commission_per_sale = '0';
		$package->locations = '5';
		$package->range_of_age = 1;
		$package->organization = '5';
		$package->attendees = '1000';
		$package->cost_for_each_attendee = 1;
		$package->top_up_fee = '0';
		$package->is_published = 1;
		$package->published_at = date('Y-m-d');
		$package->save();

		///////////////////////////////////////////////////////////////
		//Student Package
		//Product
		$package = new Package;
        $package->module = 'Product';
		$package->package_for = 'Student';
		$package->type_of_package = 'packages_free';
		$package->slug = 'packages_free';
		$package->duration = '365';
		$package->subscription = '0';
		$package->commission_per_sale = '9.9';
		$package->number_of_service = '-1';
		$package->number_of_product = '-1';
		$package->number_of_book = '-1';
		$package->no_of_boost = '0';
		$package->boost_no_of_days = '0';
		$package->most_popular = '0';
		$package->most_popular_no_of_days = '0';
		$package->top_selling = '0';
		$package->top_selling_no_of_days = '0';
		$package->top_up_fee = '0';
		$package->is_published = 1;
		$package->published_at = date('Y-m-d');
		$package->save();

		$package = new Package;
        $package->module = 'Product';
		$package->package_for = 'Student';
		$package->type_of_package = 'packages_basic';
		$package->slug = 'packages_basic';
		$package->duration = '60';
		$package->subscription = '89';
		$package->commission_per_sale = '7';
		$package->number_of_product = '3';
		$package->no_of_boost = '1';
		$package->boost_no_of_days = '3';
		$package->most_popular = '0';
		$package->most_popular_no_of_days = '0';
		$package->top_selling = '0';
		$package->top_selling_no_of_days = '0';
		$package->top_up_fee = '15';
		$package->is_published = 1;
		$package->published_at = date('Y-m-d');
		$package->save();

		$package = new Package;
        $package->module = 'Product';
		$package->package_for = 'Student';
		$package->type_of_package = 'packages_standard';
		$package->slug = 'packages_standard';
		$package->duration = '60';
		$package->subscription = '129';
		$package->commission_per_sale = '7';
		$package->number_of_product = '5';
		$package->no_of_boost = '1';
		$package->boost_no_of_days = '3';
		$package->most_popular = '3';
		$package->most_popular_no_of_days = '3';
		$package->top_selling = '3';
		$package->top_selling_no_of_days = '3';
		$package->top_up_fee = '15';
		$package->is_published = 1;
		$package->published_at = date('Y-m-d');
		$package->save();

		$package = new Package;
        $package->module = 'Product';
		$package->package_for = 'Student';
		$package->type_of_package = 'packages_premium';
		$package->slug = 'packages_premium';
		$package->duration = '90';
		$package->subscription = '189';
		$package->commission_per_sale = '7';
		$package->number_of_product = '10';
		$package->no_of_boost = '1';
		$package->boost_no_of_days = '3';
		$package->most_popular = '10';
		$package->most_popular_no_of_days = '10';
		$package->top_selling = '10';
		$package->top_selling_no_of_days = '10';
		$package->top_up_fee = '10';
		$package->is_published = 1;
		$package->published_at = date('Y-m-d');
		$package->save();

		//Service
		$package = new Package;
        $package->module = 'Service';
		$package->package_for = 'Student';
		$package->type_of_package = 'packages_free';
		$package->slug = 'packages_free';
		$package->duration = '365';
		$package->subscription = '0';
		$package->commission_per_sale = '9.9';
		$package->number_of_service = '-1';
		$package->number_of_product = '-1';
		$package->number_of_book = '-1';
		$package->no_of_boost = '0';
		$package->boost_no_of_days = '0';
		$package->most_popular = '0';
		$package->most_popular_no_of_days = '0';
		$package->top_selling = '0';
		$package->top_selling_no_of_days = '0';
		$package->top_up_fee = '0';
		$package->is_published = 1;
		$package->published_at = date('Y-m-d');
		$package->save();

		$package = new Package;
        $package->module = 'Service';
		$package->package_for = 'Student';
		$package->type_of_package = 'packages_basic';
		$package->slug = 'packages_basic';
		$package->duration = '60';
		$package->subscription = '89';
		$package->commission_per_sale = '7';
		$package->number_of_product = '3';
		$package->no_of_boost = '1';
		$package->boost_no_of_days = '3';
		$package->most_popular = '0';
		$package->most_popular_no_of_days = '0';
		$package->top_selling = '0';
		$package->top_selling_no_of_days = '0';
		$package->top_up_fee = '15';
		$package->is_published = 1;
		$package->published_at = date('Y-m-d');
		$package->save();

		$package = new Package;
        $package->module = 'Service';
		$package->package_for = 'Student';
		$package->type_of_package = 'packages_standard';
		$package->slug = 'packages_standard';
		$package->duration = '60';
		$package->subscription = '129';
		$package->commission_per_sale = '7';
		$package->number_of_product = '5';
		$package->no_of_boost = '1';
		$package->boost_no_of_days = '3';
		$package->most_popular = '3';
		$package->most_popular_no_of_days = '3';
		$package->top_selling = '3';
		$package->top_selling_no_of_days = '3';
		$package->top_up_fee = '15';
		$package->is_published = 1;
		$package->published_at = date('Y-m-d');
		$package->save();

		$package = new Package;
        $package->module = 'Service';
		$package->package_for = 'Student';
		$package->type_of_package = 'packages_premium';
		$package->slug = 'packages_premium';
		$package->duration = '90';
		$package->subscription = '189';
		$package->commission_per_sale = '7';
		$package->number_of_product = '10';
		$package->no_of_boost = '1';
		$package->boost_no_of_days = '3';
		$package->most_popular = '10';
		$package->most_popular_no_of_days = '10';
		$package->top_selling = '10';
		$package->top_selling_no_of_days = '10';
		$package->top_up_fee = '10';
		$package->is_published = 1;
		$package->published_at = date('Y-m-d');
		$package->save();
  
		//Contest
		$package = new Package;
        $package->module = 'Contest';
		$package->package_for = 'Student';
		$package->type_of_package = 'packages_free';
		$package->slug = 'packages_free';
		$package->duration = '365';
		$package->price = '0';
		$package->number_of_contest = '0';
		$package->number_of_event = '0';
		$package->commission_per_sale = '9.9';
		$package->locations = '1';
		$package->range_of_age = null;
		$package->organization = '0';
		$package->attendees = '100';
		$package->cost_for_each_attendee = 0;
		$package->top_up_fee = '0';
		$package->is_published = 1;
		$package->published_at = date('Y-m-d');
		$package->save();

		$package = new Package;
        $package->module = 'Contest';
		$package->package_for = 'Student';
		$package->type_of_package = 'packages_basic';
		$package->slug = 'packages_basic';
		$package->duration = '60';
		$package->price = '149';
		$package->number_of_contest = '1';
		$package->number_of_event = '1';
		$package->commission_per_sale = '0';
		$package->locations = '1';
		$package->range_of_age = 1;
		$package->organization = '1';
		$package->attendees = '12';
		$package->cost_for_each_attendee = 1;
		$package->top_up_fee = '0';
		$package->is_published = 1;
		$package->published_at = date('Y-m-d');
		$package->save();

		$package = new Package;
        $package->module = 'Contest';
		$package->package_for = 'Student';
		$package->type_of_package = 'packages_standard';
		$package->slug = 'packages_standard';
		$package->duration = '60';
		$package->price = '249';
		$package->number_of_contest = '2';
		$package->number_of_event = '2';
		$package->commission_per_sale = '0';
		$package->locations = '2';
		$package->range_of_age = 1;
		$package->organization = '2';
		$package->attendees = '25';
		$package->cost_for_each_attendee = 1;
		$package->top_up_fee = '0';
		$package->is_published = 1;
		$package->published_at = date('Y-m-d');
		$package->save();

		$package = new Package;
        $package->module = 'Contest';
		$package->package_for = 'Student';
		$package->type_of_package = 'packages_premium';
		$package->slug = 'packages_premium';
		$package->duration = '90';
		$package->price = '549';
		$package->number_of_contest = '5';
		$package->number_of_event = '5';
		$package->commission_per_sale = '0';
		$package->locations = '5';
		$package->range_of_age = 1;
		$package->organization = '5';
		$package->attendees = '75';
		$package->cost_for_each_attendee = 1;
		$package->top_up_fee = '0';
		$package->is_published = 1;
		$package->published_at = date('Y-m-d');
		$package->save();

		//Book
		$package = new Package;
        $package->module = 'Book';
		$package->package_for = 'Student';
		$package->type_of_package = 'packages_free';
		$package->slug = 'packages_free';
		$package->duration = '365';
		$package->subscription = '0';
		$package->commission_per_sale = '14.9';
		$package->number_of_service = '-1';
		$package->number_of_product = '-1';
		$package->number_of_book = '-1';
		$package->no_of_boost = '0';
		$package->boost_no_of_days = '0';
		$package->most_popular = '0';
		$package->most_popular_no_of_days = '0';
		$package->top_selling = '0';
		$package->top_selling_no_of_days = '0';
		$package->start_up_fee = '0';
		$package->notice_month = '0';
		$package->is_published = 1;
		$package->published_at = date('Y-m-d');
		$package->save();

		$package = new Package;
        $package->module = 'Book';
		$package->package_for = 'Student';
		$package->type_of_package = 'packages_basic';
		$package->slug = 'packages_basic';
		$package->duration = '60';
		$package->subscription = '459';
		$package->commission_per_sale = '12.9';
		$package->number_of_service = '-1';
		$package->number_of_product = '-1';
		$package->number_of_book = '-1';
		$package->no_of_boost = '0';
		$package->boost_no_of_days = '0';
		$package->most_popular = '0';
		$package->most_popular_no_of_days = '0';
		$package->top_selling = '0';
		$package->top_selling_no_of_days = '0';
		$package->start_up_fee = '0';
		$package->notice_month = '1';
		$package->is_published = 1;
		$package->published_at = date('Y-m-d');
		$package->save();

		$package = new Package;
        $package->module = 'Book';
		$package->package_for = 'Student';
		$package->type_of_package = 'packages_standard';
		$package->slug = 'packages_standard';
		$package->duration = '60';
		$package->subscription = '589';
		$package->commission_per_sale = '9.9';
		$package->number_of_service = '-1';
		$package->number_of_product = '-1';
		$package->number_of_book = '-1';
		$package->no_of_boost = '5';
		$package->boost_no_of_days = '3';
		$package->most_popular = '3';
		$package->most_popular_no_of_days = '3';
		$package->top_selling = '3';
		$package->top_selling_no_of_days = '3';
		$package->start_up_fee = '0';
		$package->notice_month = '1';
		$package->is_published = 1;
		$package->published_at = date('Y-m-d');
		$package->save();

		$package = new Package;
        $package->module = 'Book';
		$package->package_for = 'Student';
		$package->type_of_package = 'packages_premium';
		$package->slug = 'packages_premium';
		$package->duration = '90';
		$package->subscription = '699';
		$package->commission_per_sale = '5.9';
		$package->number_of_service = '-1';
		$package->number_of_product = '-1';
		$package->number_of_book = '-1';
		$package->no_of_boost = '10';
		$package->boost_no_of_days = '10';
		$package->most_popular = '10';
		$package->most_popular_no_of_days = '10';
		$package->top_selling = '10';
		$package->top_selling_no_of_days = '10';
		$package->start_up_fee = '0';
		$package->notice_month = '1';
		$package->is_published = 1;
		$package->published_at = date('Y-m-d');
		$package->save();


		/*
		$package = new Package;
        $package->module = 'Job';
		$package->package_for = 'Other';
		$package->type_of_package = 'packages_free';
		$package->slug = 'packages_free';
		$package->job_ads = '1';
		$package->publications_day = '14';
		$package->duration = '30';
		$package->cvs_view = '1';
		$package->employees_per_job_ad = '1';
		$package->no_of_boost = '0';
		$package->boost_no_of_days = '0';
		$package->most_popular = '10';
		$package->most_popular_no_of_days = '10';
		$package->top_selling = '10';
		$package->top_selling_no_of_days = '10';
		$package->price = '0';
		$package->start_up_fee = '0';
		$package->subscription = '';
		$package->commission_per_sale = '';
		$package->number_of_product = '';
		$package->number_of_service = '';
		$package->notice_month = '';
		$package->locations = '';
		$package->range_of_age = '';
		$package->organization = '';
		$package->attendees = '';
		$package->cost_for_each_attendee = '';
		$package->top_up_fee = '';
		$package->is_published = '';
		$package->published_at = '';
		$package->save();
		*/

    }
}
