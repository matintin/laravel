@extends('templates.main')

@section('content')

	<h2>Add New Product</h2>

	<!-- {!! Form::open(array('url' => 'foo/bar')) !!} -->
		<fielset>
			<label for="">Product Name.</label>
			<input type="text" name="" id="">

			<label for="">Product Type.</label>
			<input type="text" name="" id="">

			<label for="">Subscription.</label>
			<textarea type="text" name="" id=""></textarea>

			<input type="submit" value="Add">
		</fielset>
	<!-- {!! Form::close() !!} -->

@endsection			
		