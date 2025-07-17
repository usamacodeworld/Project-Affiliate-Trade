@extends('backend.layout.master')
@section('page_title', 'Package Buyers')
@section('users_dropdown_active', 'active')
@section('package_buyers_li_active', 'active')
@section('package_buyers_link_toggled', 'toggled')
@section('content')
    <section class="section">
        <div class="section-body">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4>Package Buyers</h4>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-striped" id="table-1">
                                    <thead>
                                        <tr>
                                            <th class="text-center">
                                                #
                                            </th>
                                            <th>Package</th>
                                            <th>Payment</th>
                                            <th>Members</th>
                                            <th>Date</th>
                                            <th>Status</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($buyers as $key => $buyer)
                                            <tr>
                                                <td>
                                                    {{ $key + 1 }}
                                                </td>
                                                <td>
                                                    <p class="mb-1"><strong>Name: </strong>{{ $buyer->package->name }}</p>
                                                    <p><strong>Price: </strong>${{ number_format($buyer->package->price) }}
                                                    </p>
                                                </td>
                                                <td class="align-middle">
                                                    <a href="{{ asset('storage/' . $buyer->transaction_screenshot) }}"
                                                        target="_blank">Payment Recipt</a>
                                                </td>
                                                <td>
                                                    <p class="mb-1"><strong>Name: </strong>{{ $buyer->user->name }}</p>
                                                    <p class="mb-1"><strong>Email: </strong>{{ $buyer->user->email }}</p>
                                                    <p class="mb-1"><strong>Phone: </strong>{{ $buyer->user->phone }}</p>
                                                </td>
                                                <td>{{ date('d-M-Y', strtotime($buyer->created_at)) }}</td>
                                                <td>
                                                    @php
                                                        $status = $buyer->status;
                                                        $statusColors = [
                                                            'pending' => 'badge-warning',
                                                            'active' => 'badge-info',
                                                            'cancelled' => 'badge-dark',
                                                            'failed' => 'badge-danger',
                                                            'success' => 'badge-success',
                                                            'hold' => 'badge-secondary',
                                                        ];
                                                        $statusColor = $statusColors[$status] ?? 'badge-light';
                                                    @endphp

                                                    <div class="badge {{ $statusColor }} badge-shadow">
                                                        {{ ucfirst($status) }}
                                                    </div>
                                                </td>

                                                <td>
                                                    <form action="{{ route('admin.checkout.updateStatus', $buyer->id) }}"
                                                        method="POST">
                                                        @csrf
                                                        @method('PUT')
                                                        <div class="input-group">
                                                            <select name="status" class="form-control form-control-sm"
                                                                onchange="this.form.submit()">
                                                                @foreach (['pending', 'active', 'cancelled', 'failed', 'success', 'hold'] as $statusOption)
                                                                    <option value="{{ $statusOption }}"
                                                                        {{ $buyer->status == $statusOption ? 'selected' : '' }}>
                                                                        {{ ucfirst($statusOption) }}
                                                                    </option>
                                                                @endforeach
                                                            </select>
                                                        </div>
                                                    </form>
                                                </td>

                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
