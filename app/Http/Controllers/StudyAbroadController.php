<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudyAbroadController extends Controller
{
    function MCAST()
    {
        return view('study-abroad.exclusive-programs.MCAST');
    }
    function maheDubai()
    {
        return view('study-abroad.exclusive-programs.mahe-dubai');
    }
    function universityOfBolton()
    {
        return view('study-abroad.exclusive-programs.university-of-bolton');
    }
    function angliaRuskinUniversity()
    {
        return view('study-abroad.exclusive-programs.anglia-ruskin-university');
    }
    function universityOfGloucestershire()
    {
        return view('study-abroad.exclusive-programs.university-of-gloucestershire');
    }
    function girneAmericanUniversity()
    {
        return view('study-abroad.exclusive-programs.girne-american-university');
    }

    function avilaUniversity()
    {
        return view('study-abroad.exclusive-programs.avila-university');
    }
    function ibat()
    {
        return view('study-abroad.exclusive-programs.ibat');
    }
    function LIGMR()
    {
        return view('study-abroad.exclusive-programs.LIGMR');
    }
    function concordiaUniversityChicago()
    {
        return view('study-abroad.exclusive-programs.concordia-university-chicago');
    }

    // Distance Learning
    function ARU()
    {
        return view('study-abroad.distance-learning.anglia-ruskin-university');
    }
    function buckNewUniversity()
    {
        return view('study-abroad.distance-learning.buck-new-university');
    }
    function centralLancashireUniversity()
    {
        return view('study-abroad.distance-learning.central-lancashire-university');
    }
    function derbyUniversity()
    {
        return view('study-abroad.distance-learning.derby-university');
    }
    function GAU()
    {
        return view('study-abroad.distance-learning.girne-american-university');
    }
    function  GU()
    {
        return view('study-abroad.distance-learning.gloucestershire-university');
    }
    function northamptonUniversity()
    {
        return view('study-abroad.distance-learning.northampton-university');
    }
    function studyInCanada()
    {
        return view('study-abroad.on-campus.study-in-canada');
    }
    function studyInUae()
    {
        return view('study-abroad.on-campus.study-in-uae');
    }
    function studyInIreland()
    {
        return view('study-abroad.on-campus.study-in-ireland');
    }
    function studyInUsa()
    {
        return view('study-abroad.on-campus.study-in-usa');
    }
    function studyInUk()
    {
        return view('study-abroad.on-campus.study-in-uk');
    }
    function studyInMalta()
    {
        return view('study-abroad.on-campus.study-in-malta');
    }
    function studyInAustralia()
    {
        return view('study-abroad.on-campus.study-in-australia');
    }
}
