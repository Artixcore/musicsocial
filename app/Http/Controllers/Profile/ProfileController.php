<?php

namespace App\Http\Controllers\Profile;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\About;
use App\Band;
use App\User;

class ProfileController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }


    // About
    function about(){

        return view('frontend.about.about');
    }

    function about_edit($name){

        $abouts = About::where('user_id', auth()->id())->get();
        return view('frontend.about.edit', compact('abouts'));
    }

    function about_post(Request $request){

        $about = new About();

        $about->desc = $request->desc;
        $about->favorite_quote = $request->favorite_quote;
        $request->user()->about()->save($about);

        return view('frontend.about.about');
    }

    function about_update(Request $request, $id){

        $about = About::find($id);

        $about->desc = $request->desc;
        $about->favorite_quote = $request->favorite_quote;
        $request->user()->about()->save($about);

        return view('frontend.about.about');
    }


    // Professional

    function professional(){

        return view('frontend.professional.professional');
    }

    function professional_edit($name){

        $abouts = About::where('user_id', auth()->id())->get();
        return view('frontend.about.edit', compact('abouts'));
    }

    function professional_post(Request $request){

        $about = new About();

        $about->desc = $request->desc;
        $about->favorite_quote = $request->favorite_quote;
        $request->user()->about()->save($about);

        return view('frontend.about.about');
    }

    function professional_update(Request $request, $id){

        $about = About::find($id);

        $about->desc = $request->desc;
        $about->favorite_quote = $request->favorite_quote;
        $request->user()->about()->save($about);

        return view('frontend.about.about');
    }


        // Studied

        function studied(){

            return view('frontend.studied.studied');
        }

        function studied_edit($name){

            $abouts = About::where('user_id', auth()->id())->get();
            return view('frontend.studied.edit', compact('abouts'));
        }

        function studied_post(Request $request){

            $about = new About();

            $about->desc = $request->desc;
            $about->favorite_quote = $request->favorite_quote;
            $request->user()->about()->save($about);

            return view('frontend.studied.studied');
        }

        function studied_update(Request $request, $id){

            $about = About::find($id);

            $about->desc = $request->desc;
            $about->favorite_quote = $request->favorite_quote;
            $request->user()->about()->save($about);

            return view('frontend.studied.studied');
        }


        // Work

                function work(){

                    return view('frontend.work.work');
                }

                function work_edit($name){

                    $abouts = About::where('user_id', auth()->id())->get();
                    return view('frontend.work.edit', compact('abouts'));
                }

                function work_post(Request $request){

                    $about = new About();

                    $about->desc = $request->desc;
                    $about->favorite_quote = $request->favorite_quote;
                    $request->user()->about()->save($about);

                    return view('frontend.work.work');
                }

                function work_update(Request $request, $id){

                    $about = About::find($id);

                    $about->desc = $request->desc;
                    $about->favorite_quote = $request->favorite_quote;
                    $request->user()->about()->save($about);

                    return view('frontend.work.work');
                }


        // Relation

                function relation(){

                    return view('frontend.relation.relation');
                }

                function relation_edit($name){

                    $abouts = About::where('user_id', auth()->id())->get();
                    return view('frontend.relation.edit', compact('abouts'));
                }

                function relation_post(Request $request){

                    $about = new About();

                    $about->desc = $request->desc;
                    $about->favorite_quote = $request->favorite_quote;
                    $request->user()->about()->save($about);

                    return view('frontend.relation.relation');
                }

                function relation_update(Request $request, $id){

                    $about = About::find($id);

                    $about->desc = $request->desc;
                    $about->favorite_quote = $request->favorite_quote;
                    $request->user()->about()->save($about);

                    return view('frontend.relation.relation');
                }



        // living

                function livein(){

                    return view('frontend.livein.livein');
                }

                function livein_edit($name){

                    $abouts = About::where('user_id', auth()->id())->get();
                    return view('frontend.livein.edit', compact('abouts'));
                }

                function livein_post(Request $request){

                    $about = new About();

                    $about->desc = $request->desc;
                    $about->favorite_quote = $request->favorite_quote;
                    $request->user()->about()->save($about);

                    return view('frontend.livein.livein');
                }

                function livein_update(Request $request, $id){

                    $about = About::find($id);

                    $about->desc = $request->desc;
                    $about->favorite_quote = $request->favorite_quote;
                    $request->user()->about()->save($about);

                    return view('frontend.livein.livein');
                }

}
