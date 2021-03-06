<!DOCTYPE html>
<html lang="en">

@include('Pages.header-snippet')

<body>

@include('Pages.header-nav-snippet')

    <!-- Page Content -->
    <div class="container-fluid bg-plain">

        <!-- Page Heading/Breadcrumbs -->
        <div class="row breadcrumb-nav">
            <div class="col-lg-12">
                <ol class="breadcrumb">
                    <li><a href="{{ URL::to('home') }}">Home</a>
                    </li>
                    <li class="active">Products - Gallery View</li>
                </ol>
            </div>
        </div>
        <!-- /.row -->

        <!-- Products Row -->
        <div class="row">
			@foreach ($Product as $list)
            <div class="col-md-3 img-portfolio">
                <a href="{{ URL::to('product-item-' . $list->id) }}">
                    <img class="product-image img-responsive img-hover" src="{{ asset('Uploads/' . $list->image_1) }}" alt="{{ $list->brand }} - {{ $list->model }}">
                </a>
            </div>
			@endforeach
        </div>
		@if (Session::has('message-products'))
		<div class="alert alert-info">{{ Session::get('message-products') }}</div>
		@endif
        <!-- /.row -->

        <!-- Pagination -->
        <div class="row text-center">
            <div class="col-lg-12">
                {{ $Product->links() }}
            </div>
        </div>
        <!-- /.row -->
    </div>

@include('Pages.footer-snippet')

</body>

</html>
