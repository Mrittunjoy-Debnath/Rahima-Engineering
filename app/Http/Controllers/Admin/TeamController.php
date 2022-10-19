<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\News;
use App\Team;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Intervention\Image\Facades\Image;

class TeamController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $team = Team::latest()->get();
        return view('admin.team.index',[
            'news'=>$team,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.team.create');
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
            'name'=>'required',
            'short_description'=>'required',
            'designation'=>'required',
            'image'=>'required',
        ]);

        //handle image
        $image = $request->file('image');
        $slug = Str::slug($request->name);
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

        $service = new Team();
        $service->name = $request->name;
        $service->short_description = $request->short_description;
        $service->designation = $request->designation;
        $service->image = $imagename;
        $service->save();

        return redirect()->route('admin.teams.index')->with('success','Team Added Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $news = Team::find($id);
        return view('admin.team.show',[
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
        $news = Team::find($id);
        return view('admin.team.edit',[
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
            'name'=>'required',
            'short_description'=>'required',
            'designation'=>'required',
        ]);

        //handle image
        $image = $request->file('image');
        $slug = Str::slug($request->name);
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
            $imageOld = Team::find($id);
            $imagename = $imageOld->image;
        }

        $category = Team::find($id);
        $category->name = $request->name;
        $category->short_description = $request->short_description;
        $category->designation = $request->designation;
        $category->image = $imagename;
        $category->save();
        return redirect()->route('admin.teams.index')->with('success','Teams added successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $category = Team::find($id);

        if (Storage::disk('public')->exists('category/'.$category->image))
        {
            Storage::disk('public')->delete('category/'.$category->image);
        }

        // if (Storage::disk('public')->exists('service/slider/'.$service->service_image))
        // {
        //     Storage::disk('public')->delete('service/slider/'.$service->service_image);
        // }

        $category->delete();
        return redirect()->route('admin.teams.index')->with('success','Team deleted successfully');
    }
}
