<?php
namespace Rigo\Controller;

use Rigo\Types\Sample;
use WP_REST_Response;

class SampleController{
    
    public function getHomeData(){
        return [
            'name' => 'Rigoberto'
        ];
    }
}
?>