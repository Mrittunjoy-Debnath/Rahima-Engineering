<?php

namespace App\Http\Controllers\Admin;


use App\Http\Controllers\Controller;
use App\News;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Intervention\Image\Facades\Image;

class NewsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $news = News::latest()->get();
        return view('admin.news.index',[
            'news'=>$news,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.news.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'title'=>'required',
            'short_description'=>'required',
            'long_description'=>'required',
            'image'=>'required',
        ]);

        //handle image
        $image = $request->file('image');
        $slug = Str::slug($request->title);
        if (isset($image))
        {
//            make unique name for image
            $currentDate = Carbon::now()->toDateString();
            $imagename = $slug.'-'.$currentDate.'-'.uniqid().'.'.$image->getClientOriginalExtension();
//            check category dir is exists
            if (!Storage::disk('public')->exists('category'))
            {
                Storage::disk('public')->makeDirectory('category');
            }
            $category = Image::make($image)->resize(1600,791)->save($imagename);
            Storage::disk('public')->put('service/'.$imagename,$category);

            // if (!Storage::disk('public')->exists('service/slider'))
            // {
            //     Storage::disk('public')->makeDirectory('service/slider');
            // }
            // //            resize image for category slider and upload
            // $slider = Image::make($image)->resize(1600,791)->save($imagename);
            // Storage::disk('public')->put('service/slider/'.$imagename,$slider);
        }
        else {
            $imagename = "default.png";
        }

        $service = new News();
        $service->title = $request->title;
        $service->short_description = $request->short_description;
        $service->long_description = $request->long_description;
        $service->image = $imagename;
        $service->save();

        return redirect()->route('admin.news.index')->with('success','News Added Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $news = News::find($id);
        return view('admin.news.show',[
            'category' => $news,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $news = News::find($id);
        return view('admin.news.edit',[
            'category' => $news,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request,[
            'title'=>'required',
            'short_description'=>'required',
            'long_description'=>'required',
        ]);

        //handle image
        $image = $request->file('image');
        $slug = Str::slug($request->title);
        if (isset($image))
        {
//            make unique name for image
            $currentDate = Carbon::now()->toDateString();
            $imagename = $slug.'-'.$currentDate.'-'.uniqid().'.'.$image->getClientOriginalExtension();
//            check category dir is exists
            if (!Storage::disk('public')->exists('category'))
            {
                Storage::disk('public')->makeDirectory('category');
            }
            $category = Image::make($image)->resize(1600,791)->save($imagename);
            Storage::disk('public')->put('service/'.$imagename,$category);

            // if (!Storage::disk('public')->exists('service/slider'))
            // {
            //     Storage::disk('public')->makeDirectory('service/slider');
            // }
            // //            resize image for category slider and upload
            // $slider = Image::make($image)->resize(1600,791)->save($imagename);
            // Storage::disk('public')->put('service/slider/'.$imagename,$slider);
        }
        else {
            $imageOld = News::find($id);
            $imagename = $imageOld->image;
        }

        $category = News::find($id);
        $category->title = $request->title;
        $category->short_description = $request->short_description;
        $category->long_description = $request->long_description;
        $category->image = $imagename;
        $category->save();
        return redirect()->route('admin.news.index')->with('success','News added successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $category = News::find($id);

        if (Storage::disk('public')->exists('category/'.$category->image))
        {
            Storage::disk('public')->delete('category/'.$category->image);
        }

        // if (Storage::disk('public')->exists('service/slider/'.$service->service_image))
        // {
        //     Storage::disk('public')->delete('service/slider/'.$service->service_image);
        // }

        $category->delete();
        return redirect()->route('admin.news.index')->with('success','News deleted successfully');
    }
}
