<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\General;
use App\Page;


class AdminController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index()
    {
    	
    	$general = General::find(1);

	     return view('admin.index', ['general' => $general] );
    }
    
    public function theme_options($value='')
    {
        
        $general = General::find(1);

         return view('admin.general', ['general' => $general] );
    }
    
    public function updateOption()
    {
        
        $general = new General();

        // $general->logo          = request('logo');
        // $general->top_header    = request('top_header');
        // $general->email         = request('email');
        // $general->phone         = request('phone');
        // $general->menu_color    = request('menu_color');
        // $general->footer_bg     = request('footer_bg'); 

        if (request('logo')) {
            request('logo')->isValid([
            'logo' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            ]);

            $imageName = time().'.'.request('logo')->getClientOriginalExtension();
            $move = request('logo')->move(public_path('assets/images'), $imageName);

            if (!$move) {
                $logo = request('oldlogo');
            } else {
                $logo  = $imageName;
            }
        } else { $logo = request('oldlogo'); }
        


        $general->where('id', 1)->update([
                'logo'          => $logo,
                'top_header'    => request('top_header'),
                'email'         => request('email'),
                'menu_color'    => request('menu_color'),
                'footer_bg'     => request('footer_bg')
                
            ]);

        return redirect('/Admin/theme-options')->with('mssg', 'Theme Option Update Successfully');
 
    }
    
    public function editAboutPage()
    {
        
        $about = Page::find(1);
        return view('admin.about', ['about' => $about] );
    }
    
    public function updateAboutPage()
    {
    	
    	$about = Page::find(1);

	     return view('admin.about', ['about' => $about] );
    }

}
