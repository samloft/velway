<?php

namespace App\Http\Controllers\Cms;

use App\Models\CompanyInformation;
use Illuminate\Contracts\View\Factory;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\View\View;

class CompanyInformationController extends Controller
{
    /**
     * Display a form to update company information.
     *
     * @return Factory|View
     */
    public function index()
    {
        $company_information = CompanyInformation::show()->getAttributes();

        return view('cms.company-information.index', compact('company_information'));
    }

    /**
     * Update company information.
     *
     * @param Request $request
     * @return RedirectResponse
     */
    public function store(Request $request)
    {
        $updated = CompanyInformation::store($request->all());

        return $updated ? back()->with('success', 'Company information has been updated') :
            back()->with('error', 'Unable to update company information, please try again');
    }
}
