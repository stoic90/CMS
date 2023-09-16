@extends('admin.layouts.master')

@section('head-tag')
<title>Brand</title>
@endsection

@section('content')

<nav aria-label="breadcrumb">
    <ol class="breadcrumb">
      <li class="breadcrumb-item font-size-12"> <a href="#">Home</a></li>
      <li class="breadcrumb-item font-size-12"> <a href="#">Sell Section</a></li>
      <li class="breadcrumb-item font-size-12"> <a href="#">Brand</a></li>
      <li class="breadcrumb-item font-size-12 active" aria-current="page">Create Brand</li>
    </ol>
  </nav>


  <section class="row">
    <section class="col-12">
        <section class="main-body-container">
            <section class="main-body-container-header">
                <h5>
                  Create Brand
                </h5>
            </section>

            <section class="d-flex justify-content-between align-items-center mt-4 mb-3 border-bottom pb-2">
                <a href="{{ route('admin.market.brand.home') }}" class="btn btn-info btn-sm">Back</a>
            </section>

            <section>
                <form action="" method="">
                    <section class="row">

                        <section class="col-12 col-md-6">
                            <div class="form-group">
                                <label for="">Brand Name</label>
                                <input type="text" class="form-control form-control-sm">
                            </div>
                        </section>

                        <section class="col-12 col-md-6">
                            <div class="form-group">
                                <label for="">Parent Category</label>
                               <input type="file" class="form-control form-control-sm " name="" >
                            </div>
                        </section>
                        <section class="col-12">
                                   <a href="" class="btn btn-primary btn-sm">Submit</a>
                        </section>
                    </section>
                </form>
            </section>

        </section>
    </section>
</section>

@endsection
