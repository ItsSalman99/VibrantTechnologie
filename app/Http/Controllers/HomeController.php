<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('frontend.index');
    }

    public function about()
    {
        return view('frontend.about');
    }

    public function services()
    {
        return view('frontend.services');
    }

    public function DigitalMarketingService()
    {
        return view('frontend.services.digital-marketing');
    }

    public function VideoProductionService()
    {
        return view('frontend.services.video-production');
    }

    public function GraphicsService()
    {
        return view('frontend.services.graphics-designing');
    }

    public function UxDesignService()
    {
        return view('frontend.services.ux-design');
    }

    public function WebsiteDesigningService()
    {
        return view('frontend.services.web-design');
    }

    public function WebsiteDevelopmentService()
    {
        return view('frontend.services.web-development');
    }

    public function AppDevelopmentService()
    {
        return view('frontend.services.app-development');
    }

    public function eCommerceService()
    {
        return view('frontend.services.ecommerce');
    }

    public function seoService()
    {
        return view('frontend.services.seo');
    }

    public function termsconditions()
    {
        return view('frontend.termsconditions');
    }

    public function privacy()
    {
        return view('frontend.privacypolicy');
    }

}
