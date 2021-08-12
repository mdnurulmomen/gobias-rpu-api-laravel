<?php

namespace App\Repository\Eloquent;

use App\Models\OfficeLayer;
use App\Repository\Contracts\BaseRepositoryInterface;
use Illuminate\Http\Request;

class OfficeLayerRepository implements BaseRepositoryInterface
{

    //create
    public function create(Request $request, $cdesk)
    {
        $officeLayer = new OfficeLayer();
        $officeLayer->office_ministry_id = $request->office_ministry_id;
        $officeLayer->custom_layer_id = $request->custom_layer_id;
        $officeLayer->parent_layer_id = $request->parent_layer_id;
        $officeLayer->layer_level = $request->layer_level;
        $officeLayer->layer_sequence = $request->layer_sequence;
        $officeLayer->layer_name_bng = $request->layer_name_bng;
        $officeLayer->layer_name_eng = $request->layer_name_eng;
        $officeLayer->created_by = $cdesk->officer_id;
        $officeLayer->modified_by = $cdesk->officer_id;
        $officeLayer->save();
    }

    //update
    public function update(Request $request, $cdesk)
    {
        $officeLayer = OfficeLayer::find($request->id);
        $officeLayer->office_ministry_id = $request->office_ministry_id;
        $officeLayer->custom_layer_id = $request->custom_layer_id;
        $officeLayer->parent_layer_id = $request->parent_layer_id;
        $officeLayer->layer_level = $request->layer_level;
        $officeLayer->layer_sequence = $request->layer_sequence;
        $officeLayer->layer_name_bng = $request->layer_name_bng;
        $officeLayer->layer_name_eng = $request->layer_name_eng;
        $officeLayer->created_by = $cdesk->officer_id;
        $officeLayer->modified_by = $cdesk->officer_id;
        $officeLayer->save();
    }

    //show
    public function show($office_id){
        return OfficeLayer::where('id',$office_id)->get()->toArray();
    }

    //delete
    public function delete(Request $request, $cdesk)
    {
        // TODO: Implement delete() method.
    }
}
