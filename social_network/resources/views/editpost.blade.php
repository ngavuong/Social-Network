<!-- created by ngavuong -->
<?php use Carbon\Carbon;?>
@extends('layouts.master')
@section('content')

	<article class="hentry post has-post-thumbnail w-50">
	    <div class="post__author author vcard inline-items">
	        <img src="/{{$post->user->profile->avatar_path}}">

	        <div class="author-date">
	            <a class="h6 post__author-name fn" href="#">{{$post->user->last_name}} {{$post->user->first_name}}</a>
	            <div class="post__date">
	                <time class="published">
	                    <?php
	                        $date_post = $post->created_at;
	                        $now = Carbon::now('Asia/Ho_Chi_Minh');
	                        $result = $date_post->diffForHumans($now);
	                        echo $result;
	                    ?>
	                </time>
	            </div>
	        </div>

	    </div>
	    <form action="{{route('edit-post',['pid'=>$post->id])}}" method="POST" id="a" enctype="multipart/form-data">
	    	<input type="hidden" name="_token" value="{{csrf_token()}}">   

		    <textarea class="form-control" id="editContent" name="editContent" placeholder="">{{$post->content}}
			</textarea>

			@if($post->has_medias==1)
		    <div class="thumbnail_container" style="display: block;">
                <img src="/uploads/{{$post->media->link}}" id="thumbnail"class="thumbnail" alt="photo">
                <a href="#" onclick="closeThumbnail('#thumbnail')" class="close_thumbnail"  style="display: block;">X</a>
            </div>
            @else
            <div class="thumbnail_container">
                <img src="" id="thumbnail"class="thumbnail" alt="photo">
                <a href="#" onclick="closeThumbnail('#editImage','#thumbnail')" class="close_thumbnail">X</a>
            </div>
            @endif

		    <h5 id="choosefile">Choose Image..</h5>	
		    <div></div>	               	
		    <input type="file" name="editImage" id="editImage" class="inputfile" onchange="previewFile('#editImage','#thumbnail')" />
		    <h2><label for="editImage"><i class="fas fa-image" ></i></label></h2>
		    <br/>
	
		    <input type="submit" value="Save change" class="btn btn-primary " />
		</form>

	</article>


@endsection