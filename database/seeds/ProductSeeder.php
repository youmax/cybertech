<?php

use App\Models\Product;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    protected function products()
    {
        return [
            [
                "name" => "安全評估服務",
                "detail" => "分析現有資訊架構、縮小入侵來源、強化異常事件監控，主機及網頁漏洞週期性掃描，為企業安全做出最好的評估。",
            ],
            [
                "name" => "架構安全規劃",
                "detail" => "熟悉各類IT架構規劃，提供安全的傳統及雲端環境建置。",
            ],
            [
                "name" => "雲端維運管理",
                "detail" => "AWS, GCP, AliCloud 專業服務的維運管理。",
            ],
            [
                "name" => "雲端數據分析",
                "detail" => "分析系統為企業帶來全方位洞察，協助您在繁雜的數位資訊洪流中找出潛在的成長機遇，在繁雜的洪流資訊中精鍊出潛在的黃金洞察。",
            ],
            [
                "name" => "安全系統部署",
                "detail" => "為倍受黑客攻擊的高危行業客戶提供高級威脅誘捕與溯源系統，幫助用戶追蹤溯源，定位攻擊者自然人身份",
            ],
        ];
    }
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        foreach ($this->products() as $p) {
            Product::create($p);
        }
    }
}
