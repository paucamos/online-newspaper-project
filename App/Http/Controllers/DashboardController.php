<?php

namespace App\Http\Controllers;

use App\Article;
use App\Region;
use App\Section;
use App\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function home() {
        $numArticles = count(Article::get());
        $numSections = count(Section::get());
        $numRegions = count(Region::get());
        $numPeriodistes = count(User::get());

        return view('backend.home', compact('numArticles', 'numSections', 'numRegions', 'numPeriodistes'));
    }
}
