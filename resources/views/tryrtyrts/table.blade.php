<div class="table-responsive">
    <table class="table" id="tryrtyrts-table">
        <thead>
        <tr>
            <th>Trrt</th>
        <th>Tttt</th>
            <th colspan="3">Action</th>
        </tr>
        </thead>
        <tbody>
        @foreach($tryrtyrts as $tryrtyrt)
            <tr>
                <td>{{ $tryrtyrt->trrt }}</td>
            <td>{{ $tryrtyrt->tttt }}</td>
                <td width="120">
                    {!! Form::open(['route' => ['tryrtyrts.destroy', $tryrtyrt->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('tryrtyrts.show', [$tryrtyrt->id]) }}"
                           class='btn btn-default btn-xs'>
                            <i class="far fa-eye"></i>
                        </a>
                        <a href="{{ route('tryrtyrts.edit', [$tryrtyrt->id]) }}"
                           class='btn btn-default btn-xs'>
                            <i class="far fa-edit"></i>
                        </a>
                        {!! Form::button('<i class="far fa-trash-alt"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
