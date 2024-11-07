<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use App\Models\writer;
use App\Models\category;
use App\Models\post;
use Illuminate\Support\Facades\Http;



class postSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create('id_ID');
        $users = writer::all();
        $category = category::all();

        $imgArr = [
            'img/data_science1.jpg',
            'img/data_science2.jpg',
            'img/data_science3.jpg',
            'img/network_security1.png',
            'img/network_security2.png',
            'img/network_security3.png'
        ];

        $titleArr = [
            'Unveiling the Power of Deep Learning: A Comprehensive Guide to Sentiment Analysis',
            'Forecasting the Future: Leveraging Time Series Analysis for Accurate Customer',
            'Safeguarding Your Business: Detecting Anomalies with Machine Learning to Prevent Fraud ',
            'The War on Ransomware: Cutting-Edge Strategies to Protect Your Data',
            'Building a Fortress: Implementing Zero Trust Architecture for Enhanced Network',
            'AI vs Cyber Threats: How Artificial Intelligence is Revolutionizing Cybersecurity'  
        ];
        
        
        $slugArr = [
            'deep-learing-sentiment-analysis', 
            'time-series-analysis',
            'detecting-machine-learning-fraud',
            'ransomware-cutting-edge-protect-data',
            'zero-trust-architecture-enhanced-network',
            'ai-cyber-artificial-intelligence-security'
        ];

        for ($i = 0; $i < 6; $i++) {
            
            post::create([
                'writers_id' => $users->random()->id, 
                'category_id' => $category->random()->id, 
                'title' => $titleArr[$i], 
                'slug' => $slugArr[$i],
                'body' => $faker->paragraphs(3, true), 
                'image' => $imgArr[$i],
                'view_count' => rand(0, 100),
            ]);
        }
    }
}
