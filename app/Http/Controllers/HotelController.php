<?php

namespace App\Http\Controllers;

use App\Models\hotel;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class HotelController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index($name)
    {
        if ($name == "all")
            return $this->JsonResponse(hotel::all());
        else
            return $this->JsonResponse(hotel::where('name', $name)->get());
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $check = hotel::where('name', $request[`name`])->get();
        if (count($check) == 0) {
            $d_path = array(null, null, null, null, null, );
            if ($request['thumbnail'] != null) {
                $thumbnail_file = $request->file('thumbnail');
                foreach ($thumbnail_file as $index => $img) {
                    $d_path[$index] = isset($img) ? $img->store('thumbnail', 'public') : null;
                }
            }
            $m_path = null;
            if ($request['main'] != null) {
                $main_file = $request->file('main');
                $m_path = isset($main_file) ? $main_file->store('thumbnail', 'public') : null;
            }



            hotel::insert([
                'name' => $request->name,
                'prefecture' => $request->prefecture,
                'tell' => $request->tell,
                'address' => $request->address,
                'access' => $request->access,
                'category' => $request->category,
                'stick1' => $request->stick1,
                'stick2' => $request->stick2,
                'stick3' => $request->stick3,
                'stick4' => $request->stick4,
                'body' => $request->body,
                'html' => $request->html,
                'instagram' => $request->instagram,
                'twitter' => $request->twitter,
                'facebook' => $request->facebook,
                'youtube' => $request->youtube,
                'google' => $request->google,
                'tiktok' => $request->tiktok,
                'info1' => $request->info1,
                'label1' => $request->label1,
                'info2' => $request->info2,
                'label2' => $request->label2,
                'info3' => $request->info3,
                'label3' => $request->label3,
                'info4' => $request->info4,
                'label4' => $request->label4,
                'info5' => $request->info5,
                'label5' => $request->label5,
                'thumbnail1' => $m_path,
                'thumbnail2' => $d_path[0],
                'thumbnail3' => $d_path[1],
                'thumbnail4' => $d_path[2],
                'thumbnail5' => $d_path[3],
                'thumbnail6' => $d_path[4],
                'batch1' => $request->batch1,
                'batch2' => $request->batch2,
                'batch3' => $request->batch3,
                'batch4' => $request->batch4,
                'batch_name1' => $request->batch_name1,
                'batch_name2' => $request->batch_name2,
                'batch_name3' => $request->batch_name3,
                'batch_name4' => $request->batch_name4,
                'vote' => $request->vote,
            ]);
            return (1);
        } else
            return (0);
    }

    /**
     * Display the specified resource.
     */
    public function show(hotel $hotel)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        if ($request["flg"] === "true") {
            $d_path = array(null, null, null, null, null, null, );
            if ($request['thumbnail'] != null) {
                $thumbnail_file = $request->file('thumbnail');
                foreach ($thumbnail_file as $index => $img) {
                    $d_path[$index] = isset($img) ? $img->store('thumbnail', 'public') : '';
                }
            }
            $m_path = null;
            if ($request['main'] != null) {
                $main_file = $request->file('main');
                $m_path = isset($main_file) ? $main_file->store('thumbnail', 'public') : null;
            }

            hotel::where('id', $id)->update([
                'name' => $request->name,
                'prefecture' => $request->prefecture,
                'tell' => $request->tell,
                'address' => $request->address,
                'access' => $request->access,
                'category' => $request->category,
                'stick1' => $request->stick1,
                'stick2' => $request->stick2,
                'stick3' => $request->stick3,
                'stick4' => $request->stick4,
                'body' => $request->body,
                'html' => $request->html,
                'instagram' => $request->instagram,
                'twitter' => $request->twitter,
                'facebook' => $request->facebook,
                'youtube' => $request->youtube,
                'google' => $request->google,
                'tiktok' => $request->tiktok,
                'info1' => $request->info1,
                'label1' => $request->label1,
                'info2' => $request->info2,
                'label2' => $request->label2,
                'info3' => $request->info3,
                'label3' => $request->label3,
                'info4' => $request->info4,
                'label4' => $request->label4,
                'info5' => $request->info5,
                'label5' => $request->label5,
                'thumbnail1' => $m_path,
                'thumbnail2' => $d_path[0],
                'thumbnail3' => $d_path[1],
                'thumbnail4' => $d_path[2],
                'thumbnail5' => $d_path[3],
                'thumbnail6' => $d_path[4],
                'batch1' => $request->batch1,
                'batch2' => $request->batch2,
                'batch3' => $request->batch3,
                'batch4' => $request->batch4,
                'batch_name1' => $request->batch_name1,
                'batch_name2' => $request->batch_name2,
                'batch_name3' => $request->batch_name3,
                'batch_name4' => $request->batch_name4,
                'vote' => $request->vote,
            ]);
        } else {
            hotel::where('id', $id)->update([
                'name' => $request->name,
                'prefecture' => $request->prefecture,
                'tell' => $request->tell,
                'address' => $request->address,
                'access' => $request->access,
                'category' => $request->category,
                'stick1' => $request->stick1,
                'stick2' => $request->stick2,
                'stick3' => $request->stick3,
                'stick4' => $request->stick4,
                'body' => $request->body,
                'html' => $request->html,
                'instagram' => $request->instagram,
                'twitter' => $request->twitter,
                'facebook' => $request->facebook,
                'youtube' => $request->youtube,
                'google' => $request->google,
                'tiktok' => $request->tiktok,
                'info1' => $request->info1,
                'label1' => $request->label1,
                'info2' => $request->info2,
                'label2' => $request->label2,
                'info3' => $request->info3,
                'label3' => $request->label3,
                'info4' => $request->info4,
                'label4' => $request->label4,
                'info5' => $request->info5,
                'label5' => $request->label5,
                'batch1' => $request->batch1,
                'batch2' => $request->batch2,
                'batch3' => $request->batch3,
                'batch4' => $request->batch4,
                'batch_name1' => $request->batch_name1,
                'batch_name2' => $request->batch_name2,
                'batch_name3' => $request->batch_name3,
                'batch_name4' => $request->batch_name4,
                'vote' => $request->vote,
            ]);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $onsen = hotel::find($id);
        $onsen->delete();
    }
}