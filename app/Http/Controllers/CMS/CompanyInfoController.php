<?php

namespace App\Http\Controllers\CMS;

use App\Http\Controllers\GeneralController;
use App\Http\Requests\CompanyInfosUpdateRequest;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class CompanyInfoController extends GeneralController
{
    public function __invoke(){
        $companyData = DB::table('company_infos')->get()->groupBy('type');

        return view('cms.company-infos', [
            'companyInfos' => $this->companyInfos,
            'companyData' => $companyData,
        ]);
    }

    public function handleUpdateCompanyData(CompanyInfosUpdateRequest $request){
        foreach($request->validated() as $id => $data){
            if($data instanceof UploadedFile){
                $path = $this->saveImageToStorage($data);
                DB::table('company_infos')->where('id', '=', $id)->update(['value' => $path]);
            } else{
                DB::table('company_infos')->where('id', '=', $id)->update(['value' => $data]);
            }
        }
        
        return back();
    }
}
