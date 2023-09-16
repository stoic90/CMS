@extends('admin.layouts.master')

@section('head-tag')
<title>Comment</title>
@endsection

@section('content')

<nav aria-label="breadcrumb">
    <ol class="breadcrumb">
      <li class="breadcrumb-item font-size-12"> <a href="#">Home</a></li>
      <li class="breadcrumb-item font-size-12"> <a href="#">Sell Section</a></li>
      <li class="breadcrumb-item font-size-12"> <a href="#">Comment</a></li>
      <li class="breadcrumb-item font-size-12 active" aria-current="page"> Show Comment</li>
    </ol>
  </nav>


  <section class="row">
    <section class="col-12">
        <section class="main-body-container">
            <section class="main-body-container-header">
                <h5>
                   Show Comment
                </h5>
            </section>

            <section class="d-flex justify-content-between align-items-center mt-4 mb-3 border-bottom pb-2">
                <a href="{{ route('admin.market.comment.index') }}" class="btn btn-info btn-sm">Back</a>
            </section>

            <section class="card mb-3">
                <section class="card-header text-white bg-custom-yellow"> 896567-Ali Kazemi </section>
                <section class="card-body">
                    <h6 class="card-title">Product ID : 456879 - Product : Loptop Asus</h6>
                    <p class="card-text">This is a good laptop</p>
                </section>
            </section>

            <section>
                <form action="" method="">
                    <section class="row">

                        <section class="col-12">
                            <div class="form-group">
                                <label for="">Admin Answer</label>
                                <textarea class="form-control form-control-sm" rows="4"></textarea>
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
