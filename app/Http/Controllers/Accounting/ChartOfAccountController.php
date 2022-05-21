<?php

namespace App\Http\Controllers\Accounting;

use App\Http\Controllers\Controller;
use App\Http\Requests\Accounting\ChartOfAccountRequest;
use App\Models\Accounting\ChartOfAccount;
use App\Models\Configuration\Property;
use App\Models\Mapping;
use Illuminate\Http\Request;

class ChartOfAccountController extends Controller {
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        $data['title']          = 'Chart Of Account';
        $mapping                = Mapping::where('user_id', Auth()->user()->id)->pluck('property_id');
        $data['chartOfAccount'] = ChartOfAccount::whereIn('property_id', $mapping)->orderBy('id', 'DESC')->paginate(10);
        // dd($data['chartOfAccount']);
        $data['property']       = Property::select(['id', 'name'])->whereIn('id', $mapping)->get();
        $data['parent_account'] = ChartOfAccount::whereIn('property_id', $mapping)->whereNull('parent_ac_id')->get();
        $data['breadcrumbs']    = [
            ['link' => "app/chart-of-account", 'name' => "Chart of Account"], ['name' => "index"],
        ];
        return view('modules.accounting.chartOfAccount', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ChartOfAccountRequest $request) {
        try {
            $chartOfAccount = new ChartOfAccount();
            $fillableData   = $request->only($chartOfAccount->getFillable());
            $chartOfAccount->fill($fillableData)->save();
            toastr()->success('Account Save Successful');
            return back();
        } catch (\Exception$e) {
            toastr()->error('Data Not Save', $e->getMessage());
            return back()->withInput();
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ChartOfAccountRequest $request, $id) {
        try {
            $chartOfAccount = ChartOfAccount::find($id);
            $fillableData   = $request->only($chartOfAccount->getFillable());
            $chartOfAccount->fill($fillableData)->update();
            toastr()->success('Account Update Successful');
            return back();
        } catch (\Exception$e) {
            toastr()->error('Data Not Update', $e->getMessage());
            return back()->withInput();
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id) {
        try {
            ChartOfAccount::find($id)->delete();
            toastr()->success('Account Delete Successful');
            return back();
        } catch (\Exception$e) {
            toastr()->error('Data Do Not Delete', $e->getMessage());
            return back();
        }
    }
}
