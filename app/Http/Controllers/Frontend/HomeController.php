<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Faq;
use App\Models\Brand;
use App\Models\Order;
use App\Models\BlogTag;
use App\Models\Product;
use App\Models\Setting;
use App\Models\BlogPost;
use App\Models\Category;
use App\Models\DealBanner;
use App\Models\PageBanner;
use App\Models\BlogCategory;
use Illuminate\Http\Request;
use App\Models\PrivacyPolicy;
use App\Models\ShippingMethod;
use App\Models\TermsAndCondition;
use App\Http\Controllers\Controller;
use App\Models\Intern;
use App\Models\Researcher;
use App\Models\ResearchPaper;
use App\Models\Service;
use App\Models\TeamMember;
use App\Models\Training;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Session;
use Gloudemans\Shoppingcart\Facades\Cart;

class HomeController extends Controller
{
    public function home()
    {

        $data = [

            'sliders'                  => PageBanner::active()->where('page_name', 'home_slider')->latest('id')->get(),
            'slider'                   => PageBanner::active()->where('page_name', 'home_slider')->latest('id')->first(),
            'home_slider_bottom_first' => PageBanner::active()->where('page_name', 'home_slider_bottom_first')->latest('id')->first(),
            'blog_posts'               => BlogPost::active()->inRandomOrder()->get(),
            'blog'                     => BlogPost::inRandomOrder()->active()->first(),
            'interns'                  => Intern::orderBy('order', 'ASC')->where('status', 'active')->get(),
        ];
        // dd($data['deal_products']);
        return view('frontend.pages.home', $data);
    }

    public function contact()
    {
        $data = [
            'banner'  => PageBanner::active()->where('page_name', 'contact')->latest('id')->first(),
        ];
        return view('frontend.pages.contact', $data);
    }
    public function aboutUs()
    {
        $data = [
            'about'       => BlogPost::latest('id')->where('status', 'publish')->get(),
            'researchers' => Researcher::orderBy('order', 'ASC')->where('status', 'active')->get(),
            'teams'       => TeamMember::orderBy('order', 'ASC')->where('status', 'active')->get(),
            'banner'      => PageBanner::active()->where('page_name', 'about')->latest('id')->first(),
        ];
        return view('frontend.pages.aboutUs', $data);
    }
    public function team()
    {
        $data = [
            'banner'   => PageBanner::active()->where('page_name', 'team')->latest('id')->first(),
            'teams'    => TeamMember::orderBy('order', 'ASC')->where('status', 'active')->get(),
        ];
        return view('frontend.pages.team', $data);
    }
    public function researchPaper()
    {
        $data = [
            'papers'     => ResearchPaper::latest('date')->where('status', 'active')->get(),
            'banner'     => PageBanner::active()->where('page_name', 'paper')->latest('id')->first(),
        ];
        return view('frontend.pages.researchPaper', $data);
    }
    public function returnPolicy()
    {
        return view('frontend.pages.returnPolicy');
    }
    public function privacyPolicy()
    {
        $data = [
            'banner'  => PageBanner::active()->where('page_name', 'privacy')->latest('id')->first(),
            'privacy' => PrivacyPolicy::latest('id')->where('status', 'active')->first(),
        ];
        return view('frontend.pages.privacyPolicy', $data);
    }
    public function termsCondition()
    {
        $data = [
            'banner'  => PageBanner::active()->where('page_name', 'terms')->latest('id')->first(),
            'terms'   => TermsAndCondition::latest('id')->where('status', 'active')->first(),
        ];
        return view('frontend.pages.termsCondition', $data);
    }
    public function faq()
    {
        $data = [
            'banner'  => PageBanner::active()->where('page_name', 'faq')->latest('id')->first(),
            'faqs'    => Faq::orderBy('order', 'asc')->where('status', 'active')->get(),
        ];
        return view('frontend.pages.faq', $data);
    }
    public function training()
    {
        $data = [
            'banner'  => PageBanner::active()->where('page_name', 'faq')->latest('id')->first(),
            'faqs'    => Faq::orderBy('order', 'asc')->where('status', 'active')->get(),
        ];
        return view('frontend.pages.training', $data);
    }
    public function trainingDetails($slug)
    {
        // $data = [
        //     'training'    => Training::where('slug', $slug)->first(),
        //     'banner'      => PageBanner::active()->where('page_name', 'faq')->latest('id')->first(),
        //     'faqs'        => Faq::orderBy('order', 'asc')->where('status', 'active')->get(),
        // ];
        return view('frontend.pages.trainingDetails');
        // return view('frontend.pages.trainingDetails', $data);
    }
    public function services()
    {
        $data = [
            'banner'         => PageBanner::active()->where('page_name', 'service')->latest('id')->first(),
            // 'services'       => Service::latest('id')->where('status', 'active')->get(),
        ];
        return view('frontend.pages.service.allservices', $data);
    }
    public function allBlog()
    {
        // $user
        $data = [
            'banner'         => PageBanner::active()->where('page_name', 'blog')->latest('id')->first(),
            'blog_posts'     => BlogPost::latest('id')->where('status', 'publish')->paginate(8),
            'blog_categorys' => BlogCategory::latest('id')->where('status', 'active')->get(),
            'blog_tags'      => BlogPost::where('status', 'publish')->get()->pluck('tags')->flatten()->unique(),
            // 'user'           =>
        ];
        return view('frontend.pages.blog.allBlog', $data);
    }
    public function blogDetails($slug)
    {
        $data = [
            'blog'           => BlogPost::where('slug', $slug)->first(),
            'blog_posts'     => BlogPost::inRandomOrder()->latest('id')->where('status', 'publish')->where('featured', '1')->where('slug', '!=', $slug)->limit(5)->get(),
            'blog_categorys' => BlogCategory::with('blogPost')->latest('id')->where('status', 'active')->get(),
            'blog_tags'      => BlogPost::where('status', 'publish')->get()->pluck('tags')->flatten()->unique(),
            'next_post'      => BlogPost::where('status', 'publish')->where('id', '>', BlogPost::where('slug', $slug)->first()->id)->min('id'),
            'prev_post'      => BlogPost::where('status', 'publish')->where('id', '<', BlogPost::where('slug', $slug)->first()->id)->max('id'),
        ];
        return view('frontend.pages.blog.blogDetails', $data);
    }





    public function globalSearch(Request $request)
    {
        $query = $request->get('term', '');
        $data['products'] = Product::join('brands', 'products.brand_id', '=', 'brands.id')
            ->where('products.name', 'LIKE', '%' . $query . '%')
            ->where('products.status', 'published')
            ->where('brands.status', 'active')
            ->limit(10)
            ->get(['products.id', 'products.name', 'products.slug', 'products.thumbnail', 'products.box_price', 'products.box_discount_price', 'products.box_stock', 'products.short_description']);

        $data['categorys'] = Category::where('name', 'LIKE', '%' . $query . '%')->limit(2)->get(['id', 'name', 'slug']);
        $data['brands'] = Brand::where('name', 'LIKE', '%' . $query . '%')->where('status', 'active')->limit(5)->get(['id', 'name', 'slug']);
        $data['blogs'] = BlogPost::where('title', 'LIKE', '%' . $query . '%')->limit(5)->get(['id', 'title', 'slug']);

        return response()->json(view('frontend.layouts.search', $data)->render());
    } // end method


}
