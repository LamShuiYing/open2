@extends('layout')

@section('content')

	<div id="wrapper">
		
		<div id="page" class="container">
			<h1>New Article</h1>

			<form method="POST" action="/articles">
				@csrf
				

				<div class="field">
					
					<label class="label" for="title">Title</label>

					<div class="control">
						
						<input class="input" type="text" name="title" id="title">

						<p class="danger">{{ $errors->first('title') }}</p>

					</div>
				</div>



				<div class="field">
				  <label class="label">Excerpt</label>
				  <div class="control">
				    <textarea class="textarea" name="excerpt" placeholder="excerpt"></textarea>
				  </div>
				</div>


				<div class="field">
				  <label class="label">Body</label>
				  <div class="control">
				    <textarea class="textarea" name="body" placeholder="body"></textarea>
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