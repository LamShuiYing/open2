@extends('layout')

@section('content')

	<div id="wrapper">
		
		<div id="page" class="container">
			<h1>Update Article</h1>

			<form method="POST" action="/articles/{{ $article->id }}">
				@csrf
				@method('PUT');

				<div class="field">
					
					<label class="label" for="title">Title</label>

					<div class="control">
						
						<input class="input" type="text" name="title" id="title" value="{{ $article->title }}">

					</div>
				</div>



				<div class="field">
				  <label class="label">Excerpt</label>
				  <div class="control">
				    <textarea class="textarea" name="excerpt" placeholder="excerpt">{{ $article->excerpt }}</textarea>
				  </div>
				</div>


				<div class="field">
				  <label class="label">Body</label>
				  <div class="control">
				    <textarea class="textarea" name="body" placeholder="body">{{ $article->body }}</textarea>
				  </div>
				</div>



				<div class="field">
					<div class="control">
					  <button class="button is-primary">Submit</button>
					</div>
				</div>


			</form>

		</div>

	</div>

@endsection