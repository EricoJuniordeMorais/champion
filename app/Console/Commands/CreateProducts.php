<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\Product;

class CreateProducts extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */

    protected $signature = 'create:products';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Create all products from Champion';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $products = [
		["name" => "JustiFLY® Fly-A-Salt", "price" => "54.99", "image" => "https://commotion-assets.s3.amazonaws.com/customers/champion/products/fly-a-salt.jpg"],
                ["name" => "JustiFLY® Fly-A-Salt Block", "price" => "54.99", "image" => "https://commotion-assets.s3.amazonaws.com/customers/champion/products/fly-a-salt-block.jpg"],
                ["name" => "JustiFLY® Feedthrough 360 gram Add Pack (single)", "price" => "15.99", "image" => "https://commotion-assets.s3.amazonaws.com/customers/champion/products/feedthrough-360-gram-pack-single.jpg"],
                ["name" => "JustiFLY® Feedthrough 360 gram Add Pack (3-pack)", "price" => "47.97", "image" => "https://commotion-assets.s3.amazonaws.com/customers/champion/products/feedthrough-360.jpg"],
                ["name" => "JustiFLY® Feedthrough 360 gram Add Pack (6-pack)", "price" => "95.94", "image" => "https://commotion-assets.s3.amazonaws.com/customers/champion/products/feedthrough-360-gram-pack6.jpg"],
                ["name" => "JustiFLY® Feedthrough 360 gram Add Pack (12-pack)", "price" => "191.88", "image" => "https://commotion-assets.s3.amazonaws.com/customers/champion/products/feedthrough-360-gram-pack12.jpg"],
                ["name" => "JustiFLY® Liquid Feed 2.5 lb", "price" => "51.75", "image" => "https://commotion-assets.s3.amazonaws.com/customers/champion/products/liquid-feed-2.5lb.jpg"],
                ["name" => "JustiFLY® Liquid Feed 5 lb", "price" => "103.50", "image" => "https://commotion-assets.s3.amazonaws.com/customers/champion/products/liquid-feed-5lb.jpg"],
                ["name" => "JustiFLY® Feedthrough 3% 12 lbs. bag", "price" => "179.84", "image" => "https://commotion-assets.s3.amazonaws.com/customers/champion/products/feedthrough-12lbs.jpg"],
                ["name" => "JustiFLY® Feedthrough 3% 50 lbs. bag", "price" => "711.82", "image" => "https://commotion-assets.s3.amazonaws.com/customers/champion/products/feedthrough-50lbs.jpg"],
		["name" => "JustiFLY® 0.67% Diflubenzuron Premix - 50 lb", "price" => "140.00", "image" => "https://commotion-assets.s3.amazonaws.com/customers/champion/products/diflubenzuron-premix-50lb.jpg"]
	];

	$this->info('Creating products');
	$bar =	$this->output->createProgressBar(count($products));
	$bar->start();

	foreach($products as $index => $product){
		$newProduct = new Product($product);
		$newProduct->save();
		$bar->advance();
	}

	$bar->finish();
	$this->info('Products created');

    }
}
