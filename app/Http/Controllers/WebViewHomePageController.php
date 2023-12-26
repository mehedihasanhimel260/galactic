<?php

namespace App\Http\Controllers;
// use Illuminate\Http\Request;
use App\Models\Service;
// use App\Models\Testimonial;
use App\Models\About;
use App\Models\Blog;
use App\Models\CounterIcon;
use App\Models\Heros;
use App\Models\ImageGallery;
use App\Models\PageTitle;
use App\Models\PersoneRanking;
use App\Models\Project;
use App\Models\Round;
use App\Models\Season;
use App\Models\Sponsor;
use App\Models\Team;
use App\Models\Slider;
use App\Models\Testimonial2;
use App\Models\TrunamentRanking;
use App\Models\TrunamentSchedule;
use App\Models\VideoGallery;

class WebViewHomePageController extends Controller
{
    public function tech_web_home_index()
    {
        $images = ImageGallery::where('status', 1)
            ->latest('id', 'DESC')
            ->limit(3)
            ->get();
        $testimonials = Testimonial2::where('status', 1)
            ->latest()
            ->limit(5)
            ->get();
        $services = Service::latest()
            ->limit(6)
            ->get();
        $blogs = Blog::latest()
            ->limit(3)
            ->get();
        $about = About::latest()->first();
        $brands = Sponsor::all();
        $teams = Team::latest()
            ->limit(6)
            ->get();
        $slider = Slider::where('status', '1')
            ->latest()
            ->limit(3)
            ->get();
        $projects_don = CounterIcon::latest()->first();
        $projects = Project::where('status', 1)
            ->limit(6)
            ->get();
        $videos = VideoGallery::where('status', 1)
            ->latest('id', 'DESC')
            ->get();
        $heros = Heros::first();

        $tournament_season = Season::latest()->first();
        $rounds = Round::where('seasons_id', $tournament_season->id)
            ->with('season')
            ->get();
        $tournaments = Blog::where('recent_activity', 0)->get();
        $trunamentSchedule = TrunamentSchedule::with('round')->get();
        $trunamentRanking = TrunamentRanking::orderBy('ranking_number', 'DESC')->get();
        $persontrunamentRanking = PersoneRanking::with('TeamInfo', 'trunament')
            ->orderBy('ranking_number', 'DESC')
            ->get();
        $PageTitle = PageTitle::where('page', 1)->get();
        return view('frontend.home.index', compact('PageTitle', 'tournaments', 'persontrunamentRanking', 'trunamentRanking', 'testimonials', 'services', 'about', 'blogs', 'brands', 'teams', 'slider', 'projects_don', 'projects', 'images', 'videos', 'heros', 'rounds', 'trunamentSchedule'));
    }
    public function tech_web_upcoming_matches()
    {
        $services = Service::latest()->paginate(10);
        $PageTitle = PageTitle::where('page', 9)->get();
        return view('frontend.upcoming-matches.index', compact('PageTitle', 'services'));
    }
    public function tech_web_player_details($id)
    {
        $teams = Team::find($id);
        return view('frontend.player-details.index', compact('teams'));
    }
}
