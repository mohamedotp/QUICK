@extends('admin.master')
@section('content')
    <div class="content-wrapper">
        @php
            $title = trans('admin_sidebar_trans.Dashboard');
        @endphp
    @include('admin.layout.dashboard_header', ['title' => $title])
    <!-- Main content -->
    <section class="content {{ app()->getLocale() == 'ar' ? 'text-right-contant' : '' }}">
        <!-- Default box -->
        
        <div class="container-fluid" >
            <div class="row">
                <div class="col-lg-4 col-6">							
                    <div class="small-box card">
                        <div class="inner">
                            <h3>150</h3>
                            <p>Total Orders</p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-bag"></i>
                        </div>
                        {{}}
                        <a href="#" class="small-box-footer text-dark">More info <i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                
                <div class="col-lg-4 col-6">							
                    <div class="small-box card">
                        <div class="inner">
                            <h3>50</h3>
                            <p>Total Customers</p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-stats-bars"></i>
                        </div>
                        <a href="#" class="small-box-footer text-dark">More info <i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                
                <div class="col-lg-4 col-6">							
                    <div class="small-box card">
                        <div class="inner">
                            <h3>$1000</h3>
                            <p>Total Sale</p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-person-add"></i>
                        </div>
                        <a href="javascript:void(0);" class="small-box-footer">&nbsp;</a>
                    </div>
                </div>
            </div>
        </div>					
        <!-- /.card -->
    </section>
    <!-- /.content -->
    </div>
    
@endsection