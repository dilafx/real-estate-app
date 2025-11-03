<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('properties', function (Blueprint $table) {
            $table->id();
            //basic information
            $table->string('title');
            $table->text('description');
            $table->enum('type',allowed:['apartment','house','condo','land','townhouse','villa','commercial']);
            $table->enum('listing_type',allowed:['sale','rent'])->default('sale');
            $table->enum('status',allowed:['avilable','sold','pending','draft','rented'])->default('available');

            //pricing
            $table->decimal('price',total:12,places:2);
            $table->decimal('price_per_sqft',total:8,places:2)->nullable();

            //location
            $table->string('address');
            $table->string('city');
            $table->string('state');
            $table->string('country')->default('Sri Lanka');
            $table->string('postal_code')->nullable();
            $table->decimal('latitude',total:10,places:8)->nullable();
            $table->decimal('longitude',total:11,places:8)->nullable();

            //property Details
            $table->integer('bedroms')->nullable();
            $table->integer('bathrooms')->nullable();
            $table->integer('total_area')->nullable();
            $table->integer('built_year')->nullable();
            $table->boolean('furnished')->default(value:false);
            $table->boolean('parking')->default(value:false);
            $table->integer('parking_spaces')->nullable();

            //Features(JSON for flexibility)
            $table->json('features')->nullable();
            $table->json('images')->nullable();

            //SEO
            $table->string('slug')->unique();
            $table->string('meta_title')->nullable();
            $table->text('meta_description')->nullable();

            //Visibility
            $table->boolean('is_featured')->default(value:false);
            $table->boolean('is_active')->default(value:true);
            $table->timestamp('featured_until')->nullable();

            //contact Information
            $table->string('contact_name');
            $table->string('contact_phone');
            $table->string('contact_email');
            $table->timestamps();

            //indexes
            $table->index(['type','listing_type','status']);
            $table->index(['city','state',]);
            $table->index(['price','listing_type']);
            $table->index('is_featured');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('properties');
    }
};
