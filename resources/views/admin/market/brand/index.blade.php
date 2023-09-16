@extends('admin.layouts.master')

@section('head-tag')
<title>Brand</title>
@endsection

@section('content')

<nav aria-label="breadcrumb">
    <ol class="breadcrumb">
      <li class="breadcrumb-item font-size-12"> <a href="#">Home</a></li>
      <li class="breadcrumb-item font-size-12"> <a href="#">Sell Section</a></li>
      <li class="breadcrumb-item font-size-12 active" aria-current="page">Brand</li>
    </ol>
  </nav>


  <section class="row">
    <section class="col-12">
        <section class="main-body-container">
            <section class="main-body-container-header">
                <h5>
                 Brand
                </h5>
            </section>

            <section class="d-flex justify-content-between align-items-center mt-4 mb-3 border-bottom pb-2">
                <a href="{{ route('admin.market.brand.create') }}" class="btn btn-info btn-sm">Create Brand</a>
                <div class="max-width-16-rem">
                    <input type="text" class="form-control form-control-sm form-text" placeholder="Search">
                </div>
            </section>

            <section class="table-responsive">
                <table class="table table-striped table-hover">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Brand Name</th>
                            <th>Logo</th>
                            <th class="max-width-16-rem text-right pr-2"><i class="fa fa-cogs p-2"></i>Setting</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th>1</th>
                            <td>Monitor</td>
                            <td>Electronic Tools</td>
                             <td class="max-width-16-rem text-right">
                                <a href="#" class="btn btn-primary btn-sm"><i class="fa fa-edit"></i> Edit</a>
                               <a href="#" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i> Delete</a>
                            </td>
                        </tr>
                        <tr>
                            <th>2</th>
                            <td>Monitor</td>
                            <td>Electronic Tools</td>
                            <td class="max-width-16-rem text-right">
                                <a href="#" class="btn btn-primary btn-sm"><i class="fa fa-edit"></i> Edit</a>
                          <a href="#" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i> Delete</a>
                            </td>
                        </tr>
                        <tr>
                            <th>3</th>
                            <td>Monitor</td>
                            <td>Electronic Tools</td>
                            <td class="max-width-16-rem text-right">
                                <a href="#" class="btn btn-primary btn-sm"><i class="fa fa-edit"></i> Edit</a>
                               <a href="#" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i> Delete</a>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </section>

        </section>
    </section>
</section>

@endsection
