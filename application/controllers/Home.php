<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function __construct()
    {
        error_reporting(E_ALL);
		ini_set('display_errors', 1);

        parent::__construct();
        $this->load->helper('url');
     
    }

	public function index()
	{
		error_reporting(E_ALL);

		ini_set('display_errors', 1);

		//end point for count data teacher and student
        $countData = $this->http_request("http://13.59.145.203:8000/v1/landing");
        
        //end point for article
        $article = $this->http_request("https://blog.maungaji.co.id/wp-json/wp/v2/posts?per_page=5");

        //end point for testimoni
        $testimoni = $this->http_request("https://cms.maungaji.co.id/testimoni/getTestimoni");
        
        //end point for faq
        $faq = $this->http_request("https://cms.maungaji.co.id/faq/getFaq");

		//end point for summary report
        $report = $this->http_request("https://cms.maungaji.co.id/report/getReport");

		//end point for price
		$price = $this->http_request("https://cms.maungaji.co.id/price/getPrice");

		//end point for video content 
		$video = $this->http_request("https://cms.maungaji.co.id/video/getVideo");

		//end point for maungaji partner
		$partner = $this->http_request("https://cms.maungaji.co.id/partner/getPartner");

		// change string JSON to array
		
		$x['count'] = json_decode($countData, TRUE);

		$x['article'] = json_decode($article, TRUE);

		$x['testimoni'] = json_decode($testimoni, TRUE);

		$x['faq'] = json_decode($faq, TRUE);

		$x['report'] = json_decode($report, TRUE);

		$x['price'] = json_decode($price, TRUE);

		$x['video'] = json_decode($video, TRUE);

		$x['partner'] = json_decode($partner, TRUE);
		
		//get url images
		$x['url'] = "https://cms.maungaji.co.id/images";
	
	    $this->load->view("header");
	    $this->load->view("home", $x);
	    $this->load->view("footer");
	}

	public function about()
	{
		$this->load->view('about.php');
	}

	public function contact()
	{
		$this->load->view('contact.php');
	}

	function http_request($url){
	    // persiapkan curl
	    $ch = curl_init(); 

	    // set url 
	    curl_setopt($ch, CURLOPT_URL, $url);
	    
	    // set user agent    
	    curl_setopt($ch,CURLOPT_USERAGENT,'Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:1.8.1.13) Gecko/20080311 Firefox/2.0.0.13');

	    // return the transfer as a string 
	    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); 

	    // $output contains the output string 
	    $output = curl_exec($ch); 

	    // tutup curl 
	    curl_close($ch);      

	    // mengembalikan hasil curl
	    return $output;
	}
}
