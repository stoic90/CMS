@extends('admin.layouts.master')

@section('head-tag')
<title>Comment</title>
@endsection

@section('content')

<nav aria-label="breadcrumb">
    <ol class="breadcrumb">
      <li class="breadcrumb-item font-size-12"> <a href="#">Home</a></li>
      <li class="breadcrumb-item font-size-12"> <a href="#">Sell Section</a></li>
      <li class="breadcrumb-item font-size-12 active" aria-current="page">Comment</li>
    </ol>
  </nav>


  <section class="row">
    <section class="col-12">
        <section class="main-body-container">
            <section class="main-body-container-header">
                <h5>
                 Category
                </h5>
            </section>

            <section class="d-flex justify-content-between align-items-center mt-4 mb-3 border-bottom pb-2">
                <a href="#" class="btn btn-info btn-sm disabled">Create Category</a>
                <div class="max-width-16-rem">
                    <input type="text" class="form-control form-control-sm form-text" placeholder="Search">
                </div>
            </section>

            <section class="table-responsive">
                <table class="table table-striped table-hover">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>User ID</th>
                            <th>User Name</th>
                            <th>Product ID</th>
                            <th>Product Name</th>
                            <th>Status</th>
                            <th class="max-width-16-rem text-right pr-2"><i class="fa fa-cogs p-2"></i>Setting</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th>1</th>
                            <th>78516</th>
                            <td>John Doe</td>
                            <td>45869</td>
                            <td>Laptop Asus</td>
                            <td>Pending</td>
                             <td class="max-width-16-rem text-right">
                                <a href="{{ route('admin.market.comment.show') }}" class="btn btn-info btn-sm"><i class="fa fa-eye"></i> Show</a>
                               <a href="#" class="btn btn-success btn-sm"><i class="fa fa-check"></i> Confirm</a>
                            </td>
                        </tr>
                        <tr>
 <th>2</th>
                            <th>78516</th>
                            <td>John Doe</td>
                            <td>45869</td>
                            <td>Laptop Asus</td>
                            <td>Confirmed</td>
                             <td class="max-width-16-rem text-right">
                                <a href="{{ route('admin.market.comment.show') }}" class="btn btn-info btn-sm"><i class="fa fa-eye"></i> Show</a>
                               <a href="#" class="btn btn-warning btn-sm"><i class="fa fa-clock"></i> Disconfirm</a>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </section>

        </section>
    </section>
</section>

@endsection
