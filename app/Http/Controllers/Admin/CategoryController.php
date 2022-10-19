<?php

namespace App\Http\Controllers\Admin;

use App\Category;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Intervention\Image\Facades\Image;
class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $category = Category::latest()->get();
        return view('admin.category.index',[
            'category'=>$category,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.category.create');
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
            'link'=>'required',
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

        $service = new Category();
        $service->title = $request->title;
        $service->short_description = $request->short_description;
        $service->link = $request->link;
        $service->image = $imagename;
        $service->save();

        return redirect()->route('admin.category.index')->with('success','Category Added Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $category = Category::find($id);
        return view('admin.category.show',[
            'category' => $category,
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
        $category = Category::find($id);
        return view('admin.category.edit',[
            'category' => $category,
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
            'link'=>'required',
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
            $imageOld = Category::find($id);
            $imagename = $imageOld->image;
        }

        $category = Category::find($id);
        $category->title = $request->title;
        $category->short_description = $request->short_description;
        $category->link = $request->link;
        $category->image = $imagename;
        $category->save();
        return redirect()->route('admin.category.index')->with('success','Category added successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $category = Category::find($id);

        if (Storage::disk('public')->exists('category/'.$category->image))
        {
            Storage::disk('public')->delete('category/'.$category->image);
        }

        // if (Storage::disk('public')->exists('service/slider/'.$service->service_image))
        // {
        //     Storage::disk('public')->delete('service/slider/'.$service->service_image);
        // }

        $category->delete();
        return redirect()->route('admin.category.index')->with('success','Category deleted successfully');
    }
}
