@extends('layouts.admin')

@section('content')

    <h1>Trade Management</h1>

    <div class="card">
        <div class="card-body">
            <a href="{{ route('trades.create') }}" class="btn btn-primary">Add Trade</a>
            <div class="table-responsive">
                <table class="table">
                    <thead>
                    <tr>
                        <th>ID</th>
                        <th>Trade Start Date</th>
                        <th>Trade End Date</th>
                        <th>Status</th>
                        <th>Owner</th>
                        <th>Offered Item</th>
                        <th>Requested Item</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach ($trades as $trade)
                        <tr>
                            <td>{{ $trade->id }}</td>
                            <td>{{ $trade->tradeStartDate }}</td>
                            <td>{{ $trade->tradeEndDate }}</td>
                            <td>{{ $trade->status }}</td>
                            <td>{{ $trade->owner->name }}</td>
                            <td>{{ $trade->offeredItem->title }}</td>
                            <td>{{ $trade->requestedItem->title }}</td>
                            <td>
                                <a href="{{ route('trades.show', $trade->id) }}" class="btn btn-info">View</a>
                                <form action="{{ route('trades.destroy', $trade->id) }}" method="POST" style="display: inline;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger">Delete</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <form id="delete-trade-form" method="POST" style="display: none;">
        @csrf
        @method('DELETE')
    </form>

@endsection
