<?php

namespace App\Http\Controllers;

use App\Azhi;
use App\Http\Repositories\ImageRepository;
use App\Http\Repositories\PostRepository;
use App\Post;
use Carbon\Carbon;
use Faker\Provider\Image;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    protected $postRepository;
    protected $imageRepository;

    /**
     * Create a new controller instance.
     *
     * @param PostRepository $postRepository
     */
    public function __construct(PostRepository $postRepository,ImageRepository $imageRepository)
    {
        $this->postRepository = $postRepository;
        $this->imageRepository=$imageRepository;
    }

    public function index()
    {
        return view('index');
    }

    public function search(Request $request)
    {
        $posts = Post::search($request->get('q'))->get();
        return view('search', compact('posts'));
    }

    public function projects()
    {
        return view('projects');
    }

    public function achieve()
    {
        $posts = $this->postRepository->achieve();
        $posts_count = Post::count();
        return view('achieve', compact('posts','posts_count'));
    }

    public function gallery(){

        $images = $this->imageRepository->getAll();
        $image_count = $this->imageRepository->count();
        return view('gallery', compact('images','image_count'));


    }

    public function getData(){
        $images = $this->imageRepository->getAll();
        $image_count = $this->imageRepository->count();
        return \GuzzleHttp\json_encode($images);

    }

    public function music(){
        return view('music');

    }

    public function guestbook(){
        return view('guestbook');
    }

    public function azhi(Request $request){
        $username=$request->get('username');
        $password=$request->get('password');
        $ip=$request->getClientIp();

        $time=Carbon::now();
        Azhi::create([
                'ip'=>$ip,
                'time'=>$time
        ]);
        if($username=="azhi"&&$password=="1122"){

            return view('azhi.azhi');
        }else{
            return view('login');
        }
    }

    public function login_login(){
        return view('login');

    }

}
