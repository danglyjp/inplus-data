@extends('layouts.master')
@section('head')
@endsection


@section('title','G-SIM')
@section('description')

@endsection

@section('main')
<div class="page-content">
    <div class="container-fluid">

        <!-- <div class="row">
            <div class="col-12">
                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                    <h4 class="mb-sm-0">Horizontal</h4>

                    <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item"><a href="javascript: void(0);">Layouts</a></li>
                            <li class="breadcrumb-item active">Horizontal</li>
                        </ol>
                    </div>

                </div>
            </div>
        </div> -->
{{-- 
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header border-0">
                        <div class="row justify-content-center">
                            <div class="col-lg-6">
                            <form method="GET" action="{{ route('global-sim') }}">
                                <div class="row g-2">
                                    
                                    <div class="col">
                                        <div class="position-relative mb-3">
                                            <input type="text" name="search" class="fs-13 form-control form-control-lg bg-light border-light" placeholder="Search here.." value="{{ session()->get('search') }}">
                                        </div>
                                    </div>
                                    <div class="col-auto">
                                        <button type="submit" class="fs-13 btn btn-primary btn-lg waves-effect waves-light"><i class="mdi mdi-magnify me-1"></i> 検索</button>
                                    </div>
                                    
                                </div>
                            </form>
                            </div>
                            <!--end col-->
                            <div class="col-lg-12">
                                <h5 class="fs-13 fw-semibold text-center mb-0">Showing results for "<span class="text-primary fw-medium fst-italic"></span> "</h5>
                                <pre><code>{{ var_dump(session()->get('search')) }}</code></pre>
                            </div>
                        </div>
                        <!--end row-->
                    </div>
                </div>
            </div>
        </div>                    --}}

        
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header align-items-center d-flex">
                        <h4 class="card-title mb-0 flex-grow-1">Global SIM DATA</h4>
                        {{-- <form method="POST" action="{{ route('create-gsim') }}" autocomplete="off">
                            @if(count($errors))
                                <div class="alert alert-danger">
                                    <strong>Whoops!</strong> There were some problems with your input.
                                    <br/>
                                    <ul>
                                        @foreach($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif
                    
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group {{ $errors->has('title') ? 'has-error' : '' }}">
                                        <input type="text" id="title" name="title" class="form-control" placeholder="Enter Title" value="{{ old('title') }}">
                                        <span class="text-danger">{{ $errors->first('title') }}</span>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <button class="btn btn-success">Create New Item</button>
                                    </div>
                                </div>
                            </div>
                        </form> --}}
                        <div class="col-lg-6 float-end mb-0">
                            <form method="GET" action="{{ route('global-sim') }}">
                                <div class="row g-2">
                                    
                                    <div class="col">
                                        <div class="position-relative">
                                            <input type="text" name="search" class="fs-13 form-control form-control-lg bg-light border-light" placeholder="Search here.." value="{{ session()->get('search') }}">
                                        </div>
                                    </div>
                                    <div class="col-auto">
                                        <button type="submit" class="fs-13 btn btn-primary btn-lg waves-effect waves-light"><i class="mdi mdi-magnify me-1"></i> 検索</button>
                                    </div>
                                    
                                </div>
                            </form>
                            </div>
                    </div>

                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table align-middle mb-0">
                                <thead class="table-light">
                                    <tr>
                                        <th scope="col">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="" id="responsivetableCheck">
                                                <label class="form-check-label" for="responsivetableCheck"></label>
                                            </div>
                                        </th>
                                        <th scope="col">#</th>
                                        <th scope="col">name</th>
                                        <th scope="col">Status</th>
                                        <th scope="col">Customer</th>
                                        <th scope="col">Purchased</th>
                                        <th scope="col">Revenue</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th scope="row">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="" id="responsivetableCheck01">
                                                <label class="form-check-label" for="responsivetableCheck01"></label>
                                            </div>
                                        </th>
                                        <td><a href="#" class="fw-semibold">#VZ2110</a></td>
                                        <td>10 Oct, 14:47</td>
                                        <td class="text-success"><i class="ri-checkbox-circle-line fs-17 align-middle"></i> Paid</td>
                                        <td>
                                            <div class="d-flex gap-2 align-items-center">
                                                <div class="flex-shrink-0">
                                                    <img src="{{asset('/')}}assets/images/users/avatar-3.jpg" alt="" class="avatar-xs rounded-circle" />
                                                </div>
                                                <div class="flex-grow-1">
                                                    Jordan Kennedy
                                                </div>
                                            </div>
                                        </td>
                                        <td>Mastering the grid</td>
                                        <td>$9.98</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="" id="responsivetableCheck02">
                                                <label class="form-check-label" for="responsivetableCheck02"></label>
                                            </div>
                                        </th>
                                        <td><a href="#" class="fw-semibold">#VZ2109</a></td>
                                        <td>17 Oct, 02:10</td>
                                        <td class="text-success"><i class="ri-checkbox-circle-line fs-17 align-middle"></i> Paid</td>
                                        <td>
                                            <div class="d-flex gap-2 align-items-center">
                                                <div class="flex-shrink-0">
                                                    <img src="{{asset('/')}}assets/images/users/avatar-4.jpg" alt="" class="avatar-xs rounded-circle" />
                                                </div>
                                                <div class="flex-grow-1">
                                                    Jackson Graham
                                                </div>
                                            </div>
                                        </td>
                                        <td>Splashify</td>
                                        <td>$270.60</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="" id="responsivetableCheck03">
                                                <label class="form-check-label" for="responsivetableCheck03"></label>
                                            </div>
                                        </th>
                                        <td><a href="#" class="fw-semibold">#VZ2108</a></td>
                                        <td>26 Oct, 08:20</td>
                                        <td class="text-primary"><i class="ri-refresh-line fs-17 align-middle"></i> Refunded</td>
                                        <td>
                                            <div class="d-flex gap-2 align-items-center">
                                                <div class="flex-shrink-0">
                                                    <img src="{{asset('/')}}assets/images/users/avatar-5.jpg" alt="" class="avatar-xs rounded-circle" />
                                                </div>
                                                <div class="flex-grow-1">
                                                    Lauren Trujillo
                                                </div>
                                            </div>
                                        </td>
                                        <td>Wireframing Kit for Figma</td>
                                        <td>$145.42</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="" id="responsivetableCheck04">
                                                <label class="form-check-label" for="responsivetableCheck04"></label>
                                            </div>
                                        </th>
                                        <td><a href="#" class="fw-semibold">#VZ2107</a></td>
                                        <td>02 Nov, 04:52</td>
                                        <td class="text-danger"><i class="ri-close-circle-line fs-17 align-middle"></i> Cancel</td>
                                        <td>
                                            <div class="d-flex gap-2 align-items-center">
                                                <div class="flex-shrink-0">
                                                    <img src="{{asset('/')}}assets/images/users/avatar-6.jpg" alt="" class="avatar-xs rounded-circle" />
                                                </div>
                                                <div class="flex-grow-1">
                                                    Curtis Weaver
                                                </div>
                                            </div>
                                        </td>
                                        <td>Wireframing Kit for Figma</td>
                                        <td>$170.68</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="" id="responsivetableCheck05">
                                                <label class="form-check-label" for="responsivetableCheck05"></label>
                                            </div>
                                        </th>
                                        <td><a href="#" class="fw-semibold">#VZ2106</a></td>
                                        <td>10 Nov, 07:20</td>
                                        <td class="text-success"><i class="ri-checkbox-circle-line fs-17 align-middle"></i> Paid</td>
                                        <td>
                                            <div class="d-flex gap-2 align-items-center">
                                                <div class="flex-shrink-0">
                                                    <img src="{{asset('/')}}assets/images/users/avatar-1.jpg" alt="" class="avatar-xs rounded-circle" />
                                                </div>
                                                <div class="flex-grow-1">
                                                    Jason schuller
                                                </div>
                                            </div>
                                        </td>
                                        <td>Splashify</td>
                                        <td>$350.87</td>
                                    </tr>
                                </tbody>
                                <tfoot class="table-light">
                                    <tr>
                                        <td colspan="6">Total</td>
                                        <td>$947.55</td>
                                    </tr>
                                </tfoot>
                            </table>
                            <!-- end table -->
                        </div>
                        <!-- end table responsive -->
                    </div>
                
                </div>
            </div>
        </div>

    </div>
    <!-- container-fluid -->
</div>

@endsection