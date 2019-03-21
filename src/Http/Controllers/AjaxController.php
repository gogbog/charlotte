<?php

namespace Charlotte\Administration\Http\Controllers;


use Charlotte\Administration\Http\Requests\AjaxQuickSwitchRequest;
use Charlotte\Administration\Http\Requests\AjaxQuickUploadFile;

class AjaxController {

    public function saveQuickSwitch(AjaxQuickSwitchRequest $request) {
        $object = new $request->class;
        $object = $object->where('id', $request->id)->first();

        $object->update([
            $request->field => $request->state,
        ]);

        return response()->json();
    }

    public function quickUploadFile(AjaxQuickUploadFile $request) {
        $object = new $request->class;
        $object = $object->where('id', $request->id)->first();

        $object->addMedia($request->file)->toMediaCollection($request->collection);

        return response()->json();

    }
}