<?php

namespace Charlotte\Administration\Http\Controllers;



use Charlotte\Administration\Http\Requests\AjaxQuickSwitchRequest;

class AjaxController {
    public function saveQuickSwitch(AjaxQuickSwitchRequest $request) {
        $object = new $request->class;
        $object = $object->where('id', $request->id)->first();

        $object->update([
            $request->field => $request->state,
        ]);

        return response()->json();
    }
}