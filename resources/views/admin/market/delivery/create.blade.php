@extends('admin.layouts.master')

@section('head-tag')
<title>Delivery</title>
@endsection

@section('content')

<nav aria-label="breadcrumb">
    <ol class="breadcrumb">
      <li class="breadcrumb-item font-size-12"> <a href="#">Home</a></li>
      <li class="breadcrumb-item font-size-12"> <a href="#">Delivry Methods</a></li>
      <li class="breadcrumb-item font-size-12 active" aria-current="page">Create New Delivery</li>
    </ol>
  </nav>


  <section class="row">
    <section class="col-12">
        <section class="main-body-container">
            <section class="main-body-container-header">
                <h5>
                  Create Delivery
                </h5>
            </section>

            <section class="d-flex justify-content-between align-items-center mt-4 mb-3 border-bottom pb-2">
                <a href="{{ route('admin.market.delivery.index') }}" class="btn btn-info btn-sm">Back</a>
            </section>

            <section>
                <form action="" method="">
                    <section class="row">

                        <section class="col-12 col-md-6">
                            <div class="form-group">
                                <label for="">Delivery Cost</label>
                                <input type="text" class="form-control form-control-sm">
                            </div>
                        </section>
                           <section class="col-12 col-md-6">
                            <div class="form-group">
                                <label for="">Delivery Time</label>
                                <input type="text" class="form-control form-control-sm">
                            </div>
                        </section>

                        <section class="col-12 col-md-6">
                            <div class="form-group">
                                <label for="">Delivery Method</label>
                                <select name="" id="" class="form-control form-control-sm">
                                    <option value="">Select Delivery Method</option>
                                    <option value="">Post</option>
                                    <option value="">Tpox</option>
                                    <option value="">Post Bike</option>
                                </select>
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
