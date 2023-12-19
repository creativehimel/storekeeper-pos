@extends('layouts.master')
@section('content')
<div class="row">
    <!-- Earning Reports -->
        <div class="col-lg-12 mb-4">
                  <div class="card">
                    <div class="card-body">
                      <div class="border rounded p-3">
                        <div class="row gap-4 gap-sm-0">
                          <div class="col-12 col-sm-3">
                            <div class="d-flex gap-2 align-items-center">
                              <div class="badge rounded bg-label-primary p-1">
                                <i class="ti ti-currency-dollar ti-sm"></i>
                              </div>
                              <h6 class="mb-0">Earnings</h6>
                            </div>
                            <h4 class="my-2 pt-1">$545.69</h4>
                            <div class="progress w-75" style="height: 4px">
                              <div
                                class="progress-bar"
                                role="progressbar"
                                style="width: 65%"
                                aria-valuenow="65"
                                aria-valuemin="0"
                                aria-valuemax="100"></div>
                            </div>
                          </div>
                          <div class="col-12 col-sm-3">
                            <div class="d-flex gap-2 align-items-center">
                              <div class="badge rounded bg-label-info p-1"><i class="ti ti-chart-pie-2 ti-sm"></i></div>
                              <h6 class="mb-0">Profit</h6>
                            </div>
                            <h4 class="my-2 pt-1">$256.34</h4>
                            <div class="progress w-75" style="height: 4px">
                              <div
                                class="progress-bar bg-info"
                                role="progressbar"
                                style="width: 50%"
                                aria-valuenow="50"
                                aria-valuemin="0"
                                aria-valuemax="100"></div>
                            </div>
                          </div>
                          <div class="col-12 col-sm-3">
                            <div class="d-flex gap-2 align-items-center">
                              <div class="badge rounded bg-label-danger p-1">
                                <i class="ti ti-brand-paypal ti-sm"></i>
                              </div>
                              <h6 class="mb-0">Expense</h6>
                            </div>
                            <h4 class="my-2 pt-1">$74.19</h4>
                            <div class="progress w-75" style="height: 4px">
                              <div
                                class="progress-bar bg-danger"
                                role="progressbar"
                                style="width: 65%"
                                aria-valuenow="65"
                                aria-valuemin="0"
                                aria-valuemax="100"></div>
                            </div>
                          </div>
                            <div class="col-12 col-sm-3">
                            <div class="d-flex gap-2 align-items-center">
                              <div class="badge rounded bg-label-danger p-1">
                                <i class="ti ti-brand-paypal ti-sm"></i>
                              </div>
                              <h6 class="mb-0">Expense</h6>
                            </div>
                            <h4 class="my-2 pt-1">$74.19</h4>
                            <div class="progress w-75" style="height: 4px">
                              <div
                                class="progress-bar bg-danger"
                                role="progressbar"
                                style="width: 65%"
                                aria-valuenow="65"
                                aria-valuemin="0"
                                aria-valuemax="100"></div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
    <!--/ Earning Reports -->

    <!-- Projects table -->
        <div class="col-12 col-xl-12 col-sm-12 order-1 order-lg-2 mb-4 mb-lg-0">
            <div class="card">
                <div class="card-datatable table-responsive">
                    <table class="datatables-projects table border-top">
                        <thead>
                          <tr>
                            <th></th>
                            <th></th>
                            <th>Name</th>
                            <th>Leader</th>
                            <th>Team</th>
                            <th class="w-px-200">Status</th>
                            <th>Action</th>
                          </tr>
                        </thead>
                      </table>
                    </div>
                  </div>
        </div>
    <!--/ Projects table -->
</div>
@endsection()
