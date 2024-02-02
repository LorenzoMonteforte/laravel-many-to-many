<?php

namespace Database\Seeders;

use App\Models\Portfolio;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PortfolioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $portfolios = [
            [
                "title" => "Portfolio di Lorenzo",
                "description" => "Portfolio magnifico di Lorenzo Monteforte",
                "thumb" => "https://s.tmimgcdn.com/scr/1200x750/339200/portfolio-di-architettura-portfolio-design-modello-portfolio-interni_339244-original.jpg"
            ],
            [
                "title" => "Porfolio di Nicole",
                "description" => "Porfolio magnifico di Nicole",
                "thumb" => "https://img.freepik.com/free-vector/gradient-interview-portfolio-template_23-2149220443.jpg",
                "type_id" => 1
            ],
        ];
        
        for($i=0; $i<sizeof($portfolios); $i++){
            $new_portfolio = new Portfolio();
            $new_portfolio->title = $portfolios[$i]["title"];
            $new_portfolio->description = $portfolios[$i]["description"];
            $new_portfolio->thumb = $portfolios[$i]["thumb"];
            if(isset($portfolios[$i]["type_id"])){
                $new_portfolio->type_id = $portfolios[$i]["type_id"];
            }
            $new_portfolio->save();
        }
    }
}
