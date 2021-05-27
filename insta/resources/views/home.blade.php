@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row pt-4">
        <div class="col-3 p-4">
            <img src="/svg/instagram.jpeg" class="w-100 rounded-circle" alt="profile picture">
        </div>
        <div class="col-9 pt-5">
            <div><h1>Insta Clone</h1></div>
            <div class="d-flex">
                <div class="pr-5"><strong>153</strong> posts</div>
                <div class="pr-5"><strong>23k</strong> followers </div>
                <div class="pr-5"><strong>212</strong> following</div>
            </div>
            <div class="pt-4 font-weight-bold">
                cloneInstagram.org
            </div>
            <div>This is a learning purpose instagram clone. This project does not means to competite and challage
                the instagram social networking sites. 
            </div>
            <div><a href="#">instagram.com</a></div>
        </div>
    </div>
    <div class="row">
        <div class="col-4">
            <img src="http://hd.wallpaperswide.com/thumbs/funny_wild_west_gunfighters-t2.jpg" class="w-100" alt="image 1">
        </div>
        <div class="col-4">
            <img src="http://hd.wallpaperswide.com/thumbs/red_lamborghini_aventador_s_roadster-t2.jpg" class="w-100"alt="image 2">
        </div>
        <div class="col-4">
            <img src="http://hd.wallpaperswide.com/thumbs/mount_everest_himalaya_mountains-t2.jpg" class="w-100"alt="image 3">
        </div>
    </div>
</div>
@endsection
