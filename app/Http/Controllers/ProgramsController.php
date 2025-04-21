<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProgramsController extends Controller
{
    function codingMultiverse()
    {
        return view('programs.coding-multiverse');
    }
    function businessAndManagement()
    {
        return view('programs.business-and-management');
    }
    function accountingAndFinance()
    {
        return view('programs.accounting-and-finance');
    }
    function healthAndSocialCare()
    {
        return view('programs.health-and-social-care');
    }
    function educationAndTraining()
    {
        return view('programs.education-and-training');
    }
    function computingITAndDataScience()
    {
        return view('programs.computing-IT-and-data-science');
    }
    function cyberSecurity()
    {
        return view('programs.cyber-security');
    }
    function childCare()
    {
        return view('programs.child-care');
    }
    function adultCare()
    {
        return view('programs.adult-care');
    }
    public function firstAid()
    {
        $jsonPath = storage_path('app/public/programs/firstAidPrograms.json');
        $firstAidPrograms = json_decode(file_get_contents($jsonPath), true);

        return view('programs.uk-regulated-programs.first-aid', compact('firstAidPrograms'));
    }
    function ILM()
    {
        return view('chartered-membership.ILM');
    }
    function BCS()
    {
        return view('chartered-membership.BCS');
    }

}
